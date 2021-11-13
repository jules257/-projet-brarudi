<?php
require('brarudiformule.php');
//MODIFICATION DES INFORMATIONS
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$code_a=$_POST['code_a'];
$nom_a=$_POST['nom_a'];
$prenom_a=$_POST['prenom_a'];
$telephone_a=$_POST['telephone_a'];
$email_a=$_POST['email_a'];

	
	$prep=$jul->prepare("UPDATE agent set code_a=?,nom_a=?,prenom_a=?,telephone_a=?,email_a=? where id_a=? ");
	$param=array($code_a,$nom_a,$prenom_a,$telephone_a,$email_a,$id);
	if($prep->execute($param))
		header('location:agent.php');
	//{
		
	//echo "<script>alert('modification reussi');</script>";
	//}
	//else
	//{
		
	//echo "<script>alert('modification echoue');</script>";
	}
//}
?>