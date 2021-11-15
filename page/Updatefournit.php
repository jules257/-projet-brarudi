<?php
//MODIFICATION DES DONNEES DE L UTILISATION
require('brarudiformule.php');
if(isset($_POST['modify']))
	{
		$id=$_POST['id'];
		$quantite=$_POST['quantite'];
		$pu=$_POST['pu'];
		$date=$_POST['date'];
		$id_f=$_POST['fournisseur'];
		$id_m=$_POST['materiel'];
	

	
	$prep=$jul->prepare("UPDATE fournit set quantite=?,pu=?,date=?,id_f=?,id_m=?
	where id_ft=?");
	$param=array($quantite,$pu,$date,$id_f,$id_m,$id);
	if($prep->execute($param))
		header('location:fournit.php');
	//{

	//echo "<script>alert('modification reussi');</script>";	
	//}
	//else
	//{

//echo "<script>alert('modification echoue');</script>";
	//}
	}
?>