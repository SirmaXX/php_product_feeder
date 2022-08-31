<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


class Xml
{

  private $data_file = 'Data_Folder/products.json';


  function __construct()
  {
    if (!file_exists($this->data_file)) {
      echo "Dosya yok";
    }
  }
  public function build($json_data)
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


  public function Json_to_Xml()
{
    // Read the JSON file 
    $json = file_get_contents($this->data_file);
    // Decode the JSON file
    $json_data = json_decode($json, true);
    $this->build($json_data);
}
// echo '<xmp>'.Json_to_Xml($data_file) .'</xmp>';

//return $dom->saveXML();


public function Build_Single($json_data, $id)
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



public function SJson_to_Xml( $id)
{
    // Read the JSON file 
    $json = file_get_contents($this->data_file);
    // Decode the JSON file
    $json_data = json_decode($json, true);


    $this->Build_Single($this->data_file, ($id+1));
}

public function Xml_SDelete( $id){
      $data = file_get_contents($this->data_file);
      $json =  json_decode($data, true);
  
      unset($json[$id]);
  
      $json = json_encode($json, JSON_PRETTY_PRINT);
      file_put_contents($this->data_file, $json);
    
}


public function Xml_SUpdate( $id,$name,$price,$category)
{
    $data = file_get_contents($this->data_file);
    $json =  json_decode($data, true);

    foreach ($json as &$a) {

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
    file_put_contents($this->data_file, $json);
  }


  public function XML_SAdd($name, $price, $category)
  {
    $data = file_get_contents($this->data_file);
    $json =  json_decode($data, true);
    $elementCount  = count($json);
    if ($elementCount == 2147483647) {
      //2 milyar  147 milyon 483 bin  647 .veride hata verecektir çünkü int limitine ulaşılmıştır.
      echo " veritabanında idleri sıfırla çünkü id doldu. ";
    } else {
      if (empty($json[$elementCount + 1])) {
        echo "veri var";
      } else {
        $array = array(
          "id" => $elementCount + 1,
          "name" => $name,
          "price" => $price,
          "category" => $category
        );

        $json[] = $array;
      }
    }
    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents($this->data_file, $json);
  }

}

/*
EXAMPLE for adding
$xml1=new Xml();
$xml1->Json_to_Xml();

*/

?>
