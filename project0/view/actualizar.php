<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


       <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("../include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="../admin.php">principal</a></li>	 
			</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="../conect/desconectar.php"> Cerrar Cesión </a></li>	 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">		
		<?php
		extract($_GET);
		require("../conect/connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$apellido=$row[2];
		    	$pass=$row[3];
		    	$email=$row[4];
		    	$adpass=$row[5];
		    	$pais=$row[6];
		    }
		?>
		<form action="../model/ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				apellido<br> <input type="text" name="apellido" value="<?php echo $apellido?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				pais<br> <select type="text" name="pais" value="$pais?>"/>
				<option><?php echo $pais?></option>
				<option>Venezuela</option>
				<option>Colombia</option>
				<option>España</option>
			</select><p>				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				<a href="../admin.php">cancelar</a>
			</form>
		<div class="span8">		
		</div>
		</div>	
		<br/>
		</div>
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>
	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">
<hr class="soften"/>
<p>&copy; Copyright komuisam<br/><br/></p>
 </footer>
</div><!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	</style>
  </body>
</html>


