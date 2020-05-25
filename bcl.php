<html>
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1" /> -->
</head>
<body>
	<form method="post" action="initMatch.php">
		<input name="Equipe1" type="text" placeholder="Équipe 1" class="Equipe1">
		<input name="Equipe2" type="text" placeholder="Équipe 2" class="Equipe2">

		<input name="JoueurA" type="text" placeholder="Joueur A" class="W Joueur1">
		<input name="JoueurB" type="text" placeholder="Joueur B" class="X Joueur1">
		<input name="JoueurC" type="text" placeholder="Joueur C" class="Y Joueur1">
		<input name="JoueurD" type="text" placeholder="Joueur D" class="Z Joueur1">
		<input name="JoueurW" type="text" placeholder="Joueur W" class="W Joueur2">
		<input name="JoueurX" type="text" placeholder="Joueur X" class="X Joueur2">
		<input name="JoueurY" type="text" placeholder="Joueur Y" class="Y Joueur2">
		<input name="JoueurZ" type="text" placeholder="Joueur Z" class="Z Joueur2">
		
		<input name="ClassementJoueurA" type="text" placeholder="Classement A" class="W Classement1" maxlength="4">
		<input name="ClassementJoueurB" type="text" placeholder="Classement B" class="X Classement1" maxlength="4">
		<input name="ClassementJoueurC" type="text" placeholder="Classement C" class="Y Classement1" maxlength="4">
		<input name="ClassementJoueurD" type="text" placeholder="Classement D" class="Z Classement1" maxlength="4">
		<input name="ClassementJoueurW" type="text" placeholder="Classement W" class="W Classement2" maxlength="4">
		<input name="ClassementJoueurX" type="text" placeholder="Classement X" class="X Classement2" maxlength="4">
		<input name="ClassementJoueurY" type="text" placeholder="Classement Y" class="Y Classement2" maxlength="4">
		<input name="ClassementJoueurZ" type="text" placeholder="Classement Z" class="Z Classement2" maxlength="4">
		<input type="submit" value="Valider" class="valider">
	</form>
</body>
</html>
<style type="text/css">
body{
background-color: #d6dfed;
}
.W{
	position: absolute;
	top: 32%;
}
.X{
	position: absolute;
	top: 42%;
}
.Y{
	position: absolute;
	top: 52%;
}
.Z{
	position: absolute;
	top: 62%;
}
.valider{
	position: absolute;
	top: 80%;
	left: 40%;
	width: 20%;
	height: 9%;
	font-size: 1.8em;
	color: white;
	background-color: blue;
}
.Equipe1{
	position: absolute;
	top: 11%;
	left: 12%;
	width: 25%;
	height: 6%;
	text-align: center;
	font-size: 2em;
	border:none;
}
.Equipe2{
	position: absolute;
	top: 11%;
	left: 61%;
	width: 25%;
	height: 6%;
	text-align: center;
	font-size: 2em;
	border:none;
}
.Joueur1{
	left: 21%;
	width: 20%;
	height: 6%;
	padding-left: 8px;
	font-size: 2em;
	border:none;
}
.Joueur2{
	left: 58%;
	width: 20%;
	height: 6%;
	padding-right: 8px;
	font-size: 2em;
	border:none;
	text-align: right;
}
.Classement1{
	left: 6%;
	width: 12%;
	height: 6%;
	text-align: center;
	font-size: 1.6em;
	border:none;
}
.Classement2{
	left: 82%;
	width: 12%;
	height: 6%;
	text-align: center;
	font-size: 1.6em;
	border:none;
}
</style>