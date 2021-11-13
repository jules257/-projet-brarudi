<?php
session_start();
	
require('menu2.php');
require('brarudiformule.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchM=$jul->query("SELECT* FROM materiel where id_m='$id'");
		$result=$cherchM->fetch();
		$nom_m=$result['nom_m'];
		$type_m=$result['type_m'];
		
}
?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Edit materiel</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>


<?php

$cherchM=$jul->query("SELECT* FROM materiel");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition materiel :</div>
                <div class="panel-body">
		
<form method="POST" action="Updatemateriel.php" class="form" enctype="multipart/form-data">
<div class="form-group">
		 	<label for="id_m">id materiel:<?php echo @$id?></label>
		 	 <input  type="hidden" name="id" class="form-control"value="<?php echo @$id?>" required/>
		 	
		 </div>

		
		 <div class="form-group">
		 	<label for="nom">nom:</label>
		 	 <input  type="" name="nom_m" class="form-control"value="<?php echo @$nom_m?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="type">type:</label>
		 	 <input  type="" name="type_m" class="form-control"value="<?php echo @$type_m?>" required/>
		 	
		
		<button type="submit" name="modify" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            modifier
                        </button>
</div>		
</form>
</div>
</div>
</div>
<style >
	.container{
		margin-top: 90px;
	}
	body{
		background: #31604a;
	}
</style>


</body>


</html>