
    <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('JsonController.php');
$json_items = new Json();
$json_items->All_row();


?>

