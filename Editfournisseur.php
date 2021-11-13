<?php
session_start();
	
require('menu2.php');

require('brarudiformule.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchF=$jul->query("SELECT* FROM fournisseur where id_f='$id'");
		$result=$cherchF->fetch();
		$code_f=$result['code_f'];
		$nom_f=$result['nom_f'];
		$prenom_f=$result['prenom_f'];
		$telephone_f=$result['telephone_f'];
		$email_f=$result['email_f'];
}
?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Edit fournisseur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>


<?php

$cherchF=$jul->query("SELECT* FROM fournisseur");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition fournisseur :</div>
                <div class="panel-body">
		
<form method="POST" action="Updatefournisseur.php" class="form" enctype="multipart/form-data">
<div class="form-group">
		 	<label for="id_f">id fournisseur:<?php echo @$id ?></label>
		 	 <input  type="hidden" name="id" class="form-control"value="<?php echo @$id?>" required/>
		 	
		 </div>

		
		 <div class="form-group">
		 	<label for="code">code:</label>
		 	 <input  type="" name="code_f" class="form-control"value="<?php echo @$code_f?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="nom">nom:</label>
		 	 <input  type="" name="nom_f" class="form-control"value="<?php echo @$nom_f?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="prenom">prenom:</label>
		 	 <input  type="" name="prenom_f" class="form-control" value="<?php echo @$prenom_f?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="telephone">telephone:</label>
		 	 <input  type="" name="telephone_f" class="form-control" value="<?php echo @$telephone_f?>"required/>
		 	
		 </div>
		 <div class="form-group">
		 	<label for="email">email:</label>
		 	 <input  type="" name="email_f" class="form-control"value="<?php echo @$email_f?>" required/>
		 	
		 </div>
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