<?php 
 session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:../index.php');
  }
?>

<!doctype html>
<html lang="en">

<head>
  <title> Agencia De Viajes Mundiales </title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <!-- Barra de navegacion -->
<nav class="navbar navbar-expand">
  <div class="nav navbar-nav">
    <a class="nav-item nav-link" href="cerrar.php" style="background-color: #FF0000; color: #FFFFFF;">Cerrar Sesión</a>
  </div>
</nav>

        
        <!--Conexion al Pie-->
        <div class="container">
      <div class="row">
       <div class="col-12">
        <div class="row"> 