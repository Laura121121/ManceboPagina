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
           <img src="../IMG/ba1.jpg" alt="Bruschetta Clásica" class="">
            <h4 class="card--title tag-popular">Sangria</h4>
                <div class="card--price">
                    <div class="price">RD$310.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba2.jpg" alt="">
                <h4 class="card--title">Cuba Libre</h4>
                <div class="card--price">
                    <div class="price">RD$160.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba3.jpg" alt="">
                <h4 class="card--title">Piña Colada </h4>
                <div class="card--price">
                    <div class="price">RD$230.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>
            
            <div class="card">
                <img src="../IMG/ba4.jpg" alt="">
                <h4 class="card--title">Orgasmo</h4>
                <div class="card--price">
                    <div class="price">RD$300.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>      
        </div>
            
            <div class="card">
                <img src="../IMG/ba5.jpg" alt="">
                <h4 class="card--title">Copa de Mimosa</h4>
                <div class="card--price">
                    <div class="price">RD$220.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba6.jpg" alt="">
                <h4 class="card--title">Mexican Buldog Strawberry</h4>
                <div class="card--price">
                    <div class="price">RD$510.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba7.jpg" alt="">
                <h4 class="card--title">Moscow Mule</h4>
                <div class="card--price">
                    <div class="price">RD$260.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba8.jpg" alt="">
                <h4 class="card--title">Mexican Buldog Limon</h4>
                <div class="card--price">
                    <div class="price">RD$510.00</div>
                       <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba9.jpg" alt="">
                <h4 class="card--title">Sex On The Beach</h4>
                <div class="card--price">
                    <div class="price">RD$360.00</div>
                       <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba10.jpg" alt="">
                <h4 class="card--title">Cosmopolitan</h4>
                <div class="card--price">
                    <div class="price">RD$230.00</div>
                         <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba11.jpg" alt="">
                <h4 class="card--title">Long Island Ice Tea</h4>
                <div class="card--price">
                    <div class="price">RD$300.00</div>
                        <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
        </div>

            <div class="card">
                <img src="../IMG/ba12.jpg" alt="">
                <h4 class="card--title">Mexican Buldog Mango</h4>
                <div class="card--price">
                    <div class="price">RD$299.00</div>
                       <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
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
