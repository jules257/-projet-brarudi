<?php

require_once('brarudiformule.php');
if(isset($_POST['send'])){
	var_dump($_POST,$_FILES);
	$imagesmimes=['image/png','image/jpeg','image/gif'];
	if(in_array($_FILES['photo']['type'],$imagesmimes)){

$titre=$_POST['titre'];
$contenu=$_POST['contenu'];
$photo=$_FILES['photo']['name'];
		$prep=$jul->prepare("INSERT INTO galerie(titre,contenu,photo) values(?,?,?) ");
		$param=array($titre,$contenu,$photo);
		$prep->execute($param);

		$requete=__DIR__.DIRECTORY_SEPARATOR./*NOM DU DOSSIER*/"photo".DIRECTORY_SEPARATOR./*nom de variable declarer*/$photo;
		move_uploaded_file($_FILES['photo']['tmp_name'],$requete);
	}
}
?>


<!DOCTYPE HTML>

<html>
<head>
	<title>galerie</title>
	<meta charset="utf-8">
</head>
<body>
	<style >
		input{
			outline: none;
			margin-top:50px;
		}
		.container{
			border:40px;
			background:#83aa87;
			margin: 80px;
		}
	</style>
	
	<form method="POST" action="" enctype="multipart/form-data" >
		<div class="container" align="center">
		<div class="group-form">
			<label>titre</label>
			<input type="" name="titre" value="">
			
		</div>
		<div class="group-form">
			<label>contenu</label>
			<input type="" name="contenu" value="">
			
		</div>
		<div class="group-form">
			<input type="file" name="photo" value="">
			
		</div>
		<button type="submit" name="send">enregistrer</button>
	</div>
	</form>	

</body>
</html>