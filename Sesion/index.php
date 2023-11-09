 <?php
   session_start();
   if($_POST){

    $mensaje='Usuario o Contraseña Incorrectos';

    if($_POST['usuario']=='viajesweb' && $_POST['password']=='LosViajeros'){
      $_SESSION['usuario']=$_POST['usuario'];
     header('Location: secciones/index.php');

    }
   }
 ?>

<!doctype html>
<html lang="en">


 <!-- Reinicio del contandor de la BD
       ALTER TABLE cursos AUTO_INCREMENT=1;  -->

<head>
  <title> para poder conectar a localhost tienes 
    que poner el nombre de la carpeta principal en este caso 
  app es la carpeta principal </title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="./style.css" rel="stylesheet">
</head>

<body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-RFRc6vpi58TI4hqg8z7C5h75YYjWiFV/58H8BzuRRNMz3y3A7fN1UPuHtU2Ff" crossorigin="anonymous">
  
</head>
<body>

<div class="container">
  <center>
    <p class="display-2" style="color: #FF6C00">Agencia de Viajes Mundiales</p>
  </center>
</div>

<div class="container">

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

      <!-- Formulario de inicio de sesión -->
      <form action="" method="post">
        <div class="card">
          <div class="card-header">
            Inicio de Sesión
          </div>
          <div class="card-body">

            <?php if(isset($mensaje)){ ?>
              <div class="alert alert-danger" role="alert">
                <strong><?php echo $mensaje; ?></strong>
              </div>
            <?php } ?>

            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
              <small class="form-text text-muted">Escriba su usuario</small>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
              <small class="form-text text-muted">Escriba su Contraseña</small>
            </div>

            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<br> <br> <br>

<!-- Bibliotecas de JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>