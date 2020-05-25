<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET TimeOut_Joueur1=1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET sponsor=0;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET AfficherScore=0";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>