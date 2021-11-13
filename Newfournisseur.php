<?php

session_start();

require('menu2.php');

require('brarudiformule.php');
?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>nouvel fournisseur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>

<body>




	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> nouveau fournisseur :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertfournisseur.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="code">code:</label>
		 	 <input  type="" name="code_f" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="nom">nom:</label>
		 	 <input  type="" name="nom_f" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="prenom">prenom:</label>
		 	 <input  type="" name="prenom_f" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="telephone">telephone:</label>
		 	 <input  type="" name="telephone_f" class="form-control" required/>
		 	
		 </div>
		 <div class="form-group">
		 	<label for="email">email:</label>
		 	 <input  type="" name="email_f" class="form-control" required/>
		 	
		 </div>
		<button type="submit" name="send" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
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