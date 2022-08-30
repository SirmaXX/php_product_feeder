<?php


include 'lib/Router.php';
include 'lib/JsonController.php';
include 'lib/XmlController.php';
include ('Logs/LogFactory.php');


$router = new Router($_SERVER);
 

$router->addRoute('JsonAll', function() {
    $json=new Json();
    $json->All_row();
     
});



$router->addRoute('XmlAll', function() {
    $xml=new Xml();
    $xml->Json_to_Xml();
    
    
});


$router->addRoute('Jsonid', function() {
   /* $jsonn=new Json();
    $jsonn->Single_row($id);  */
});


$router->addRoute('anasayfa', function() {
   return  view('anasayfa');
});
 
$router->addRoute('info', function() { 
    phpinfo();
 });
 
 
 $router->addRoute('', function() {
    return  view('anasayfa');
 });


/**
 * Run it!
 */
$router->run();

?>
