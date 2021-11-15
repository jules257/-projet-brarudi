<?php
//MODIFICATION DES DONNEES DE L UTILISATION
require('brarudiformule.php');
if(isset($_POST['modify']))
	{
		$id=$_POST['id'];
		$quantite=$_POST['quantite'];
		$date=$_POST['date'];
		$motif=$_POST['motif'];
		$lieu=$_POST['lieu'];
		$id_m=$_POST['materiel'];
		$id_a=$_POST['agent'];
		$id_v=$_POST['vehicule'];
	

	
	$prep=$jul->prepare("UPDATE deplace_vehicule set quantite=?,date=?,motif=?,lieu=?,id_m=?,id_a=?,id_v=?
	where id_dv=?");
	$param=array($quantite,$date,$motif,$lieu,$id_m,$id_a,$id_v,$id);
	if($prep->execute($param))
		header('location:deplace_vehicule.php');
	//{

	//echo "<script>alert('modification reussi');</script>";	
	//}
	//else
	//{

//echo "<script>alert('modification echoue');</script>";
	//}
	}
?>