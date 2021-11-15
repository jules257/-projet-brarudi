<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	 <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    <link rel="stylesheet"  href="bootstrap-5.0.2-dist/js/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.0-dist">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.1-dist">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
</head>
<body>
	
	 <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
    
  <div class="container-fluid">
  	<img src="logo.JPEG.jpg" width="85px">
    <a class="navbar-brand" href="dashbord.php">
    	<i class="glyphicon glyphicon-cloud"></i>
    page acceuil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">&nbsp logout</a>
        </li>
       <?php if($_SESSION['username']=='ADMIN')
       {
       	?>
        <li class="nav-item">
          <a class="nav-link" href="utilisateur.php">
          &nbsp utilisateur</a>
        </li>
        <?php
    }
        ?>
        <li class="nav-item dropdown"   style="font-color: white;">
          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="deplace_vehicule.php">&nbsp gestion deplacer</a></li>
            <li><a class="dropdown-item" href="fournit.php">&nbsp gestion fournit</a></li>
            <li ><a class="dropdown-item" href="materiel.php">&nbsp gestion materiel</a>
        </li>
        <li ><a class="dropdown-item" href="fournisseur.php">&nbsp gestion fournisseur</a>
        </li>
        <li><a class="dropdown-item" href="agent.php">&nbsp gestion agent</a>
        </li>
        <li ><a class="dropdown-item" href="vehicule.php">&nbsp gestion vehicule</a>
        </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <ul class="nav navbar-nav">
       <li>
          <a href="Editutilisateur.php?id=<?php echo $_SESSION['id_users']?>">
          	<i class="glyphicon glyphicon-user"></i>
          	<?php echo $_SESSION['username']?>
          </a>
        </li>

        </ul>
    </ul>
       
     <form class="d-flex">
      <input class="form-control me-2" name="rechercher" type="search" placeholder="Search" aria-label="Search" value="<?php echo@$rechercher?>">
      <button class="btn btn-outline-success" type="submit">
      	<i class="glyphicon glyphicon-search"></i>
      Search</button>
    </form>   
     </div>
  </div>

</nav>

<style>
	.container-fluid{

	background:#83aa87 ;
	}
	.nav-item{
		font-size: 20px;
		
	}
	input{
		outline: none;
	}
</style>

</body>
</html>