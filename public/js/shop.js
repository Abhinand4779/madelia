const API_URL = '/api';
const SERVER_BASE = '';

const ShopHandler = {
    selectedCategories: [],
    selectedSubCategories: [],
    selectedSizes: [],
    minPrice: '',
    maxPrice: '',
    viewMode: 'grid',
    isFilterOpen: false,
    products: [],
    apiCategories: [], // loaded from /api/categories

    async init() {
        const params = new URLSearchParams(window.location.search);
        const cat = params.get('category') || params.get('slug') || params.get('section');
        if (cat && cat !== 'All') {
            this.selectedCategories.push(cat);
        }
        const sub = params.get('sub');
        if (sub && sub !== 'All') {
            this.selectedSubCategories.push(sub);
        }

        // Load subcategory bar if a category is selected
        if (cat) {
            await this.loadSubcatBar(cat);
        }

        // Load all categories from API for the filter sidebar
        await this.fetchCategories();

        await this.fetchProducts();
        this.render();
    },

    async loadSubcatBar(catName) {
        const bar = document.getElementById('shop-subcat-bar');
        if (!bar) return;

        try {
            const res = await fetch(`${API_URL}/categories`);
            if (!res.ok) return;
            const cats = await res.json();

            // Find category by name (case-insensitive)
            const matched = cats.find(c =>
                c.name.toLowerCase().trim() === catName.toLowerCase().trim()
            );

            const subs = (matched && matched.children) || [];
            if (subs.length === 0) return; // no subcategories, keep bar hidden

            bar.style.display = 'block';
            bar.innerHTML = `
                <style>
                    #shop-subcat-bar {
                        background: #fff;
                        border-bottom: 1px solid #f1f5f9;
                        padding: 1rem 5%;
                    }
                    #shop-subcat-bar-inner {
                        display: flex;
                        align-items: center;
                        gap: 1rem;
                        overflow-x: auto;
                        scrollbar-width: none;
                        padding-bottom: 4px;
                    }
                    #shop-subcat-bar-inner::-webkit-scrollbar { display: none; }

                    .sbar-all-btn {
                        flex-shrink: 0;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        gap: 6px;
                        cursor: pointer;
                        text-decoration: none;
                    }
                    .sbar-img-ring {
                        width: 64px;
                        height: 64px;
                        border-radius: 50%;
                        border: 2.5px solid #e2e8f0;
                        overflow: hidden;
                        background: #f8fafc;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: border-color 0.25s, box-shadow 0.25s;
                        flex-shrink: 0;
                    }
                    .sbar-img-ring img {
                        width: 100%; height: 100%;
                        object-fit: cover;
                        transition: transform 0.4s;
                    }
                    .sbar-all-btn:hover .sbar-img-ring,
                    .sbar-all-btn.active .sbar-img-ring {
                        border-color: #C8A89A;
                        box-shadow: 0 0 0 3px rgba(200, 168, 154,0.2);
                    }
                    .sbar-all-btn:hover .sbar-img-ring img,
                    .sbar-all-btn.active .sbar-img-ring img {
                        transform: scale(1.08);
                    }
                    .sbar-no-img {
                        width: 100%; height: 100%;
                        background: linear-gradient(135deg,#ffffff,#1a3a52);
                        display: flex; align-items: center; justify-content: center;
                        font-size: 1.4rem; color: rgba(200, 168, 154,0.6);
                    }
                    .sbar-label {
                        font-size: 0.68rem;
                        font-weight: 700;
                        color: #475569;
                        text-transform: capitalize;
                        letter-spacing: 0.3px;
                        text-align: center;
                        max-width: 70px;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        transition: color 0.25s;
                    }
                    .sbar-all-btn.active .sbar-label { color: #C8A89A; }
                    .sbar-divider {
                        width: 1px; height: 40px;
                        background: #e2e8f0; flex-shrink: 0;
                    }
                    @media (max-width: 576px) {
                        .sbar-img-ring { width: 52px; height: 52px; }
                        .sbar-label { font-size: 0.62rem; max-width: 58px; }
                        #shop-subcat-bar { padding: 0.75rem 4%; }
                    }
                </style>
                <div id="shop-subcat-bar-inner">
                    <!-- "All" chip -->
                    <button class="sbar-all-btn ${this.selectedSubCategories.length === 0 ? 'active' : ''}"
                        onclick="ShopHandler.clearSubcat()" style="background:none; border:none; padding:0;">
                        <div class="sbar-img-ring">
                            <div class="sbar-no-img"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                        </div>
                        <span class="sbar-label">All</span>
                    </button>
                    <div class="sbar-divider"></div>
                    ${subs.map(sub => {
                        const imgSrc = sub.image_url
                            ? (sub.image_url.startsWith('http') ? sub.image_url : `${SERVER_BASE}${sub.image_url}`)
                            : null;
                        const isActive = this.selectedSubCategories.includes(sub.name);
                        return `
                        <button class="sbar-all-btn ${isActive ? 'active' : ''}"
                            id="sbar-btn-${sub.id}"
                            onclick="ShopHandler.filterBySub('${sub.name}')"
                            style="background:none; border:none; padding:0; cursor:pointer;">
                            <div class="sbar-img-ring">
                                ${imgSrc
                                    ? `<img src="${imgSrc}" alt="${sub.name}" loading="lazy">`
                                    : `<div class="sbar-no-img"><i class="bi bi-bag-heart"></i></div>`
                                }
                            </div>
                            <span class="sbar-label">${sub.name}</span>
                        </button>`;
                    }).join('')}
                </div>
            `;
        } catch (e) {
            // silently fail
        }
    },

    filterBySub(subName) {
        // Toggle: if already selected, clear it; otherwise set it exclusively
        if (this.selectedSubCategories.includes(subName)) {
            this.selectedSubCategories = [];
        } else {
            this.selectedSubCategories = [subName];
        }
        // Update active states in bar
        document.querySelectorAll('.sbar-all-btn').forEach(btn => btn.classList.remove('active'));
        if (this.selectedSubCategories.length === 0) {
            document.querySelector('.sbar-all-btn')?.classList.add('active');
        } else {
            // Find button by checking all sbar buttons
            document.querySelectorAll('.sbar-all-btn').forEach(btn => {
                const label = btn.querySelector('.sbar-label');
                if (label && label.textContent.trim().toLowerCase() === subName.toLowerCase()) {
                    btn.classList.add('active');
                }
            });
        }
        this.render();
    },

    clearSubcat() {
        this.selectedSubCategories = [];
        document.querySelectorAll('.sbar-all-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelector('.sbar-all-btn')?.classList.add('active');
        this.render();
    },

    async fetchCategories() {
        try {
            const res = await fetch(`${API_URL}/categories`);
            if (res.ok) {
                this.apiCategories = await res.json();
            }
        } catch (e) {
            this.apiCategories = [];
        }
    },

    async fetchProducts() {
        if (window.Site && window.Site.products && window.Site.products.length > 0) {
            this.products = window.Site.products;
        } else {
            try {
                const res = await fetch(`${API_URL}/products`);
                if (res.ok) {
                    this.products = await res.json();
                } else {
                    this.products = [];
                }
            } catch (e) {
                console.error("Failed to fetch products for shop", e);
                this.products = [];
            }
        }
    },

    toggleFilterValue(type, value) {
        const arr = this[type];
        const idx = arr.indexOf(value);
        if (idx === -1) arr.push(value);
        else arr.splice(idx, 1);
        this.render();
    },

    updatePrice(min, max) {
        this.minPrice = min;
        this.maxPrice = max;
        this.render();
    },

    clearFilters() {
        this.selectedCategories = [];
        this.selectedSubCategories = [];
        this.selectedSizes = [];
        this.minPrice = '';
        this.maxPrice = '';
        window.history.replaceState({}, document.title, "shop.html");
        this.render();
    },

    render() {
        let filteredProducts = this.products;

        if (this.selectedCategories.length > 0) {
            filteredProducts = filteredProducts.filter(p => {
                const catName = (p.category && typeof p.category === 'object') ? p.category.name : (p.category || p.section || '');
                const pCat = String(catName).toLowerCase().trim();
                return this.selectedCategories.some(c => c.toLowerCase().trim() === pCat);
            });
        }

        if (this.selectedSubCategories.length > 0) {
            filteredProducts = filteredProducts.filter(p => {
                const pSub = String(p.subcategory || p.sub_category || '').toLowerCase().trim();
                return this.selectedSubCategories.some(s => s.toLowerCase().trim() === pSub);
            });
        }

        if (this.selectedSizes.length > 0) {
            filteredProducts = filteredProducts.filter(p => {
                if (!p.sizes || p.sizes.length === 0) return false;
                return p.sizes.some(s => this.selectedSizes.includes(s));
            });
        }

        if (this.minPrice !== '' || this.maxPrice !== '') {
            const min = parseFloat(this.minPrice) || 0;
            const max = parseFloat(this.maxPrice) || Infinity;
            filteredProducts = filteredProducts.filter(p => {
                const price = parseFloat(p.price);
                return price >= min && price <= max;
            });
        }

        // Build filter lists from API categories (always shows all, not just ones with products)
        const apiCats = this.apiCategories.filter(c => !c.parent_id);
        const allCats = apiCats.length > 0
            ? new Set(apiCats.map(c => c.name))
            : (() => { const s = new Set(); this.products.forEach(p => { const n = typeof p.category === 'object' ? p.category?.name : p.category; if(n) s.add(n); }); return s; })();

        // Subcategories: from API, filtered by selected category if one is active
        let apiSubs = [];
        if (this.selectedCategories.length > 0) {
            apiCats.forEach(cat => {
                if (this.selectedCategories.some(sc => sc.toLowerCase() === cat.name.toLowerCase())) {
                    (cat.children || []).forEach(s => apiSubs.push(s.name));
                }
            });
        } else {
            apiCats.forEach(cat => (cat.children || []).forEach(s => apiSubs.push(s.name)));
        }
        const allSubs = apiSubs.length > 0
            ? new Set(apiSubs)
            : (() => { const s = new Set(); this.products.forEach(p => { if(p.subcategory||p.sub_category) s.add(p.subcategory||p.sub_category); }); return s; })();

        const allSizes = new Set();
        this.products.forEach(p => { if (p.sizes) p.sizes.forEach(s => allSizes.add(s)); });

        const wrap = document.getElementById('shop-page-wrap');
        if (!wrap) return;

        wrap.innerHTML = `
            <div class="shop-container">
                <aside class="shop-sidebar ${this.isFilterOpen ? 'mobile-active' : ''}">
                    <div class="filter-close" onclick="ShopHandler.toggleFilter(false)"><i class="bi bi-x-lg"></i></div>
                    
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <h3 style="margin:0; font-family: 'Inter', sans-serif; font-weight: 800; font-size: 1.2rem;">FILTERS</h3>
                        <button onclick="ShopHandler.clearFilters()" style="background:none; border:none; color:#C8A89A; cursor:pointer; font-size:0.85rem; font-weight:bold;">Clear All</button>
                    </div>

                    <div class="filter-section">
                        <h4 class="filter-title">CATEGORIES</h4>
                        <ul class="filter-list" style="list-style: none; padding: 0;">
                            ${Array.from(allCats).map(cat => `
                                <li style="margin-bottom: 8px;">
                                    <label style="display: flex; align-items: center; cursor: pointer; font-size: 0.95rem; color: #444;">
                                        <input type="checkbox" ${this.selectedCategories.includes(cat) ? 'checked' : ''} 
                                               onchange="ShopHandler.toggleFilterValue('selectedCategories', '${cat}')" 
                                               style="margin-right: 10px; cursor: pointer;">
                                        ${cat}
                                    </label>
                                </li>
                            `).join('')}
                        </ul>
                    </div>

                    ${allSubs.size > 0 ? `
                    <div class="filter-section">
                        <h4 class="filter-title">SUB-CATEGORIES</h4>
                        <ul class="filter-list" style="list-style: none; padding: 0;">
                            ${Array.from(allSubs).map(sub => `
                                <li style="margin-bottom: 8px;">
                                    <label style="display: flex; align-items: center; cursor: pointer; font-size: 0.95rem; color: #444;">
                                        <input type="checkbox" ${this.selectedSubCategories.includes(sub) ? 'checked' : ''} 
                                               onchange="ShopHandler.toggleFilterValue('selectedSubCategories', '${sub}')" 
                                               style="margin-right: 10px; cursor: pointer;">
                                        ${sub}
                                    </label>
                                </li>
                            `).join('')}
                        </ul>
                    </div>` : ''}

                    <div class="filter-section">
                        <h4 class="filter-title">PRICE RANGE (?)</h4>
                        <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 10px;">
                            <input type="number" id="filter-min-price" value="${this.minPrice}" placeholder="Min" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; outline: none;">
                            <span>-</span>
                            <input type="number" id="filter-max-price" value="${this.maxPrice}" placeholder="Max" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; outline: none;">
                        </div>
                        <button onclick="ShopHandler.updatePrice(document.getElementById('filter-min-price').value, document.getElementById('filter-max-price').value)" style="width: 100%; padding: 8px; background: #ffffff; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 0.85rem; letter-spacing: 1px;">APPLY</button>
                    </div>

                    ${allSizes.size > 0 ? `
                    <div class="filter-section">
                        <h4 class="filter-title">SIZE</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            ${Array.from(allSizes).map(size => `
                                <button onclick="ShopHandler.toggleFilterValue('selectedSizes', '${size}')" 
                                        style="padding: 6px 12px; border: 1px solid ${this.selectedSizes.includes(size) ? '#C8A89A' : '#ddd'}; background: ${this.selectedSizes.includes(size) ? '#fbf8f1' : '#fff'}; color: ${this.selectedSizes.includes(size) ? '#000' : '#555'}; border-radius: 4px; cursor: pointer; font-size: 0.85rem;">
                                    ${size}
                                </button>
                            `).join('')}
                        </div>
                    </div>` : ''}
                </aside>
                
                <main class="shop-main">
                    <div class="content-toolbar">
                        <button class="mobile-filter-btn" onclick="ShopHandler.toggleFilter(true)"><i class="bi bi-funnel"></i> Filter</button>
                        <div class="toolbar-right" style="margin-left: auto;">
                            <span class="showing-results">Showing ${filteredProducts.length > 0 ? '1' : '0'}-${filteredProducts.length} results</span>
                            <div class="view-toggles">
                                <button class="view-btn ${this.viewMode === 'grid' ? 'active' : ''}" onclick="ShopHandler.setView('grid')"><i class="bi bi-grid"></i></button>
                            </div>
                        </div>
                    </div>
                    <style>
                        .premium-product-card {
                            background: #ffffff !important;
                            border: 1px solid #f0f0f0 !important;
                            border-radius: 12px !important;
                            padding: 10px !important;
                            display: flex;
                            flex-direction: column;
                            box-shadow: 0 4px 15px rgba(0,0,0,0.03) !important;
                            transition: box-shadow 0.3s ease;
                            cursor: pointer;
                            height: 100%;
                            width: 100%;
                        }
                        .premium-product-card:hover {
                            box-shadow: 0 8px 25px rgba(0,0,0,0.08) !important;
                        }
                        .p-card-image {
                            position: relative;
                            width: 100%;
                            aspect-ratio: 4/5; /* Auto-scales on mobile and desktop */
                            height: auto;
                            border-radius: 8px !important;
                            overflow: hidden;
                            margin-bottom: 12px !important;
                            background: #fafafa;
                            flex-shrink: 0;
                        }
                        .p-card-image img {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            transition: transform 0.5s ease;
                        }
                        .premium-product-card:hover .p-card-image img {
                            transform: scale(1.03);
                        }
                        .wishlist-btn {
                            position: absolute;
                            top: 10px;
                            right: 10px;
                            background: #fff;
                            border: 1px solid #f0f0f0;
                            width: 28px;
                            height: 28px;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: #555;
                            z-index: 10;
                            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
                            transition: all 0.2s ease;
                        }
                        .wishlist-btn:hover {
                            color: #e63946;
                            border-color: #e63946;
                        }
                        .discount-badge {
                            position: absolute;
                            top: 10px;
                            left: 10px;
                            background: #fff;
                            color: #222;
                            padding: 2px 8px;
                            font-size: 0.65rem;
                            font-weight: 600;
                            z-index: 10;
                            border-radius: 12px;
                            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                        }
                        .p-card-info {
                            text-align: left !important;
                            padding: 0 5px !important;
                            display: flex;
                            flex-direction: column;
                            flex-grow: 1;
                        }
                        .p-category {
                            color: #cda34f !important;
                            font-size: 0.6rem !important;
                            font-weight: 700 !important;
                            text-transform: uppercase;
                            letter-spacing: 1px;
                            margin-bottom: 5px !important;
                            display: block;
                        }
                        .p-name {
                            font-size: 0.95rem !important;
                            font-weight: 700 !important;
                            color: #0f172a !important;
                            margin-bottom: 6px !important;
                            line-height: 1.2;
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }
                        .price-wrapper {
                            display: flex;
                            align-items: center;
                            gap: 6px;
                            margin-bottom: 12px !important;
                            justify-content: flex-start !important;
                        }
                        .p-price {
                            font-size: 0.95rem !important;
                            font-weight: 700 !important;
                            color: #0f172a !important;
                        }
                        .p-old-price {
                            font-size: 0.75rem !important;
                            color: #999 !important;
                            text-decoration: line-through;
                        }
                        .explore-btn {
                            width: 100%;
                            background: #0f172a !important;
                            color: #fff !important;
                            border: none !important;
                            padding: 10px !important;
                            border-radius: 6px !important;
                            font-weight: 700 !important;
                            font-size: 0.7rem !important;
                            text-transform: uppercase;
                            letter-spacing: 1px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            gap: 6px;
                            margin-top: auto;
                            transition: background 0.3s ease;
                        }
                        .explore-btn:hover {
                            background: #1e293b !important;
                        }
                        /* List View Overrides */
                        .list-view .premium-product-card {
                            flex-direction: row;
                            align-items: center;
                            gap: 1.5rem;
                        }
                        .list-view .p-card-image {
                            width: 200px;
                            margin-bottom: 0 !important;
                        }
                        .list-view .explore-btn {
                            width: auto;
                            padding: 10px 20px !important;
                            margin-top: 15px;
                        }
                        
                        /* Absolute Layout Enforcement */
                        .product-display {
                            display: grid !important;
                            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
                            gap: 1.5rem !important;
                            width: 100% !important;
                        }
                        
                        /* Mobile Responsive Fixes */
                        @media (max-width: 768px) {
                            .product-display {
                                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                                gap: 10px !important;
                            }
                            .premium-product-card {
                                padding: 6px !important;
                                border-radius: 8px !important;
                            }
                            .p-card-image {
                                margin-bottom: 8px !important;
                                border-radius: 6px !important;
                            }
                            .wishlist-btn {
                                width: 24px;
                                height: 24px;
                                top: 6px;
                                right: 6px;
                            }
                            .wishlist-btn i {
                                font-size: 0.8rem;
                            }
                            .p-name {
                                font-size: 0.8rem !important;
                                margin-bottom: 4px !important;
                            }
                            .p-price {
                                font-size: 0.8rem !important;
                            }
                            .price-wrapper {
                                margin-bottom: 8px !important;
                            }
                            .explore-btn {
                                padding: 6px !important;
                                font-size: 0.65rem !important;
                            }
                        }
                    </style>
                    <div class="product-display ${this.viewMode}-view">
                        ${filteredProducts.length === 0 ? '<div style="width:100%; padding: 3rem 0; text-align:center; color: #666;"><i class="bi bi-search" style="font-size: 3rem; margin-bottom: 1rem; color: #ccc; display: block;"></i>No products matched your filters.</div>' : ''}
                        ${filteredProducts.map(p => {
                            const pid = p._id || p.id;
                            const imgSrc = p.image_path || p.image || (p.variants && p.variants.length > 0 ? p.variants[0].image : null) || (p.images && p.images.length > 0 ? p.images[0] : 'assets/Logo/madelia%20logo.png');
                            const catName = (p.category && typeof p.category === 'object') ? p.category.name : (p.category || p.category_id || 'Uncategorized');
                            return `<div class="premium-product-card" onclick="window.location.href='product.html?id=${pid}'">
                                    <div class="p-card-image">
                                        ${p.discount ? `<span class="discount-badge">-${p.discount}</span>` : ''}
                                        <img src="${imgSrc}" alt="${p.name}" loading="lazy">
                                        <div class="wishlist-btn" title="Add to Wishlist"><i class="bi bi-heart"></i></div>
                                    </div>
                                    <div class="p-card-info">
                                        <span class="p-category">${p.sub_category || catName || p.section || ''}</span>
                                        <h4 class="p-name">${p.name}</h4>
                                        <div class="price-wrapper">
                                            <p class="p-price">${(typeof Currency !== "undefined") ? Currency.formatPrice(p.price) : '₹' + p.price}</p>
                                            ${p.oldPrice ? `<p class="p-old-price">${(typeof Currency !== "undefined") ? Currency.formatPrice(p.oldPrice) : '₹' + p.oldPrice}</p>` : ''}
                                        </div>
                                        <button class="explore-btn">EXPLORE <i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>`;
                        }).join('')}
                    </div>
                </main>
            </div>`;
    },

    setView(v) { this.viewMode = v; this.render(); },
    toggleFilter(b) { this.isFilterOpen = b; this.render(); }
};

document.addEventListener('DOMContentLoaded', () => {
    ShopHandler.init();
});

window.addEventListener('currencyUpdated', () => ShopHandler.render());


