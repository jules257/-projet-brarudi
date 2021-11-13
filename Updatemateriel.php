<?php
require('brarudiformule.php');
//MODIFICATION DES INFORMATIONS
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$nom_m=$_POST['nom_m'];
$type_m=$_POST['type_m'];


	
	$prep=$jul->prepare("UPDATE materiel set  nom_m=?,type_m=? where id_m=?");
	$param=array($nom_m,$type_m,$id);
	if($prep->execute($param))
		header('location:materiel.php');
	//{
		
	//echo "<script>alert('modification reussi');</script>";
	//}
	//else
	//{
		
	//echo "<script>alert('modification echoue');</script>";
	//}
}
?>


		