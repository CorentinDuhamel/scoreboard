<?php
	require 'connection.php';
	$sql = "UPDATE info_match SET Match4=0;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>