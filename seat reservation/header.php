<?php
session_start();

if (!isset($_SESSION['user']))
{
    $_SESSION['error_message']="you are trying to access the code directly";
    header('Location: index.php');
}

$user_info=$_SESSION['user'];
$name=$user_info['role'].' : '.$user_info['first_name'].' '.$user_info['last_name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Seat Reservation</title>
</head>
<body>

<header>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">Reserve Seat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>

        <?PHP if ($user_info['role']=="admin") :?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Create More seats</a>
        </li>

        <?php endif;?>

        <li class="nav-item">
            <h3 class="position-absolute start-50"><?=$name;?></h3>
        </li>
        <li class="nav-item">
            <a type="button" class="btn btn-danger position-absolute end-0 me-5" href="./logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>