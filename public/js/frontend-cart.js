document.addEventListener('DOMContentLoaded', function() {
    let cart = JSON.parse(localStorage.getItem('madelia_cart') || '[]');

    function updateCartUI() {
        // Update badge counts (look for typical class names)
        const cartCountElements = document.querySelectorAll('.cart-count, .count-box, .cart-count-badge');
        cartCountElements.forEach(el => el.textContent = cart.length);
        
        // Alert if added
        console.log("Cart updated", cart);
    }

    // Handle plus/minus buttons on product detail page
    document.querySelectorAll('.btn-increase, .btn-plus, .plus').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let input = this.parentElement.querySelector('input[name="quantity"], input.quantity');
            if (!input) input = this.closest('.wg-quantity, .quantity-box')?.querySelector('input');
            if (input) input.value = parseInt(input.value) + 1;
        });
    });
    
    document.querySelectorAll('.btn-decrease, .btn-minus, .minus').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let input = this.parentElement.querySelector('input[name="quantity"], input.quantity');
            if (!input) input = this.closest('.wg-quantity, .quantity-box')?.querySelector('input');
            if (input && parseInt(input.value) > 1) input.value = parseInt(input.value) - 1;
        });
    });

    // Handle Add to Cart button
    document.querySelectorAll('.btn-add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const productId = new URLSearchParams(window.location.search).get('id') || 'unknown';
            
            // Try to find quantity
            let quantityInput = document.querySelector('input[name="quantity"], input.quantity, input.wg-quantity');
            let quantity = quantityInput ? parseInt(quantityInput.value) : 1;
            if (isNaN(quantity)) quantity = 1;
            
            // Extract info from DOM (very robust fallback)
            const name = document.title.split('-')[0].trim() || 'Madelia Product';
            
            cart.push({ id: productId, quantity: quantity, name: name });
            localStorage.setItem('madelia_cart', JSON.stringify(cart));
            updateCartUI();
            
            // Show alert or open modal
            alert("Product added to cart successfully!");
            
            // If there's a bootstrap modal, show it
            if (typeof bootstrap !== 'undefined' && document.getElementById('shoppingCart')) {
                try {
                    const modal = new bootstrap.Modal(document.getElementById('shoppingCart'));
                    modal.show();
                } catch(err){}
            }
        });
    });

    // Buy Now button
    document.querySelectorAll('.btn-buy-now, .btn-buynow').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            // Just click add to cart then redirect
            const addBtn = document.querySelector('.btn-add-to-cart');
            if(addBtn) addBtn.click();
            window.location.href = '/checkout.html';
        });
    });

    updateCartUI();
});
