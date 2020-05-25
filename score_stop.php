<?php
	require 'connection.php';
	$sql = "UPDATE score_rencontre SET AfficherScore=0";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>