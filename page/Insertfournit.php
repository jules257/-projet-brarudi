<?php
 $id="";
$id_ft='';
$quantite="";
$pu="";
$date="";
$id_f="";
$id_m="";
$motcle="";

require('brarudiformule.php');




if(isset($_POST['send'])){
	$quantite=htmlspecialchars($_POST['quantite']);
	$pu=htmlspecialchars($_POST['pu']);
	$date =htmlspecialchars($_POST['date']);
	$id_f=htmlspecialchars($_POST['fournisseur']);
	$id_m=htmlspecialchars($_POST['materiel']);
	
	//INSERTION DES DONNEES DE L UTILISATEUR
	
	$prep=$jul->prepare("INSERT INTO fournit(quantite,pu,date,id_f,id_m) values(?,?,?,?,?)");
	$param=array($quantite,$pu,$date,$id_f,$id_m);
	$prep->execute($param);
	header('location:fournit.php');
}
?>