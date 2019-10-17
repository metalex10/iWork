
<?php

session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['Nombre']=$f2['Nombre'];
			$_SESSION['rol']=$f2['rol'];
			$_SESSION['ApellidoM']=$f2['ApellidoM'];
			$_SESSION['ApellidoP']=$f2['ApellidoP'];
			$_SESSION['salario']=$f2['salario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['Nombre']=$f['Nombre'];
			$_SESSION['rol']=$f['rol'];
			$_SESSION['edit']=$f['edit'];
			$_SESSION['ApellidoM']=$f['ApellidoM'];
			$_SESSION['ApellidoP']=$f['ApellidoP'];
			$_SESSION['salario']=$f['salario'];

			header("Location: index3.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE Empleado NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>