<?php require './header.php';

$obj=new user_db();
$results=$obj->get_all_seats();



?>

<div class="container row d-flex justify-content-around my-5 m-auto">

<?PHP foreach($results as $result):
    if($result->is_reserved){
        $bg_color="text-bg-warning";
    }
    else{
        $bg_color="text-bg-success";
    }
    ?>

        <div class="card <?= $bg_color?> mb-5 col-3 d-flex align-items-center" style="max-width: 18rem;height:18rem;">
        
            <div class="card-body">
                    <h1 class="card-title" style="margin-top:6rem;"><?=$result->seat_number;?></h1>              
            </div>
            <form action="seat.php" method="Post">
                <input type="hidden" name="seat_number" value="<?=$result->seat_number?>">
            </form>
            
        </div>

<?PHP endforeach;?>

</div>





<?PHP require './footer.php';?>

