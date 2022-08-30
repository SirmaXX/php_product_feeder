
<?php
$calls = 0;
$passed = 0;
class Test
{

  function __construct()
  {
  }

  public function run($fname, $par)
  {
    echo  $GLOBALS['calls']++;

    $this->Ex_time($fname, $par);
    $this->Criteria('int', $fname, $par, 1000);
  }

  /* çalışma zamanını bize saniye olarak olarak veren metod
  Main code : https://www.geeksforgeeks.org/measuring-script-execution-time-in-php/
  */
  public function Ex_time($fname, $par)
  {
    // Starting clock time in seconds
    $start_time = microtime(true);
    $fname($par);
    // End clock time in seconds
    $end_time = microtime(true);
    // Calculate script execution time
    $execution_time = ($end_time - $start_time);
    echo " Execution time of script = " . $execution_time . " sec";
    echo "<br>";
    echo " " . $GLOBALS['passed'] . " test are passed ";
  }

  /* aşağıdaki 2 methodu çalıştırmamızı sağlayan method */
  public function Criteria($datatype, $func, $par, $output)
  {
    $testcount = 0;
    if ($this->Check_Type($output, $datatype) == true) {
      $testcount = $testcount + 1;
    }
    if ($this->Check_Output($func, $par, $output) == true) {
      $testcount = $testcount + 1;
    }

    return  $testcount;
  }
  /*

  fonksiyon çıktısının bizim istediğimiz  çıktının veri tipi aynımı kontrol eden method
  */
  public  function  Check_Type($output, $datatype)
  {
    if (gettype($output) == $datatype) {

      echo "tipler eşit";
      return true;
    } else {
      echo "tipler eşit değil";
      return false;
    }
  }


//istenilen output ile  fonksiyonun outputu eşitmi onu kontrol eden method
  function  Check_Output($func, $par, $output)
  {
    if ($func($par) == $output) {
      return true;
    } else {
      return false;
    }
  }


  /* source https://stackoverflow.com/questions/6041741/fastest-way-to-check-if-a-string-is-json-in-php */
  public function  isJson($str)
  {
    $json = json_decode($str);
    return $json && $str != $json;
  }
}

/*
Hazır bir örnek 
function deneme($a){

  for($i = 1; $i <1000; $i++)
  {
    $a++;
  }
  return $a;
  }



$a = 3;
//$intt='string';
$intt='integer';
$test =new Test();
echo $test->Check_Output('deneme',1,1000);
*/

?>