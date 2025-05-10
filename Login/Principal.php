<?php
// Esto debe ser lo PRIMERO en el archivo
require_once 'connection.php';
session_start();

// Redirigir si no está autenticado


// Mostrar mensaje de bienvenida si existe
$login_success = $_SESSION['login_success'] ?? null;
unset($_SESSION['login_success']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/Principal .css" />
    <title>Square One</title>
  </head>
  <body>
  
    <header class="header">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
          <a href="../Login/Principal.php">
          <img
                src="../IMG/Logo.png"  height="170"
                alt="logo"
                class="nav__logo-dark"
              />
              <img
                src="../IMG/Logo.png" 
                alt="logo" 
                class="nav__logo-white"
              />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div> 
        </div>
        <ul class="nav__links" id="nav-links">
            
        <li><a href="../Login/Principal.php">INICIO</a></li>
        <li><a href="#special">ESPECIALES</a></li>
          <li><a href="../HTML/Desayuno.php">MENU</a></li>
          <li><a href="../HTML/Historia.php">HISTORIA</a></li>
          <li><a href="../Login/Registro.php">CLOSED</a></li>
      
          <div class="cart-icon">
          <li><a href="#carrito-container"><i class=" ri-shopping-cart-line"></i></a></li>
          </div>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        
        <div class="header__content">
          <h2>DISFRUTA DE NUESTRAS SEMANAS LLENAS DE TEMATICAS</h2>
          <h1>SEMANA <span>DE <br/> LA HAMBURGUESA</span></h1>
        </div>
        <div class="carousel">
    <div class="carousel-track-container">
      <ul class="carousel-track">
        <li class="carousel-slide current-slide">
          <img src="../IMG/a1.jpg" alt="Imagen 1">
        </li>
        <li class="carousel-slide">
          <img src="../IMG/deditos de pollo.jpg" alt="Imagen 2">
        </li>
        <li class="carousel-slide">
          <img src="../IMG/buffalopizza.jpg" alt="Imagen 3">
        </li>
      </ul>
    </div>

    <button class="carousel-button left">&#10094;</button>
    <button class="carousel-button right">&#10095;</button>

    <div class="carousel-nav">
      <button class="carousel-indicator current-slide"></button>
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
    </div>
  </div>
      </div>
    </header>
  <div class="bodys">
    <div class="container">
        <h1 class="titulo">Nuestra Identidad Corporativa</h1>
        
        <div class="cards-container">
            <div class="card">
                <div class="card-content">
                    <h2>Misión</h2>
                    <p>Ofrecer una experiencia culinaria única.<br>
                       Crear un ambiente relajado y vanguardista.<br>
                       Productos de calidad a precios accesibles.
                  </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-content">
                    <h2>Visión</h2>
                    <p>Ser un referente gastronómico<br>
                       Expandir su influencia<br> 
                       Crear un espacio acogedor <br> 
                  </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-content">
                    <h2>Valores</h2>
                    <p>
                        Integridad,
                        Innovación<br>
                         Excelencia,
                        Calidad<br>
                        Trabajo en equipo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="section__container banner__container" id="special">
      <div class="banner__card">
        <p>LA PROTEINA MAS POPULAR</p>
        <h4>CHURRASCO</h4>
      </div>
      <div class="banner__card">
        <p>MAS DULZOR, MAS SABOR</p>
        <h4>HAZELNUT</h4>
      </div>
      <div class="banner__card">
        <p>ENAMORATE CON SU FRESCURA</p>
        <h4>WAFFLE</h4>
      </div>
    </section>

    <section class="section__container order__container" id="menu">
      <h3>TODO TIPO DE ANTOJOS</h3>
      <h2 class="section__header">ELIGE Y DISFRUTA</h2>
      <p class="section__description">
        Ya sea que te apetezcan sabores clásicos o combinaciones atrevidas, aquí es donde comienza tu aventura 
        culinaria. Satisface tus antojos y saborea cada bocado mientras creas tu experiencia.
      </p>
      <div class="order__grid">
        <div class="order__card">
          <img src="../IMG/alfred.jpg" alt="order" />
          <h4>ALFREDO CON CAMARONES</h4>
          <p>
            Pasta de su preferencia al dente, preparada
             en salsa Alfredo con camarones.<BR> RD$405.00
          </p>
        </div>
        <div class="order__card">
          <img src="../IMG/buffalo.jpg" alt="order" />
          <h4>Yaroa Buffalo</h4>
          <p>
            Crocantes papas fritas con exquisitas pechuguitas
             de pollo picante, salsa bechamel, queso gouda,
              blue cheese, cheddar y puerro. <BR> RD$375.00
          </p>
        </div>
        <div class="order__card">
          <img src="../IMG/churra.jpg" alt="order" />
          <h4>CHURRASCO IMPORTADO</h4>
          <p>
            10 oz de jugoso corte de churrasco con sazón 
            de parrilla acompañado de salsa chimichurri. <BR> RD$1,200.00
          </p>
          
        </div>
      </div>
    </section>

    <section class="section__container event__container" id="event">
      <div class="event__content">
        <div class="event__image">
          <img src="../IMG/hombre-toca-guitarra-canta-restaurante_14117-1169080.avif" alt="event" />
        </div>
        <div class="event__details">
          <h3>Descubre</h3>
          <h2 class="section__header">CONOCE TALENTOS</h2>
          <p class="section__description">
            Square One no solo se ha convertido en un referente gastronómico,
            sino también en un espacio para la música en vivo, atrayendo a 
            artistas locales e internacionales que deleitan a los comensales
            con diversos géneros musicales. Cantantes de jazz, pop y música
            tropical  han encontrado en este restaurante un escenario
            ideal para conectarse con el público en un ambiente acogedor y 
            vibrante. Estos eventos han contribuido a la identidad cultural
            del lugar, convirtiéndolo en un punto de encuentro no solo para
            amantes de la buena comida, sino también para quienes disfrutan
            de la música en vivo y el arte.
          </p>
        </div>
      </div>
    </section>

    <section class="reservation" id="contact">
  <div class="section__container reservation__container">
    <h3>RESERVACION</h3>
    <h2 class="section__header">LLENA EL FORMULARIO</h2>
<form action="https://formspree.io/f/xnndvbpw?next=/gracias.html" method="POST">      <!-- Agregué atributos 'name' a todos los campos -->
      <input type="text" name="nombre" placeholder="NAME" required>
      <input type="tel" name="telefono" placeholder="TEL" required>
      <input type="email" name="email" placeholder="EMAIL" required>
      <input type="date" name="fecha" placeholder="DATE" required>
      <input type="time" name="hora" placeholder="TIME" required>
      <input type="number" name="personas" placeholder="PEOPLE" min="1" required>
      <button class="btn" type="submit">ENVIAR</button>
    </form>
  </div>
  <img
    src="../IMG/GA-preview.png"
    alt="reservation"
    class="reservation__bg-1"
  />
  <img
    src="../IMG/JAMON-preview.png"
    alt="reservation"
    class="reservation__bg-2"
  />
</section>

<script>
  document.getElementById('reservationForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const response = await fetch('https://formspree.io/f/xnndvbpw', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(Object.fromEntries(new FormData(e.target)))
    });
    if (response.ok) {
      window.location.href = '/gracias.html'; // Redirigir tras éxito
    }
  });
</script>


<section class="section__container suggestion__container" id="suggestion">
  <h3>BUZÓN DE SUGERENCIAS</h3>
  <h2 class="section__header">¡TU OPINIÓN NOS IMPORTA!</h2>
  <form id="suggestion-form" action="https://formspree.io/f/mbloyayz" method="POST">
    <textarea name="message" placeholder="Escribe tu sugerencia aquí..." required></textarea>
    <button class="btn" type="submit">ENVIAR</button>
  </form>
  <p id="message" style="display:none; color: green; margin-top: 10px;">¡Gracias por tu sugerencia!</p>
</section>

<script>
  document.getElementById("suggestion-form").addEventListener("submit", async function(event) {
    event.preventDefault();
    const form = event.target;
    
    try {
      const response = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
          'Accept': 'application/json'
        }
      });
      
      if (response.ok) {
        // Mostrar mensaje de éxito
        document.getElementById("message").style.display = "block";
        setTimeout(() => {
          document.getElementById("message").style.display = "none";
        }, 3000);
        form.reset();
      } else {
        throw new Error('Error en el envío');
      }
    } catch (error) {
      console.error('Error:', error);
      alert('Hubo un error al enviar tu sugerencia. Por favor intenta nuevamente.');
    }
  });
</script>

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
              <a   href="https://x.com/squareonecafe" ><i class="ri-twitter-fill footer__social-icons"></i></a>
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

    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../JS/menu.js"></script>
    <script src="../JS/carrito.js"></script>

  </body>
</html> 

