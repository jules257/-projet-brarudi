<?php
session_start();
require('brarudiformule.php');
if(isset($_SESSION['username'])){
	$id_users=isset($_GET['id_users'])?$_GET['id_users']:"";
	$etat=isset($_GET['etat'])?$_GET['etat']:"";

	if($etat==1)
		$etat=1;

	else
		$etat=0;
	


	$prep=$jul->prepare("UPDATE users set etat=? WHERE id_users=?");
	$param=array($etat,$id_users);
	$prep->execute($param);
	//header('location:utilisateur.php');

}
?>