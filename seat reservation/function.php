<?PHP

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
                'email' => $result['email'],
                'first_name' => $result['first_name'],
                'last_name' => $result['last_name'],
                'role' => $result['role']
            );
        }
            return $result;
    }



    public function create_seats($num)
    {
        $sql="INSERT INTO seats VALUES()";
        while($num>0)
        {
            mysqli_query($this->conn, $sql);
            $num--;
        }
        header('location: home.php');
    }


    public function get_all_seats()
    {
      
        $sql = "SELECT * FROM seats";
        $result = mysqli_query($this->conn, $sql);

        $seats = array();

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
                $seats[] = $row;
            }
        }
        return $seats;
    }


    public function get_seat($seat_number)
    {
        $sql="SELECT * FROM seats WHERE seat_number='$seat_number'";
        return mysqli_fetch_array(mysqli_query($this->conn,$sql));
    }



    public function reserve_seat($seat_number,$user_email)
    {
        $sql="UPDATE `seats` SET `user_email`='$user_email',`is_reserved`='1' WHERE seat_number='$seat_number'";
        mysqli_query($this->conn,$sql);
        header('Location: ./home.php');
    }



    public function unreserve_seat($seat_number)
    {
        $sql="UPDATE `seats` SET `user_email`='',`is_reserved`='0' WHERE seat_number='$seat_number'";
        mysqli_query($this->conn,$sql);
        header('Location: ./home.php');
    }



    public function delete_seat($seat_number)
    {
        $sql="DELETE FROM `seats` WHERE seat_number='$seat_number'";
        mysqli_query($this->conn,$sql);
        header('Location: ./home.php');
    }

}