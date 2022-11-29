<?php
if(empty($_GET)){
  header("Location: ./index.php");
}
 $provided_email="test@test.com";
 $provided_password="1234";

 if($_GET['email']!=$provided_email || $_GET['password']!=$provided_password){
     header("Location: ./index.php");
 }else{
    header("Location: ./home.php");
 }

