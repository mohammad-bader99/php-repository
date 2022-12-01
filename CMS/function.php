<?PHP


class db
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

    function create($first_name,$last_name,$phone_number,$email)
    {

        if( isset($first_name) && isset($last_name) && isset($phone_number) && isset($email))
    {
        $sql = "INSERT INTO customers (first_name, last_name, phone_number, email) VALUES ('$first_name', '$last_name', '$phone_number', '$email')";
        //mysqli_query($this->conn, $sql);
        mysqli_query($this->conn, $sql);
        
        header('Location: ./all_customers.php');
    }
    else{
        header('Location: ./create_customer.php');
    }}

    function get_all_customers()
    {
        $sql="SELECT * FROM customers";
        $result=mysqli_query($this->conn,$sql);
        return $result;
    }

}