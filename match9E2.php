<?php
	require 'connection.php';
	$sql = "UPDATE info_match SET Match9=2;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1-1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>