<?php
	session_start();
	$_SESSION['adress']=$_POST["adress"];
	header('Location: http://'.$adress.':45000/direction_portable.php');
?>