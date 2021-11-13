<?php
session_start();

require('menu2.php');


require('brarudiformule.php');
?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>nouvel fournit</title>
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
                <div class="panel-heading"> nouveau fournit :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertfournit.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="quantite">quantite:</label>
		 	 <input  type="" name="quantite" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="pu">pu:</label>
		 	 <input  type="" name="pu" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="date">date:</label>
		 	 <input  type="date" name="date" class="form-control" required/>
		 	
		 </div>
		   <?php
    
    $cherchF=$jul->query("SELECT * FROM fournisseur");
 ?>

<div class="form-group">
  
    <label for="id_fournisseur">fournisseur:</label>
  
    <select name="fournisseur" class="form-control" id="id_f" >
       <?php while($result=$cherchF->fetch())
       {
        ?>
        <option  value="<?php echo $result['id_f'];?>">
        <?php echo $result['nom_f'];?>
     </option>
      <?php
    }
    ?>
  </select>
  </div>
  <?php
//APPEL DES TABLES ETRANGER DE ID
    
    $cherchM=$jul->query("SELECT * FROM materiel");
   
    ?>


<div class="form-group">
    
    <label for="id_materiel">materiel:</label>

    
    <select name="materiel" class="form-control" id="id_m" >
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