/**
 * Madelia - Reviews Management Logic
 */

const AdminReviews = {
    reviews: [],

    init() {
        if (!Auth.admin) {
            window.location.href = '/admin/login';
            return;
        }

        this.loadFromDB();
        window.addEventListener('siteDataLoaded', () => {
            this.loadFromDB();
        });
    },

    async loadFromDB() {
        const token = localStorage.getItem('adminToken');
        if (!token) return;

        try {
            const res = await fetch(`${API_BASE_URL}/admin/reviews`, {
                headers: { 'Authorization': `Bearer ${token}` }
            });
            if (res.ok) {
                this.reviews = await res.json();
                this.renderTable();
            }
        } catch (e) {
            console.error("Failed to load reviews from backend:", e);
        }
    },

    async updateReviewStatus(id, status) {
        const token = localStorage.getItem('adminToken');
        if (!token) return;

        try {
            const res = await fetch(`${API_BASE_URL}/admin/reviews/${id}/status`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify({ status })
            });

            if (res.ok) {
                this.loadFromDB();
            } else {
                console.error("Failed to update status");
            }
        } catch (e) {
            console.error("Failed to update status", e);
        }
    },

    acceptReview(id) {
        this.updateReviewStatus(id, 'Accepted');
    },

    rejectReview(id) {
        this.updateReviewStatus(id, 'Rejected');
    },

    getStarsHTML(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<i class="bi bi-star-fill" style="color:#C8A89A;"></i> ';
            } else {
                stars += '<i class="bi bi-star" style="color:#cbd5e1;"></i> ';
            }
        }
        return stars;
    },

    getStatusBadge(status) {
        if (status === 'Pending') return '<span class="status-badge status-pending">Pending</span>';
        if (status === 'Accepted') return '<span class="status-badge status-accepted">Accepted</span>';
        if (status === 'Rejected') return '<span class="status-badge status-rejected">Rejected</span>';
        return `<span>${status}</span>`;
    },

    renderTable() {
        const tbody = document.getElementById('reviews-table-body');
        if (!tbody) return;

        if (this.reviews.length === 0) {
            tbody.innerHTML = '<tr><td colspan="7" style="text-align: center; padding: 2rem;">No reviews found.</td></tr>';
            return;
        }

        // Sort: Pending first, then by date descending
        const sortedReviews = [...this.reviews].sort((a, b) => {
            if (a.status === 'Pending' && b.status !== 'Pending') return -1;
            if (a.status !== 'Pending' && b.status === 'Pending') return 1;
            return new Date(b.created_at) - new Date(a.created_at);
        });

        tbody.innerHTML = sortedReviews.map(r => {
            let productName = `Product ID: ${r.product_id}`;
            let foundProduct = null;
            if (typeof LocalDB !== 'undefined') {
                foundProduct = LocalDB.getProducts().find(p => (p.id === r.product_id || p._id === r.product_id));
            }
            if (!foundProduct && window.Site && window.Site.products) {
                foundProduct = window.Site.products.find(p => (p.id == r.product_id || p._id == r.product_id));
            }
            if (foundProduct) {
                productName = foundProduct.name;
            }
            
            return `
            <tr>
                <td style="color: #64748b; font-size:0.8rem;">
                    ${r.image_url ? `<img src="${r.image_url}" style="width:50px; height:50px; object-fit:cover; border-radius:4px; border:1px solid #e2e8f0; cursor:pointer;" onclick="window.open('${r.image_url}', '_blank')" title="View Image">` : '<div style="width:50px; height:50px; background:#f1f5f9; border-radius:4px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:0.7rem;">No Img</div>'}
                </td>
                <td style="color: #334155; font-weight: 500;">${r.name}</td>
                <td style="color: #64748b; font-size:0.9rem; font-weight: 500;">${productName}</td>
                <td class="star-rating">${this.getStarsHTML(r.rating)}</td>
                <td class="review-text" title="${r.text}" style="max-width:200px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">${r.text}</td>
                <td>${this.getStatusBadge(r.status)}</td>
                <td>
                    <div class="action-btns" style="display:flex; gap:0.5rem;">
                        ${r.status === 'Pending' ? `
                            <button class="btn-accept" onclick="AdminReviews.updateReviewStatus(${r.id}, 'Accepted')" title="Accept" style="background:#22c55e; color:#fff; border:none; padding:4px 8px; border-radius:4px; cursor:pointer;">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button class="btn-reject" onclick="AdminReviews.updateReviewStatus(${r.id}, 'Rejected')" title="Reject" style="background:#ef4444; color:#fff; border:none; padding:4px 8px; border-radius:4px; cursor:pointer;">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        ` : `
                            <span style="color:#94a3b8; font-size:0.8rem;"><button class="btn-reject" onclick="AdminReviews.deleteReview(${r.id})" title="Delete" style="background:#ef4444; color:#fff; border:none; padding:4px 8px; border-radius:4px; cursor:pointer;">
                                <i class="bi bi-trash"></i>
                            </button></span>
                        `}
                    </div>
                </td>
            </tr>
        `}).join('');
    },
    
    async deleteReview(id) {
        if(confirm("Are you sure you want to permanently delete this review?")) {
            const token = localStorage.getItem('adminToken');
            if (!token) return;

            try {
                const res = await fetch(`${API_BASE_URL}/admin/reviews/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (res.ok) {
                    this.loadFromDB();
                } else {
                    console.error("Failed to delete review");
                }
            } catch (e) {
                console.error("Failed to delete review", e);
            }
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    AdminReviews.init();
});

