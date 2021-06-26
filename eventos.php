<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
  </script>
  <!---------------TIPOGRAFÍAS-------------->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <link rel="stylesheet" href="./css/eventos.css">
</head>

<body>

  <!------------------------------------------------- 2DA PESTAÑA - EVENTO INDIVIDUAL ------------------------------------------------>
  <!------------------- HEADER -------------------->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <a href="index.php">
        <img class="logo" src="./imgs/deRIDElogo.png" alt="">
      </a>



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active menu-link" aria-current="page" href="./index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Categorías
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Playa</a></li>
              <li><a class="dropdown-item" href="#">Ciudad</a></li>
              <li><a class="dropdown-item" href="#">Montaña</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link menu-link" href="#">Eventos</a>
          </li>


          <li class="nav-item">
            <a class="nav-link menu-link" href="#">Contacto:</a>
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
  </nav>




  <!---------------BODY CARD DEL EVENTO-------------->

  <section class="info-body">
    <section class="event-body">

      <h1 class="event-title">DE RIDE A MONTEZUMA</h1>

    </section>
  </section>


  <!------------------- INFORMACIÓN DEL EVENTO - PILLS -------------->
  <section class="info-event-section">

    <ul class="nav nav-pills" id="pills-tab" role="tablist">

      <li class="nav-item" role="presentation">
        <button class="nav-link pills-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
          type="button" role="tab" aria-controls="pills-descrip" aria-selected="true">Descripción</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link pills-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-info" aria-selected="false">Información</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link pills-btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
          type="button" role="tab" aria-controls="pills-price" aria-selected="false">Precios</button>
      </li>
    </ul>

    <div class="tab-content tab-box" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p class="pills-text">Acompáñanos a descubrir los increíbles paisajes que nos ofrecen las playas de la península
          de Nicoya en este fascinante tour de 2 días.</p>
      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <p class="pills-text">Hora: 5:00 am.</p>
        <p class="pills-text">Fecha: 23 abril.</p>
        <p class="pills-text">Categoría: Playa.</p>
        <p class="pills-text">Lugar: Puntarenas, Costa Rica.</p>
        <p class="pills-text">Público: Todas las edades o sólo +18.</p>
      </div>

      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <p class="pills-text">Evento: Pago o gratuito.</p>
        <p class="pills-text">Precio por adulto: ₡8500.</p>
        <p class="pills-text">Precio por niño: ₡4500.</p>
      </div>
    </div>

    <!-------------------------------   MODALS  ---------------------------------->

    <!---  BOTON QUE ABRE LOS MODALS  --->
    <a class="btn registrarse-btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Registrarse</a>

    <!-------------- 1ST MODAL (Total a pagar) -------------->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
      tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header-1">
            <a href="#"> <img class="logo-modal" src="./imgs/deRIDElogo.png" alt=""> </a>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <section>
            <div class="modal-body-1 titulo-body1">
              TÍTULO DEL EVENTO:

              <div class="info-body1">
                <p class="pills-text">Precio por niño:</p>
                <p class="pills-text">Precio por adulto:</p>
                <p class="pills-text">Espacios disponibles:</p>
              </div>


              <!-- OPCIONES DE PERSONAS & TOTAL A PAGAR -->

              <section class="opcionales">

                <div class="input-group mb-3">
                  <label class="input-group-text niños-bar" for="inputGroupSelect01">Niños</label>
                  <select class="form-select niños-select" id="inputGroupSelect01">
                    <option selected>Selecciona...</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>


                <div class="input-group mb-3">
                  <label class="input-group-text adultos-bar" for="inputGroupSelect01">Adultos</label>
                  <select class="form-select adultos-select" id="inputGroupSelect01">
                    <option selected>Selecciona...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>

                <div class="input-group">
                  <label class="input-group-text subtotal-bar" for="inputGroupSelect01">Subtotal:</label>
                  <span class="input-group-text total-monto">₡ 7.500</span>
                </div>
              </section>
            </div>
          </section>

          

          <div class="modal-footer-1">
            <button class="btn btn-primary btn-modal-1" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
              data-bs-dismiss="modal">Siguiente</button>
          </div>
        </div>
      </div>
    </div>



    <!-------------------- 2ND MODAL (Correo de confirmación.) --------------------->

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
      tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header-2">
            <a href="#"> <img class="logo-modal" src="./imgs/deRIDElogo.png" alt=""> </a>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <section class="registro">

            <div>
              <p class="modal-body-2 titulo-body2">TÍTULO DEL EVENTO</p>
              <p class="modal-body-2 subtitulo-body2">Ingresá tus datos para reservar.</p>
            </div>


            <div class="form-floating mb-3">
              <input type="Nombre:" class="form-control" id="floatingInput" placeholder="nombre y apellido.">
              <label for="floatingInput" class="datos-registro">Nombre completo:</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword" class="datos-registro">Correo electrónico:</label>
            </div>
          </section>


          <div class="modal-footer-2">
            <button class="btn btn-primary btn-modal-2" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
              data-bs-dismiss="modal">Reservar</button>
          </div>
        </div>
      </div>
    </div>



    <!-------------------- 3RD MODAL (Registración éxitosa) ----------------------->

    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
      tabindex="-1">

      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header-3">
            <a href="#"> <img class="logo-modal" src="./imgs/deRIDElogo.png" alt=""> </a>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body-3">
            Tu reserva ha sido realizada con éxito.

          </div>
          <div class="modal-footer-3">
            <button type="button" class="btn btn-secondary btn-modal-3" data-bs-dismiss="modal">Finalizar</button>
          </div>
        </div>
      </div>
    </div>
  </section>








  <!-------- START - CARRUSEL EVENTOS RELACIONADOS --------->
  <section class="related-event">
    <h2 class="related-title"> EVENTOS RELACIONADOS</h2>


    <div class="card-group">
      <div class="card">
        <img src="./imgs/cabuyal.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Playa Cabuyal</h5>
          <p class="card-text">Guanacaste, Costa Rica.</p>
        </div>
      </div>

      <div class="card">
        <img src="./imgs/uva.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Punta Uva</h5>
          <p class="card-text">Limón, Costa Rica.</p>
        </div>
      </div>

      <div class="card">
        <img src="./imgs/malpais.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Malpaís</h5>
          <p class="card-text">Puntarenas, Costa Rica.</p>
        </div>
      </div>
    </div>
  </section>


  <!-------- FIN - CARRUSEL EVENTOS RELACIONADOS --------->

  <footer class="footer-body">
    <h1 class="footer-quote">©️ 2021 Copyright || www.deride.com </h1>
  </footer>

























</body>

</html>