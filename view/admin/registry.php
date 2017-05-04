<script type="text/javascript">
	function registry_User(){
		var Nombre_User = $("#Nombre_User").val();
		var Birth_date_User = $("#Birth_date_User").val();
		var Email_User = $("#Email_User").val();
		var Telephone_User = $("#Telephone_User").val();
		var Gender_User = $("#Gender_User").val();
		var Password_User = $("#Password_User").val();
		var Surnames_User = $("#Surnames_User").val();
		var File_User = $("#File_User").val();
		var accion = "registry_User";
			$.ajax({
				url:"?clase=login&metodo=registry_User",
				type:"POST",
				data:{
					accion:accion,
					Nombre_User:Nombre_User,
					Surnames_User:Surnames_User,
					Password_User:Password_User,
					Birth_date_User:Birth_date_User,
					Gender_User:Gender_User,
					Telephone_User:Telephone_User,
					Email_User:Email_User,
					user_login:user_login,
					user_login:user_login,
					File_User : File_User
				},
				success: function(data){
	       			alert(data);
	   		 	}
			});
	}
</script>

<center><div class="navbar-inverse header_body" style="color: white; "><h1>Registrate</h1></div>
<div id="body_container">
<form>
	<table >
	<tr>
		<td>
		<label for="Nombre_User" class="form_label">Nombres</label>
		</td>
		<td>
			<input type="text" id="Nombre_User" name="Nombre_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="Surnames_User" class="form_label">Apellidos</label>
		</td>
		<td>
			<input type="password" id="Surnames_User" name="Surnames_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="Birth_date_User" class="form_label">Fecha Nacimiento</label>
		</td>
		<td>
			<input type="date" id="Birth_date_User" name="Birth_date_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="Email_User" class="form_label">Correo</label>
		</td>
		<td>
			<input type="text" id="Email_User" name="Email_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="Telephone_User" class="form_label">Telefono</label>
		</td>
		<td>
			<input type="text" id="Telephone_User" name="Telephone_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="Gender_User" class="form_label">Genero</label>
		</td>
		<td>
			<select id="Gender_User" name="Gender_User" class="form-control">
				<option value="R">Selecione</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
				<option value="0">Otro</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
		<label for="Password_User" class="form_label">Contraseña</label>
		</td>
		<td>
			<input type="password" id="Password_User" name="Password_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="File_User" class="form_label">N° Ficha</label>
		</td>
		<td>
			<input type="text" id="File_User" name="File_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2">
		<center>
			<button class="btn btn-primary" onclick="registry_User();">Registrar</button>&nbsp;&nbsp;
			<button class="btn btn-primary">Limpiar</button>
		</center></td>
	</tr>
</table>
</form>	
</div>
</center>