<?PHP

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
{
    session_start();
    $_SESSION['error_message']="you are trying to access the code directly";
    header('location: ./index.php');
}
var_dump($_POST);

require './function.php';

$obj = new user_db;
$obj->delete_seat($_POST['seat_number']);