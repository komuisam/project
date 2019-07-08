<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$apellido=$_POST['apellido'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$pais=$_POST['pais'];
	require("conect/connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$apellido','$pass','$mail','','$pais','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>