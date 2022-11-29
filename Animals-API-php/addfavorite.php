<?PHP
$animal_image=$_POST['image'];
$animal_status=$_POST['status'];

$animal_array=json_decode(file_get_contents('favorite.json'));

foreach ($animal_array as $animal)
{
    if($animal->message == $animal_image)
    {
        header('Location: favorite.php');
        die;
    }
}


$animal_array[] = (object) array(
    'message' => $animal_image,
    'status' => $animal_status,
);

file_put_contents('favorite.json',json_encode($animal_array));
header('Location: ./favorite.php');