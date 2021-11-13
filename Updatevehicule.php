<?php
//MODIFICATION DES DONNEES DE L UTILISATION
require('brarudiformule.php');
if(isset($_POST['modify'])){
	$id=$_POST['id'];
	$plaque_v=$_POST['plaque_v'];
	$nom_v=$_POST['nom_v'];
	$marque_v=$_POST['marque_v'];
	$modele_v=$_POST['modele_v'];
	$type_v=$_POST['type_v'];
	
	$prep=$jul->prepare("UPDATE vehicule SET plaque_v=?,nom_v=?,marque_v=?,modele_v=?,type_v=? WHERE id_v=?");
	$param=array($plaque_v,$nom_v,$marque_v,$modele_v,$type_v,$id);
	if($prep->execute($param))
		header('location:vehicule.php');
	//{
		//echo "<script>alert('modification reussi');</script>";
	//}else{
		//echo "<script>alert('modification echoue');</script>";
	//}
}
?>