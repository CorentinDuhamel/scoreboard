<?php
	require 'connection.php';
	$sql = "UPDATE info_match SET Match9=1;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$sql = "UPDATE info_match SET Match1=0, Match2=0, Match3=0, Match4=0, Match5=0, Match6=0, Match7=0, Match8=0, Match10=0, Match11=0, Match12=0, Match13=0, Match14=0;";
	$resultset = $connexion->prepare($sql);
	$resultset->execute();

	$connexion=null;
	session_start();
	header('Location: direction_portable.php');
?>