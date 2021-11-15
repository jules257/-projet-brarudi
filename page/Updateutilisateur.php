<?php
require('brarudiformule.php');
//require('Identifiant.php');
//UPDATE
if(isset($_POST['modify'])){
	$id=$_POST['id'];
	$email=htmlspecialchars($_POST['email']);
  $password=($_POST['password']);
  $confirm=($_POST['confirm']);
  $username=htmlspecialchars($_POST['username']);
  //$etat=htmlspecialchars($_POST['etat']);
  $role=htmlspecialchars($_POST['role']);


	$prep=$jul->prepare("UPDATE users set email=?,password=?,confirm=?,username=?,role=? WHERE id_users=?");
	$param=array($email,$password,$confirm,$username,$role,$id);
if($prep->execute($param))
	header('location:utilisateur.php');
}
?>