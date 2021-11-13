<?php
session_start();
//require('Identifiant.php');
 
  require('menu2.php');
require('brarudiformule.php');

//RECUPERATION
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $cherch=$jul->query("SELECT * FROM users where id_users='$id'");
  $result=$cherch->fetch();
  $email=$result['email'];
  $password=$result['password'];
  $confirm=$result['confirm'];
  $username=$result['username'];
  $role=$result['role'];

}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> Edition utilisateur</title>
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
                <div class="panel-heading">Edition de l'utilisateur :</div>
                <div class="panel-body">

           <form method="POST" action="Updateutilisateur.php" enctype="multipart/form-data">
           
  <div class="form-group">
              <label >id utilisateur:<?php echo @$id?></label>
              <input type="hidden" name="id" class="form-control"  value="<?php echo @$id?>">
              
            </div>

           	<div class="form-group">
              <label >email:</label>
           		<input type="email" name="email" class="form-control" autocomplete="off" value="<?php echo @$email?>">
           		
           	</div>
           	<div class="form-group">
           		<label>password:</label>
           		<input type="password" name="password" class="form-control" autocomplete="off" value="<?php echo @$password?>">

           		
           	</div>
           	<div class="form-group">
           		<label>confirm:</label>
           		<input type="password" name="confirm" class="form-control"autocomplete="off" value="<?php echo @$confirm?>">
           		
           	</div>
            <div class="form-group">
              <label>username:</label>
              <input type="" name="username" class="form-control"autocomplete="off" value="<?php echo @$username?>">
              
            </div>
            <div class="form-group">
              <label>role:</label>
              <input type="" name="role" class="form-control"autocomplete="off" value="<?php echo @$role?>">
              
            </div>
           
            <?php if($_SESSION['username']=='ADMIN')
            {
              ?>
           	<button type="submit" name="modify" class="btn btn-success">
           		<span class="glyphicon glyphicon-save"></span>
           		modifier
      
           	</button>
           	
            <?php
          }
            ?>

           </form>
           </div>
           </div>
           </div>     	

</body>
<style >
  .container{
    margin-top: 90px;
  }
  body{
    background: #31604a;
  }
</style>
</html>