<?php
session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    {
        session_start();
        $_SESSION['error_message']="you are trying to access the code directly";
        header('location: ./index.php');
    }
    
require './function.php';

$user_email=isset($_POST['email'])?$_POST['email']:null;
$user_password=isset($_POST['password'])?$_POST['password']:null;

if($user_email!=null && $user_password!=null)
{
    $userObj = new user_db;
    $result=$userObj->get_user($user_email,$user_password);

    if($result && $result['password']==$user_password)
    {
        $email=$result['email'];
        header("Location: ./home.php");
    }
    else
    {
        $_SESSION['error_message']="wrong email or password";
        header("location: ./index.php");
    }
}