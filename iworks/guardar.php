<?php
session_start();
require("connect_db.php");
$sql=mysqli_query($mysqli,"SELECT * FROM login");
	$filename = $_FILES["archivo"]["tmp_name"];

    $destination = $_SERVER['DOCUMENT_ROOT'].'/iworks/usuarios/' . $_SESSION['user']. '.jpg'; 
    @move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    @!$_SESSION['id'] = $destination;

   header("Location:index2.php");

	?>