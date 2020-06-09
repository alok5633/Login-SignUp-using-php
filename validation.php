<?php
 $dbhost = 'localhost:3307';
 $dbuser = 'root';
 $dbpass = '';
 $db     = 'signup';


 session_start();
 $con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if($con){
     echo "connection successful hurray";
 }else{
     echo "no connection rcgfhjvc";
 }

 $check=mysqli_select_db($con,'signup');
 echo $check;

 $name=$_POST['user'];
 $pass=$_POST['password'];

 $q="select * from signin where name='$name' && password='$pass'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);

 if($num==1){
     $_SESSION['username']=$name;
     header('location:home.php');

 }else{
    header('location:login.php');
 }




?>