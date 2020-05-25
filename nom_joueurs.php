<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET Joueur1='".$_POST['joueurcache1']."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET Joueur2='".$_POST['joueurcache2']."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET Service=0, J1S1=0, J2S1=0, J1S2=0, J2S2=0, J1S3=0, J2S3=0, J1S4=0, J2S4=0, J1S5=0, J2S5=0, TimeOut_Joueur1=0, TimeOut_Joueur2=0 ;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>