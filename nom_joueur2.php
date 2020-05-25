<?php
	require 'connection.php';

	$sql = "UPDATE info_scoreboard SET Joueur2='".$_POST['joueur2']."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>