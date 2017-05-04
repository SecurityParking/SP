<center>
<script type="text/javascript">
	function Iniciar_Sesion(){
		var document_user = $("#document_user").val();
		var password_user = $("#password_user").val();
		var accion = "cargar_Form";
		alert(accion);
			$.ajax({
				url:"?clase=login&metodo=query_login",
				type:"POST",
				data:{
					accion:accion,
					document_user:document_user,
					password_user : password_user
				},
				success: function(data){
					
	   		 	}
			});
	}
</script>
	<div class="navbar-inverse header_body" style="color: white; "><h1>Login</h1></div>
		<div id="body_container_login">
		<div id="jaja">
			<center><img src="assets/img/Logosp.png" class="img_user"></center>
			<form method="POST">
				<table style="transform: translateY(-30px);">
					<tr>
						<td><label for="document_user">Documento</label></td>
					</tr>
					<tr>
						<td><input type="text" id="document_user" name="document_user" class="box form-control"></td>
					</tr>
					<tr>
						<td><label for="password_user">Contraseña</label></td>
					</tr>
					<tr>
						<td><input type="password" id="password_user" name="password_user" class="box form-control"></td>
					</tr>

					<tr>
						<td><input type="checkbox" id="recuerdo" ><label for="recuerdo">Recordar Contraseña</label></td>
					</tr>
					<tr>
						<td><center><a href="?clase=login&metodo=login_admin">Olvide mi contraseña</a></center></td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr>
						<td><center><button class="btn btn-primary" onclick="Iniciar_Sesion();">Entrar</button>&nbsp;&nbsp;<button class="btn btn-primary"">Registrar</button></center></td>
					</tr>
				</table>
			</form>
		</div>
		</div>
</center>
