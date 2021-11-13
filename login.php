<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="boustrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
<div class="contain">
  <div class="panel panel-info margetop60">
    <div class="panel-heading" align="center">authentification</div>
    <div class="panel-body">
      
    
<form method="POST" action="" class="form" enctype="multipart/form-data">
  <div class="form-group" >
    <input type="" name="username"  autocomplete="off" class="form-control" placeholder="username..">
</div>
<div class="form-group">
    <input type="password" name="password" autocomplete="off" class="form-control" placeholder="password.." minlength="3">
</div>
<div class="form-group">
    <input type="password" name="confirm" autocomplete="off" class="form-control"placeholder="confirm.." minlength="3">
    
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-success" name="enregistrer">login</button>
  	
  </div>
  
  </form>



    </div>
  </div>
  </div>
  <style>
  	.panel-heading{
  		width:1000px;
  	}
  	.form-group{
  		width: 500px;
  		margin-top: 60px;
  	}
  	.panel panel-info{
  		width: 1000px;
  	}
  	.panel-body{
  		width: 1000px;
  	}
  	.card{
  		margin-top: 30px;
  	}
  </style>
	

</body>
</html>