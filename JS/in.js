document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemCount = document.querySelector('.cart-icon span');
    const cartItemsList = document.querySelector('.cart-items');
    const cartTotal = document.querySelector('.cart-total');
    const cartIcon = document.querySelector('.cart-icon');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.querySelector('.sidebar-close');

    let cartItems = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const card = button.closest('.card');
            const name = card.querySelector('.card--title').textContent;
            const priceText = card.querySelector('.price').textContent.replace('RD$', '').trim();
            const price = parseFloat(priceText);

            const existingItem = cartItems.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cartItems.push({ name, price, quantity: 1 });
            }

            updateCartUI();
        });
    });

    function updateCartUI() {
        updateCartItemCount();
        updateCartItemList();
        updateCartTotal();
    }

    function updateCartItemCount() {
        let totalQuantity = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        cartItemCount.textContent = totalQuantity;
    }

    function updateCartItemList() {
        cartItemsList.innerHTML = '';
        cartItems.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <span>(${item.quantity}x) ${item.name}</span>
                <span class="item-price">RD$${(item.price * item.quantity).toFixed(2)}</span>
                <button class="remove-btn" data-index="${index}">Eliminar</button>
            `;
            cartItemsList.appendChild(cartItem);
        });

        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                removeItemFromCart(index);
            });
        });
    }

    function removeItemFromCart(index) {
        cartItems.splice(index, 1);
        updateCartUI();
    }

    function updateCartTotal() {
        let subtotal = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
        let itbis = subtotal * 0.18;
        let envio = subtotal >= 1000 ? 0 : (subtotal > 0 ? 100 : 0);
        let total = subtotal + itbis + envio;

        // Mostrar desglose detallado en el HTML
        cartTotal.innerHTML = `
            Subtotal: RD$${subtotal.toFixed(2)}<br>
            ITBIS (18%): RD$${itbis.toFixed(2)}<br>
            Envío: RD$${envio.toFixed(2)}<br>
            <strong>Total: RD$${total.toFixed(2)}</strong>
        `;
    }

    cartIcon.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });

    closeButton.addEventListener('click', () => {
        sidebar.classList.remove('open');
    });
});
