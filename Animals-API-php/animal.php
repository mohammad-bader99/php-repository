<?php require './header.php';
$animal=(object) $_GET;
?>
    <div class="container my-5 d-flex justify-content-center">
        <div class="mx-5">
            <img src="<?=$animal->image?>" alt="animal photo">
        </div>
        <div class="mx-5">
            <ul>
                <tr>
                    <li><h1>Animal name: <?=$animal->status?></h1></li>
                </tr>
                <tr>
                    <li><p>Animal description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis deserunt delectus explicabo commodi, repellendus quisquam dolorum, at placeat officia in blanditiis laudantium maiores doloremque. Distinctio, asperiores? Pariatur facilis non cumque!</p></li>
                </tr>
                <tr>
                    <form action="./addfavorite.php" method="POST">
                        <input type="submit" class="btn btn-primary" value="Add to favorite">
                        <input type="hidden" name="image" value="<?=$animal->image?>">
                        <input type="hidden" name="status" value="<?=$animal->status?>">
                    </form>
                </tr>
            </ul>
        </div>
    </div>
<?php require './footer.php';?>