<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1" />
	<script type="text/javascript">	
	</script>
</head>
<body onload='afficher_set(); service()'>
	<?php 
		require 'connection.php';

		echo "<img id='sponsor' src='sponsor.png' class='sponsor'>";
		echo "<div id='score' class='score'>";
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
		echo "<img class='logoScore' src='logo.png'>";
		echo "<img class='logoScore2' src='logoBCL.png'>";
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
		//////////////////////////////// CHANGER LOGO ////////////////////////////////
			$sql = "SELECT J1M1, J2M1, J1M2, J2M2, J1M3, J2M3, J1M4, J2M4, J1M5, J2M5, J1M6, J2M6, J1M7, J2M7, J1M8, J2M8, J1M9, J2M9, J1M10, J2M10, J1M11, J2M11, J1M12, J2M12, J1M13, J2M13, J1M14, J2M14 FROM score_rencontre;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
		
			echo "<div class='scorej1'>";
			for($match=1; $match<=14; $match++){
				echo $row['J1M'.$match]."</br>";
			}
			echo "</div>";

			echo "<div class='scorej2'>";
			for($match=1; $match<=14; $match++){
				echo $row['J2M'.$match]."</br>";
			}
			echo "</div>";

			echo "<div class='score_tiret'>";
			for($match=1; $match<=14; $match++){
				echo "-</br>";
			}
			echo "</div>";

			$sql = "SELECT JoueurW, JoueurX, JoueurY, JoueurZ, JoueurA, JoueurB, JoueurC, JoueurD, ClassementJoueurW, ClassementJoueurX, ClassementJoueurY, ClassementJoueurZ, ClassementJoueurA, ClassementJoueurB, ClassementJoueurC, ClassementJoueurD FROM info_match;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row2 = $resultset->fetch(PDO::FETCH_ASSOC);
			
			echo "<div class='j1'>";
				echo $row2['ClassementJoueurA']." pts  - ".$row2['JoueurA']."</br>";
				echo $row2['ClassementJoueurB']." pts  - ".$row2['JoueurB']."</br>";
				echo $row2['ClassementJoueurC']." pts  - ".$row2['JoueurC']."</br>";
				echo $row2['ClassementJoueurD']." pts  - ".$row2['JoueurD']."</br>";
				echo $row2['JoueurA']."</br>";
				echo $row2['JoueurB']."</br>";
				echo $row2['JoueurD']."</br>";
				echo $row2['JoueurC']."</br>";
				echo "Double 1</br>";
				echo "Double 2</br>";
				echo $row2['JoueurA']."</br>";
				echo $row2['JoueurC']."</br>";
				echo $row2['JoueurD']."</br>";
				echo $row2['JoueurB']."</br>";
			echo "</div>";

			echo "<div class='j2'>";
				echo $row2['JoueurW']." - ".$row2['ClassementJoueurW']." pts</br>";
				echo $row2['JoueurX']." - ".$row2['ClassementJoueurX']." pts</br>";
				echo $row2['JoueurY']." - ".$row2['ClassementJoueurY']." pts</br>";
				echo $row2['JoueurZ']." - ".$row2['ClassementJoueurZ']." pts</br>";
				echo $row2['JoueurX']."</br>";
				echo $row2['JoueurW']."</br>";
				echo $row2['JoueurY']."</br>";
				echo $row2['JoueurZ']."</br>";
				echo "Double 1</br>";
				echo "Double 2</br>";
				echo $row2['JoueurY']."</br>";
				echo $row2['JoueurW']."</br>";
				echo $row2['JoueurX']."</br>";
				echo $row2['JoueurZ']."</br>";
			echo "</div>";

			$sql = "SELECT Equipe1, Equipe2, ScoreE1, ScoreE2 FROM info_scoreboard;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row3 = $resultset->fetch(PDO::FETCH_ASSOC);
			echo "<div class='equipe1'>";
			echo $row3['Equipe1'];
			echo "</div>";
			echo "<div class='equipe2'>";
			echo $row3['Equipe2'];
			echo "</div>";
			echo "<div class='Scoreequipes'>";
			echo $row3['ScoreE1']." - ".$row3['ScoreE2'];
			echo "</div>";
			
		
	
		echo "</div>";

		for($joueur=1; $joueur<=2; $joueur++){
			echo "<div id='Joueur".$joueur."' class='Joueur".$joueur."'>";
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			if ($joueur == 1){
				echo "<img src='logo.png' class='logoBCL'>";
			} else {
				echo "<img src='logoBCL.png' class='logoBCL'>";
			}
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			//////////////////////////////// CHANGER LOGO ////////////////////////////////
			echo "<img src='score.png' class='barre'>";
			echo "<div id='ScoreE".$joueur."' class='scoreEquipe'>";
			$sql = "SELECT ScoreE".$joueur." FROM info_scoreboard;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			echo $row['ScoreE'.$joueur];
			echo "</div>";


			echo "<div id='nomJ".$joueur."' class='nom'>";
			
			$sql = "SELECT Joueur".$joueur." FROM info_scoreboard;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);
			echo $row['Joueur'.$joueur];
			echo "</div>";
			echo "<div id='barreservice".$joueur."' class='barreservice'>";
			echo "</div>";
			for($set=1; $set<=5; $set++){
				echo "<div id='pointJ".$joueur."S".$set."' class='set pointJ".$joueur."S".$set."'>";
				$sql2 = "SELECT J".$joueur."S".$set." FROM info_scoreboard;";
				$resultset = $connexion->prepare($sql2);
				$resultset->execute();
				$row2 = $resultset->fetch(PDO::FETCH_ASSOC);
				echo $row2['J'.$joueur.'S'.$set];
				echo "</div>";
			}

			echo "<div>";
		}
		

		$sql = "SELECT Joueur1, Joueur2 FROM info_scoreboard;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);

		echo "</div></div></div></div><div id='temps_mort_demande1' class='temps_mort_demande'><img class='ruban' src='ruban.png'>Temps mort demandé par ".$row['Joueur1']."</div>";
		echo "<div id='temps_mort_demande2' class='temps_mort_demande'><img class='ruban' src='ruban.png'>Temps mort demandé par ".$row['Joueur2']."</div>";
		
		$connexion=null;
    ?>
</body>
</html>
<script type="text/javascript">



function afficher_set(){

	document.getElementById("pointJ1S1").style.display="block";
	document.getElementById("pointJ2S1").style.display="block";

	<?php
		require 'connection.php';
		$sql = "SELECT AfficherScore FROM score_rencontre;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row2 = $resultset->fetch(PDO::FETCH_ASSOC);
	?>
	var score =<?= $row2["AfficherScore"] ?>;
	

	if(score){
		document.getElementById("score").style.display = "block";
		document.getElementById("Joueur1").style.display = "none";
		document.getElementById("Joueur2").style.display = "none";
	}
	else{
		document.getElementById("score").style.display = "none";
	}

	<?php
		require 'connection.php';
		$sql = "SELECT sponsor FROM info_scoreboard;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row2 = $resultset->fetch(PDO::FETCH_ASSOC);
		$connexion=null;
	?>
	var sponsor =<?= $row2["sponsor"] ?>;
	if(sponsor){
		document.getElementById("sponsor").style.display = "block";
		document.getElementById("Joueur1").style.display = "none";
		document.getElementById("Joueur2").style.display = "none";
	}
	else{
		document.getElementById("sponsor").style.display = "none";
	}
	if(!sponsor && !score){
		document.getElementById("Joueur1").style.display = "block";
		document.getElementById("Joueur2").style.display = "block";
	}


	<?php
require 'connection.php';

	$sql = "SELECT TimeOut_Joueur1, TimeOut_Joueur2 FROM info_scoreboard;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);	
	?>
	var tm1=<?= $row["TimeOut_Joueur1"] ?>;
	var tm2=<?= $row["TimeOut_Joueur2"] ?>;
	if(tm1==1)
		document.getElementById("temps_mort_demande1").style.display="block";
	if(tm2==1)
		document.getElementById("temps_mort_demande2").style.display="block";

	for(var set=1; set<=4; set++){
		if(((document.getElementById("pointJ1S"+set).innerHTML>=11)||(document.getElementById("pointJ2S"+set).innerHTML>=11))&&((document.getElementById("pointJ2S"+set).innerHTML>=document.getElementById("pointJ1S"+set).innerHTML+2) || (document.getElementById("pointJ1S"+set).innerHTML>=document.getElementById("pointJ2S"+set).innerHTML+2))){
			var set_suivant=set+1;
			document.getElementById("pointJ1S"+set_suivant).style.display="block";
			document.getElementById("pointJ2S"+set_suivant).style.display="block";
			document.getElementById("pointJ1S"+set).style.backgroundColor="#dfebf4"
			document.getElementById("pointJ2S"+set).style.backgroundColor="#dfebf4"
			document.getElementById("pointJ1S"+set).style.color="#86aac6";
			document.getElementById("pointJ2S"+set).style.color="#86aac6";
		}
	}


}

function service(){
	<?php
		require 'connection.php';
		$sql = "SELECT Service FROM info_scoreboard;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		$connexion=null;
	?>
	var service=<?=$row['Service'];?>;

	if(!service){
		for(var set=1; set<=5; set++){
			if(document.getElementById("pointJ1S"+set).style.display=="block"){
				var serveur=((document.getElementById("pointJ1S"+set).innerHTML*1+document.getElementById("pointJ2S"+set).innerHTML*1)%4);
				if(((serveur<=1)&&(set%2))||((serveur>1)&&(!set%2))){
					document.getElementById("barreservice1").style.backgroundColor = "#ebf151";
					document.getElementById("barreservice2").style.backgroundColor = "#00599c";
				}
				else{
					document.getElementById("barreservice1").style.backgroundColor = "#00599c";
					document.getElementById("barreservice2").style.backgroundColor = "#ebf151";
				}
			}
		}	
	}
	else{
				for(var set=1; set<=5; set++){
					if(document.getElementById("pointJ1S"+set).style.display=="block"){
						var serveur=((document.getElementById("pointJ1S"+set).innerHTML*1+document.getElementById("pointJ2S"+set).innerHTML*1)%4);
						if(((serveur<=1)&&(set%2))||((serveur>1)&&(!set%2))){
							document.getElementById("barreservice1").style.backgroundColor = "#00599c";
							document.getElementById("barreservice2").style.backgroundColor = "#ebf151";
						}
						else{
							document.getElementById("barreservice1").style.backgroundColor = "#ebf151";
							document.getElementById("barreservice2").style.backgroundColor = "#00599c";
						}
					}
				}
			}
}


</script>
<style type="text/css">
body{
	font-family: 'roboto', sans-serif;
	overflow: hidden;
}
.j1{
	position: absolute;
	top: 28%;
	left: 0%;
	width: 44%;
	text-align: right;
	color: #eeeeee;
	font-size: 23em;
	line-height: 117%;
}
.j2{
	position: absolute;
	top: 28%;
	left: 56%;
	width: 42%;
	text-align: left;
	color: #eeeeee;
	font-size: 23em;
	line-height: 117%;
}
.logoScore{
	position: absolute;
	top: 8%;
	left: 30%;
	width: 10%;
}
.logoScore2{
	position: absolute;
	top: 8%;
	left: 59%;
	width: 10%;
}
.scorej1{
	position: absolute;
	top: 28%;
	left: 43%;
	width: 8%;
	text-align: center;
	color: #eeeeee;
	font-size: 23em;
	line-height: 117%;
}
.scorej2{
	position: absolute;
	top: 28%;
	left: 49%;
	width: 8%;
	text-align: center;
	color: #eeeeee;
	font-size: 23em;
	line-height: 117%;
}
.score_tiret{
	position: absolute;
	top: 28%;
	left: 48%;
	width: 4%;
	text-align: center;
	color: #ffffff;
	font-size: 22em;
	line-height: 120%;
}
.equipe1{
	position: absolute;
	top: 13%;
	left: -9%;
	width: 38%;
	text-align: right;
	font-size: 38em;
	line-height: 38px;
	font-weight: bold;
	color: #ffffff;
}
.equipe2{
	position: absolute;
	top: 13%;
	left: 70%;
	width: 50%;
	text-align: left;
	font-size: 38em;
	line-height: 38px;
	font-weight: bold;
	color: #ffffff;
}
.Scoreequipes{
	position: absolute;
	top: 12%;
	left: 0%;
	width: 100%;
	text-align: center;
	font-weight: bold;
	color: #ffffff;
	font-size: 45em;
	line-height: 38px;
}
.Joueur1{
	position: absolute;
	top: 86%;
	left: 5.1%;
	width: 80%;
}
.Joueur2{
	position: absolute;
	top: 116%;
	left: 0%;
	width: 80%;
}
.score{
	position: absolute;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: #222222;
	opacity: 0.8;
	display: none;
}
.scoreEquipe{
	position: absolute;
	top: 1px;
	left: 13px;
	color: #9bbef3;
	font-size: 16em;
	line-height: 28px;
}
.logoBCL{
	position: absolute;
	top: 0px;
	left: -40px;
	height: 35px;
}
.barre{
	position: absolute;
	top: 0px;
	left: 31px;
	height: 27px;
}
.nom{
	min-width: 120px;
	height: 27px;
	background-color: #2659a4;
	color: #ffffff;
	font-size: 15.5em;
	line-height: 30px;
	float: left;
	padding-left: 50px;
	margin-left: 0px;
}
.barreservice{
	width: 7px;
	height: 27px;
	background-color: #2659a4;
	margin-right: 3px;
	float: left;
}
.set{
	width: 27px;
	height: 27px;
	background-color: #dfebf4;
	color: #ffffff;
	font-size: 16em;
	text-align: center;
	line-height: 169%;
	margin: 2px;
	margin-top: 0px;
	float: left;
	background-color: #0075ce;
	color: #ffffff;
	display: none;
}
.temps_mort_demande{
	position: absolute;
	top: 3%;
	left: 0%;
	width: 100%;
	height: 1%;
	color: #ffffff;
	font-size: 30em;
	padding: 1.3%;
	display: none;
	text-align: center;
	line-height: 120%;
	font-weight: bold;
}
.ruban{
	position: absolute;
	top: 0%;
	left: 18%;
	width: 64%;
	z-index: -1;
}
.sponsor{
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	display: none;
}
</style>