<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);



//datafile
$data_file = 'Json_Folder/products.json';



function Json_to_Xml($data_file)
{
    // Read the JSON file 
    $json = file_get_contents($data_file);
    // Decode the JSON file
    $json_data = json_decode($json, true);
    build($json_data);
}
// echo '<xmp>'.Json_to_Xml($data_file) .'</xmp>';

//return $dom->saveXML();
function build($json_data)
{
    $keys = array_keys($json_data);

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    $root = $dom->createElement('root');
    $dom->appendChild($root);
    for ($i = 0; $i < count($json_data); $i++) {
        $result = $dom->createElement('row');
        $root->appendChild($result);
        foreach ($json_data[$keys[$i]] as $key => $value) {

            $result->appendChild($dom->createElement($key, $value));
        }
    }

    echo '<xmp>' . $dom->saveXML() . '</xmp>';
}

function Build_Single($json_data, $id)
{
    $id=$id-1;
    $onevalue =  $json_data[$id];
    $keys = array_keys($onevalue);

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    $root = $dom->createElement('root');
    $dom->appendChild($root);


    $result = $dom->createElement('row');
    $root->appendChild($result);

    $result->appendChild($dom->createElement($keys[0], $json_data[$id]['id']));
    $result->appendChild($dom->createElement($keys[1], $json_data[$id]['name']));
    $result->appendChild($dom->createElement($keys[2], $json_data[$id]['price']));
    $result->appendChild($dom->createElement($keys[3], $json_data[$id]['category']));



    echo '<xmp>' . $dom->saveXML() . '</xmp>';
}



function SJson_to_Xml($data_file, $id)
{
    // Read the JSON file 
    $json = file_get_contents($data_file);
    // Decode the JSON file
    $json_data = json_decode($json, true);


    Build_Single($json_data, $id);
}

function Xml_SDelete($data_file, $id){
      $data = file_get_contents($data_file);
      $json =  json_decode($data, true);
  
      unset($json[$id]);
  
      $json = json_encode($json, JSON_PRETTY_PRINT);
      file_put_contents($data_file, $json);
    
}


function Xml_SUpdate($data_file, $id,$name,$price,$category)
{
    $data = file_get_contents($data_file);
    $json =  json_decode($data, true);

    foreach ($json as $a) {

      if ($a['id'] == $id) {

        if (!empty($name)) {
          $a['name'] = $name;
        }
        if (!empty($price)) {
          $a['price'] = $price;
        }
        if (!empty($category)) {
          $a['category'] = $category;
        }
      }
    }

    $json = json_encode($json);
    file_put_contents($data_file, $json);
  }



?>