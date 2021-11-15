<?php

session_start();

require('menu2.php');

require('brarudiformule.php');
$rechercher=isset($_GET['rechercher'])?$_GET['rechercher']:"";
$size=isset($_GET['size'])?$_GET['size']:"5";
$page=isset($_GET['page'])?$_GET['page']:"1";
$offset=($page-1)*$size;

$cherchM=$jul->query("SELECT* FROM materiel where nom_m like '%$rechercher%' limit $size offset $offset");
$cherchcount=$jul->query("SELECT count(*) countmateriel from materiel where nom_m like '%$rechercher%'");

$tablecount=$cherchcount->fetch();
$nombremateriel=$tablecount['countmateriel'];
$reste=$nombremateriel % $size;
if($reste===0)
$nombrepage=$nombremateriel/$size;
else
$nombrepage=floor($nombremateriel/$size)+1;
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> gestion materiel</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	
	<!-- JavaScript Bundle with Popper -->



</head>

<body>

	
<div class="container">
		
<form method="GET" action="materiel.php">
	
	<?php if($_SESSION['role']=='ADMIN')
	{
		?>
	<h1 align="center"><a href="Newmateriel.php"><span class="glyphicon glyphicon-link"></span>nouveau materiel</a></h1>
	<?php
}
	?>
<?php

//$cherchM=$jul->query("SELECT* FROM materiel");
?>
</form>
</div>



	


	
<div class="col-md-12">
<div class="panel panel-info">
 <div class="panel-heading">Liste des materiels(<?php echo $nombremateriel?>materiels) </div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>NOM</th>
		<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>TYPE</th>
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
		while( $result=$cherchM->fetch()){
		?>

		
		<td><?php echo $result['nom_m']?>
		</td>
		<td><?php echo $result['type_m']?>
		</td>
		<?php if($_SESSION['role']=='ADMIN')
		{
			?>
				<td>
				<a href="Editmateriel.php?id=<?php echo $result['id_m']?>"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
			</td>
			<td>
				<a onclick="return confirm('voulez_vous supprimer?')" href="Deletemateriel.php?ids=<?php echo $result['id_m']?>"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
			</td>
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
                        <?php for($i=1;$i<=$nombrepage;$i++){ ?>
                            <li class="<?php if($i==$page) echo 'active' ?>"> 
            <a href="materiel.php?page=<?php echo $i;?>&rechercher=<?php echo $rechercher ?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
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
		
