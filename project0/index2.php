<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
  <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/> --> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Proyecto</title>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
	<header class="header">
		<div class="row">
			<?php
			include("include/cabecera.php");
			?>
		</div>
	</header>
<?php
include("include/menu.php");
?>
<!-- / publicar -->
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table >
		<legend  style="font-size: 18pt"><b>publicacion</b></legend>
	  <td> Título:
	    <label for="titulo"></label>
	  <td><input type="text" name="titulo" id="titulo" rows="10" cols="50"></td>
  	  </tr>
<tr><td>texto:<label for="comentario"></label></td>
    <td><textarea name="comentario" id="comentario" rows="10" cols="50" value="<?php echo "publicacion"?>"></textarea></td>
    </tr>
		 <tr>
		<td >  
	    <input type="submit" name="submit" id="btn_enviar" value="Enviar"></td></tr>
	  	<td>
	   	</tr>
  </table>
  </form> <!-- /fin publicar -->
	<?php
		if(isset($_POST['submit'])){
			require("model/publicar.php");
		}
	?>
	<?php
		include("include/mostrar.php");
	?>
  </body>
</html>