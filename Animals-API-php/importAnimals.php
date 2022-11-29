<?PHP
define('ANIMALS_API_URL', 'https://dog.ceo/api/breeds/image/random');
for ($i =0;$i<20;$i++){
$animals_array[] = json_decode(file_get_contents(ANIMALS_API_URL));
}
$json_array=json_encode($animals_array);
file_put_contents('./animals.json',$json_array);
header('location: ./home.php');