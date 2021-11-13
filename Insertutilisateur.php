<?php
//require_once('Role.php');
require_once('brarudiformule.php');
if(isset($_POST['send'])){

  $email=htmlspecialchars($_POST['email']);
  $password=($_POST['password']);
  $confirm=($_POST['confirm']);
  $username=htmlspecialchars($_POST['username']);
 // $role=htmlspecialchars($_POST['role']);
  //$etat=htmlspecialchars($_POST['etat']);
 if($confirm!=$password){
    echo "<script>alert('confirm is same password please!!!');</script>";
  }else{
    $prep=$jul->prepare("INSERT INTO users (email,password,confirm,username) VALUES(?,?,?,?)");
    $param=array($email,$password,$confirm,$username);
 $prep->execute($param);
 header('location:Newutilisateur.php');
  } 

}
?>