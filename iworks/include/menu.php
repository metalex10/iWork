<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav" style="margin-left:-16px">
			<li class=""><a href="index2.php">Principal</a></li>
	
		</ul>
		<ul class="nav" style="margin-left:-16px">
			<li class=""><a href="cambiar.php">Cambiar imagen de perfil</a></li>
	
		</ul>
		<ul class="nav" style="margin-left:-23px">
		<?php 
		if ($_SESSION['rol']==1)
		{
			echo "<li class=''><a href='index3.php'>Cambiar a modo administrador</a></li>";
		}
		elseif ($_SESSION['rol']==2)
		{
			echo "";
		}
		?> 
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		
		
		<ul class="nav pull-right" style="margin-left:-16px" color="#0000FF">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['Nombre'];?> <?php echo $_SESSION['ApellidoP'];?> <?php echo $_SESSION['ApellidoM'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Sesión </a></li>			 
		</ul>
		<ul class="nav pull-right" style="margin-left:-112px">
				
			<img src="/iworks/usuarios/<?php echo $_SESSION['user']; ?>.jpg" alt="">
	 
		</ul>
	  </div>
	</div>
  </div>
</div>
</html>