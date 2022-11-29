<?php require './header.php';?>

<div class="m-auto container mb-5 d-flex justify-content-evenly row" style="width: 100%;">
    
    <?php 
    $animals=array();
    $animals=json_decode(file_get_contents('favorite.json'));
    foreach($animals as $animal) :
    ?>
              <?PHP $test=( explode('/',$animal->message));?>

                <div class="card col-3 my-3 p-2" style="width: 18rem;">
                  <img src="<?= $animal->message?>" class="card-img-top my-3" alt="animal picture">
                  <div class="card-body">
                    <h5 class="card-title my-3"><?= $test[4]; ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint nisi culpa, corporis aliquam sed aspernatur architecto ad saepe libero. Et soluta repellat autem dolorem eum consequatur qui dolor ullam dolores!</p>
                  </div>
                  <form action="./animal.php" method="GET">
                    <input type="hidden" name="image" value="<?= $animal->message ?>">
                    <input type="hidden" name="status" value="<?= $test[4]; ?>">
                  </form>
                </div>
              
            
    <?php endforeach ?>
      </div>

 <?php require './footer.php';?>