<?PHP

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
{
    session_start();
    $_SESSION['error_message']="you are trying to access the code directly";
    header('location: ./index.php');
}
require './function.php';

$userObj = new user_db;
$userObj->create_user($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']);