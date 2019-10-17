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
    <title>iWork</title>
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
	include("include/cabecera.php");
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
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
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
		<hr class="soft"/>
		<h4>Edición de empleados</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
				$Nombre=$row[8];
				$ApellidoM=$row[9];
				$ApellidoP=$row[10];
				$edad=$row[11];
				$puesto=$row[12];
				$tiempo_empresa=$row[13];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Empleado<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password Empleado<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo Empleado<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Nombre<br> <input type="text" name="Nombre" value="<?php echo $Nombre?>"><br>
				Apellido Materno<br> <input type="text" name="ApellidoM" value="<?php echo $ApellidoM?>"><br>
				Apellido Paterno<br> <input type="text" name="ApellidoP" value="<?php echo $ApellidoP?>"><br>
				edad<br> <input type="text" name="edad" value="<?php echo $edad?>"><br>
				puesto de trabajo<br> <input type="text" name="puesto" value="<?php echo $puesto?>"><br>
				tiempo en la empresa<br> <input type="text" name="tiempo_empresa" value="<?php echo $tiempo_empresa?>"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
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
<p>&copy; Hecho por Miguel Ruiz <br/><br/></p>
 </footer>
</div>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


