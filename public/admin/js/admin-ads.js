const API_URL = '/api';

const AdminAds = {
    ads: [],

    isInitialized: false,
    
    async init() {
        if (this.isInitialized) return;
        this.isInitialized = true;
        
        if (!Auth.admin) {
            window.location.href = '/admin/login';
            return;
        }

        await this.loadSettings();
        this.renderTable();
        this.setupModalEvents();
    },

    async loadSettings() {
        try {
            if (window.Site && window.Site.config && window.Site.config.heroSliders && window.Site.config.heroSliders.length > 0) {
                this.ads = [...window.Site.config.heroSliders];
            } else {
                const saved = localStorage.getItem('madelia_hero_sliders');
                if (saved && saved !== '[]') {
                    this.ads = JSON.parse(saved);
                } else {
                    // Pre-populate with the 3 existing images from index.html
                    this.ads = [
                        { id: 1, image: 'assets/hero_saree_navy.png', title: 'Hero Banner 1' },
                        { id: 2, image: 'assets/Banner.jpg', title: 'Hero Banner 2' },
                        { id: 3, image: 'assets/floral_banner.png', title: 'Hero Banner 3' }
                    ];
                }
            }
        } catch (err) {
            console.error('Error loading settings', err);
        }
    },

    async saveSettings() {
        try {
            localStorage.setItem('madelia_hero_sliders', JSON.stringify(this.ads));
            if (window.Site) {
                // Ensure local Site config is updated instantly
                window.Site.config.heroSliders = this.ads;
            }
            
            // Post directly to backend to avoid any site.js cache issues
            const token = localStorage.getItem('adminToken');
            if (token) {
                await fetch(`${API_URL}/admin/settings`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },
                    body: JSON.stringify({
                        settings: {
                            hero_sliders: JSON.stringify(this.ads)
                        }
                    })
                });
            }
        } catch (err) {
            console.error('Error saving settings', err);
            alert('Error saving settings.');
        }
    },

    renderTable() {
        const tbody = document.getElementById('ads-table-body');
        if (!tbody) return;

        if (this.ads.length === 0) {
            tbody.innerHTML = '<tr><td colspan="4" style="text-align: center;">No hero images found.</td></tr>';
            return;
        }

        tbody.innerHTML = this.ads.map((ad, idx) => {
            let imgSrc = ad.image;
            if (!imgSrc.startsWith('http') && !imgSrc.startsWith('data:')) {
                imgSrc = '../' + imgSrc;
            }
            return `
                <tr>
                    <td>${idx + 1}</td>
                    <td style="color: #64748b;">${ad.title || 'Hero Banner'}</td>
                    <td>
                        <img src="${imgSrc}" class="ad-thumbnail" alt="Ad" style="max-height: 60px; object-fit: contain; background: #ffffff; padding: 2px;">
                    </td>
                    <td>
                        <div class="action-icons">
                            <i class="fa fa-edit" onclick="AdminAds.editAd(${ad.id})" title="Edit" style="margin-right:15px; font-size: 1.1rem;"></i>
                            <i class="fa fa-trash" onclick="AdminAds.deleteAd(${ad.id})" title="Delete" style="font-size: 1.1rem; color: #ef4444;"></i>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    },

    async deleteAd(id) {
        if (confirm('Are you sure you want to delete this hero image?')) {
            this.ads = this.ads.filter(a => a.id !== id);
            this.renderTable();
            await this.saveSettings();
        }
    },

    editAd(id) {
        const ad = this.ads.find(a => a.id === id);
        if (!ad) return;
        document.getElementById('adTitle').value = ad.title || '';
        document.getElementById('adImageInput').dataset.editId = id;
        
        const preview = document.getElementById('imagePreview');
        preview.src = ad.image;
        if (!ad.image.startsWith('http') && !ad.image.startsWith('data:')) {
            preview.src = '../' + ad.image;
        }
        preview.style.display = 'block';
        
        document.getElementById('adModalOverlay').style.display = 'flex';
    },

    setupModalEvents() {
        const dropArea = document.getElementById('imageDropArea');
        const fileInput = document.getElementById('adImageInput');
        const preview = document.getElementById('imagePreview');
        const form = document.getElementById('adForm');

        if (!dropArea || !form) return;

        dropArea.addEventListener('click', () => fileInput.click());

        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.style.borderColor = 'var(--admin-primary)';
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.style.borderColor = '#cbd5e1';
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.style.borderColor = '#cbd5e1';
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                this.handleFileUpload(fileInput.files[0]);
            }
        });

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length) {
                this.handleFileUpload(fileInput.files[0]);
            }
        });

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const title = document.getElementById('adTitle').value;
            const editId = fileInput.dataset.editId;
            
            if (!editId && fileInput.files.length === 0) {
                alert("Please select an image");
                return;
            }

            const processSave = async (base64Image) => {
                if (editId) {
                    const ad = this.ads.find(a => a.id === parseInt(editId));
                    if (ad) {
                        ad.title = title;
                        if (base64Image) ad.image = base64Image;
                    }
                } else {
                    this.ads.push({
                        id: Date.now(),
                        title: title || 'Hero Banner',
                        image: base64Image
                    });
                }
                this.renderTable();
                await this.saveSettings();
                
                document.getElementById('adModalOverlay').style.display = 'none';
                form.reset();
                delete fileInput.dataset.editId;
                preview.style.display = 'none';
            };
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                reader.onload = async (event) => {
                    const img = new Image();
                    img.onload = () => {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        let width = img.width;
                        let height = img.height;
                        const MAX_WIDTH = 1920;
                        const MAX_HEIGHT = 1080;
                        
                        if (width > height) {
                            if (width > MAX_WIDTH) {
                                height *= MAX_WIDTH / width;
                                width = MAX_WIDTH;
                            }
                        } else {
                            if (height > MAX_HEIGHT) {
                                width *= MAX_HEIGHT / height;
                                height = MAX_HEIGHT;
                            }
                        }
                        canvas.width = width;
                        canvas.height = height;
                        ctx.drawImage(img, 0, 0, width, height);
                        const base64Image = canvas.toDataURL('image/jpeg', 0.75); // Compress heavily
                        processSave(base64Image);
                    };
                    img.src = event.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                processSave(null);
            }
        });
    },

    handleFileUpload(file) {
        const preview = document.getElementById('imagePreview');
        const reader = new FileReader();
        reader.onload = (e) => {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
};

window.addEventListener('siteDataLoaded', () => {
    AdminAds.init();
});
// Fallback if site.js fails or is missing
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        if (!AdminAds.ads.length) {
            AdminAds.init();
        }
    }, 2000);
});