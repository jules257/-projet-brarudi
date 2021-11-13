<?php
require('brarudiformule.php');
//MODIFICATION DES INFORMATIONS
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$code_f=$_POST['code_f'];
$nom_f=$_POST['nom_f'];
$prenom_f=$_POST['prenom_f'];
$telephone_f=$_POST['telephone_f'];
$email_f=$_POST['email_f'];

	
	$prep=$jul->prepare("UPDATE fournisseur set code_f=?, nom_f=?,prenom_f=?,telephone_f=?,email_f=? where id_f=?");
	$param=array($code_f,$nom_f,$prenom_f,$telephone_f,$email_f,$id);
	if($prep->execute($param))
		header('location:fournisseur.php');
	//{
		
	//echo "<script>alert('modification reussi');</script>";
	//}
	//else
	//{
		
	//echo "<script>alert('modification echoue');</script>";
	//}
}
?>