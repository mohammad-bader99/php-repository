<?PHP
session_start();
class user_db
{

    protected $conn;

   function __construct()
   {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "htu";

    $this->conn = mysqli_connect($servername, $username, $password, $database);
   }

   public function create_user($first_name,$last_name,$email,$password)
    {

        if( isset($first_name) && isset($last_name) && isset($email) && isset($password))
    {
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        mysqli_query($this->conn, $sql);
        
        header('Location: ./index.php');
    }
    else{
        header('Location: ./user.php');
    }}


    public function get_user($email,$password)
    {
        
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result=mysqli_fetch_array(mysqli_query($this->conn, $sql));

if($result['password']==$password)
{
    $_SESSION['user']=array(
        'first_name' => $result['first_name'],
        'last_name' => $result['last_name'],
        'role' => $result['role']
    );
}
    return $result;
    }


}