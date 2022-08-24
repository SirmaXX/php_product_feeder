  <?php
/*
  //datafile
$data_file='../Json_Folder/products.json';
// Read the JSON file 
$json = file_get_contents($data_file);
  
// Decode the JSON file
$json_data = json_decode($json,true);
  
// Display data
//print_r($json_data);

//print_r($json_data[1]['id']);
print_r($json_data[0]['price']);
*/



  //datafile
$data_file='../Json_Folder/products.json';

function Json_to_Xml($data_file){
  // Read the JSON file 
  $json = file_get_contents($data_file);
  // Decode the JSON file
  $json_data = json_decode($json,true);
  $keys = array_keys($json_data);


    $dom = new DOMDocument('1.0','UTF-8');
    $dom->formatOutput = true;
  
    $root = $dom->createElement('root');
    $dom->appendChild($root);
    for($i = 0; $i < count($json_data); $i++) {
      $result = $dom->createElement('row');
      $root->appendChild($result);
      foreach($json_data[$keys[$i]] as $key => $value) {
         
          $result->appendChild( $dom->createElement($key, $value ) );
        } 
  
      }
      return $dom->saveXML();
    }
  echo '<xmp>'.Json_to_Xml($data_file) .'</xmp>';


?>
