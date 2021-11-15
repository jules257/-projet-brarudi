<!DOCTYPE HTML>
<html>
<head>
  <title> nouveau utilisateur</title>
  <meta charset="utf-8">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
  <?php
 // session_start();
//require('Menuprincipale.php');
?>
  
 

	 <div class="container">

                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading">nouveau utilisateur :</div>
                <div class="panel-body">

           <form method="POST" action="Insertutilisateur.php" enctype="multipart/form-data" class="form">
           	<div class="form-group">
              <label >email:</label>
           		<input type="email" name="email" class="form-control" autocomplete="off" >
           		
           	</div>
           	<div class="form-group">
           		<label>password:</label>
           		<input type="password" name="password" class="form-control" autocomplete="off" >

           		
           	</div>
           	<div class="form-group">
           		<label>confirm:</label>
           		<input type="password" name="confirm" class="form-control"autocomplete="off">
           		
           	</div>
            <div class="form-group">
              <label>username:</label>
              <input type="" name="username" class="form-control"autocomplete="off" >
              
            
           
           	<button type="submit" name="send" class="btn btn-success">
           		<span class="glyphicon glyphicon-save"></span>
           		enregistrer
      
           	</button>
            <a href="logina.php">let's go to authentification</a>
           	

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