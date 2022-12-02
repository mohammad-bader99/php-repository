

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<div class="container"  style="margin-top:15%;">
    
   <form class="m-auto w-50 border border-3 p-1" action="./creat_user.php" method="POST">

   <div class="mb-3 row">
    <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputLastName" class="col-sm-2 col-form-label">Last Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
  </div>
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
        <input type="submit" class="btn btn-primary w-50 " value="Register">
    </div>


</form>

</div>