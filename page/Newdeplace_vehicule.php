<?php

session_start();

require('menu2.php');

require('brarudiformule.php');
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>nouvel transport</title>
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
                <div class="panel-heading"> nouveau transport :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertdeplace_vehicule.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="quantite">quantite:</label>
		 	 <input  type="" name="quantite" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="date">date:</label>
		 	 <input  type="date" name="date" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="motif">motif:</label>
		 	 <input  type="" name="motif" class="form-control" required/>
		 	
		 </div>
		 <div class="form-group">
		 	<label for="lieu">lieu:</label>
		 	 <input  type="" name="lieu" class="form-control" required/>
		 	
		 </div>
		   <?php
      //APPEL DE ID ETRANGER
      
$cherchM=$jul->query("SELECT * FROM materiel");
//$result=$cherch->fetch();

      ?>
      
<div class="form-group">
    <label for="materiel">materiel:</label>

    <select name="materiel"class="form-control" id="id_m">
      <?php
      while($result=$cherchM->fetch())
      {
      ?>
      <option value="<?php echo $result['id_m'];?>">
<?php echo $result['nom_m'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
        </div>    
   
   
      <?php
      //APPEL DE ID ETRANGER
      
      $cherchA=$jul->query("SELECT * FROM agent");
      //$result=$cherch->fetch();
      ?>
      <div class="form-group">
      <label for="agent">agent:</label>

      <select name="agent"class="form-control" id="id_a">
        <?php
        while($result=$cherchA->fetch()){
        ?>
        <option value="<?php echo $result['id_a'];?>">
          <?php echo $result['nom_a'];?>
          
        </option>
        <?php
      }
        ?>
        
      </select>
      </div>
          

      
    
      
      <?php
      //APPEL DE ID ETRANGER
      
      $cherchV=$jul->query("SELECT * FROM vehicule");
      //$result=$cherch->fetch();
      ?>
      <div class="form-group">
      <label for="vehicule">vehicule:</label>

      <select name="vehicule"class="form-control" id="id_v">
        <?php
        while($result=$cherchV->fetch()){
        ?>
        <option value="<?php echo $result['id_v'];?>">
          <?php echo $result['plaque_v'];?>
          
        </option>
        <?php
      }
        ?>
        
      </select>
      </div>
          

      

		 <button type="submit" name="send" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button>
</form>
</div>
</div>
</div>
</div>
<style>
	.container{
		margin-top: 90px;
	}
  body{
    background: #31604a;
  }
</style>
</body>
</html>