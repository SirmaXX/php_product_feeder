<?php
// update job
$data_file='Json_Folder/products.json';

$id = 12;
$data = file_get_contents($data_file);
$json =  json_decode($data, true);

foreach($json as &$a){

    if ($a['id'] ==$id) {
        $a['name']='denizdeniz';
        $a['price']=10000000;
        $a['category']='denizdeniz';
    }   
}

echo json_encode($json);
$json = json_encode($json);
file_put_contents($data_file, $json);
?>

<?php
// create job
$data_file='Json_Folder/products.json';
$id = 5;
$data = file_get_contents($data_file);
$json =  json_decode($data, true);
 
$array = array(
    "id"=> 11,
    "name"=> "deneme",
    "price"=> 9999,
    "category"=>"Home Decor"

);
$json[] = $array;
$json = json_encode($json, JSON_PRETTY_PRINT);
file_put_contents($data_file, $json);

?>


<?php
// update job
$data_file='Json_Folder/products.json';
$id = 5;
$data = file_get_contents($data_file);
$json =  json_decode($data, true);
 
$array = array(
    "id"=> 11,
    "name"=> "deneme",
    "price"=> 9999,
    "category"=>"Home Decor"

);
$json[] = $array;
$json = json_encode($json, JSON_PRETTY_PRINT);
file_put_contents($data_file, $json);

?>