<div class="motrar">
<h2>publicaciones</h2>
<?php
if (empty($_SESSION['id'])||($_SESSION['rol']==1)) {
	$sql=("SELECT * FROM `publicaciones`ORDER BY `id` DESC");
}else{
	$x= $_SESSION['id'];
			$sql=("SELECT * FROM `publicaciones` WHERE `usuario_id` = $x ORDER BY `id` DESC");
}	
				require("conect/connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
			?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				 		$sql2="SELECT * FROM login WHERE id=$arreglo[1]";

					$ressql=mysqli_query($mysqli,$sql2);
					while ($row=mysqli_fetch_row ($ressql)){
		    	$d=$row[0];
		    	$user=$row[1];
		    }
				  	echo "<tr class='success'>";
				  	echo "<td>titulo: $arreglo[2]"." usuario :$user $arreglo[4]</td>";
				    	echo "<tr></tr>";
				    	echo "<td >$arreglo[3]</td>";
				    	if (!empty($_SESSION['id'])) {
				    		if (($_SESSION['rol']==2)||($_SESSION['rol']==1)) {
				    			echo "<tr></tr>";
				    	echo "<td><button><a href='view/editarp.php?id=$arreglo[0]'>editar</a></button> 
				    	<button><a href='index2.php? id=$arreglo[0]&idborrar=3'>borrar</a></button> </td>";
				    }}
				}	
					extract($_GET);
					if(@$idborrar==3){ 
					$sqlborrar="DELETE FROM publicaciones WHERE id=$id";
					$resborrar=mysqli_query($mysqli,$sqlborrar);
					echo '<script>("publicacion Eliminada")</script> ';
					echo "<script>location.href='index2.php'</script>";
					}	
			?>
		</div>