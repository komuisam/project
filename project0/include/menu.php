<!DOCTYPE html>
 <link rel="stylesheet" type="text/css" href="../css/estilos.css">
 <div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="../index2.php">Principal</a></li>
			<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				
				<li><a href="view/editar_usuario.php"> editar usuario </a></li>	
			  <li><a href="conect/desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>

<!-- 

    <header>
        <nav class="nav">
            <ul>
                <li class=""><a href="index2.php">Principal</a></li>
                
                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?>
               	<li><a href="editar_usuario.php"> editar usuario </a></li>	
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>	
            
            </ul>
        </nav>

        <div>
            
        </div>
    </header>-->
</html>