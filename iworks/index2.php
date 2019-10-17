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
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="images/logo_iwork.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <style>
.menu12 {
  float: right;
}
    body {
       background: url(images/10.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
    }
    h1  {
      color: blue;
    }
    p  {
      color: red;
    }
   </style>
<body data-offset="40"  style="background-attachment: fixed">

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
<?php

include("connect_db.php");

$q = "SELECT * FROM login WHERE id = 7";

// get the records from the database
		if ($result = $mysqli->query($q))
		{
			// display records if there are records to display
			if ($result->num_rows > 0)
			{
				// fetch the results
				while ($row = $result->fetch_object())
				{
					$name = $row->Nombre;
					$ApellidoP = $row->ApellidoP;
					$ApellidoM = $row->ApellidoM;
					
				}

			}
			else
			{
				echo "No results to display!<br><hr><br>";
			}

		}
		else
		{ // show an error if there is an issue with the database query
			echo "Error: " . $mysqli->error;
		}	
			

?>


<div id="myCarousel" class="carousel slide homCar">
	<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
	  <div class="item active">
		<img src="images/pascomputacion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
		<div class="carousel-caption">
			  <h4>Empleado del mes</h4>
			  <p>
			   El empleado del mes fue <?php echo $name ,' ',$ApellidoP,' ', $ApellidoM?> 
			  </p>
		</div>
	  </div>
			  <div class="item">
				<img src="images/pasmes.jpg" alt="#" style="min-height:250px; min-width:100%"/>
				<div class="carousel-caption">
					  <h4>Informacion del Mes</h4>
					  <p>
					  Este mes se se celebra el dia de la raza.
					  </p>
				</div>
				
			  </div>
			  <div class="item">
			<img src="images/pasemp.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Informacion de la Empresa</h4>
				  <p>
				    el dia 25 de octubre se realizara un simulacro
				  </p>
			</div>
		  </div>
		</div>

					
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>

					<div id="cont_e6fbce9c0f4454ae8a55713402f08bf2" class="menu12" >
					<a target="_blank" ><img src="https://w.bookcdn.com/weather/picture/3_18479_1_4_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=583&anc_id=44563"  alt="booked.net"/></a>
					</div>
	</div>
	</style>
  </body>
</html>