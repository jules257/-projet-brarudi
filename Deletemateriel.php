<?php
require('brarudiformule.php');
//SUPPRESSION DE DONNEEES DE L UTILISATEUR
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	$cherch=$jul->query("DELETE FROM materiel WHERE id_m='$id'");
	header('location:materiel.php');
}
?>