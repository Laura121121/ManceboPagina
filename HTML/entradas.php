<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/entradas.css">
    <title>entradas</title>
</head>
<body>
    <!-- Header with navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="nav__logo">
                <a href="../HTML/Principal.php">
                <img
                        src="../IMG/Logo.png"  height="170"
                        alt="logo"
                        class="nav__logo-dark"
                      />
                    </a>
                  </div>
                
                  <ul class="nav-links">
                    <li><a href="../HTML/Principal.php">INICIO</a></li>
                    <li><a href="#special">ESPECIALES</a></li>
                    <li><a href="../HTML/Menu.php">MENU</a></li>
                    <li><a href="#event">EVENTOS</a></li>
                    <li><a href="../HTML/Historia.php">HISTORIA</a></li>
                    <li><a href="#"><i class="ri-shopping-cart-line"></i></a></li>
                          </ul>
                
                <button class="order-now-btn">Carrito</button>
            </nav>
        </div>
    </header>
    
    <!-- Menu content -->
    <main class="menu-content">
        <div class="container">
            <!-- Category filters -->
            <div class="category-filters">
                <a href="../HTML/Menu.php"><button class="category-btn active">Desayunos</button></a>
               <a href="../HTML/entradas.php"><button class="category-btn">Entradas</button></a>
                <a href="../HTML/hamburguesa.php"><button class="category-btn">Hamburguesas</button></a>
                <a href="../HTML/mexicano.php"><button class="category-btn">Mexicano</button></a>
                <a href="../HTML/envoltinis.php"><button class="category-btn">Envoltinis</button></a>
                <a href="../HTML/asiaticos.php"><button class="category-btn">Asiatico</button></a>
                <a href="../HTML/carnes.php"><button class="category-btn">Carnes</button></a>
                <a href="../HTML/pastas.php"><button class="category-btn">Pastas</button></a>
                <a href="../HTML/postres.php"><button class="category-btn">Postres</button></a>
                <a href="../HTML/bebidas.php"><button class="category-btn">Bebidas</button></a>
                <a href="../HTML/verificacion.php"><button class="category-btn">Bebidas Alcoholicas</button></a>  
            </div>
            
            <!-- Menu items grid -->
            <div class="menu-grid">
                <!-- Menu item 1 -->
                <div class="menu-item">
                    <img src="../IMG/e1.jpg" alt="Carpaccio de Res" class="menu-item-image">
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                         <h3 class="menu-item-title">Carpaccio de Res</h3>
                            <span class="menu-item-price">$12.95</span>
                        </div>
                        <p class="menu-item-description">Finas láminas de res, alcaparras, queso parmesano y rúcula</p>
                        <div class="menu-item-footer">
                            <div>
                                <span class="menu-tag tag-popular">Popular</span>
                            </div>
                            <button class="cart-btn" onclick="agregarAlCarrito('Carpaccio de Res', 12.95)">
                                <i class="ri-shopping-cart-line"></i> +
                            </button>                        </div>
                    </div>
                </div>

                <script>
                    let carrito = [];
                    function agregarAlCarrito(nombre, precio) {
                        let item = carrito.find(p => p.nombre === nombre);
                        if (item) {
                            item.cantidad++;
                        } else {
                            carrito.push({ nombre, precio, cantidad: 1 });
                        }
                        console.log(carrito);
                    }
                </script>
                
                <!-- Menu item 2 -->
                <div class="menu-item">
                    <img src="../IMG/e2.jpg" alt="Bruschetta Clásica" class="menu-item-image">
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                            <h3 class="menu-item-title">Bruschetta Clásica</h3>
                            <span class="menu-item-price">$8.95</span>
                        </div>
                        <p class="menu-item-description">Pan tostado con tomate, albahaca y aceite de oliva</p>
                        <div class="menu-item-footer">
                            <div>
                                <span class="menu-tag tag-vegetarian">Vegetariano</span>
                            </div>
                            <button class="item-order-btn">Ordenar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Menu item 3 -->
                <div class="menu-item">
                    <img src="../IMG/e3.jpg" alt="Paella Valenciana" class="menu-item-image">
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                            <h3 class="menu-item-title">Paella Valenciana</h3>
                            <span class="menu-item-price">$25.95</span>
                        </div>
                        <p class="menu-item-description">Tradicional arroz español con mariscos, pollo y azafrán</p>
                        <div class="menu-item-footer">
                            <div>
                                <span class="menu-tag tag-popular">Popular</span>
                            </div>
                            <button class="item-order-btn">Ordenar</button>
                        </div>
                    </div>
                </div>

                 <!-- Menu item 3 -->
                 <div class="menu-item">
                    <img src="../IMG/e4.jpg" alt="Paella Valenciana" class="menu-item-image">
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                            <h3 class="menu-item-title">Paella Valenciana</h3>
                            <span class="menu-item-price">$25.95</span>
                        </div>
                        <p class="menu-item-description">Tradicional arroz español con mariscos, pollo y azafrán</p>
                        <div class="menu-item-footer">
                            <div>
                                <span class="menu-tag tag-popular">Popular</span>
                            </div>
                            <button class="item-order-btn">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="section-footer">
        <footer class="footer">
          <div class="footer-group-container">
            <div class="footer-group box-logo">
              <img src="../IMG/FACHADA.jpg" alt="" class="footer__logo">
            </div>
            <div class="footer-group box-content">
              <ul class="footer__links">
                <li class="footer__li">
                  <span><i class="ri-map-pin-2-fill footer__icon"></i></span>
                  <p class="footer__li-text">Av. Salvador Estrella Sadhalá</p>
                </li>
                <li class="footer__li">
                  <span><i class="ri-mail-fill footer__icon"></i></span>
                  <p class="footer__li-text">squareone@gmail.com</p>
                </li>
              </ul>
              <div class="footer__socials">
                <a href="https://www.facebook.com/square1rd"><i class="ri-facebook-circle-fill footer__social-icons"></i></a>
                <a href="https://www.instagram.com/squareonecafe?igsh=MTd0eWl5Z21rdW9rNg=="><i class="ri-instagram-fill footer__social-icons"></i></a>
                <a href="https://x.com/squareonecafe"><i class="ri-twitter-fill footer__social-icons"></i></a>
              </div>
            </div>
            <div class="footer-group box-map">
              <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.3059313253116!2d-70.69021072573855!3d19.44237234037057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf68cf01d16b%3A0xd35cc3bd8b0fcda2!2sSquare%20One!5e0!3m2!1ses-419!2sdo!4v1742901932824!5m2!1ses-419!2sdo" 
                  width="300" 
                  height="200" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
          <div class="footer__bottom-text-box">
            <p class="footer__bottom-text">IMPUESTOS INCLUIDOS</p>
          </div>
        </footer>
      </section>
      
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../JS/menu.js"></script>
</body>
</html>