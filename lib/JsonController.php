<?php

class Json
{

  private $data_file = 'Json_Folder/products.json';


  function __construct()
  {
    if (!file_exists($this->data_file)) {
      echo "Dosya yok";
    }
  }


  public function All_row()
  {
    $json = file_get_contents($this->data_file);
    $json_data = json_decode($json, true);
    print_r($json_data);
  }


  public function Single_row($id)
  {
    // Read the JSON file 
    $json = file_get_contents($this->data_file);
    // Decode the JSON file
    $json_data = json_decode($json, true);
    print_r($json_data[$id + 1]);
  }
  /*  add function */
  public function Single_Add($name, $price, $category)
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
  /*  update function */

  public function Update($id, $name, $price, $category)
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

  public function Single_Delete($id)
  {

    $data = file_get_contents($this->data_file);
    $json =  json_decode($data, true);
    if (!empty($json[$id + 1])) {
      unset($json[$id + 1]);
    } else {
      echo "veri yok";
    }


    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents($this->data_file, $json);
  }
}

/* 
example
$json = new Json();
$json->All_row();

*/
?>

?>
