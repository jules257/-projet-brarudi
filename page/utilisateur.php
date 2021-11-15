<?php

session_start();
require('menu2.php');
require('brarudiformule.php');
$rechercher=isset($_GET['rechercher'])?$_GET['rechercher']:"";
$size=isset($_GET['size'])?$_GET['size']:"5";
$page=isset($_GET['page'])?$_GET['page']:"1";
$offset=($page-1)*$size;
$cherch=$jul->query("SELECT * FROM users where username like '%$rechercher%' limit $size offset $offset");
$cherchcount=$jul->query("SELECT count(*) countusers from users where username like '%$rechercher%'");
$tablecount=$cherchcount->fetch();
$nombreusers=$tablecount['countusers'];
$reste=$nombreusers%$size;

if($reste===0)
$nombrepage=$nombreusers/$size;
else
$nombrepage=floor($nombreusers/$size)+1;
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> gestion utilisateur</title>
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
    
<form method="GET" action="utilisateur.php">
  
  <h1 align="center"><a href="Newutilisateur.php"><span class="glyphicon glyphicon-link"><span>nouveau utilisateur</a></h1>
    <?php

//$cherch=$jul->query("SELECT* FROM users");
?>


</form>






  
<div class="col-md-12">
<div class="panel panel-info">
 <div class="panel-heading">Liste des utilisateurs(<?php echo $nombreusers?>utilisateurs)</div>
     <div class="panel-body">
   <table class="table table-striped table-striped">
                        <thead>
                            <tr>
                                <th>EMAIL</th> <th>PASSWORD</th> <th>CONFIRME</th><th>USERNAME</th><th>ROLE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($result=$cherch->fetch()){ ?>
                                <tr class="">
                                    <td><?php echo $result['email'] ?> </td>
                                    <td><?php echo $result['password'] ?> </td>
                                     <td><?php echo $result['confirm'] ?> </td>
                                    <td><?php echo $result['username'] ?> </td>
                                    <td><?php echo $result['role'] ?> </td>
                                      
                                  <td>
        <a href="Editutilisateur.php?id=<?php echo $result['id_users']?>"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
      </td>
      <td>
        <a onclick="return confirm('voulez_vous supprimer?')" href="Deleteutilisateur.php?ids=<?php echo $result['id_users']?>"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
      </td>
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
            <a href="utilisateur.php?page=<?php echo $i;?>rechercher=<?php echo $rechercher?>">
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
    background:#31604a;
  }
  input{
    outline: none;
  }
  @media screen AND(max-width: 700px;){
  
  }
</style>
</div>  
</body>
</html>






    
 