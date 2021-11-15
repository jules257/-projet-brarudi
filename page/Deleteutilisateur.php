<?php
require('brarudiformule.php');
//SUPPRESSION DE DONNEEES DE L UTILISATEUR
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	$cherch=$jul->query("DELETE FROM users WHERE id_users='$id'");
	header('location:utilisateur.php');
}
?>