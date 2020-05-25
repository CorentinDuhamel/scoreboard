<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET J2S3=J2S3-1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>