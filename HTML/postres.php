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
          
            <div class="card">
           <img src="../IMG/po1.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Cheesecake Brownie</h4>
            <p class="menu-item-description">Es un postre indulgente que combina un denso y..,</p>
                <div class="card--price">
                    <div class="price">RD$225.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Es un postre indulgente que combina un denso y rico brownie de chocolate con una suave y cremosa capa de cheesecake. Su textura es una mezcla perfecta de lo fudgy del brownie y lo ligero del cheesecake, a menudo con un toque de vainilla o chocolate en la mezcla.
                </ul>
            </div>
        </div>

            <div class="card">
              
                <img src="../IMG/po2.jpg" alt="">
                <h4 class="card--title">Cheesecake Original</h4>
                <p class="menu-item-description"> Delicioso cheesecake tradicional con una base crujiente...</p>
                <div class="card--price">
                    <div class="price">RD$335.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso cheesecake tradicional con una base crujiente de galleta y un relleno suave y cremoso de queso, ligeramente dulce y con un toque de vainilla. Cocido a la perfección para ofrecer una textura rica y un sabor clásico.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po3.jpg" alt="">
                <h4 class="card--title">Cheesecake de Fresa</h4>
                <p class="menu-item-description">Exquisito cheesecake de fresa, con una base crujiente...</p>
                <div class="card--price">
                    <div class="price">RD$240.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Exquisito cheesecake de fresa, con una base crujiente de galleta y un relleno suave y cremoso de queso, realzado con una deliciosa capa de mermelada de fresa fresca.
                </ul>
            </div>
        </div>
            
            <div class="card">
                <img src="../IMG/po4.jpg" alt="">
                <h4 class="card--title">Avena con Leche </h4>
                <p class="menu-item-description">Reconfortante avena cocida en leche, creando una...</p>
                <div class="card--price">
                    <div class="price">RD$110.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Reconfortante avena cocida en leche, creando una textura cremosa y suave. 
                </ul>
            </div>
        </div>
            
            <div class="card">
                <img src="../IMG/po5.jpg" alt="">
                <h4 class="card--title">Croissant Nutella</h4>
                <p class="menu-item-description">Su exterior dorado y crujiente contrasta con el...</p>
                <div class="card--price">
                    <div class="price">RD$450.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Su exterior dorado y crujiente contrasta con el interior suave y cremoso, creando una combinación irresistible. Perfecto para el desayuno o como un capricho dulce, este croissant ofrece una explosión de sabor en cada bocado.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po6.jpg" alt="">
                <h4 class="card--title">Brownie One</h4>
                <p class="menu-item-description">Delicioso brownie, con una textura fudgy y rica...</p>
                <div class="card--price">
                    <div class="price">RD$125.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso brownie, con una textura fudgy y rica que se derrite en la boca. Cada bocado ofrece un intenso sabor a chocolate, con una capa crujiente en el exterior y un centro suave y decadente.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po7.jpg" alt="">
                <h4 class="card--title">Cinnamon Roll</h4>
                <p class="menu-item-description">Delicioso cinnamon roll, con una masa suave y...</p>
                <div class="card--price">
                    <div class="price">RD$140.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso cinnamon roll, con una masa suave y esponjosa, enrollada con una generosa capa de azúcar y canela. Cada rollo está glaseado con un suave y cremoso glaseado de queso crema, que se derrite delicadamente sobre el cálido pastel de canela. 
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po8.jpg" alt="">
                <h4 class="card--title">Tiramisu</h4>
                <p class="menu-item-description"> Un postre italiano irresistible con capas de...</p>
                <div class="card--price">
                    <div class="price">RD$195.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Un postre italiano irresistible con capas de bizcochos empapados en café espresso y licor, intercalados con una suave y cremosa mezcla de queso y huevo. Espolvoreado con cacao en polvo y a menudo adornado con virutas de chocolate.
                </ul>
            </div>
         </div>

             <div class="card">
                <img src="../IMG/po9.jpg" alt="">
                <h4 class="card--title">Pecan Pie A La Moda</h4>
                <p class="menu-item-description">Exquisito pecan pie servido a la moda, con una...</p>
                <div class="card--price">
                <div class="price">RD$310.00</div>
                <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Exquisito pecan pie servido a la moda, con una base de masa crujiente y dorada, relleno de una mezcla rica y caramelizada de nueces pecanas. 
                </ul>
            </div>
        </div>

          
        <div class="card">
                <img src="../IMG/po10.jpg" alt="">
                <h4 class="card--title">Galleta de Oreo</h4>
                <p class="menu-item-description">Deliciosas galletas rellena de nutella con...</p>
                <div class="card--price">
                <div class="price">RD$100.00</div>
                <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Deliciosas galletas rellena de nutella con toping de oreo</ul>
            </div>
        </div>

             <div class="card">
                <img src="../IMG/po11.jpg" alt="">
                <h4 class="card--title">Cheesecake de Chinola</h4>
                <p class="menu-item-description">Delicioso cheesecake de chinola, con una base...</p>
                <div class="card--price">
                    <div class="price">RD$260.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso cheesecake de chinola, con una base crujiente de galleta y un relleno suave y cremoso de queso, infusionado con el vibrante sabor afrutado de la chinola.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po12.jpg" alt="">
                <h4 class="card--title">Pecan Pie</h4>
                <p class="menu-item-description">Exquisito pecan pie con una base de masa crujiente y dorada...</p>
                <div class="card--price">
                    <div class="price">RD$240.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Exquisito pecan pie con una base de masa crujiente y dorada, relleno de una mezcla rica y pegajosa de nueces pecanas y un relleno dulce con toques de caramelo y vainilla. 
                </ul>
            </div>
        </div>

             <div class="card">
                <img src="../IMG/po13.jpg" alt="">
                <h4 class="card--title">Tres Leches de Chocolate</h4>
                <p class="menu-item-description">Exquisito pastel Tres Leches de chocolate, esponjoso...</p>
                <div class="card--price">
                    <div class="price">RD$240.00</div>
                      <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Exquisito pastel Tres Leches de chocolate, esponjoso y decadente, empapado en una mezcla de tres tipos de leche: evaporada, condensada y crema, con un rico toque de chocolate. 
                </ul>
            </div>
        </div>
          
            <div class="card">
                <img src="../IMG/po14.jpg" alt="">
                <h4 class="card--title">Flan</h4>
                <p class="menu-item-description"> Clásico flan, con una textura suave y cremosa que se...</p>
                <div class="card--price">
                    <div class="price">RD$165.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Clásico flan, con una textura suave y cremosa que se deshace en la boca. Preparado con una mezcla delicada de huevos, leche y azúcar, y cubierto con un caramelo dorado y sedoso que añade un toque de dulzura irresistible.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po15.jpg" alt="">
                <h4 class="card--title">Milky Way</h4>
                <p class="menu-item-description"> Delicioso pastel Milky Way, con capas esponjosas de bizcocho...</p>
                <div class="card--price">
                    <div class="price">RD$265.00</div>
                  <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Delicioso pastel Milky Way, con capas esponjosas de bizcocho de chocolate intercaladas con un suave relleno de mousse de caramelo y chocolate.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/po16.jpg" alt="">
                <h4 class="card--title">Galleta de M&M</h4>
                <p class="menu-item-description">Con una textura suave por dentro y ligeramente crujiente...</p>
                <div class="card--price">
                    <div class="price">RD$70.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Con una textura suave por dentro y ligeramente crujiente por fuera, repleta de coloridos trozos de M&M que aportan un toque de dulce crocante en cada bocado.
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
