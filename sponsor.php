<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET sponsor=1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "SELECT TimeOut_Joueur1, TimeOut_Joueur2 FROM info_scoreboard;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$row = $resultset->fetch(PDO::FETCH_ASSOC);

	if($row['TimeOut_Joueur1']){
		$sql = "UPDATE info_scoreboard SET TimeOut_Joueur1=2;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}
	if($row['TimeOut_Joueur2']){
		$sql = "UPDATE info_scoreboard SET TimeOut_Joueur2=2;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}

	$sql = "UPDATE score_rencontre SET AfficherScore=0";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>