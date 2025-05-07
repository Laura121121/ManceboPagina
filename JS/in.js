document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemCount = document.querySelector('.cart-icon span');
    const cartItemsList = document.querySelector('.cart-items');
    const cartTotal = document.querySelector('.cart-total');
    const cartIcon = document.querySelector('.cart-icon');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.querySelector('.sidebar-close');

    // Modal Elements
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const modalTitle = document.getElementById("modal-title");
    const modalDescription = document.getElementById("modal-description");
    const modalPrice = document.getElementById("modal-price");
    const modalAddBtn = document.getElementById("modal-add-btn");
    const closeModal = document.querySelector(".close");

    // Cargar el carrito desde localStorage o inicializar vacío
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Función para mantener el carrito abierto
    function keepCartOpen() {
        const savedCartState = localStorage.getItem('cartOpen');
        if (savedCartState === 'true') {
            sidebar.classList.add('open');
        }
    }

    // Llamar a keepCartOpen al cargar la página
    keepCartOpen();

    function addToCart(name, price, image) {
        const existingItem = cartItems.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cartItems.push({ 
                name, 
                price, 
                image,
                quantity: 1 
            });
        }
        saveCart();
        updateCartUI();
    }

    // Evento para agregar al carrito desde las cards
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const card = button.closest('.card');
            const name = card.querySelector('.card--title').textContent;
            const priceText = card.querySelector('.price').textContent.replace('RD$', '').trim();
            const price = parseFloat(priceText);
            const image = card.querySelector('img').src;
            addToCart(name, price, image);
            
            // Mantener el carrito abierto al agregar un producto
            localStorage.setItem('cartOpen', 'true');
            sidebar.classList.add('open');
        });
    });

    // Resto del código de eventos para modal (igual que antes)
    document.querySelectorAll(".card").forEach(card => {
        card.addEventListener("click", (e) => {
            if (e.target.closest('.add-to-cart')) return;
            
            const img = card.querySelector("img").src;
            const title = card.querySelector(".card--title").textContent;
            const price = card.querySelector(".price").textContent;
            const ingredients = card.querySelector(".ingredients")?.innerHTML || "<li>No se especificaron ingredientes</li>";

            modalImg.src = img;
            modalTitle.textContent = title;
            modalDescription.innerHTML = `
                <h4>Ingredientes:</h4>
                <ul class="ingredients-list">${ingredients}</ul>
            `;
            modalPrice.textContent = price;
            
            modalAddBtn.dataset.name = title;
            modalAddBtn.dataset.price = price.replace("RD$", "").trim();
            modalAddBtn.dataset.image = img;

            modal.style.display = "block";
            document.body.style.overflow = "hidden";
        });
    });

    // Evento para agregar desde el modal
    modalAddBtn.addEventListener("click", () => {
        const name = modalAddBtn.dataset.name;
        const price = parseFloat(modalAddBtn.dataset.price);
        const image = modalAddBtn.dataset.image;
        addToCart(name, price, image);
        modal.style.display = "none";
        document.body.style.overflow = "auto";
        
        // Mantener el carrito abierto al agregar un producto
        localStorage.setItem('cartOpen', 'true');
        sidebar.classList.add('open');
    });

    // Cerrar modal (igual que antes)
    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });

    // Funciones del carrito
    function saveCart() {
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }

    function updateCartUI() {
        updateCartItemCount();
        updateCartItemList();
        updateCartTotal();
    }

    function updateCartItemCount() {
        const totalQuantity = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        cartItemCount.textContent = totalQuantity;
    }

    function updateCartItemList() {
        cartItemsList.innerHTML = '';
        
        if (cartItems.length === 0) {
            cartItemsList.innerHTML = '<p>Tu carrito está vacío</p>';
            return;
        }

        cartItems.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <div class="cart-item-content">
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}" width="70">
                    </div>
                    <div class="cart-item-info">
                        <h4 class="cart-item-title">${item.name}</h4>
                        <div class="cart-item-right">
                            <span class="cart-item-price">RD$${(item.price * item.quantity).toFixed(2)}</span>
                            <div class="cart-item-actions">
                                <div class="quantity-controls">
                                    <button class="quantity-btn decrease" data-index="${index}">-</button>
                                    <span class="quantity">${item.quantity}</span>
                                    <button class="quantity-btn increase" data-index="${index}">+</button>
                                </div>
                                <button class="remove-btn" data-index="${index}">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            cartItemsList.appendChild(cartItem);
        });

        // Event listeners para los botones del carrito - modificados para no cerrar el carrito
        document.querySelectorAll('.remove-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                removeItemFromCart(index);
                e.stopPropagation();
            });
        });

        document.querySelectorAll('.decrease').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                if (cartItems[index].quantity > 1) {
                    cartItems[index].quantity -= 1;
                } else {
                    removeItemFromCart(index);
                }
                saveCart();
                updateCartUI();
                e.stopPropagation();
            });
        });

        document.querySelectorAll('.increase').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                cartItems[index].quantity += 1;
                saveCart();
                updateCartUI();
                e.stopPropagation();
            });
        });
    }

    function removeItemFromCart(index) {
        cartItems.splice(index, 1);
        saveCart();
        updateCartUI();
    }

    function updateCartTotal() {
        const subtotal = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
        const itbis = subtotal * 0.18;
        const envio = subtotal >= 1000 ? 0 : 100;
        const total = subtotal + itbis + envio;

        cartTotal.innerHTML = `
            <p>Subtotal: RD$${subtotal.toFixed(2)}</p>
            <p>ITBIS (18%): RD$${itbis.toFixed(2)}</p>
            <p>Envío: RD$${envio.toFixed(2)}</p>
            <strong>Total: RD$${total.toFixed(2)}</strong>
        `;
    }

    // Event listeners del carrito - modificados para guardar estado
    cartIcon.addEventListener('click', () => {
        const isOpen = sidebar.classList.toggle('open');
        localStorage.setItem('cartOpen', isOpen ? 'true' : 'false');
    });

    closeButton.addEventListener('click', () => {
        sidebar.classList.remove('open');
        localStorage.setItem('cartOpen', 'false');
    });

    // Cerrar carrito al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !cartIcon.contains(e.target)) {
            sidebar.classList.remove('open');
            localStorage.setItem('cartOpen', 'false');
        }
    });

    // Inicializar el carrito al cargar la página
    updateCartUI();
});