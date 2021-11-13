<?php

session_start();

require('menu2.php');
require('brarudiformule.php');
$rechercher=isset($_GET['rechercher'])?$_GET['rechercher']:"";
$size=isset($_GET['size'])?$_GET['size']:"5";
$page=isset($_GET['page'])?$_GET['page']:"1";
$offset=($page-1)*$size;

	
$cherchDV=$jul->query("SELECT id_dv,quantite,date,motif,lieu,nom_m,nom_a,plaque_v FROM deplace_vehicule INNER JOIN materiel ON materiel.id_m=deplace_vehicule.id_m INNER JOIN agent ON agent.id_a=deplace_vehicule.id_a INNER JOIN vehicule ON vehicule.id_v=deplace_vehicule.id_v WHERE lieu like '%$rechercher%' limit $size offset $offset ");

$cherchcount=$jul->query("SELECT count(*) countdeplace from deplace_vehicule where lieu like '%$rechercher%'");
$tablecount=$cherchcount->fetch();
$nombredeplace_vehicule=$tablecount['countdeplace'];
$reste=$nombredeplace_vehicule % $size;
if($reste===0)
	$nombrepage=$nombredeplace_vehicule/$size;
else
	$nombrepage=floor($nombredeplace_vehicule/$size)+1;



?>
<!DOCTYPE HTML>
<html>
<head>
  <title> gestion fournit</title>
  <meta charset="utf-8">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
  
  
  <!-- JavaScript Bundle with Popper -->



</head>

<body>
 
<div class="container">
    
<form method="GET" action="deplace_vehicule.php">
	
	<?php if($_SESSION['role']=='ADMIN')
	{
		?>
	<h1 align="center"><a href="Newdeplace_vehicule.php"><span class="glyphicon glyphicon-link"></span>nouveau deplacer</a></h1>
	<?php
}
	?>
				<?php
//$req="SELECT id_dv ,quantite,date,motif,lieu,nom_m,nom_a,plaque_v FROM deplace_vehicule,materiel,agent,vehicule where materiel.id_m=deplace_vehicule.id_m AND agent.id_a=deplace_vehicule.id_a AND vehicule.id_v=deplace_vehicule.id_v";



//$cherchDV=$jul->query("SELECT id_dv,quantite,date,motif,lieu,nom_m,nom_a,plaque_v FROM deplace_vehicule INNER JOIN materiel ON materiel.id_m=deplace_vehicule.id_m INNER JOIN agent ON agent.id_a=deplace_vehicule.id_a INNER JOIN vehicule ON vehicule.id_v=deplace_vehicule.id_v");

?>
</form>
<div class="col-md-12">
<div class="panel panel-info">
 <div class="panel-heading">Liste des transports(<?php echo $nombredeplace_vehicule?>deplacer) </div>
     <div class="panel-body">
                    <table class="table table-striped table-striped">	
	<thead>
		<tr>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-half" viewBox="0 0 16 16">
  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
</svg>QUANTITE</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
  <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
</svg>DATE</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclude" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z"/>
</svg>MOTIF</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
  <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
</svg>LIEU</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>nom_MATERIEL</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>nom_AGENT</th>
			<th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>plaque_VEHICULE</th>
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
		while($result=$cherchDV->fetch()){
		?>
		<tr>
			<td>
				<?php echo $result['quantite']?>
			</td>
			<td>
				<?php echo $result['date']?>
			</td>
	
			<td>
				<?php echo $result['motif']?>
			</td>
			<td>
				<?php echo $result['lieu']?>
			</td>
			<td>
				<?php echo $result['nom_m']?>
			</td>
			<td>
				<?php echo $result['nom_a']?>
			</td>
			<td>
				<?php echo $result['plaque_v']?>
			</td>
			<?php if($_SESSION['role']=='ADMIN')
			{
				?>
	<td>
		<a href="Editdeplace_vehicule?id=<?php echo $result['id_dv']?>"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>

		<a onclick="return confirm('voulez_vous supprimer?')" href="Deletedeplace_vehicule?ids=<?php echo $result['id_dv']?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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
		<?php for($i=1;$i<=$nombrepage;$i++) {?>
		<li class="<?php if($i==$page) echo 'active'?>">
			<a href="deplace_vehicule.php?page=<?php echo $i;?> &rechercher=<?php echo $rechercher;?>">
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
		background:#31604a;
	}
	input{
		outline: none;
	}
	
</style>  
</body>
</html>