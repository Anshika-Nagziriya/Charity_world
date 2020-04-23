<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $number=$_POST['number'];

  $s="select * from sign_up where firstName='$firstName' && $password=$'password'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if ($num == 1) {
    header('location:index.html');
  }
  else{
  header('location:login.php');
  }
 ?>
