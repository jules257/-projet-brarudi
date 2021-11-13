<?php
require('brarudiformule.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$jul->query("DELETE FROM agent WHERE id_a='$id'");
	header('location:fournisseur.php');
}
?>