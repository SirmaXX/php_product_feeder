
    <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require('JsonController.php');

$xml1 = new Json();
$xml1->Update($id, $name, $price, $category);


?>

