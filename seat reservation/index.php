<?PHP
session_start();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<div class="container" style="margin-top:30px;">

<div class="container m-auto">
    <p>admin@test.com<br>password:1234<br><br>test@test.com<br>password:1234<br><br>badu@mailinator.com<br>Pa$$w0rd!</p>
</div>

   <form class="m-auto w-50 border border-3 p-1" action="./validation.php" method="POST">

   <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
  </div>
    <div class="text-center">
        <input type="submit" class="btn btn-primary w-50 " value="Login">
    </div>
    <div class="text-end">
        <a class="btn btn-link" href="./registration.php">Register Now!</a>
    </div>

</form>
<?PHP if(isset($_SESSION['error_message'])):?>


  <div class="alert alert-dark mt-5 w-50 text-center m-auto" role="alert">
  <?= $_SESSION['error_message']; ?>

  </div>


<?PHP endif; 
session_destroy();
?>
</div>