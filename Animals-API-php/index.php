<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Animals API</title>
</head>
<body>
    
<div class="container d-flex justify-content-center my-5 p-5">
<form class="w-50  border border-success p-5" action="validation.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address (test@test.com)</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password (1234)</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary w-100">Sign In</button>
  </div>
</form>
</div>
</body>
</html>