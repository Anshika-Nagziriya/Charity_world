<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $number=$_POST['number'];

  $s="select * from sign_up where firstName='$firstName' and lastName='$lastName'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if ($num == 1) {
    echo" username Already Taken ";
  }else{
    $reg="insert into sign_up (firstName,lastName,email,password,number) values('$firstName','$lastName','$email','$password','$number')";
    mysqli_query($con , $reg);
    echo "successfully registered";
  }
 ?>
