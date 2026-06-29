/**
 * Madelia - Site Management
 * Connects frontend to Laravel backend
 */

const Site = {
    config: DEFAULT_CONFIG,
    products: [],
    loading: true,

    // Deep merge helper
    mergeConfig(base, override) {
        if (!override) return base;
        const merged = { ...base };
        Object.keys(override).forEach(key => {
            if (override[key] && typeof override[key] === 'object' && !Array.isArray(override[key]) && base[key]) {
                merged[key] = { ...base[key], ...override[key] };
            } else {
                merged[key] = override[key];
            }
        });
        return merged;
    },

    async fetchAll() {
        try {
            const ts = new Date().getTime();
            // 1. Fetch data from backend concurrently (with cache busting)
            const configReq = fetch(`${API_BASE_URL}/settings?t=${ts}`).then(r => r.ok ? r.json() : null).catch(() => null);
            const prodReq = fetch(`${API_BASE_URL}/products?t=${ts}`).then(r => r.ok ? r.json() : null).catch(() => null);
            const catReq = fetch(`${API_BASE_URL}/categories?t=${ts}`).then(r => r.ok ? r.json() : null).catch(() => null);

            let [data, prodData, catData] = await Promise.all([configReq, prodReq, catReq]);

            // 2. Map Settings
            if (data) {
                const mappedData = {};
                if (data.announcement_bar !== undefined && data.announcement_bar !== null) {
                    try { mappedData.coupon = { label: 'OFFER', discount: '', text: JSON.parse(data.announcement_bar), code: 'Madelia10' }; }
                    catch (e) { mappedData.coupon = { label: 'OFFER', discount: '', text: data.announcement_bar, code: 'Madelia10' }; }
                }
                if (data.hero_title || data.hero_subtitle) {
                    mappedData.hero = { ...this.config.hero };
                    if (data.hero_title) mappedData.hero.title = data.hero_title;
                    if (data.hero_subtitle) mappedData.hero.subtitle = data.hero_subtitle;
                }

                if (data.hero_sliders) {
                    try {
                        mappedData.heroSliders = (typeof data.hero_sliders === 'string') ? JSON.parse(data.hero_sliders) : data.hero_sliders;
                    } catch (e) {
                        console.warn("Failed to parse hero_sliders from backend");
                    }
                }

                if (data.navbar_categories) {
                    try { mappedData.navbar_categories = JSON.parse(data.navbar_categories); }
                    catch (e) { mappedData.navbar_categories = []; }
                }

                if (data.main_nav_links) {
                    try {
                        let parsedNav = JSON.parse(data.main_nav_links);
                        if (parsedNav && parsedNav.length >= 3) {
                            mappedData.nav = parsedNav;
                        } else {
                            // Fallback if database was wiped
                            mappedData.nav = [
                                { label: "HOME", url: "index.html" },
                                { label: "SHOP", url: "shop.html" },
                                { label: "CATEGORIES", url: "shop.html" },
                                { label: "OUR STORY", url: "our-story.html" },
                                { label: "ABOUT", url: "about.html" },
                                { label: "CONTACT", url: "contact.html" }
                            ];
                        }
                    } catch (e) { }
                } else {
                    mappedData.nav = [
                        { label: "HOME", url: "index.html" },
                        { label: "SHOP", url: "shop.html" },
                        { label: "CATEGORIES", url: "shop.html" },
                        { label: "OUR STORY", url: "our-story.html" },
                        { label: "ABOUT", url: "about.html" },
                        { label: "CONTACT", url: "contact.html" }
                    ];
                }

                this.config = this.mergeConfig(this.config, { ...data, ...mappedData });
            }

            // 3. Map Products
            if (prodData) {
                this.products = prodData;
            } else {
                this.products = [];
            }

            if (!catData) {
                catData = [];
            }

            // 4. Map Categories to Navbar & Homepage
            if (catData && Array.isArray(catData)) {
                // catData contains top-level categories with their 'children'
                const activeCats = catData.filter(c => c.status !== 'inactive');

                let filteredNavCats = activeCats;
                const dynamicNav = filteredNavCats.map(cat => {
                    const relatedSubCats = (cat.children || []).filter(sc => sc.status !== 'inactive').map(sc => sc.name);
                    return {
                        name: cat.name,
                        path: `shop.html?category=${encodeURIComponent(cat.name.toLowerCase())}`,
                        dropdown: relatedSubCats
                    };
                });
                this.config.navCategories = dynamicNav;

                const existingHomeCats = this.config.homeCategories || [];
                const fallbackImagesMap = {
                    "silk sarees": "assets/saree_product_1.png",
                    "banarasi sarees": "assets/saree_product_2.png",
                    "chiffon sarees": "assets/saree_product_3.png",
                    "georgette sarees": "assets/saree_product_4.png",
                    "organza sarees": "assets/saree_product_1.png",
                    "festive sarees": "assets/saree_product_2.png",
                    "necklaces": "assets/Ornaments_Categories/chain_dark.png",
                    "bridal sets": "assets/Ornaments_Categories/bridal_dark.png",
                    "bangles": "assets/Ornaments_Categories/bangle_dark.png",
                    "earrings": "assets/Ornaments_Categories/earring_dark.png"
                };

                const dynamicHomeCats = activeCats.map(cat => {
                    // Try to reuse an existing image mapping if available, otherwise use a placeholder
                    const existing = existingHomeCats.find(ec => ec && cat && ec.name && cat.name && String(ec.name).toLowerCase() === String(cat.name).toLowerCase());
                    let finalImage = cat.image_url; // From live database API
                    if (!finalImage && existing) finalImage = existing.image; // Fallback to hardcoded mapping

                    if (!finalImage) {
                        const catLower = cat.name ? String(cat.name).toLowerCase() : "";
                        finalImage = fallbackImagesMap[catLower] || 'assets/Ornaments_Categories/jewelry_navy.png';
                    }

                    return {
                        name: cat.name,
                        path: `shop.html?category=${encodeURIComponent(cat.name.toLowerCase())}`,
                        image: finalImage
                    };
                });
                this.config.homeCategories = dynamicHomeCats;
            }

            // 5. Load Hero Sliders from local storage as fallback if backend is empty
            if (!this.config.heroSliders || this.config.heroSliders.length === 0) {
                const localHeroSliders = localStorage.getItem('madelia_hero_sliders');
                if (localHeroSliders) {
                    try {
                        this.config.heroSliders = JSON.parse(localHeroSliders);
                    } catch (e) { }
                }
            }

        } catch (e) {
            console.warn("Backend sync failed", e);
        } finally {
            this.loading = false;
            window.dispatchEvent(new CustomEvent('siteDataLoaded'));

            // Automatic Admin Token Sync for Storefront Reviews API
            setTimeout(() => {
                const token = localStorage.getItem('adminToken');
                if (token && this.config.public_api_key !== token) {
                    this.updateSection('public_api_key', token);
                    console.log("Admin token automatically synced to live database.");
                }
            }, 1000);
        }
    },

    async updateSection(section, data) {
        if (section === 'products') {
            this.products = data;
        } else {
            const configWithTime = { ...this.config, [section]: data };
            this.config = configWithTime;

            // Sync to backend if admin
            const token = localStorage.getItem('adminToken');
            if (token) {
                try {
                    let stringifiedData = data;
                    if (typeof data === 'object') {
                        try { stringifiedData = JSON.stringify(data); } catch (e) { }
                    }
                    const settingsToSave = { [section]: String(stringifiedData) };

                    await fetch(`${API_BASE_URL}/admin/settings`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`
                        },
                        body: JSON.stringify({ settings: settingsToSave })
                    });
                } catch (err) {
                    console.error("Failed to sync backend", err);
                }
            }
        }
        window.dispatchEvent(new CustomEvent('siteDataLoaded'));
    }
};

// Start Fetching on Load
Site.fetchAll();


// Global Admin Mobile Sidebar Toggle Fix
document.addEventListener('DOMContentLoaded', () => {
    const toggleBtns = document.querySelectorAll('.menu-toggle');
    toggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            document.body.classList.toggle('is-sidebar-open');
        });
    });
});
