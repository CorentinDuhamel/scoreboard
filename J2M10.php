<?php
	require 'connection.php';
	$sql = "UPDATE score_rencontre SET J2M10=J2M10+1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "SELECT J2M10 FROM score_rencontre;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$row = $resultset->fetch(PDO::FETCH_ASSOC);

	if($row["J2M10"] == 3){
		$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}
	else if($row["J2M10"] > 3){
		$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2-1;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$sql = "UPDATE score_rencontre SET J2M10=0;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
	}

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>