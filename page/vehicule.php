<?php

session_start();
require('menu2.php');
require('brarudiformule.php');
$rechercher=isset($_GET['rechercher'])?$_GET['rechercher']:"";
$size=isset($_GET['size'])?$_GET['size']:"5";
$page=isset($_GET['page'])?$_GET['page']:"1";
$offset=($page-1)*$size;
$cherchV=$jul->query("SELECT * FROM vehicule WHERE plaque_v like '%$rechercher%' limit $size offset $offset");
$cherchcount=$jul->query("SELECT count(*) countvehicule from vehicule where plaque_v like '%$rechercher%'");
$tablecount=$cherchcount->fetch();
$nombrevehicule=$tablecount['countvehicule'];
$reste=$nombrevehicule%$size;
if($reste===0)
	$nombrepage=$nombrevehicule/$size;
else
	$nombrepage=floor($nombrevehicule/$size)+1;
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> gestion vehicule</title>
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
		
<form method="GET" action="vehicule.php">
	
	<?php if($_SESSION['role']=='ADMIN')
	{
		?>
	<h1 align="center"><a href="Newvehicule.php"><span class="glyphicon glyphicon-link"></span>nouveau vehicule</a></h1>
<?php
}
?>

<?php

//$cherchV=$jul->query("SELECT* FROM vehicule");
?>
</form>
</div>



	


	
<div class="col-md-12">
<div class="panel panel-info">
 <div class="panel-heading">Liste des vehicules(<?php echo $nombrevehicule?>vehicules)</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
<thead>
		<tr>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"/>
</svg>PLAQUE</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>NOM</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>MARQUE</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
  <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
</svg>MODELE</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type" viewBox="0 0 16 16">
  <path d="m2.244 13.081.943-2.803H6.66l.944 2.803H8.86L5.54 3.75H4.322L1 13.081h1.244zm2.7-7.923L6.34 9.314H3.51l1.4-4.156h.034zm9.146 7.027h.035v.896h1.128V8.125c0-1.51-1.114-2.345-2.646-2.345-1.736 0-2.59.916-2.666 2.174h1.108c.068-.718.595-1.19 1.517-1.19.971 0 1.518.52 1.518 1.464v.731H12.19c-1.647.007-2.522.8-2.522 2.058 0 1.319.957 2.18 2.345 2.18 1.06 0 1.716-.43 2.078-1.011zm-1.763.035c-.752 0-1.456-.397-1.456-1.244 0-.65.424-1.115 1.408-1.115h1.805v.834c0 .896-.752 1.525-1.757 1.525z"/>
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
		while($result=$cherchV->fetch()){
		?>
		<tr>
			<td>
				<?php echo $result['plaque_v']?>
					
				</td>
			<td>
				<?php echo $result['nom_v']?>
					
				</td>
			<td>
				<?php echo $result['marque_v']?>
					
				</td>
			<td>
				<?php echo $result['modele_v']?>
					
				</td>
			<td>
				<?php echo $result['type_v']?>
					
				</td>
				<?php if($_SESSION['role']=='ADMIN')
				{
					?>
			<td>
				<a href="Editvehicule.php?id=<?php echo $result['id_v']?>"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
			</td>
			<td>
				<a onclick="return confirm('voulez_vous supprimer?')" href="Deletevehicule.php?ids=<?php echo $result['id_v']?>"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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
            <a href="vehicule.php?page=<?php echo $i;?>&rechercher=<?php echo $rechercher ?>">
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
