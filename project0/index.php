<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Proyecto academias</title>
</head>
<body background= "images/faputa0.png" style="background-attachment: fixed" >
	<center><div align="left"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">
	<table border="0" align="left" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="controller/validar.php" method="post">

			<table border="0">

			<tr><td><label style="font-size: 14pt"><b>  Correo: </b></label></td>
				<td width=80> <input  style="border-radius:15px;" type="text" name="mail"placeholder=" Correo" ></td></tr>
			<tr><td><label style="font-size: 14pt"><b>  Contraseña: </b></label></td>
				<td witdh=80><input style="border-radius:15px;" type="password" name="pass" placeholder=" contraseña"></td></tr>
			<tr><td></td>
				<td width=80 align=left><input type="submit" value="Aceptar"></td>
				</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>  Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder=" Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu apellido</b></label>
      <input type="text" name="apellido" class="form-control" placeholder=" Ingresa tu apellido" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder=" Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder=" Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder=" repite contraseña"/>
        <div class="form-group">
        	  <label style="font-size: 14pt"><b>Seleccione pais</b></label>
        	<select name=pais required placeholder=" Seleccione pais"/>

				<option>Venezuela</option>
				<option>Venezuela</option>
				<option>Colombia</option>
				<option>España</option>
			</select><p>
    </div>
     
    </div>
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value=" Registrarse"/>
  </fieldset>
</form>
</div  align="right">
<?php
		if(isset($_POST['submit'])){
			require("model/registro.php");
		}
	?>
<!--Fin formulario registro -->
		


		</td>
		</tr>
		</table>
		</div></center></div></center>
<?php
	require("conect/connect_db.php");
		include("include/mostrar.php");
	?>
	
</body>
</html>