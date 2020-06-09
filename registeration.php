<?php
 $dbhost = 'localhost:3307';
 $dbuser = 'root';
 $dbpass = '';
 $db     = 'signup';


 session_start();
 header('location:login.php');
 $con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if($con){
     echo "connection successful hurray";
 }else{
     echo "no connection rcgfhjvc";
 }

 $check=mysqli_select_db($con,'signup');
 

 $name=$_POST['user'];
 $pass=$_POST['password'];
 $email=$_POST['email'];
 $bday=$_POST['bday'];
 $gender=$_POST['gender'];
 echo $name;
 echo $pass;
 echo $email;
 echo $bday;
 echo $gender;
 $q="select * from signin where name='$name' && password='$pass'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);

 if($num==1){
     echo "duplicate data";
 }else{
     $qy="insert into signin(name,password,email,dob,gender) values ('$name','$pass','$email','$bday','$gender')";
     if(!mysqli_query($con,$qy)){
         echo "data not inserted";
     }
     

     
 }




?>