<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="es">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> 
		<?php echo $title=isset($title)?$title:'Viajes_Mundiales'; ?> 
	</title>

	<link href="./misc/css/bootstrap.min(1).css" rel="stylesheet">
    <link rel="stylesheet" href="./misc/css/estilos.css">
    <link href="./misc/css/headers.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		body{
			/*margin-top: 20px;*/
		}
	</style>
</head>
<body>
	
<!-- Icono de Cambio de Color de la Pagina-->
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
          <a href="/Viajes_Mundiales/Sesion/secciones/index.php" 
          class="nav-link active" aria-current="page">Inicio</a>
        </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
               data-bs-toggle="dropdown" aria-expanded="false"> <h6> Opciones </h6> </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Viajes_Mundiales/Formulario/paginas/Precio.php">Precio</a></li>
              <li><a class="dropdown-item" href="/Viajes_Mundiales/Formulario/paginas/Proveedores.php">Proveedores</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/Viajes_Mundiales/Princial/Viajes.php">
                Pagina Principal</a></li>
          </ul>
        </li>
      </ul>
    </header>
  </div> 

  <!-- Barra Menu -->

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-blak bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/Viajes_Mundiales/Formulario/paginas/Viajes_Mundo.php"> Viajes Por El Mundo </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

           <li class="nav-item">
            <a href="/Viajes_Mundiales/Formulario/paginas/Preguntas.php" class="nav-link"> <h5> Preguntas Frecuentes </h5> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Viajes_Mundiales/Formulario/paginas/Galeria.php"> <h5> Galeria </h5> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Viajes_Mundiales/Formulario/paginas/lugares.php" tabindex="-1" aria-disabled="true"> <h5> lugares </h5> </a>
          </li>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
<!-- termina nav -->
	<!--fin salir-->
	<div class="container">