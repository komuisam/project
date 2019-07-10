
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<div >
<?php
		extract($_GET);
		require("../conect/connect_db.php");
$sql=("SELECT * FROM `publicaciones` WHERE id=$id");
		
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$titulo=$row[2];
		    	$texto=$row[3];
		    }	
			?>
			<form action="../model/ejetutareditarp.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				titulo<br> <input type="text" name="titulo" value="<?php echo $titulo?>"><br>
    <label for="comentario"></label>
    <textarea name="texto" id="comentario" rows="10" cols="50"><?php echo $texto?></textarea>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				<a href="index2.php">cancelar</a>
			</form>
		</div>


