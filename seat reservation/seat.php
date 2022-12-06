<?PHP

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
{
    session_start();
    $_SESSION['error_message']="you are trying to access the code directly";
    header('location: ./index.php');
}

require './header.php';
$obj = new user_db;
$result=$obj->get_seat($_POST['seat_number']);

$user_info=$_SESSION['user'];


if($result['is_reserved']==0){
    $seat_reserved="No";
    $bg_color="text-bg-success";
}
else{
    $seat_reserved="Yes";
    $bg_color="text-bg-warning";
}

?>

        <div class="container d-flex justify-content-between">
            <div class="card <?=$bg_color?> my-5 m-auto" style="width: 18rem;height:18rem;">
                <div class="card-body m-auto">
                        <h1 class="card-title" style="margin-top:6rem;"><?=$result['seat_number'];?></h1>              
                </div>
            </div>
            <div class="m-auto">
                <h1>Seat Number : <?=$result['seat_number'];?></h1>
                <h1>Seat Reserved : <?= $seat_reserved?></h1>

                <?PHP if($result['is_reserved']==1):?>

                    <h1>Seat Owner : <?= $result['user_email']?></h1>

                <?PHP endif;?>




                <?PHP if($result['is_reserved']=="0" && $user_info['role']=="user") :?>

                    <form action="./reserve_seat.php" method="POST">
                        <input type="submit" value="Reserve Seat" class="btn btn-primary">
                        <input type="hidden" name="seat_number" value="<?= $result['seat_number']?>">
                        <input type="hidden" name="user_email" value="<?= $user_info['email']?>">
                    </form>

                <?PHP elseif($result['is_reserved']=="1" && $result['user_email']==$user_info['email'] && $user_info['role']=="user"):?>

                    <form action="./unreserve_seat.php" method="POST">
                        <input type="submit" value="Unreserve Seat" class="btn btn-danger">
                        <input type="hidden" name="seat_number" value="<?= $result['seat_number']?>">
                    </form>

                <?PHP elseif($user_info['role']=="admin"):?>

                    <form action="./delete_seat.php" method="POST">
                        <input type="submit" value="Delete Seat" class="text-bg-dark">
                        <input type="hidden" name="seat_number" value="<?= $result['seat_number']?>">
                    </form>

                <?PHP endif;?>

            </div>
        </div>



<?PHP require './footer.php';?>