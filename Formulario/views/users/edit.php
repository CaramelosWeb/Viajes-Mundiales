<?php

  include './models/users.php';
  $title="Listado de Usuarios";

  $user                   = new Users();
  $id                     = isset($_GET['id'])?$_GET['id']:null;
  $users                  = $user->getUserById($id);

  $Nombre                 = '';
  $Direccion              = '';
  $Numero_Domicilio       = '';
  $Telefono               = '';
  $Correo                 = '';
  $Codigo_Postal          = '';
  $Presupuesto            = '';
  $Numero_Personas        = '';
  $Forma_Pago             = '';
  $Pasaporte             = '';
  $Inicio_Viaje           = '';
  $Fin_Viaje              = '';
  $Destino_Viaje          = '';

  if($users){
    $Nombre                =$users[0]['Nombre'];
    $Direccion             =$users[0]['Direccion'];
    $Numero_Domicilio      =$users[0]['Numero_Domicilio'];
    $Telefono              =$users[0]['Telefono'];
    $Correo                =$users[0]['Correo'];
    $Codigo_Postal         =$users[0]['Codigo_Postal'];
    $Presupuesto           =$users[0]['Presupuesto'];
    $Numero_Personas       =$users[0]['Numero_Personas'];
    $Forma_Pago            =$users[0]['Forma_Pago'];
    $Pasaporte             =$users[0]['Pasaporte'];
    $Inicio_Viaje          =$users[0]['Inicio_Viaje'];
    $Fin_Viaje             =$users[0]['Fin_Viaje'];
    $Destino_Viaje         =$users[0]['Destino_Viaje'];
  }

	include 'toolbar.php';
?>

<form action="./controllers/controller.php?folder=<?= $_GET['folder']; ?>" method="POST">
  <div class="row">
    <div class="col text-center">
      <i class="material-icons" style="font-size: 80px; color: #2EC727;">draw</i>
    </div>
  </div>

  <div class="row g-3">
  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingresa Tu Nombre" 
    autofocus required value="<?php echo $Nombre; ?>">
  </div>
</div>

<div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Ingresa Tu Direccion" 
    required value="<?php echo $Direccion; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Numero_Domicilio">Numero_Domicilio</label>
    <input type="text" class="form-control" id="Numero_Domicilio" name="Numero_Domicilio" placeholder="Ingresa Tu
    Numero De Domicilio" required value="<?php echo $Numero_Domicilio; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingresa Tu Telefono" 
    required value="<?php echo $Telefono; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Correo">Correo</label>
    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingresa Tu Correo Electronico" 
    required value="<?php echo $Correo; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Codigo_Postal">Codigo_Postal</label>
    <input type="text" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Ingresa Tu Codigo Postal" 
    required value="<?php echo $Codigo_Postal; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Presupuesto">Presupuesto</label>
    <input type="text" class="form-control" id="Presupuesto" name="Presupuesto" placeholder="Ingresa Tu Presupuesto 
De Viaje" required value="<?php echo $Presupuesto; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Numero_Personas">Numero_Personas</label>
    <input type="text" class="form-control" id="Numero_Personas" name="Numero_Personas" placeholder="Ingresa Cuantas 
Personas Viajaran" required value="<?php echo $Numero_Personas; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Forma_Pago">Forma_Pago</label>
    <input type="text" class="form-control" id="Forma_Pago" name="Forma_Pago" placeholder="Ingresa Tu Forma De Pago"
     required value="<?php echo $Forma_Pago; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Pasaporte">Pasaporte</label>
    <input type="text" class="form-control" id="Pasaporte" name="Pasaporte" placeholder="Ingresa Si Pose Pasaporte o No"
     required value="<?php echo $Pasaporte; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Inicio_Viaje">Inicio_Viaje</label>
    <input type="date" class="form-control" id="Inicio_Viaje" name="Inicio_Viaje" placeholder="Ingrese Cuando Quiere 
Iniciar El Viaje" 
    required value="<?php echo $Inicio_Viaje; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	<label for="Fin_Viaje">Fin_Viaje</label>
    <input type="date" class="form-control" id="Fin_Viaje" name="Fin_Viaje" placeholder="Ingrese Cuando Quiere 
Finalizar El Viaje" 
    required value="<?php echo $Fin_Viaje; ?>">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Destino_Viaje">Destino_Viaje</label>
    <input type="text" class="form-control" id="Destino_Viaje" name="Destino_Viaje" placeholder="Ingrese El Destino De Su Viaje"required value="<?php echo $Destino_Viaje; ?>">
  </div>
  </div>
  </div>

  <div class="form-group text-center">
    <br>
  	<input type="submit" name="edit" value="Editar" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
    
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				La informacion ha sido actualizada.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al editar la información, por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
  <input type="hidden" name="id" value="<?php echo $id ?>">
</form>