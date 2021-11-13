<?php
session_start();


require_once("brarudiformule.php");
if(isset($_POST['enregistrer'])){
  $username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$prep=$jul->prepare("SELECT * FROM users WHERE username=? AND password=? AND confirm=?");
$param=array($username,$password,$confirm);
$prep->execute($param);
$info=$prep->rowcount();

if($info==1){


 $row=$prep->fetch();
 $_SESSION['id_users']=$row['id_users'];

 $_SESSION['email']=$row['email'];
 $_SESSION['password']=$row['password'];
 $_SESSION['confirm']=$row['confirm'];
 $_SESSION['username']=$row['username'];
$_SESSION['role']=$row['role'];

header("location:dashbord.php");  
      
 }
  else
  {
  echo"<script>alert('incorrect or you can call the administration please!!');</script>";
        }
       
      

}
    





?>

<!DOCTYPE HTML>
<html> 
<head>
	<title>login</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="boustrap/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=0.25">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
    </head>

        <style>
  .card{
    background:#83aa87;
    margin-top:40px;
     margin-right:30px;
      height: 500px;
      width: 350px;
      margin-right:60px;
  
}
input{
      background:white;
    margin-top:50px;
    font-size: 20px;
    border-radius: 2px;
    font-family: none;
    border:none;
    border-bottom:5px;
    outline: none;

  }
  placeholder{
    border-radius: 2px;

  }
  body{
    background:url(Desert.jpg);
    display: flex;
  }
  button{
    margin-top: 30px;
  }
  .contain{
    margin-left: 500px;
  }
  
  




</style>





<body>
  
    
      <form method="POST" action="">
        <div class="contain">
        

        <div  class="card" align="center">
  <p align="center" style="font-size:reds"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg> authentification</p>
<table align="center">
  <tr>
    <td>
      <input type="text" name="username" minlength="3" placeholder="username.." required >
      
    </td>
    
  </tr>
  <tr>
    <td>
      <input type="password" name="password" minlength="3" placeholder="password.." required>
    </td>
  </tr>
  <tr>
    <td>
      <input type="password" name="confirm"minlength="3" placeholder="confirm.." required>
    </td>
  </tr>
  <tr>
    <td>
           <button type="submit" name="enregistrer" value="envoyer" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
  <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
</svg>login</button>
    </td>
 
  </tr>
  <tr>
    <td>
       <div class="card-footer text-muted" style="color:white;">do you have account??
    <a href="Newutilisateur.php"class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
    creating here</a>
    
  </div>
    </td>
  </tr>
     

 
</table>
 </div>
</div>
</form>
     
 
      
    
    
  
  
</body>
</html>

  
 






