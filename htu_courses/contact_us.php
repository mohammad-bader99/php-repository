<?php require './header.php';?>
<script>document.getElementById("slogan").style.display="none";</script>
<main class="container my-5">

    
<form class="m-auto border border-success p-2 border-opacity-10 p-3" style="width: 50%;">
<div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">What can we help you with?</label>
    <div class="col-sm-10">
      <textarea class="form-control " id="inputEmail3" rows="5" style="resize: none;"></textarea>
    </div>
  </div>
  
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success" style="width: 100%;">send</button>
    </div>
</form>

</main>
<?php require './footer.php';?>