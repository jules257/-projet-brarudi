<?php
require('brarudiformule.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$jul->query("DELETE FROM fournisseur WHERE id_f='$id'");
	header('location:fournisseur.php');
}
?>