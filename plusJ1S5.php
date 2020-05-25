<?php
	require 'connection.php';
	$sql = "UPDATE info_scoreboard SET J1S5=J1S5+1;";
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
	if(($row['J1S5'] >= 11) && ($row['J1S5'] >= $row['J2S5']+2)){
		$sql2 = "SELECT JoueurA, JoueurB, JoueurC, JoueurD, JoueurW, JoueurX, JoueurY, JoueurZ FROM info_match;";
		$resultset2 = $connexion->prepare($sql2);
		$resultset2->execute();
		$row2 = $resultset2->fetch(PDO::FETCH_ASSOC);

		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J1M1=J1M1+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M1 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M1'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J1M2=J1M2+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M2 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M2'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J1M3=J1M3+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M3 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M3'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J1M4=J1M4+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M4 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M4'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J1M5=J1M5+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M5 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M5'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J1M6=J1M6+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M6 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M6'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J1M7=J1M7+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M7 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M7'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J1M8=J1M8+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M8 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M8'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == "Double1") && ($row['Joueur2'] == "Double1")){
			$sql = "UPDATE score_rencontre SET J1M9=J1M9+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M9 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M9'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == "Double2") && ($row['Joueur2'] == "Double2")){
			$sql = "UPDATE score_rencontre SET J1M10=J1M10+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M10 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M10'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurA']) && ($row['Joueur2'] == $row2['JoueurY'])){
			$sql = "UPDATE score_rencontre SET J1M11=J1M11+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M11 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M11'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurC']) && ($row['Joueur2'] == $row2['JoueurW'])){
			$sql = "UPDATE score_rencontre SET J1M12=J1M12+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M12 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M12'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurD']) && ($row['Joueur2'] == $row2['JoueurX'])){
			$sql = "UPDATE score_rencontre SET J1M13=J1M13+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M13 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M13'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
		if(($row['Joueur1'] == $row2['JoueurB']) && ($row['Joueur2'] == $row2['JoueurZ'])){
			$sql = "UPDATE score_rencontre SET J1M14=J1M14+1;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();

			$sql = "SELECT J1M14 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			if ($row['J1M14'] == 3){
				$sql = "UPDATE info_scoreboard SET ScoreE1=ScoreE1+1;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
			}
		}
	}

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>