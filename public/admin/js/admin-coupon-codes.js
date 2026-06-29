/**
 * Madelia - Coupons Management Logic
 */

const AdminCoupons = {
    coupons: [],

    init() {
        if (!Auth.admin) {
            window.location.href = '/admin/login';
            return;
        }

        this.loadFromDB();
        this.setupModalEvents();
    },

    async loadFromDB() {
        const token = localStorage.getItem('adminToken');
        if (!token) return;

        try {
            const res = await fetch(`${API_BASE_URL}/admin/coupons`, {
                headers: { 'Authorization': `Bearer ${token}` }
            });
            if (res.ok) {
                this.coupons = await res.json();
                this.renderTable();
            }
        } catch (e) {
            console.error("Failed to load coupons", e);
        }
    },

    getVisibilityBadge(visibility) {
        if (visibility === 'public') {
            return '<span class="visibility-badge vis-public"><i class="bi bi-megaphone"></i> Public Offer</span>';
        }
        return '<span class="visibility-badge vis-private"><i class="bi bi-incognito"></i> Private Code</span>';
    },

    renderTable() {
        const tbody = document.getElementById('coupons-table-body');
        if (!tbody) return;

        if (this.coupons.length === 0) {
            tbody.innerHTML = '<tr><td colspan="6" style="text-align: center;">No coupons found.</td></tr>';
            return;
        }

        tbody.innerHTML = this.coupons.map((c, index) => `
            <tr>
                <td style="color: #64748b;">${index + 1}</td>
                <td><span class="coupon-code-badge">${c.code}</span></td>
                <td style="color: #334155; font-weight: 600;">
                    ${c.discount_type === 'percent' ? c.discount_amount + '%' : '₹' + c.discount_amount} OFF
                </td>
                <td>${this.getVisibilityBadge(c.visibility)}</td>
                <td style="color: #64748b;">${c.expiry_date ? new Date(c.expiry_date).toLocaleDateString() : 'No Expiry'}</td>
                <td>
                    <div class="action-icons">
                        <i class="bi bi-pencil-fill" onclick="AdminCoupons.editCoupon(${c.id})" title="Edit"></i>
                        <i class="bi bi-trash-fill" onclick="AdminCoupons.deleteCoupon(${c.id})" title="Delete"></i>
                    </div>
                </td>
            </tr>
        `).join('');
    },

    editCoupon(id) {
        const coupon = this.coupons.find(c => c.id === id);
        if (!coupon) return;

        document.getElementById('cId').value = coupon.id; // Assume we add hidden input
        document.getElementById('cCode').value = coupon.code;
        document.getElementById('cDiscountType').value = coupon.discount_type; // Assume we add this
        document.getElementById('cDiscount').value = coupon.discount_amount;
        document.getElementById('cExpiry').value = coupon.expiry_date || '';
        
        // Select correct radio
        const radios = document.getElementsByName('cVisibility');
        for (let r of radios) {
            if (r.value === coupon.visibility) r.checked = true;
        }
        
        document.getElementById('couponModalOverlay').style.display = 'flex';
    },

    async deleteCoupon(id) {
        if (confirm('Are you sure you want to delete this coupon?')) {
            const token = localStorage.getItem('adminToken');
            if (!token) return;

            try {
                const res = await fetch(`${API_BASE_URL}/admin/coupons/${id}`, {
                    method: 'DELETE',
                    headers: { 'Authorization': `Bearer ${token}` }
                });
                if (res.ok) {
                    this.loadFromDB();
                } else {
                    alert('Failed to delete coupon.');
                }
            } catch (e) {
                console.error("Failed to delete", e);
            }
        }
    },

    setupModalEvents() {
        document.getElementById('couponForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const token = localStorage.getItem('adminToken');
            if (!token) return;

            const id = document.getElementById('cId') ? document.getElementById('cId').value : '';
            const code = document.getElementById('cCode').value;
            const discount_type = document.getElementById('cDiscountType') ? document.getElementById('cDiscountType').value : 'percent';
            const discount_amount = document.getElementById('cDiscount').value;
            const expiry_date = document.getElementById('cExpiry').value;
            
            let visibility = 'private';
            const radios = document.getElementsByName('cVisibility');
            for (let r of radios) {
                if (r.checked) visibility = r.value;
            }

            const payload = {
                code,
                discount_type,
                discount_amount,
                visibility,
                expiry_date: expiry_date ? expiry_date : null,
                is_active: true
            };

            try {
                const url = id ? `${API_BASE_URL}/admin/coupons/${id}` : `${API_BASE_URL}/admin/coupons`;
                const method = id ? 'PUT' : 'POST';

                const res = await fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },
                    body: JSON.stringify(payload)
                });

                if (res.ok) {
                    document.getElementById('couponModalOverlay').style.display = 'none';
                    e.target.reset();
                    if (document.getElementById('cId')) document.getElementById('cId').value = '';
                    alert('Coupon saved successfully!');
                    this.loadFromDB();
                } else {
                    const err = await res.json();
                    alert('Error saving coupon: ' + (err.message || 'Unknown error'));
                }
            } catch (err) {
                console.error(err);
                alert('Server error.');
            }
        });
    }
};

document.addEventListener('DOMContentLoaded', () => {
    AdminCoupons.init();
});

