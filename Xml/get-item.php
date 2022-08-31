
    <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require('XmlController.php');
    $xml1 = new Xml();
    $xml1->SJson_to_Xml( $id);


    ?>

