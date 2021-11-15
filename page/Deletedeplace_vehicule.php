<?php
//SUPPRESSION DE DONNEEES DE L UTILISATEUR
require('brarudiformule.php');
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$jul->query("DELETE FROM deplace_vehicule WHERE id_dv='$id'");
	header('location:deplace_vehicule.php');
}
?>