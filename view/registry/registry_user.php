<script type="text/javascript">
	function registry_User(){
		var name_user = $("#name_user").val();
		var document_user = $("#document_user").val();
		var surnames_User = $("#surnames_User").val();
		var birth_date_User = $("#birth_date_User").val();
		var Email_User = $("#Email_User").val();
		var telephone_User = $("#telephone_User").val();
		var gender_User = $("#gender_User").val();
		var password_User = $("#password_User").val();
		var file_User = $("#file_User").val();
		alert(document_user);
		var accion = "registry_User";
			$.ajax({
				url:"?clase=registry&metodo=process_registry",
				type:"POST",
				data:{
					accion:accion,
					document_user:document_user,
					name_user:name_user,
					surnames_User:surnames_User,
					birth_date_User:birth_date_User,
					Email_User:Email_User,
					telephone_User:telephone_User,
					gender_User:gender_User,
					password_User:password_User,
					file_User : file_User
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
		<label for="document_user" class="form_label">Documento</label>
		</td>
		<td>
			<input type="text" id="document_user" name="document_user" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="name_user" class="form_label">Nombres</label>
		</td>
		<td>
			<input type="text" id="name_user" name="name_user" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="surnames_User" class="form_label">Apellidos</label>
		</td>
		<td>
			<input type="text" id="surnames_User" name="surnames_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="birth_date_User" class="form_label">Fecha Nacimiento</label>
		</td>
		<td>
			<input type="date" id="birth_date_User" name="birth_date_User" class="form-control">
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
		<label for="telephone_User" class="form_label">Telefono</label>
		</td>
		<td>
			<input type="text" id="telephone_User" name="telephone_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="gender_User" class="form_label">Genero</label>
		</td>
		<td>
			<select id="gender_User" name="gender_User" class="form-control">
				<option value="R">Selecione</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
				<option value="0">Otro</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
		<label for="password_User" class="form_label">Contraseña</label>
		</td>
		<td>
			<input type="password" id="password_User" name="password_User" class="form-control">
		</td>
	</tr>
	<tr>
		<td>
		<label for="file_User" class="form_label">N° Ficha</label>
		</td>
		<td>
			<input type="text" id="file_User" name="file_User" class="form-control">
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
