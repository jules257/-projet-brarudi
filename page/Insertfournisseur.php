<?php
$id_f="";
$id="";
$nom_f="";
$prenom_f="";
$telephone_f="";
$email_f="";
$code_f="";





require('brarudiformule.php');
if(isset($_POST['send'])){
	$code_f=htmlspecialchars($_POST['code_f']);
	$nom_f=htmlspecialchars($_POST['nom_f']);
$prenom_f=htmlspecialchars($_POST['prenom_f']);
$telephone_f=htmlspecialchars($_POST['telephone_f']);
$email_f=htmlspecialchars($_POST['email_f']);
//INSERTION DES INFORMATIONS DE L UTILISATEUR
	
$prep=$jul->prepare("INSERT INTO fournisseur(code_f,nom_f,prenom_f,telephone_f,email_f) values(?,?,?,?,?)");
 $param=array($code_f,$nom_f,$prenom_f,$telephone_f,$email_f);
 $prep->execute($param);

 header('location:fournisseur.php');
 


}
?>