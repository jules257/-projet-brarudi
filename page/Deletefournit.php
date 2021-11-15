<?php
//SUPPRESSION DE DONNEEES DE L UTILISATEUR
require('brarudiformule.php');
if(isset($_GET['ids'])){
	$id=$_GET['ids'];

	$cherchFU=$jul->query("DELETE FROM fournit WHERE id_ft='$id'");
	header('location:fournit.php');
}
?>