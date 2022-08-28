
<?php

class Test
{

  function __construct()
  {
  }


  function run()
  {
    static $callCount = 0;
    printf("%d\n", ++$callCount);
  }

  function Ex_time($fname, $par)
  {
    // Starting clock time in seconds
    $start_time = microtime(true);
    $fname($par);
    // End clock time in seconds
    $end_time = microtime(true);
    // Calculate script execution time
    $execution_time = ($end_time - $start_time);
    echo " Execution time of script = " . $execution_time . " sec";
  }

  function Criteria($var, $datatype)
  {
    $testcount = 0;
    if (Check_Type($var, $datatype) == true) {
      $testcount = ++$testcount;
    }
    if (Check_Output($func, $par, $output) == true) {
      $testcount = ++$testcount;
    }
  }
  /*
  $a = 3;
  $intt='string';
  checktype($a,$intt);
  */
  function  Check_Type($var, $datatype)
  {
    if (gettype($var) == $datatype) {
      return true;
    } else {
      return false;
    }
  }



  function  Check_Output($func, $par, $output)
  {
    if ($func($par) == $output) {
      return true;
    } else {
      return false;
    }
  }
}


$test = new Test();
echo $test->run();
echo $test->run();
echo $test->run();
echo $test->run();


?>