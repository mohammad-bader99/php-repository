<?PHP

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    {
        session_start();
        $_SESSION['error_message']="you are trying to access the code directly";
        header('location: ./index.php');
    }

require './function.php';

 $obj =new user_db();
 $obj->create_seats($_POST['number_of_seats']);