<?PHP require './header.php'; ?>

<main>

        <div class="container mb-5" style="margin-top:15%;">
            <form class="m-auto w-50 border border-3 p-1" method="POST" action="./create_seats.php">
                <div class="my-3 d-flex justify-content-center">
                    <label for="inputNumberofBoxes" class="w-50">Select Number of Seats to Add : </label>
                    <input type="number" name="number_of_seats" class="w-50">
                    
                </div>
                <div>
                    <input type="submit" class="w-100 my-3 btn btn-primary" value="Create Seats">
                </div>
            </form>
        </div>

</main>

<?PHP require './footer.php'; ?>