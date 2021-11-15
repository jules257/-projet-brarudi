<?php
session_start();

require('menu2.php');
require('brarudiformule.php');
//RECUPERATION DES DONNEES DE L UTILISATEUR
if (isset($_GET['id'])){
$id=$_GET['id'];

$cherchV=$jul->query("SELECT* FROM vehicule where id_v='$id'");
$result=$cherchV->fetch();
$plaque_v=$result['plaque_v'];
$nom_v=$result['nom_v'];
$marque_v=$result['marque_v'];
$modele_v=$result['modele_v'];
$type_v=$result['type_v'];

}
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>nouvel vehicule</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>

<body>
	<?php


$cherchV=$jul->query("SELECT* FROM fournisseur");
?>





	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> Edition vehicule :</div>
                <div class="panel-body">
		
<form method="POST" action="Updatevehicule.php" enctype="multipart/form-data"class="form">
	
		
		<div class="form-group">
		 	<label for="id_v">id vehicule:<?php echo @$id?></label>
		 	 <input  type="hidden" name="id" value="<?php echo @$id?>" class="form-control" required/>
		 	
		 </div>
		
		

			
			
		 <div class="form-group">
		 	<label for="plaque">plaque:</label>
		 	 <input  type="" name="plaque_v" value="<?php echo @$plaque_v?>" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="nom">nom:</label>
		 	 <input  type="" name="nom_v" value="<?php echo @$nom_v?>" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="marque">marque:</label>
		 	 <input  type="" name="marque_v" value="<?php echo @$marque_v?>"class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="modele">modele:</label>
		 	 <input  type="" name="modele_v" value="<?php echo @$modele_v?>" class="form-control" required/>
		 	
		 </div>
		 <div class="form-group">
		 	<label for="type">type:</label>
		 	 <input  type="" name="type_v"  value="<?php echo @$type_v?>"class="form-control" required/>
		 	
		 </div>
		<button type="submit" name="modify" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            modifier
                        </button>
</form>
</div>
</div>
</div>
</div>
<style>
	.container{
		margin-top: 90px;
	}
	body{
		background: #31604a;
	}
	
</style>
</body>
</html>