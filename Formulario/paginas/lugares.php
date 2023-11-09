<!doctype html>
<html lang="en" data-bs-theme="auto">
    <!-- Conexion a Bootstrap -->
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">

    <!-- Titulo -->
    <title>Agencia Mundial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./css 2/bootstrap.min2.css" rel="stylesheet">
    <link rel="stylesheet" href="./css 2/estilos2.css">
    <link href="./css 2/headers2.css" rel="stylesheet">

  </head>

  <body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title> Bootstrap </title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-
    .529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.
    458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 
    1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.
    5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 
    9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
</svg> 

<!-- Cabesera -->

<!-- header -->
<header>
    <h1 class="visually-hidden">Encabesado</h1>

  <div class="container-fluid bg-modes pb-3">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">

        <!-- Icono -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-suitcase2-fill" viewBox="0 0 16 16">
          <path d="M6.5 0a.5.5 0 0 0-.5.5V3H4.5A1.5 1.5 0 0 0 3 4.5v9a1.5 1.5 0 0 0 1.003 1.416A1 1 0 1 0 6 15h4a1 1 0 1 0 1.996-.084A1.5 1.5 
          0 0 0 13 13.5v-9A1.5 1.5 0 0 0 11.5 3H10V.5a.5.5 0 0 0-.5-.5h-3ZM9 3H7V1h2v2ZM4 7V6h8v1H4Z"/>
        </svg>
        <!-- Fin Icono -->
        
         <h3 class="fs-4 ms-3"> Viajes Mundiales </h3>
        </a>

      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="/Viajes_Mundiales/Formulario" 
          class="nav-link active" aria-current="page">Inicio</a>
        </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
               data-bs-toggle="dropdown" aria-expanded="false"> <h6> Opciones </h6> </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./Precio.php">Precio</a></li>
              <li><a class="dropdown-item" href="./Proveedores.php">Proveedores</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/Viajes_Mundiales/Formulario">
                Registro De Viaje</a></li>
          </ul>
        </li>
      </ul>
    </header>
  </div> 

  <!-- Barra Menu -->

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-blak bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./Viajes_Mundo.php"> Viajes Por El Mundo </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

           <li class="nav-item">
            <a href="./Preguntas.php" class="nav-link"> <h5> Preguntas Frecuentes </h5> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./Galeria.php"> <h5> Galeria </h5> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./lugares.php" tabindex="-1" aria-disabled="true"> <h5> lugares </h5> </a>
          </li>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
<!-- termina nav -->

  <!-- uso de acordeon -->
  <div class="container-fluid p-5 bg-modes">
    <div class="row justify-content-center m-2">
        <div class="col col-8">
          <div class="accordion" id="accordionExample">
            
            <!-- Acordion Uno -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingAustralia">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAustralia" aria-expanded="true" aria-controls="collapseAustralia">
                 <h5 id="TituloAcordion"> AUSTRALIA </h5>
                </button>
              </h2>
              <div id="collapseAustralia" class="accordion-collapse collapse show" aria-labelledby="headingAustralia" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> El país es una de las reservas más importantes de </strong> marsupiales y monotremas del mundo. Es hábitat de 750 especies de aves, 140 especies de serpientes, 1500 tipos de arañas, 
                  4000 tipos de hormigas y 350 tipos de termitas. Son el ornitorrinco y el equidna, que también habita en Nueva Guinea.
                </div>
              </div>
            </div>

            <!-- Acordion Dos -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingCanada">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCanada"" aria-expanded="false" aria-controls="collapseCanada"">
                 <h5 id="TituloAcordion"> CANADA </h5>
                </button>
              </h2>
              <div id="collapseCanada"" class="accordion-collapse collapse" aria-labelledby="headingCanada"" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Canadá es famoso por su belleza natural, </strong> evoca imágenes de espacios abiertos, majestuosas montañas, bosques vírgenes y lagos espectaculares. Canadá también es 
                  conocida como una nación moderna y progresista con ciudadanos de mente abierta. Es una sociedad multicultural orgullosa de su diversidad étnica.
                </div>
              </div>
            </div>

            <!-- Acordion Tres -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingIsIslandia">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIslandia" aria-expanded="false" aria-controls="collapseIslandia">
                  <h5 id="TituloAcordion"> ISLANDIA </h5>
                </button>
              </h2>
              <div id="collapseIslandia" class="accordion-collapse collapse" aria-labelledby="headingIslandia" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Esta pequeña isla remota en el Mar del Norte </strong>  es famosa por su gran cantidad de volcanes, sus géiseres, sus cascadas y sus casi 400 glaciares. Todo esto se debe en 
                  gran medida a que Islandia es parte de la dorsal mesoatlántica que divide este país en dos placas tectónicas.
                </div>
              </div>
            </div>

            <!-- Acordion Cuatro -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNoruega">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNoruega" aria-expanded="true" aria-controls="collapseNoruega">
                 <h5 id="TituloAcordion"> NORUEGA </h5>
                </button>
              </h2>
              <div id="collapseNoruega" class="accordion-collapse collapse" aria-labelledby="headingNoruega" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Noruega ha sido considerada, en varias ocasiones, como una de las mejores naciones para vivir. </strong> Un ejemplo es el Índice de Desarrollo Humano de Naciones Unidas. 
                  Es uno de los países del mundo con mayor esperanza de vida: 80,6 años para los hombres y 84,2 años para las mujeres.
                </div>
              </div>
            </div>

            <!-- Acordion Cinco -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNuevaZelanda">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNuevaZelanda" aria-expanded="false" aria-controls="collapseNuevaZelanda">
                 <h5 id="TituloAcordion"> NUEVA ZELANDA </h5>
                </button>
              </h2>
              <div id="collapseNuevaZelanda" class="accordion-collapse collapse" aria-labelledby="headingNuevaZelanda" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Nueva Zelanda es un país liberal en todo el sentido de la palabra, </strong> desde lo social, cultural hasta la economía y los derechos humanos. Por esto resulta siendo uno de los 
                  mejores países del mundo para vivir. New Zealand tiene un problema que muy pocas otras naciones en su estado presentan.
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>
  </div>
<!-- Fin del Acordion -->

<!-- uso de cards (tarjetas) -->

  <!-- Card 1 -->
  <div class="container-fluid p-5 bg-white">
    <div class="row justify-content-center my-5">
        <div class="col col-sm-12 col-md-4 mb-5">
          <div class="card">
            <img src="./img 2/Australia T.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> AUSTRALIA </h5>
              <p id="PreguntaCard"> <strong> ¿Poque Visitaria Australia? </strong> </p>

              <p class="card-text"> Su naturaleza imponente, playas paradisíacas, animales únicos, pasión por el deporte, diversidad cultural, 
                excelentes vinos, ciudades con la más alta calidad de vida hacen que los miles de kilómetros que nos separan 
                para visitarla valgan la pena. </p>

              <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
          </div>
        </div>

     <!-- Card 2 -->
        <div class="col col-sm-12 col-md-4 mb-5">
          <div class="card">
            <img src="./img 2/Canada T.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> CANADA </h5>
              <p id="PreguntaCard"> <strong> ¿Poque Visitaria Canada? </strong> </p>

              <p class="card-text"> En Canadá se pueden encontrar una gran cantidad de parques nacionales, bosques, lagos, montañas y paisajes impresionantes, 
                otra de las tantas razones para viajar a Canadá. El país es el hogar de algunas de las reservas naturales más grandes del 
                mundo, y explorar estos lugares es una experiencia única. </p>

              <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
          </div>
        </div>

      <!-- Card 3 -->   
        <div class="col col-sm-12 col-md-4 mb-5">
          <div class="card">
            <img src="./img 2/Islandia T.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ISLANDIA</h5>
              <p id="PreguntaCard"> <strong> ¿Poque Visitaria Islandia? </strong> </p> 

              <p class="card-text"> Islandia es un país de ensueño. Viajar a Islandia significa descubrir una naturaleza increíble que no existe en ningún otro país, un entorno puro, 
                limpio y tan, distinto. Viajar a Islandia significa disfrutar de unas vacaciones inolvidables visitando los géiseres, volcanes o subiendo a los 
                glaciares. </p>

              <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
          </div>
        </div>

      <!-- Card 4 -->   
        <div class="col col-sm-12 col-md-4 mb-5">
          <div class="card">
            <img src="./img 2/Noruega T.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NORUEGA</h5>
              <p id="PreguntaCard"> <strong> ¿Poque Visitaria Noruega? </strong> </p>

              <p class="card-text"> Noruega siempre aparece en las listas de los mejores destinos para viajar alguna vez en la vida, tal vez porque sus fiordos son únicos en el mundo, 
                la belleza de sus glaciares y montañas es inimaginable, disfrutar su magistral naturaleza es sencillo, su inigualable sofisticación escandinava lleva 
                consigo pueblos. </p>

              <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
          </div>
        </div>

      <!-- Card 5 -->   
        <div class="col col-sm-12 col-md-4 mb-5">
          <div class="card">
            <img src="./img 2/Nueva Zelanda T.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NUEVA ZELANDA</h5>
              <p id="PreguntaCard"> <strong> ¿Poque Visitaria Nueva Zelanda? </strong> </p>

              <p class="card-text"> La calidad y estilo de vida de Nueva Zelanda es envidiada por muchos, puesto que es un lugar en donde 
                sus paisajes son increíbles, la gran diversidad de fauna y flora, es encantadora, la práctica de deportes
                extremos como el surf harán que te apoderes de las olas. </p>

              <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- Fin de Cards -->

    <!-- footer -->
  <div class="container-fluid bg-primary">
  <div class="container bg-primary">
    <footer class="py-5">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-info">Inicio</a></li>
      </ul>
      <p class="text-center text-white"> Viaje Seguro y Alegre.</p>
    </footer>
  </div>
</div>
<!-- Fin del footer -->

  <!-- Conexion a las carpetas (Diseño) -->
  <script src="./js 2/bootstrap.bundle.min2.js"></script>
  <script src="./js 2/color-modes2.js"></script>
</body>
</html>