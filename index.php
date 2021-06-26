<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>deRide</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
  </script>
  <!---------------TIPOGRAFÍAS-------------->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <!--------- TOP BAR -------->
  <section>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">

        <a href="#">
          <img class="logo" src="./imgs/deRIDElogo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Categorías
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Playa</a></li>
                <li><a class="dropdown-item" href="#">Ciudad</a></li>
                <li><a class="dropdown-item" href="#">Montaña</a></li>
              </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="#evento">Eventos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Subscripción</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contacto:</a>
            </li>

            <li class="nav-item nav-number">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">(506) 2202-0222</a>
            </li>

          </ul>


          <form class="d-flex">
            <input class="search-control me-2" type="search" placeholder="" aria-label="Search">
            <button class="search-btn" type="submit">Buscar</button>
          </form>
        </div>
      </div>
      <header class="header-img">
      </header>
    </nav>
    
  </section>





  <!---------HEADER - QUOTE INCIAL--------->
  <header class="header-body">
    <h1 class="ride-quote">¡De ride por todo Costa Rica a vivir las mejores experiencias!</h1>
  </header>

  <!------------------------------------------------- CATEGORÍAS ------------------------------------------------->

  <section class="section-categorias">
    <h2 class="texto-categorias">
      CATEGORÍAS
    </h2>

    <!-------------------- CARRUSEL 3 CATEGORÍAS -------------------->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./imgs/playa.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5 class="title-categorias">PlAYA</h5>
            <p class="subtitle-categorias">Islas - Ríos - Lagunas</p>

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./imgs/ciudad.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5 class="title-categorias">CIUDAD</h5>
            <p class="subtitle-categorias">Museos - Patrimonios - Teatros</p>

          </div>
        </div>
        <div class="carousel-item">
          <img src="./imgs/chirripo.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5 class="title-categorias">MONTAÑA</h5>
            <p class="subtitle-categorias">Cerros - Cataratas - Miradores</p>

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  
  <div class="row parallax-section">
            
        
  </div>

  <!------------------------------------------------- EVENTOS ------------------------------------------------->
  <section class="section-eventos">
    <h2 class="texto-eventos">
      EVENTOS DISPONIBLES
    </h2>

    <!---------------------- EVENTOS - BODY -------------------->
    <!-------- 1ST CARD ------->
    <div class="row row-cols-1 row-cols-md-3 g-4" id="evento">
    

      <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                    <div class="montezuma-evento">
                    </div>
                    
            </div>
                <div class="montezuma-back"> 
                    <h1 class="title-no">Montezuma</h1>
                    <p class="text-no">Descripcion</p> 
                    <a class="more-event-btn" href="./eventos.php">Ver mas</a>
                </div>
        </div>
    </div>
    <div class="flip-card">
      <div class="flip-card-inner">
          <div class="flip-card-front">
                  <div class="teatro-evento">
                  </div>
                  
          </div>
              <div class="teatro-back"> 
                  <h1 class="title-no">Teatro</h1>
                  <p class="text-no">Descripcion</p> 
                  <a class="more-event-btn" href="./eventos.php">Ver mas</a>
              </div>
      </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
                <div class="chirripo-evento">
                </div>
                
        </div>
            <div class="chirripo-back"> 
                <h1 class="title-no">Chirripo</h1>
                <p class="text-no">Descripcion</p> 
                <a class="more-event-btn" href="./eventos.php">Ver mas</a>
            </div>
    </div>
</div>

      


    </div>
  </section>


  <!----------------------------- SUBSCRIBE ---------------------------->
  <section class="section-subs">
    <h2 class="texto-subs">
      ¡SUBSCRÍBITE PARA RECIBIR NUEVAS AVENTURAS EN TU CORREO!
    </h2>
    <p class="subtitle-subs">Suscríbete a nuestra lista de correo mensual deRide para obtener las últimas
      actualizaciones sobre artículos y aventuras para el tiempo libre. — no es spam.</p>


    <form class="d-flex">
      <input class="form-control me-2 " type="search" placeholder="Ingrese su correo electrónico" aria-label="Search">
      <button class="btn enviar-btn" type="submit">Enviar</button>
    </form>

  </section>


  <!------------------------------------------------- FOOTER ------------------------------------------------->

  <footer class="footer-body">
    <h1 class="footer-quote">©️ 2021 Copyright || www.deride.com </h1>
  </footer>






</body>

</html>