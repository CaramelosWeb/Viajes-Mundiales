<?php

	include './models/users.php';
	$user  = new Users();

	//Si utiliza el filtro de busqueda
	if(isset($search)){
		$users = $user->getUsersBySearch($dataSearch);
	}else{
		//Trae todos los usuarios
		$dataSearch=NULL;
		$users =$user->getUsers();
	}

	$title="Listado de Usuarios";
	include 'toolbar.php';
?>

<div class="row">
	<div class="col text-center">
		<i class="material-icons" style="font-size: 100px;">
		<span class="material-symbols-outlined">supervised_user_circle</span> </i>
	</div>
</div>

<div class="row">
	<div class="col">
		<form action="./index.php" method="post" accept-charset="utf-8" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
    			<input type="text" class="form-control" name="dataSearch" autofocus required placeholder="Buscador" 
				value="<?= $dataSearch;  ?>">
  			</div>
  			<button type="submit" name="btnSearch" class="btn btn-primary mb-2" style="color: #000000;">Buscar</button>
		</form>
	</div>
</div>
<br>

<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover table-sm">
			<thead class="thead-dark">
				<th>Id</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Direccion</th>
				<th class="text-center">Numero_Domicilio</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Correo</th>
				<th class="text-center">Codigo_Postal</th>
				<th class="text-center">Presupuesto</th>
				<th class="text-center">Numero_Personas</th>
				<th class="text-center">Forma_Pago</th>
				<th class="text-center">Pasaporte</th>
				<th class="text-center">Inicio_Viaje</th>
				<th class="text-center">Fin_Viaje</th>
				<th class="text-center">Destino_Viaje</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</thead>

			<tbody>
				<?php

					if(count($users)>0){

						foreach ($users as $column =>$value) {
				?>

				 <tr id="row<?= $value['id']; ?>">
						<td><?= $value['id']; ?></td>

						<td><?= $value['Nombre']; ?></td>
						<td><?= $value['Direccion']; ?></td>
						<td><?= $value['Numero_Domicilio']; ?></td>
						<td><?= $value['Telefono']; ?></td>

						<td> <a href="./index.php?page=new_email&email=<?= $value['Correo']; ?>
						&folder=email&name=<?= $value['Nombre']; ?>
						&Direccion=<?= $value['Direccion']; ?>" 
						title="Enviar Correo Electrónico."><?= $value['Correo']; ?></a></td>

						<td><?= $value['Codigo_Postal']; ?></td>
						<td><?= $value['Presupuesto']; ?></td>
						<td><?= $value['Numero_Personas']; ?></td>
						<td><?= $value['Forma_Pago']; ?></td>
						<td><?= $value['Pasaporte']; ?></td>
						<td><?= $value['Inicio_Viaje']; ?></td>
						<td><?= $value['Fin_Viaje']; ?></td>
						<td><?= $value['Destino_Viaje']; ?></td>

						<td class="text-center">
						<a href="./index.php?page=edit&id=<?= $value['id'] ?>&folder=users" 
						title="Editar usuario: 

					   <?= $value['Nombre'].' '.$value['Direccion'].' '.$value['Numero_Domicilio'].' 
						'.$value['Telefono'].' '.$value['Correo'].' '.$value['Codigo_Postal'].' 
						'.$value['Presupuesto'].' '.$value['Numero_Personas'].' '.$value['Forma_Pago'].' 
						'.$value['Pasaporte'].' '.$value['Inicio_Viaje'].' '.$value['Fin_Viaje'].' 
						'.$value['Destino_Viaje'] ?>">

						<i class="material-icons btn_edit" style="font-size: 30px; color: #2EC727;">draw</i>

							 </a>
						    </td>

                    <td class="text-center">
                    <a href="#" onclick="objUser.deleteUser(<?= $value['id'] ?>)"
                      title="Borrar usuario: 

					  <?= $value['Nombre'].' '.$value['Direccion'].' '.$value['Numero_Domicilio'].' 
						'.$value['Telefono'].' '.$value['Correo'].' '.$value['Codigo_Postal'].' 
						'.$value['Presupuesto'].' '.$value['Numero_Personas'].' '.$value['Forma_Pago'].' 
						'.$value['Pasaporte'].' '.$value['Inicio_Viaje'].' '.$value['Fin_Viaje'].' 
						'.$value['Destino_Viaje'] ?>">

                         <i class="material-icons btn_delete" style="font-size: 30px; color: #FF0000;">delete_forever</i>

                        </a>
                      </td>
					</tr>
				<?php
						}
					}else{
				?>
					<tr>
						<td colspan="5">
							<div class="alert alert-info">
								No se encontraron usuarios.
							</div>
						</td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col">
			<div class="alert alert-success" id="msgSuccess" style="display: none;"></div>
			<div class="alert alert-danger" id="msgDanger" style="display: none;"></div>
		</div>
	</div>