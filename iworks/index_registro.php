<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="css/test.css">
		<link rel="shortcut icon" href="images/logo_iwork.png">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/test.css">
	<title>Registro Empleados iWork</title>
</head>
<style>

    body {
       background: url(images/golf.jpg) no-repeat center center fixed; 
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
<body style="background-attachment: fixed" >


<form method="post" action="" >



  <fieldset>
    <legend  style="font-size: 18pt; color: #0000FF;"><b>Registro</b></legend>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Es administrador</b></label>
      <input type="checkbox" name="rol2" class="form-control" placeholder="Es administrador" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu Apellido Materno</b></label>
      <input type="text" name="ApellidoM" class="form-control" placeholder="Ingresa tu Apellido Materno" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu Apellido Paterno</b></label>
      <input type="text" name="ApellidoP" class="form-control" placeholder="Ingresa tu Apellido Paterno" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu edad</b></label>
      <input type="text" name="edad" class="form-control" placeholder="Ingresa tu edad" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu puesto de trabajo</b></label>
      <input type="text" name="puesto" class="form-control" placeholder="Ingresa tu puesto de trabajo" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu tiempo de inicio en la empresa con el formato 0000-00-00 00:00:00.000000 ejemplo 2019-10-15 11:20:00.000000</b></label>
      <input type="text" name="tiempo_empresa" class="form-control" placeholder="Ingresa tu tiempo de inicio en la empresa" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #ff9933;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
     
    </div>
   
    <input  class="btn btn-primary" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php

		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>