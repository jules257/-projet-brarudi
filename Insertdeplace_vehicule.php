<?php
$id="";
$id_dv='';
$ids='';
$quantite="";
$date="";
$motif="";
$lieu="";
$id_m="";
$id_a="";
$id_v="";
$motcle="";


require('brarudiformule.php');



if(isset($_POST['send'])){
	$quantite=htmlspecialchars($_POST['quantite']);
	$date=htmlspecialchars($_POST['date']);
	$motif=htmlspecialchars($_POST['motif']);
	$lieu=htmlspecialchars($_POST['lieu']);
	$id_m=htmlspecialchars($_POST['materiel']);
	$id_a=htmlspecialchars($_POST['agent']);
	$id_v=htmlspecialchars($_POST['vehicule']);
	
	//INSERTION DES DONNEES DE L UTILISATEUR

	$prep=$jul->prepare("INSERT INTO deplace_vehicule(quantite,date,motif,lieu,id_m,id_a,id_v) values(?,?,?,?,?,?,?)");
	$param=array($quantite,$date,$motif,$lieu,$id_m,$id_a,$id_v);
	$prep->execute($param);
	header('location:deplace_vehicule.php');
}
?>