<?php
	include 'toolbar.php';
?>
<form action="./controllers/controller.php?folder=<?= $_GET['folder']; ?>" method="POST">
  <div class="row">
    <div class="col text-center">
      <i class="material-icons" style="font-size: 100px;  color: #AE00FF;" >person_add</i>
    </div>
  </div>
<div class="row g-3">
  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label class="mx-2" for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingresa Tu Nombre" 
    autofocus required value="" >
  </div>
</div>

<div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label class="mx-2" for="Direccion">Direccion</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Ingresa Tu Direccion" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Numero_Domicilio">Numero_Domicilio</label>
    <input type="text" class="form-control" id="Numero_Domicilio" name="Numero_Domicilio" placeholder="Ingresa Tu
 Numero De Domicilio" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingresa Tu Telefono" 
    required value="" >
  </div>
  </div>
  
  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Correo">Correo</label>
    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingresa Tu Correo Electronico" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Codigo_Postal">Codigo_Postal</label>
    <input type="text" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Ingresa Tu Codigo Postal" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Presupuesto">Presupuesto</label>
    <input type="text" class="form-control" id="Presupuesto" name="Presupuesto" placeholder="Ingresa Tu Presupuesto 
De Viaje" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Numero_Personas">Numero_Personas</label>
    <input type="text" class="form-control" id="Numero_Personas" name="Numero_Personas" placeholder="Ingresa Cuantas 
Personas Viajaran" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Forma_Pago">Forma_Pago</label>
    <input type="text" class="form-control" id="Forma_Pago" name="Forma_Pago" placeholder="Ingresa Tu Forma De Pago" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="¿Pasaporte">¿Pasaporte</label>
    <input type="text" class="form-control" id="¿Pasaporte" name="¿Pasaporte" placeholder="Ingresa Si Pose Pasaporte o No" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Inicio_Viaje">Inicio_Viaje</label>
    <input type="date" class="form-control" id="Inicio_Viaje" name="Inicio_Viaje" placeholder="Inicio Del Pedido" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Fin_Viaje">Fin_Viaje</label>
    <input type="date" class="form-control" id="Fin_Viaje" name="Fin_Viaje" placeholder="Fin Del Viaje" 
    required value="" >
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group" style="color: #0000FF;">
  	 <label for="Destino_Viaje">Destino_Viaje</label>
    <input type="text" class="form-control" id="Destino_Viaje" name="Destino_Viaje" placeholder="Ingrese El Destino De Su Viaje" 
    required value="" >
  </div>
</div>
</div>

  <br>
  <div class="form-group text-center">
  	<input type="submit" name="create" value="Crear" class="btn btn-primary" style="color: #000000;">
  </div>

  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				El usuario ha sido creado.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al crear el usario, por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
</form>