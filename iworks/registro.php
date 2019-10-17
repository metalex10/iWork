
<?php
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	//$rol2=$_POST['rol2'];
	$ApellidoM=$_POST['ApellidoM'];
	$ApellidoP=$_POST['ApellidoP'];
	$edad=$_POST['edad'];
	$puesto=$_POST['puesto'];
	$tiempo_empresa=$_POST['tiempo_empresa'];
	//$edit2 = @!$_SESSION['id'];
     //       if(isset($_POST['rol2'])){
     //           $rol2 = 1;
      //      }
      //      else{
      //          $rol2=2;
       //     }

	require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un Empleado, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$mail','','2','','','','','','','','','')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}

			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>