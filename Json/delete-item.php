
    <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require('JsonController.php');

$json_item = new Json();
$json_item->Single_Delete($id);


?>

