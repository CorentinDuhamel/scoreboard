<?php
	require 'connection.php';
	$sql = "UPDATE score_rencontre SET J1M3=J1M3+1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "SELECT J1M3 FROM score_rencontre;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$row = $resultset->fetch(PDO::FETCH_ASSOC);

	if($row["J1M3"] == 3){
		$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}
	else if($row["J1M3"] > 3){
		$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1-1;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$sql = "UPDATE score_rencontre SET J1M3=0;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>