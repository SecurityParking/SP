<div class="navbar-inverse header_body" style="color: white; ">
  <center><h1>Administrador-Consultas-Registros</h1></center>    
</div>
<br><br>
<div class="container-fluid">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>Registros</h3>
			</div>
			<div class="body">
				<table class="table table-striped">
					<tr>
						<th>#</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Documento</th>
						<th>Correo</th>
						<th>Telefono</th>
						<th>Vehiculo</th>
						<th>Ver Más</th>
						<th>Eliminar</th>
					</tr>

				<?php
				for ($i=1; $i < 50; $i++) { 
					?>
					<tr>
						<td><h4><?php echo $i; ?></h4></td>
						<td>*********</td>
						<td>*********</td>
						<td>*********</td>
						<td>*********</td>
						<td>*********</td>
						<td>*********</td>
						<td><center><button class="btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></center></span></button></td>
						<td><center><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></center></span></button></td>
					</tr>
					<?php

				}
				?>
					
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		
	</div>
</div>