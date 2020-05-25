<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET J1S4=J1S4-1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>