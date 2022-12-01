  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  
  
<form action="./store.php" method="POST">

<div class="container w-50 text-center my-5 p-5">

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
    <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" required>
    </div>
  </div>

  <input type="submit" class="btn btn-success mt-2" value="Create Customer">

</div>

</form>