<?PHP

require './function.php';

$userObj = new user_db;
$userObj->create_user($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']);