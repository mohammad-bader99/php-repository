<?php

$first_name=$_POST['first_name']?$_POST['first_name']:NULL;
$last_name=$_POST['last_name']?$_POST['last_name']:NULL;
$phone_number=$_POST['phone_number']?$_POST['phone_number']:NULL;
$email=$_POST['email']?$_POST['email']:NULL;

if( isset($first_name) && isset($last_name) && isset($phone_number) && isset($email))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "htu";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql = "INSERT INTO customers (first_name, last_name, phone_number, email) VALUES ('$first_name', '$last_name', '$phone_number', '$email')";
    mysqli_query($conn, $sql);
    
    header('Location: ./all_customers.php');
}
else{
    header('Location: ./create_customer.php');
}