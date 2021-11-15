<?php
$id="";
$id_v="";

$plaque_v="";
$nom_v="";
$marque_v="";
$modele_v="";
$type_v="";
$motcle="";
require_once('brarudiformule.php');
//INSERTION DES DONNEES DE L UTILISATEUR
if(isset($_POST['send'])){
	$plaque_v=htmlspecialchars($_POST['plaque_v']);
	$nom_v=htmlspecialchars($_POST['nom_v']);
	$marque_v=htmlspecialchars($_POST['marque_v']);
	$modele_v=htmlspecialchars($_POST['modele_v']);
	$type_v=htmlspecialchars($_POST['type_v']);
	
	$prep=$jul->prepare("INSERT INTO vehicule(plaque_v,nom_v,marque_v,modele_v,type_v) values(?,?,?,?,?)");
	$param=array($plaque_v,$nom_v,$marque_v,$modele_v,$type_v);
	$prep->execute($param);
	header('location:vehicule.php');

}
?>