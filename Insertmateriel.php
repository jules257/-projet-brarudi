<?php
//$id_m="";
$id="";
$nom_m="";
$type_m="";
$motcle="";
require_once('brarudiformule.php');
//INSERTION DES DONNEES DE L UTILISATEUR
if (isset($_POST['send'])){
	$nom_m=htmlspecialchars($_POST['nom_m']);
	$type_m=htmlspecialchars($_POST['type_m']);
	
	$prep=$jul->prepare("INSERT INTO materiel(nom_m,type_m) values(?,?)");
	$param=array($nom_m,$type_m);
	$prep->execute($param);
	header('location:materiel.php');
}

?>