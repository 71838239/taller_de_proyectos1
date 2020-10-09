<!DOCTYPE html>
<html>
  	<head>
	    <meta charset="UTF-8">
	    <title>Mesa de Partes | Dashboard</title>
	    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	    <!-- Latest compiled and minified CSS -->
		<!-- Bootstrap 3.3.4 -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<link rel="stylesheet" href="estilos.css">
    	<!-- Theme style -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" rel="stylesheet" type="text/css" />
    	<link href="http://www.redpescaindnr.gob.pe/assets/templates/dist/css/skins/skin-blue-light.min.css" rel="stylesheet" type="text/css" />
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	</head>
  	<body>
  		<div class="wrapper">
	  		<!-- Main Header -->
	      	<nav class="header navbar navbar-expand bg-dark topbar mb-4 static-top shadow" role="navigation">
		      	<!-- Sidebar toggle button-->
		        <?php include("header/header.php");?>
		    </nav>
	      	
			<div class="row">
				<div class="col-md-12">
					<a href="index.php?view=newuser" class="btn btn-default">Nuevo Usuario</a>
					<h1>Lista de Usuarios</h1>
					<br>

					<table class="table table-bordered table-hover">
					<thead>
						<th>DNI</th>
						<th>Nombres</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Dirección</th>
						<th>Activo</th>
						<th>Rol</th>
						<th></th>
					</thead>
					<tr>
						<td>71838239</td>
						<td>Josef</td>
						<td>Gomez</td>
						<td>Gutierrez</td>
						<td>987562412</td>
						<td>718382396@continental.edu.pe</td>
						<td>Calle N°123</td>
						<td>
							<?php if($user->is_active):?>
								<i class="glyphicon glyphicon-ok"></i>
							<?php endif; ?>
						</td>
						<td>
							<?php if($user->is_admin):?>
								<i class="glyphicon glyphicon-ok"></i>
							<?php endif; ?>
						</td>
						<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
						<td style="width:30px;"><a href="index.php?view=deleteuser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Eliminar</a></td>
					</tr>
				
				</div>
			</div>
		</div><!-- ./wrapper -->
	</body>
