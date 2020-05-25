<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET TimeOut_Joueur1=2;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	
	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>