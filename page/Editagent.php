
<?php
session_start();
require('menu2.php');
require('brarudiformule.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$jul->query("SELECT* FROM agent where id_a='$id'");
		$result=$cherchA->fetch();
		$code_a=$result['code_a'];
		$nom_a=$result['nom_a'];
		$prenom_a=$result['prenom_a'];
		$telephone_a=$result['telephone_a'];
		$email_a=$result['email_a'];
}
?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Edit agent</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>

	
<?php

$cherchA=$jul->query("SELECT* FROM agent");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition agent :</div>
                <div class="panel-body">
		
<form method="POST" action="Updateagent.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_a">id agent: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

		
		 <div class="form-group">
		 	<label for="code">code:</label>
		 	 <input  type="" name="code_a" class="form-control"value="<?php echo @$code_a?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="nom">nom:</label>
		 	 <input  type="" name="nom_a" class="form-control"value="<?php echo @$nom_a?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="prenom">prenom:</label>
		 	 <input  type="" name="prenom_a" class="form-control" value="<?php echo @$prenom_a?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="telephone">telephone:</label>
		 	 <input  type="" name="telephone_a" class="form-control" value="<?php echo @$telephone_a?>"required/>
		 	
		 </div>
		 <div class="form-group">
		 	<label for="email">email:</label>
		 	 <input  type="" name="email_a" class="form-control"value="<?php echo @$email_a?>" required/>
		 	
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

