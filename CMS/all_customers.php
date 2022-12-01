<?PHP

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "htu";

    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);

    $customers = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $customers[] = $row;
        }
    }

    ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="m-auto w-50 text-center mt-5">
<a href="./create_customer.php" class="btn btn-success w-30">Creat New Customer</a>
</div>

<div class="d-flex justify-content-center">



<div class="container w-50 my-5 p-5 border-top">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    
    <?PHP
    foreach($customers as $customer):
    ?>

    <tr>
      <th scope="row"><?=$customer['id'];?></th>
      <td><?=$customer['first_name'];?></td>
      <td><?=$customer['last_name'];?></td>
      <td><?=$customer['phone_number'];?></td>
      <td><?=$customer['email'];?></td>
    </tr>

    <?PHP endforeach?>

  </tbody>
</table>

</div>


</div>