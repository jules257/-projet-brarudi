<?php
$id_a="";
$id="";
$nom_a="";
$prenom_a="";
$telephone_a="";
$email_a="";
$code_a="";





require('brarudiformule.php');
if(isset($_POST['send'])){
	$code_a=htmlspecialchars($_POST['code_a']);
	$nom_a=htmlspecialchars($_POST['nom_a']);
$prenom_a=htmlspecialchars($_POST['prenom_a']);
$telephone_a=htmlspecialchars($_POST['telephone_a']);
$email_a=htmlspecialchars($_POST['email_a']);
//INSERTION DES INFORMATIONS DE L UTILISATEUR
	
$prep=$jul->prepare("INSERT INTO agent(code_a,nom_a,prenom_a,telephone_a,email_a) values(?,?,?,?,?)");
 $param=array($code_a,$nom_a,$prenom_a,$telephone_a,$email_a);
 $prep->execute($param);

 header('location:agent.php');
 


}

	


?>