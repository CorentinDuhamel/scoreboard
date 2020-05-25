<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET J2S5=J2S5+1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	
	$sql = "UPDATE info_scoreboard SET sponsor=0;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE score_rencontre SET AfficherScore=0;";
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

	$sql = "SELECT Joueur1, Joueur2, J1S5, J2S5 FROM info_scoreboard;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();
	$row = $resultset->fetch(PDO::FETCH_ASSOC);
	if(($row['J2S5'] >= 11) && ($row['J2S5'] >= $row['J1S5']+2)){
		$sql2 = "SELECT JoueurA, JoueurB, JoueurC, JoueurD, JoueurW, JoueurX, JoueurY, JoueurZ FROM info_match;";
		$resultset2 = $connexion->prepare($sql2);
		$resultset2->execute();
		$row2 = $resultset2->fetch(PDO::FETCH_ASSOC);

		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J2M1=J2M1+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M1 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M1'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J2M2=J2M2+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M2 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M2'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J2M3=J2M3+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M3 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M3'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J2M4=J2M4+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M4 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M4'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J2M5=J2M5+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M5 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M5'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J2M6=J2M6+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M6 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M6'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J2M7=J2M7+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M7 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M7'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J2M8=J2M8+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M8 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M8'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == "Double1") && ($row['Joueur2'] == "Double1")){
			$sql = "UPDATE score_rencontre SET J2M9=J2M9+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M9 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M9'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == "Double2") && ($row['Joueur2'] == "Double2")){
			$sql = "UPDATE score_rencontre SET J2M10=J2M10+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M10 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M10'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J2M11=J2M11+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M11 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M11'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J2M12=J2M12+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M12 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M12'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J2M13=J2M13+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M13 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M13'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J2M14=J2M14+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J2M14 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J2M14'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE2=ScoreE2+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
	}
	
	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>