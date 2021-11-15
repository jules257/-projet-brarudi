<?php
session_start();
require('brarudiformule.php');
require('menu2.php');
$rechercher=isset($_GET['rechercher'])?$_GET['rechercher']:"";
$size=isset($_GET['size'])?$_GET['size']:"5";
$page=isset($_GET['page'])?$_GET['page']:"1";
$offset=($page-1)*$size;
 $cherchF=$jul->query("SELECT * FROM fournisseur where nom_f like '%$rechercher%' limit $size offset $offset");
 $cherchcount=$jul->query("SELECT count(*) countfournisseur from fournisseur where nom_f like '%$rechercher%'");
 $tablecount=$cherchcount->fetch();
 $nombrefournisseur=$tablecount['countfournisseur'];
 $reste=$nombrefournisseur%$size;
 if($reste===0)
 	$nombrepage=$nombrefournisseur/$size;
 else
 	$nombrepage=floor($nombrefournisseur/$size)+1;
             
                ?>

<!DOCTYPE HTML>
<html>
<head>
	<title> gestion fournisseur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	
	<!-- JavaScript Bundle with Popper -->



</head>

<body>


<?php

//$cherchF=$jul->query("SELECT* FROM fournisseur");
?>	
<div class="container">
		
<form method="GET" action="fournisseur.php">
	
	<?php if($_SESSION['role']=='ADMIN')
	{
		?>

<h1 align="center"><a href="Newfournisseur.php"><span class="glyphicon glyphicon-link"></span>nouveau fournisseur</a></h1>
<?php
}
?>
</form>
</div>



	


	
<div class="col-md-12">
<div class="panel panel-info">
 <div class="panel-heading">Liste des fournisseurs(<?php echo $nombrefournisseur?>fournisseurs) </div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>CODE</th>
		<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>NOM</th>
		<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>PRENOM</th>
		<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
</svg>TELEPHONE</th>
		<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>EMAIL</th>
<?php if($_SESSION['role']=='ADMIN')
{
	?>
		<th colspan="2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>OPTION</th>
<?php
}
?>
		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		while( $result=$cherchF->fetch()){
		?>

		<tr>
			<td><?php echo $result['code_f']?>
				
			</td>
		<td><?php echo $result['nom_f']?>
		</td>
		<td><?php echo $result['prenom_f']?>
		</td>
		<td><?php echo $result['telephone_f']?>
		</td>
		<td><?php echo $result['email_f']?>
		</td>
		<?php if($_SESSION['role']=='ADMIN')
		{
			?>
		<td>
			<a href="Editfournisseur.php?id=<?php echo $result['id_f']?>"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deletefournisseur.php?ids=<?php echo $result['id_f']?>"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></td>
<?php
}
?>	
</tr>
	<?php 
}
?>
		
	</tbody>
</table>
<div>
	<ul class="pagination">
		<?php for($i=1;$i<=$nombrepage;$i++){
			?>
			<li class="<?php if($i==$page) echo'active'?>">
				<a href="fournisseur.php?page=<?php echo $i;?> &rechercher=<?php echo $rechercher?>">
					<?php echo $i;?>
				</a>
				
			</li>
			<?php
		}
			?>
		
	</ul>
</div>


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
	input{
		outline: none;
	}
</style>	
</body>
</html>
