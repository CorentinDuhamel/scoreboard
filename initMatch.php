<?php
	require 'connection.php';
	$sql = "UPDATE info_match SET JoueurW='".$_POST["JoueurW"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurX='".$_POST["JoueurX"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurY='".$_POST["JoueurY"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurZ='".$_POST["JoueurZ"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurA='".$_POST["JoueurA"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurB='".$_POST["JoueurB"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurC='".$_POST["JoueurC"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET JoueurD='".$_POST["JoueurD"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurA=".$_POST["ClassementJoueurA"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurB=".$_POST["ClassementJoueurB"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurC=".$_POST["ClassementJoueurC"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurD=".$_POST["ClassementJoueurD"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurW=".$_POST["ClassementJoueurW"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurX=".$_POST["ClassementJoueurX"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurY=".$_POST["ClassementJoueurY"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET ClassementJoueurZ=".$_POST["ClassementJoueurZ"].";";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match1='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match2='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match3='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match4='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match5='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match6='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match7='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match8='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match9='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match10='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match11='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match12='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match13='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match14='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET Equipe1='".$_POST["Equipe1"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET Equipe2='".$_POST["Equipe2"]."';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET ScoreE1='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET ScoreE2='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M1='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M1='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M2='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M2='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M3='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M3='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M4='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M4='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M5='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M5='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M6='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M6='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M7='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M7='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M8='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M8='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M9='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M9='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M10='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M10='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M11='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M11='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M12='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M12='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M13='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M13='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J1M14='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET J2M14='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET AfficherScore='0';";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_scoreboard SET J1S1='0', J1S1='0', J2S1='0', J1S2='0', J2S2='0', J1S3='0', J2S3='0', J1S4='0',
	J2S4='0', J1S5='0', J2S5='0' ;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>