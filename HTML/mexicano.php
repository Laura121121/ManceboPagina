<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Square One</title>
    <link rel="stylesheet" href="../CSS/postres.css">
</head>
<body>
<header>
        <div class="container">
            <nav class="navbar">
                <div class="nav__logo">
                <a href="../Login/Principal.php">
                <img
                        src="../IMG/Logo.png"  height="170"
                        alt="logo"
                        class="nav__logo-dark"
                      />
                    </a>
                  </div>
                
                  <ul class="nav-links">
                  <li><a href="../Login/Principal.php">INICIO</a></li>
                    <li><a href="../HTML/entradas.php">MENU</a></li>
                    <li><a href="../HTML/Historia.php">HISTORIA</a></li>
                    <li><a href="../Login/Registro.php">CLOSED</a></li>
                    <div class="cart-icon">
                     🛒 <span>0</span>
                    </div>                          
                  </ul>
          </nav>
        </div>
    </header>

    <main>
    <div class="category-filters">
                <a href="../HTML/Desayuno.php"><button class="category-btn active">Desayunos</button></a>
               <a href="../HTML/entradas.php"><button class="category-btn">Entradas</button></a>
                <a href="../HTML/hamburguesa.php"><button class="category-btn">Hamburguesas</button></a>
                <a href="../HTML/mexicano.php"><button class="category-btn">Mexicano</button></a>
                <a href="../HTML/envoltinis.php"><button class="category-btn">Envoltinis</button></a>
                <a href="../HTML/carnes.php"><button class="category-btn">Carnes</button></a>
                <a href="../HTML/pastas.php"><button class="category-btn">Pastas</button></a>
                <a href="../HTML/postres.php"><button class="category-btn">Postres</button></a>
                <a href="../HTML/bebidas.php"><button class="category-btn">Bebidas</button></a>
                <a href="../HTML/verificacion.php"><button class="category-btn">Bebidas Alcoholicas</button></a>  
            </div>

        <div class="cards">
          <!-- Ejemplo de card modificada -->
        <div class="card">
            <img src="../IMG/m1.jpg" alt="Quesadilla Pollo y Queso" class="dish-image">
            <h4 class="card--title tag-popular">Quesadilla Pollo y Queso</h4>
            <p class="menu-item-description">Tortilla rellena de pechuga de pollo a la plancha y queso danés...</p>
            <div class="card--price">
                <div class="price">RD$295.00</div>
                <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Tortilla rellena de pechuga de pollo a la plancha y queso danés, acompañados de pico de gallo fresco y guacamole cremoso para una experiencia de sabores auténticos y deliciosos.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/m2.jpg" alt="">
                <h4 class="card--title tag-popular">Quesadilla de Churrasco</h4>
            <p class="menu-item-description">Quesadilla con tortilla rellena de tiras de churrasco jugosas...</p>
                <div class="card--price">
                    <div class="price">RD$650.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Quesadilla con tortilla rellena de tiras de churrasco jugosas, queso danés derretido, pico de gallo fresco, guacamole cremoso y un toque de crema agria, ofreciendo una deliciosa combinación de sabores y texturas.
                </ul>
            </div>
          </div>


            <div class="card">
                <img src="../IMG/m3.jpg" alt="">
                <h4 class="card--title tag-popular">Fajitas de Pollo</h4>
            <p class="menu-item-description">Jugosa pechuga de pollo a la plancha marinada con cebolla y pimientos...</p>
                <div class="card--price">
                    <div class="price">RD$440.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                   Jugosa pechuga de pollo a la plancha marinada con cebolla y pimientos, servida con pico de gallo, guacamole, queso cheddar, crema agria y tortilla de trigo.
                </ul>
            </div>
          </div>

            
            <div class="card">
                <img src="../IMG/m4.jpg" alt="">
                <h4 class="card--title tag-popular">Fajitas Mixtas</h4>
            <p class="menu-item-description">Deliciosa combinación de filete de res y pechuga de pollo marinados...</p>
                <div class="card--price">
                    <div class="price">RD$565.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
                <div class="hidden-details">
                    <ul class="ingredients">
                    Deliciosa combinación de filete de res y pechuga de pollo marinados con cebolla y pimientos servido con pico de gallo, guacamole, queso cheddar, crema agria y tortilla de trigo.
                    </ul>
                </div>
             </div>

            
            <div class="card">
                <img src="../IMG/m5.jpg" alt="">
                <h4 class="card--title tag-popular">Burrito de Pollo</h4>
            <p class="menu-item-description">Burrito de pollo relleno de habichuelas negras, arroz...</p>
                <div class="card--price">
                    <div class="price">RD$460.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Burrito de pollo relleno de habichuelas negras, arroz, lechuga romana, pico de gallo, guacamole, cebolla y pimientos.
                </ul>
            </div>
        </div>


            <div class="card">
                <img src="../IMG/m6.jpg" alt="">
                <h4 class="card--title tag-popular">Burrito de Res</h4>
            <p class="menu-item-description">Burrito de res con habichuelas negras, arroz, lechuga romana...</p>
                <div class="card--price">
                    <div class="price">RD$545.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Burrito de res con habichuelas negras, arroz, lechuga romana, pico de gallo, queso cheddar, guacamole, cebolla y pimientos.
                </ul>
            </div>
        </div>

            <div class="card">
           <img src="../IMG/m7.jpg" alt="Bruschetta Clásica" class="">
           <h4 class="card--title tag-popular">Chimichanga</h4>
            <p class="menu-item-description">Deliciosa tortilla de harina rellena de chile de res...</p>
                <div class="card--price">
                    <div class="price">RD$390.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Deliciosa tortilla de harina rellena de chile de res, guacamole, salsa mexicana, queso danés y cheddar, perfectamente envuelta y frita al estilo chimichanga para un sabor crujiente y sabroso en cada bocado.
                </ul>
            </div>
        </div>

            <div class="card">
           <img src="../IMG/m8.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Tacos de Pollo</h4>
            <p class="menu-item-description">Tres tortillas de trigo con carne de pollo, lechuga romana...</p>
                <div class="card--price">
                    <div class="price">RD$380.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Tres tortillas de trigo con carne de pollo, lechuga romana, queso, pico de gallo, jalapeños, crema agria, cebolla y pimientos morrones.
                </ul>
            </div>
        </div>
          
             <div class="card">
           <img src="../IMG/m9.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Tacos de Res</h4>
            <p class="menu-item-description">Tres tortillas de trigo rellenas de res, lechuga romana...</p>
                <div class="card--price">
                    <div class="price">RD$590.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
          <div class="hidden-details">
            <ul class="ingredients">
            Tres tortillas de trigo rellenas de res, lechuga romana, queso, pico de gallo, jalapeños, crema agria, cebolla y pimientos morrones.
            </ul>
           </div>
         </div>
           
             <div class="card">
           <img src="../IMG/m10.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Tacos de Camarones</h4>
            <p class="menu-item-description">"Tortillas de trigo rellenas de tempura de camarones crujientes...</p>
                <div class="card--price">
                    <div class="price">RD$370.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div> 
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Tortillas de trigo rellenas de tempura de camarones crujientes, acompañadas de lechuga fresca, aguacate, pico de gallo, queso cheddar y un toque de spicy mayo, ofreciendo una mezcla perfecta de sabores y texturas.
                </ul>
            </div>
        </div>
         
             <div class="card">
           <img src="../IMG/m11.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Crespe de Pollo</h4>
            <p class="menu-item-description">Deliciosos crepes rellenos de pollo molido y queso parmesano...</p>
                <div class="card--price">
                    <div class="price">RD$330.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>        
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Deliciosos crepes rellenos de pollo molido y queso parmesano, cubiertos con una rica salsa bechamel, ofreciendo una combinación jugosa y cremosa en cada bocado.
                </ul>
            </div>
        </div>
  
             <div class="card">
           <img src="../IMG/m12.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Crespe Mixto</h4>
            <p class="menu-item-description">Delicioso crepe relleno de camarones en una suave salsa pomodoro..."</p>
                <div class="card--price">
                    <div class="price">RD$440.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
                </div>
             <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso crepe relleno de camarones en una suave salsa pomodoro, con una capa de salsa bechamel, espolvoreado con queso parmesano y acompañado de tomates Barceló, creando una experiencia de sabor rica y sofisticada.
               </ul>
            </div>
          </div>
       </div>
    </main>

        <!-- Modal -->
        <div id="modal" class="modal">
  <div class="modal-content">
     <span class="close">&times;</span>
     <img id="modal-img" src="" alt="">
     <h4 id="modal-title"></h4>
     <p id="modal-description"></p>
     <p id="modal-price" class="price"></p>
     <button id="modal-add-btn" class="add-to-cart">Agregar al carrito</button>
    </div>
   </div>


    <div class="sidebar" id="sidebar">
        <button class="sidebar-close">✖</button>
        <h3>Carrito de Compras</h3>
        <div class="cart-items"></div>
        <div class="cart-total">
            <span> Subtotal:</span> RD$0.00<br>
            <span> ITBIS (18%):</span> RD$0.00<br>
            <span> Envío:</span> RD$0.00<br>
            <strong>Total: RD$0.00</strong>
        </div>
        <button class="clooose">Finalizar compra</button>
    </div>

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
          <p class="footer__bottom-text">IMPUESTOS NO INCLUIDOS</p>
          </div>
        </footer>
      </section>

    <script src="../JS/in.js"></script>
</body>
</html>
