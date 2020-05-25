<html>
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1" /> -->
	<script type="text/javascript">

		function couleurservice(){
			<?php
				require 'connection.php';
				$sql = "SELECT sponsor, Service, TimeOut_Joueur1, TimeOut_Joueur2 FROM info_scoreboard;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
				$row = $resultset->fetch(PDO::FETCH_ASSOC);

				$sql = "SELECT Match1, Match2, Match3, Match4, Match5, Match6, Match7, Match8, Match9, Match10, Match11, Match12, Match13, Match14 FROM info_match;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
				$row2 = $resultset->fetch(PDO::FETCH_ASSOC);

				$sql = "SELECT AfficherScore, J1M1, J2M1, J1M2, J2M2, J1M3, J2M3, J1M4, J2M4, J1M5, J2M5, J1M6, J2M6, J1M7, J2M7, J1M8, J2M8, J1M9, J2M9, J1M10, J2M10, J1M11, J2M11, J1M12, J2M12, J1M13, J2M13, J1M14, J2M14 FROM score_rencontre;";
				$resultset = $connexion->prepare($sql);
				$resultset->execute();
				$row3 = $resultset->fetch(PDO::FETCH_ASSOC);
				$connexion=null;
			?>
			var service=<?=$row['Service'];?>;
			var TimeOut_Joueur1=<?=$row['TimeOut_Joueur1'];?>;
			var TimeOut_Joueur2=<?=$row['TimeOut_Joueur2'];?>;
			var sponsor=<?=$row['sponsor'];?>;
			var afficher_score=<?=$row3['AfficherScore'];?>;

			var m1=<?=$row2['Match1'];?>;
			var m2=<?=$row2['Match2'];?>;
			var m3=<?=$row2['Match3'];?>;
			var m4=<?=$row2['Match4'];?>;
			var m5=<?=$row2['Match5'];?>;
			var m6=<?=$row2['Match6'];?>;
			var m7=<?=$row2['Match7'];?>;
			var m8=<?=$row2['Match8'];?>;
			var m9=<?=$row2['Match9'];?>;
			var m10=<?=$row2['Match10'];?>;
			var m11=<?=$row2['Match11'];?>;
			var m12=<?=$row2['Match12'];?>;
			var m13=<?=$row2['Match13'];?>;
			var m14=<?=$row2['Match14'];?>;


			var J1M1=<?=$row3['J1M1'];?>;
			var J1M2=<?=$row3['J1M2'];?>;
			var J1M3=<?=$row3['J1M3'];?>;
			var J1M4=<?=$row3['J1M4'];?>;
			var J1M5=<?=$row3['J1M5'];?>;
			var J1M6=<?=$row3['J1M6'];?>;
			var J1M7=<?=$row3['J1M7'];?>;
			var J1M8=<?=$row3['J1M8'];?>;
			var J1M9=<?=$row3['J1M9'];?>;
			var J1M10=<?=$row3['J1M10'];?>;
			var J1M11=<?=$row3['J1M11'];?>;
			var J1M12=<?=$row3['J1M12'];?>;
			var J1M13=<?=$row3['J1M13'];?>;
			var J1M14=<?=$row3['J1M14'];?>;

			var J2M1=<?=$row3['J2M1'];?>;
			var J2M2=<?=$row3['J2M2'];?>;
			var J2M3=<?=$row3['J2M3'];?>;
			var J2M4=<?=$row3['J2M4'];?>;
			var J2M5=<?=$row3['J2M5'];?>;
			var J2M6=<?=$row3['J2M6'];?>;
			var J2M7=<?=$row3['J2M7'];?>;
			var J2M8=<?=$row3['J2M8'];?>;
			var J2M9=<?=$row3['J2M9'];?>;
			var J2M10=<?=$row3['J2M10'];?>;
			var J2M11=<?=$row3['J2M11'];?>;
			var J2M12=<?=$row3['J2M12'];?>;
			var J2M13=<?=$row3['J2M13'];?>;
			var J2M14=<?=$row3['J2M14'];?>;

			if(m1==0)
				document.getElementById("Match1").style.backgroundColor = "#3187c4";
			else if(m1==1) {
				document.getElementById("Match1").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M1
				document.getElementById("setJoueur2").innerHTML = J2M1
			}
			else
				document.getElementById("Match1").style.backgroundColor = "#ff0000";
			if(m2==0)
				document.getElementById("Match2").style.backgroundColor = "#3187c4";
			else if(m2==1) {
				document.getElementById("Match2").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M2
				document.getElementById("setJoueur2").innerHTML = J2M2
			}
			else
				document.getElementById("Match2").style.backgroundColor = "#ff0000";
			if(m3==0)
				document.getElementById("Match3").style.backgroundColor = "#3187c4";
			else if(m3==1){
				document.getElementById("Match3").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M3
				document.getElementById("setJoueur2").innerHTML = J2M3
			}
			else
				document.getElementById("Match3").style.backgroundColor = "#ff0000";
			if(m4==0)
				document.getElementById("Match4").style.backgroundColor = "#3187c4";
			else if(m4==1){
				document.getElementById("Match4").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M4
				document.getElementById("setJoueur2").innerHTML = J2M4
			}
			else
				document.getElementById("Match4").style.backgroundColor = "#ff0000";
			if(m5==0)
				document.getElementById("Match5").style.backgroundColor = "#3187c4";
			else if(m5==1){
				document.getElementById("Match5").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M5
				document.getElementById("setJoueur2").innerHTML = J2M5
			}
			else
				document.getElementById("Match5").style.backgroundColor = "#ff0000";
			if(m6==0)
				document.getElementById("Match6").style.backgroundColor = "#3187c4";
			else if(m6==1){
				document.getElementById("Match6").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M6
				document.getElementById("setJoueur2").innerHTML = J2M6
			}
			else
				document.getElementById("Match6").style.backgroundColor = "#ff0000";
			if(m7==0)
				document.getElementById("Match7").style.backgroundColor = "#3187c4";
			else if(m7==1){
				document.getElementById("Match7").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M7
				document.getElementById("setJoueur2").innerHTML = J2M7
			}
			else
				document.getElementById("Match7").style.backgroundColor = "#ff0000";
			if(m8==0)
				document.getElementById("Match8").style.backgroundColor = "#3187c4";
			else if(m8==1){
				document.getElementById("Match8").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M8
				document.getElementById("setJoueur2").innerHTML = J2M8
			}
			else
				document.getElementById("Match8").style.backgroundColor = "#ff0000";
			if(m9==0)
				document.getElementById("Match9").style.backgroundColor = "#3187c4";
			else if(m9==1){
				document.getElementById("Match9").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M9
				document.getElementById("setJoueur2").innerHTML = J2M9
			}
			else
				document.getElementById("Match9").style.backgroundColor = "#ff0000";
			if(m10==0)
				document.getElementById("Match10").style.backgroundColor = "#3187c4";
			else if(m10==1){
				document.getElementById("Match10").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M10
				document.getElementById("setJoueur2").innerHTML = J2M10
			}
			else
				document.getElementById("Match10").style.backgroundColor = "#ff0000";
			if(m11==0)
				document.getElementById("Match11").style.backgroundColor = "#3187c4";
			else if(m11==1){
				document.getElementById("Match11").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M11
				document.getElementById("setJoueur2").innerHTML = J2M11
			}
			else
				document.getElementById("Match11").style.backgroundColor = "#ff0000";
			if(m12==0)
				document.getElementById("Match12").style.backgroundColor = "#3187c4";
			else if(m12==1){
				document.getElementById("Match12").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M12
				document.getElementById("setJoueur2").innerHTML = J2M12
			}
			else
				document.getElementById("Match12").style.backgroundColor = "#ff0000";
			if(m13==0)
				document.getElementById("Match13").style.backgroundColor = "#3187c4";
			else if(m13==1){
				document.getElementById("Match13").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M13
				document.getElementById("setJoueur2").innerHTML = J2M13
			}
			else
				document.getElementById("Match13").style.backgroundColor = "#ff0000";
			if(m14==0)
				document.getElementById("Match14").style.backgroundColor = "#3187c4";
			else if(m14==1){
				document.getElementById("Match14").style.backgroundColor = "#4c9743";
				document.getElementById("setJoueur1").innerHTML = J1M14
				document.getElementById("setJoueur2").innerHTML = J2M14
			}
			else
				document.getElementById("Match14").style.backgroundColor = "#ff0000";



			if(TimeOut_Joueur1==1)
				document.getElementById("gestion_timeout1").style.backgroundColor = "#ff0000";
			else if(TimeOut_Joueur1==2)
				document.getElementById("gestion_timeout1").style.backgroundColor = "#4c9743";
			if(TimeOut_Joueur2==1)
				document.getElementById("gestion_timeout2").style.backgroundColor = "#ff0000";
			else if(TimeOut_Joueur2==2)
				document.getElementById("gestion_timeout2").style.backgroundColor = "#4c9743";
			if(sponsor)
				document.getElementById("sponsor").style.backgroundColor = "#4c9743";
			else
				document.getElementById("sponsor").style.backgroundColor = "#3187c4";
			if(afficher_score)
				document.getElementById("score_rencontre").style.backgroundColor = "#4c9743";
			else
				document.getElementById("score_rencontre").style.backgroundColor = "#3187c4";

			if(!service){
				document.getElementById("commencer_servir1").style.backgroundColor = "#4c9743";
				document.getElementById("commencer_servir2").style.backgroundColor = "#3187c4";
				for(var set=1; set<=5; set++){
					if(document.getElementById("pointJ1S"+set).style.display=="block"){
						var serveur=((document.getElementById("pointJ1S"+set).innerHTML*1+document.getElementById("pointJ2S"+set).innerHTML*1)%4);
						if(((serveur<=1)&&(set%2))||((serveur>1)&&(!(set%2)))){
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
				document.getElementById("commencer_servir2").style.backgroundColor = "#4c9743";
				document.getElementById("commencer_servir1").style.backgroundColor = "#3187c4";
				for(var set=1; set<=5; set++){
					if(document.getElementById("pointJ1S"+set).style.display=="block"){
						var serveur=((document.getElementById("pointJ1S"+set).innerHTML*1+document.getElementById("pointJ2S"+set).innerHTML*1)%4);
						if(((serveur<=1)&&(set%2))||((serveur>1)&&(!(set%2)))){
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
		function coulset1(){
			var set_vert=1;
			for(var set=1; set<=4; set++){
				if(((document.getElementById("pointJ1S"+set).innerHTML*1>=11)|| (document.getElementById("pointJ2S"+set).innerHTML*1>=11))&&((document.getElementById("pointJ2S"+set).innerHTML*1>=(document.getElementById("pointJ1S"+set).innerHTML*1+2*1)) || (document.getElementById("pointJ1S"+set).innerHTML*1>=(document.getElementById("pointJ2S"+set).innerHTML*1+2*1)))) {
					set_vert=set+1;
				}
			}
			document.getElementById("gestionset"+set_vert).style.backgroundColor = "#4c9743";
			document.getElementById("gestionset"+set_vert).style.color = "#ffffff";
		}
		function nomj1(val){
			document.getElementById("nomJ1").innerHTML = val;
			document.getElementById("commencer_servir1").innerHTML = val;
		}
		function nomj2(val){
			document.getElementById("nomJ2").innerHTML = val;
			document.getElementById("commencer_servir2").innerHTML = val;
		}
		function servir1(val){
			window.location.replace("servirJ1.php");
		}
		function servir2(val){
			window.location.replace("servirJ2.php");
		}
		function timeout(val){
			if(document.getElementById("gestion_timeout1")==val){
				if(document.getElementById("gestion_timeout1").style.backgroundColor == "rgb(255, 0, 0)"){
					val.style.backgroundColor = "#ff0000";
					window.location.replace("tm1_stop.php");
				}
				else{
					val.style.backgroundColor = "#4c9743";
					window.location.replace("tm1_go.php");
				}
			}
			else{
				if(document.getElementById("gestion_timeout2").style.backgroundColor == "rgb(255, 0, 0)"){
					val.style.backgroundColor = "#4c9743";
					window.location.replace("tm2_stop.php");
				}
				else{
					val.style.backgroundColor = "#ff0000";
					window.location.replace("tm2_go.php");
				}
			}
		}


		function setJoueur1(){
			if(document.getElementById("Match1").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M1.php");
			} else if(document.getElementById("Match2").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M2.php");
			} else if(document.getElementById("Match3").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M3.php");
			} else if(document.getElementById("Match4").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M4.php");
			} else if(document.getElementById("Match5").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M5.php");
			} else if(document.getElementById("Match6").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M6.php");
			} else if(document.getElementById("Match7").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M7.php");
			} else if(document.getElementById("Match8").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M8.php");
			} else if(document.getElementById("Match9").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M9.php");
			} else if(document.getElementById("Match10").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M10.php");
			} else if(document.getElementById("Match11").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M11.php");
			} else if(document.getElementById("Match12").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M12.php");
			} else if(document.getElementById("Match13").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M13.php");
			} else if(document.getElementById("Match14").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J1M14.php");
			}
		}
		function setJoueur2(){
			if(document.getElementById("Match1").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M1.php");
			} else if(document.getElementById("Match2").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M2.php");
			} else if(document.getElementById("Match3").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M3.php");
			} else if(document.getElementById("Match4").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M4.php");
			} else if(document.getElementById("Match5").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M5.php");
			} else if(document.getElementById("Match6").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M6.php");
			} else if(document.getElementById("Match7").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M7.php");
			} else if(document.getElementById("Match8").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M8.php");
			} else if(document.getElementById("Match9").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M9.php");
			} else if(document.getElementById("Match10").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M10.php");
			} else if(document.getElementById("Match11").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M11.php");
			} else if(document.getElementById("Match12").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M12.php");
			} else if(document.getElementById("Match13").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M13.php");
			} else if(document.getElementById("Match14").style.backgroundColor == "rgb(76, 151, 67)") {
				window.location.replace("J2M14.php");
			}
		}

		function afficherMatch(){
			if(document.getElementById("Match1").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match1").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match2").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match2").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match3").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match3").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match4").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match4").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match5").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match5").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match6").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match6").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match7").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match7").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match8").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match8").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match9").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match9").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match10").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match10").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match11").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match11").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match12").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match12").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match13").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match13").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			} else if(document.getElementById("Match14").style.backgroundColor == "rgb(76, 151, 67)") {
				var joueurs = document.getElementById("Match14").innerHTML.split(' - ');
				document.getElementById("nomcache1").value = joueurs[0]
				document.getElementById("nomcache2").value = joueurs[1]
				document.getElementById("form2").submit()
			}
		}

		function couleurset(val){
			document.getElementById("gestionset1").style.backgroundColor = "#dfebf4";
			document.getElementById("gestionset2").style.backgroundColor = "#dfebf4";
			document.getElementById("gestionset3").style.backgroundColor = "#dfebf4";
			document.getElementById("gestionset4").style.backgroundColor = "#dfebf4";
			document.getElementById("gestionset5").style.backgroundColor = "#dfebf4";
			document.getElementById("gestionset1").style.color = "#86aac6";
			document.getElementById("gestionset2").style.color = "#86aac6";
			document.getElementById("gestionset3").style.color = "#86aac6";
			document.getElementById("gestionset4").style.color = "#86aac6";
			document.getElementById("gestionset5").style.color = "#86aac6";
			val.style.backgroundColor = "#4c9743";
			val.style.color = "#ffffff";
		}
		
		function match1(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match1E1.php");
			} else {
				window.location.replace("match1E0.php");
			}
		}
		function match2(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match2E1.php");
			} else {
				window.location.replace("match2E0.php");
			}
		}
		function match3(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match3E1.php");
			} else {
				window.location.replace("match3E0.php");
			}
		}
		function match4(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match4E1.php");
			} else {
				window.location.replace("match4E0.php");
			}
		}
		function match5(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match5E1.php");
			} else {
				window.location.replace("match5E0.php");
			}
		}
		function match6(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match6E1.php");
			} else {
				window.location.replace("match6E0.php");
			}
		}
		function match7(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match7E1.php");
			} else {
				window.location.replace("match7E0.php");
			}
		}
		function match8(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match8E1.php");
			} else {
				window.location.replace("match8E0.php");
			}
		}
		function match9(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match9E1.php");
			} else {
				window.location.replace("match9E0.php");
			}
		}
		function match10(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match10E1.php");
			} else {
				window.location.replace("match10E0.php");
			}
		}
		function match11(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match11E1.php");
			} else {
				window.location.replace("match11E0.php");
			}
		}
		function match12(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match12E1.php");
			} else {
				window.location.replace("match12E0.php");
			}
		}
		function match13(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match13E1.php");
			} else {
				window.location.replace("match13E0.php");
			}
		}
		function match14(val){
			if(val.style.backgroundColor == "rgb(49, 135, 196)"){
				window.location.replace("match14E1.php");
			} else {
				window.location.replace("match14E0.php");
			}
		}

		function ajouter_point_j1(){
			for(var set=1; set<=5; set++){
				if(document.getElementById("gestionset"+set).style.backgroundColor == "rgb(76, 151, 67)"){
					window.location.replace("plusJ1S"+set+".php");
				}
			}
		}
		function ajouter_point_j2(){
			for(var set=1; set<=5; set++){
				if(document.getElementById("gestionset"+set).style.backgroundColor == "rgb(76, 151, 67)"){
					window.location.replace("plusJ2S"+set+".php");
				}
			}
			afficher_set();
			couleurservice();
		}
		function retirer_point_j1(){
			for(var set=1; set<=5; set++){
				if(document.getElementById("gestionset"+set).style.backgroundColor == "rgb(76, 151, 67)"){
					window.location.replace("moinsJ1S"+set+".php");
				}
			}
			afficher_set();
			couleurservice();
		}
		function retirer_point_j2(){
			for(var set=1; set<=5; set++){
				if(document.getElementById("gestionset"+set).style.backgroundColor == "rgb(76, 151, 67)"){
					window.location.replace("moinsJ2S"+set+".php");
				}
			}
			afficher_set();
			couleurservice();
		}
		function afficher_set(){
			document.getElementById("pointJ1S1").style.display="block";
			document.getElementById("pointJ2S1").style.display="block";

			for(var set=1; set<=4; set++){
				if(((document.getElementById("pointJ1S"+set).innerHTML>=11)||(document.getElementById("pointJ2S"+set).innerHTML>=11))
					&&
					((document.getElementById("pointJ2S"+set).innerHTML>=(document.getElementById("pointJ1S"+set).innerHTML*1+2*1))
					|| (document.getElementById("pointJ1S"+set).innerHTML>=(document.getElementById("pointJ2S"+set).innerHTML*1+2*1)))){
					var set_suivant=set+1;
					document.getElementById("pointJ1S"+set_suivant).style.display="block";
					document.getElementById("pointJ2S"+set_suivant).style.display="block";
					document.getElementById("pointJ1S"+set).style.backgroundColor="#dfebf4"
					document.getElementById("pointJ2S"+set).style.backgroundColor="#dfebf4"
					document.getElementById("pointJ1S"+set).style.color="#86aac6";
					document.getElementById("pointJ2S"+set).style.color="#86aac6";
					var sett = set + 1
					document.getElementById("gestionset"+sett).style.display = "block";
				} else{
					var sett = set + 1
					document.getElementById("gestionset"+sett).style.display = "none";
				}
			}
		}

		function sponsor(){
			if(document.getElementById("sponsor").style.backgroundColor == "rgb(76, 151, 67)"){
				window.location.replace("sponsor_stop.php");
			}
			else{
				window.location.replace("sponsor.php");
			}	
		}

		function score_rencontre(){
			if(document.getElementById("score_rencontre").style.backgroundColor == "rgb(76, 151, 67)"){
				window.location.replace("score_stop.php");
			}
			else{
				window.location.replace("score.php");
			}	
		}

		
	</script>
</head>
<body onload='coulset1();afficher_set();couleurservice();'>

	<?php
	require 'connection.php';

	echo "<div class='Match1' id='Match1' onclick='match1(this)'>";
		$sql = "SELECT JoueurA, JoueurW FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurA']." - ".$row['JoueurW'];
	echo "</div>";

	echo "<div class='Match2' id='Match2' onclick='match2(this)'>";
		$sql = "SELECT JoueurB, JoueurX FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurB']." - ".$row['JoueurX'];
	echo "</div>";

	echo "<div class='Match3' id='Match3' onclick='match3(this)'>";
		$sql = "SELECT JoueurC, JoueurY FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurC']." - ".$row['JoueurY'];
	echo "</div>";

	echo "<div class='Match4' id='Match4' onclick='match4(this)'>";
		$sql = "SELECT JoueurD, JoueurZ FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurD']." - ".$row['JoueurZ'];
	echo "</div>";

	echo "<div class='Match5' id='Match5' onclick='match5(this)'>";
		$sql = "SELECT JoueurA, JoueurX FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurA']." - ".$row['JoueurX'];
	echo "</div>";

	echo "<div class='Match6' id='Match6' onclick='match6(this)'>";
		$sql = "SELECT JoueurB, JoueurW FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurB']." - ".$row['JoueurW'];
	echo "</div>";

	echo "<div class='Match7' id='Match7' onclick='match7(this)'>";
		$sql = "SELECT JoueurD, JoueurY FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurD']." - ".$row['JoueurY'];
	echo "</div>";

	echo "<div class='Match8' id='Match8' onclick='match8(this)'>";
		$sql = "SELECT JoueurC, JoueurZ FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurC']." - ".$row['JoueurZ'];
	echo "</div>";
	

	echo "<div class='Match9' id='Match9' onclick='match9(this)'>";
		echo "Double 1 - Double 1";
	echo "</div>";
	
	echo "<div class='Match10' id='Match10' onclick='match10(this)'>";
		echo "Double 2 - Double 2";
	echo "</div>";

	echo "<div class='Match11' id='Match11' onclick='match11(this)'>";
		$sql = "SELECT JoueurA, JoueurY FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurA']." - ".$row['JoueurY'];
	echo "</div>";

	echo "<div class='Match12' id='Match12' onclick='match12(this)'>";
		$sql = "SELECT JoueurC, JoueurW FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurC']." - ".$row['JoueurW'];
	echo "</div>";

	echo "<div class='Match13' id='Match13' onclick='match13(this)'>";
		$sql = "SELECT JoueurD, JoueurX FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurD']." - ".$row['JoueurX'];
	echo "</div>";

	echo "<div class='Match14' id='Match14' onclick='match14(this)'>";
		$sql = "SELECT JoueurB, JoueurZ FROM info_match;";
		$resultset = $connexion->prepare($sql);
		$resultset->execute();
		$row = $resultset->fetch(PDO::FETCH_ASSOC);
		echo $row['JoueurB']." - ".$row['JoueurZ'];
	echo "</div>";




	for($joueur=1; $joueur<=2; $joueur++){
		echo "<div class='Joueur".$joueur."'>";
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
		echo "</div>";
	}


	for($joueur=1; $joueur<=2; $joueur++){
		echo "<div class='gestion_joueur".$joueur."'>
				<form id='form' method='post' action='nom_joueur".$joueur.".php'>";
				$sql = "SELECT Joueur".$joueur." FROM info_scoreboard;";
			$resultset = $connexion->prepare($sql);
			$resultset->execute();
			$row = $resultset->fetch(PDO::FETCH_ASSOC);


			echo "
					<input name='joueur".$joueur."' id='nom".$joueur."' type='text' class='textjoueur' onchange='nomj".$joueur."(this.value); form.submit();' placeholder='Joueur ".$joueur."' value='".$row['Joueur'.$joueur]."'> 

				</form>
				<div class='match'>
					<div class='ajouter_point s".$joueur."' onclick='ajouter_point_j".$joueur."()'>+</div>
					<div class='retirer_point s".$joueur."' onclick='retirer_point_j".$joueur."()'>-</div>	
				</div>
				<div id='commencer_servir".$joueur."' class='commencer_servir".$joueur."' onclick='servir".$joueur."(this)'>Commence servir</div>
		  		<div id='gestion_timeout".$joueur."' class='gestion_timeout".$joueur."' onclick='timeout(this)'>Time Out</div>
	
		  	  </div>";
	}
	
	
	for($set=1; $set<=5; $set++)	
		echo "<div id='gestionset".$set."' class='gestion_set' onclick='couleurset(this)'>".$set."</div>";
		
	echo "<div id='score_rencontre' class='score_rencontre' onclick='score_rencontre()'>";
	echo "Score rencontre</br>";
	$sql = "SELECT ScoreE1, ScoreE2 FROM info_scoreboard;";
	$resultset = $connexion->prepare($sql);		$resultset->execute();
	$row = $resultset->fetch(PDO::FETCH_ASSOC);
	echo $row["ScoreE1"]."-".$row["ScoreE2"];
	echo "</div>";
	echo "<div id='sponsor' class='sponsor' onclick='sponsor()'>Sponsors</div>";
	

	echo "<div id='setJoueur1' class='setJoueur1' onclick='setJoueur1()'></div>";
	echo "<div id='setJoueur2' class='setJoueur2' onclick='setJoueur2()'></div>";
	echo "<div id='afficherMatch' class='afficherMatch' onclick='afficherMatch()'>Afficher match</div>";

echo "<form id='form2' method='post' action='nom_joueurs.php'>";
	echo "<input name='joueurcache1' id='nomcache1' type='hidden' >";
	echo "<input name='joueurcache2' id='nomcache2' type='hidden' >";
	echo "</form>";

?>


</body>
</html>

<style type="text/css">
body{
	font-family: 'roboto', sans-serif;
}
.Match{
	margin-top: 30%;
	background-color: #eeeeee; 
}
.Match1{
	position: absolute;
	top: 40%;
	left: 28%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match2{
	position: absolute;
	top: 40%;
	left: 34.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match3{
	position: absolute;
	top: 40%;
	left: 41%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match4{
	position: absolute;
	top: 40%;
	left: 47.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match5{
	position: absolute;
	top: 40%;
	left: 54%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match6{
	position: absolute;
	top: 40%;
	left: 60.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match7{
	position: absolute;
	top: 40%;
	left: 67%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match8{
	position: absolute;
	top: 49%;
	left: 28%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match9{
	position: absolute;
	top: 49%;
	left: 34.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match10{
	position: absolute;
	top: 49%;
	left: 41%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match11{
	position: absolute;
	top: 49%;
	left: 47.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match12{
	position: absolute;
	top: 49%;
	left: 54%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match13{
	position: absolute;
	top: 49%;
	left: 60.5%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Match14{
	position: absolute;
	top: 49%;
	left: 67%;
	width: 6%;
	height: 7%;
	background-color: #3187c4; 
	border-radius: 3px;
	color: white;
	z-index: 9999;
}
.Joueur1{
	position: absolute;
	top: 7%;
	left: 30%;
	width: 47%;
	height: 30%;
}
.Joueur2{
	position: absolute;
	top: 16%;
	left: 30%;
	width: 47%;
	height: 30%;
}
.nom{
	width: 37%;
	height: 25%;
	background-color: #00599c;
	color: #ffffff;
	font-size: 1.7em;
	line-height: 150%;
	float: left;
	padding-left: 2%;
}
.barreservice{
	width: 1.8%;
	height: 25%;
	background-color: #00599c;
	margin-right: 3px;
	float: left;
}
.set{
	width: 9%;
	height: 25%;
	background-color: #dfebf4;
	color: #ffffff;
	line-height: 175%;
	font-size: 24px;
	text-align: center;
	margin: 3px;
	margin-top: 0px;
	float: left;
	display: none;
	background-color: #0075ce;
	color: #ffffff;
}
.gestion_set:after {
  content: "";
  display: block;
}
.point{
	position: absolute;
	top: 250px;
	left: 300px;
	font-size: 6em;
	width: 130px;
	text-align: center;
}
.gestion_joueur1{
	position: absolute;
	top: 0%;
	left: 0%;
	width: 23%;
	height: 100%;
}

.gestion_joueur2{
	position: absolute;
	top: 0%;
	left: 77%;
	width: 23%;
	height: 100%;
}
.gestion_set{
	position: relative;
	top: 25%;
	left: 30%;
	width: 8%;
	background-color: #dfebf4;
	color: #86aac6;
	font-size: 1.4em;
	line-height: 360%;
	float: left;
	text-align: center;
	border-radius: 3px;
	margin-right: 0.5%; 
}
.gestion_set:after {
  content: "";
  display: block;
  padding-bottom: 5%;
}
.setJoueur1{
	position: absolute;
	top: 59%;
	left: 27%;
	width: 15%;
	height: 11%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.5em;
	line-height: 330%;
	text-align: center;
	border-radius: 3px;
	cursor: default;
}
.setJoueur2{
	position: absolute;
	top: 59%;
	left: 43%;
	width: 15%;
	height: 11%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.5em;
	line-height: 330%;
	text-align: center;
	border-radius: 3px;
	cursor: default;
}
.afficherMatch{
	position: absolute;
	top: 59%;
	left: 59%;
	width: 15%;
	height: 11%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.5em;
	line-height: 330%;
	text-align: center;
	border-radius: 3px;
	cursor: default;
}
.sponsor{
	position: absolute;
	top: 74%;
	left: 51%;
	width: 23%;
	height: 11%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.5em;
	line-height: 330%;
	text-align: center;
	border-radius: 3px;
	cursor: default;
}
.score_rencontre{
	position: absolute;
	top: 74%;
	left: 27%;
	width: 23%;
	height: 11%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.5em;
	line-height: 190%;
	text-align: center;
	border-radius: 3px;
	cursor: default;
}
.textjoueur{
	position: absolute;
	top: 1%;
	left: 5.8%;
	font-size: 1.6em;
	width: 90%;
	color: #3187c4;
	border: none;
	border-bottom: solid 2px #3187c4;
	padding-bottom: 5px;
	text-align: center;
}
.ajouter_point{
	position: absolute;
	top: 11%;
	left: 2%;
	width: 90%;
	height: 34%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 6em;
	margin: 8px;
	float: left;
	text-align: center;
	border-radius: 3px;
	border: none;
	line-height: 260%;
}
.retirer_point{
	position: absolute;
	top: 47%;
	left: 2%;
	width: 90%;
	height: 16%;
	background-color: #dfebf4;
	color: #86aac6;
	font-size: 4em;
	margin: 8px;
	float: left;
	text-align: center;
	border-radius: 5px;
	border: none;
	line-height: 190%;
}
.commencer_servir1{
	position: absolute;
	top: 65%;
	left: 3%;
	width: 43%;
	height: 19%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.3em;
	line-height: 350%;
	margin: 8px;
	text-align: center;
	border-radius: 7px;
	cursor: default;
	z-index: 2;
}
.commencer_servir2{
	position: absolute;
	top: 65%;
	left: 3%;
	width: 43%;
	height: 19%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.3em;
	line-height: 350%;
	margin: 8px;
	text-align: center;
	border-radius: 7px;
	cursor: default;
}
.gestion_timeout1{
	position: absolute;
	top: 65%;
	left: 51%;
	width: 43%;
	height: 19%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.3em;
	line-height: 430%;
	margin: 8px;
	text-align: center;
	border-radius: 7px;
	cursor: default;
	z-index: 2;
}
.gestion_timeout2{
	position: absolute;
	top: 65%;
	left: 51%;
	width: 43%;
	height: 19%;
	background-color: #3187c4;
	color: #ffffff;
	font-size: 1.3em;
	line-height: 430%;
	margin: 8px;
	text-align: center;
	border-radius: 7px;
	cursor: default;
}
</style>