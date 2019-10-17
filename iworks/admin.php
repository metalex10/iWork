<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iWork Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Miguel Ruiz">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="images/logo_iwork.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">

<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera1.php");
	?>
</div>
</header>


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
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

<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		

		<h2> Administración de empleados registrados</h2>	
		<div class="well well-small">
		<h3>Agregar un usuario </h3>
		<?php
		echo  "<a href=\"index_registro.php\"><img src=\"images/agregar.png\"  /></a>";
		$_SESSION['rol']==1;
		?>
		<h3>Cambiar a modo usuario </h3>
		<?php
		echo  "<a href=\"index2.php\"><img src=\"images/actualizar.gif\"  /></a>";
		
		?>
		<hr class="soft"/>
		<h4>Tabla de empleados</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");
	
				$query=mysqli_query($mysqli,$sql);
				$sql2=("SELECT * FROM cambios");
	
				$query2=mysqli_query($mysqli,$sql2);
				
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Nombre</td>";
						echo "<td>Edad</td>";
						echo "<td>Correo</td>";
						echo "<td>Tiempo en la empresa</td>";
						echo "<td>Salario</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[8] $arreglo[9] $arreglo[10]</td>";
				    	echo "<td>$arreglo[11]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[13]</td>";
						echo "<td>$arreglo[14]</td>";
						if($_SESSION['id']==$arreglo[6]){
				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						}
						else
						{
							echo "<td></td>";
							echo "<td></td>";
						}
						
						
							
							
						
						
						
						
					
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
		
		
		
		<div class="span8">
		<h4>Historial de Puesto de Trabajo</h4>
		
			<?php 
			
			echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Puesto Anterior</td>";
						echo "<td>Puesto Actual</td>";
					echo "</tr>";
				while($arreglo2=mysqli_fetch_array($query2)){
				  	echo "<tr class='success'>";
						echo "<td>$arreglo2[0]</td>";
				    	echo "<td>$arreglo2[2]</td>";
				    	echo "<td>$arreglo2[3]</td>";
						
				}
				
			  			  
			  ?>
		</div>	
		</div>	
		</div>	
		<br/>

		
		
		</div>

		


		


</div>

	</div>
</div>

<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
 </footer>
</div>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>