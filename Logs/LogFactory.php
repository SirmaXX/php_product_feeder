<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
/* My own logging library :https://github.com/SirmaXX/phplogger */
class Log
{
    
    
    protected $logfile;
    protected $path;
    protected $time;
    protected $process;
   


    public function getSeverity()
    {
     
     echo $this->logtime;
     echo '<br>';

     echo '<br>';
     echo $this->logprocess;
   
    }
    public static function create($severity, $process)
    {

    	
      	$log_file = 'log.txt';
        $currenttime=date("Y.m.d/h.i.sa");
        $handle = fopen($log_file, 'a') or die('Cannot open file:  '.$log_file);
        $data = "[Aciliyet:$severity] [Zaman:$currenttime]   [İŞLEM :$process ]  \n  ";
        fwrite($handle, $data);
       

    }
}
// Bu sınıflar için yeni özellikler için açıldı
class Info extends Log{

}

class Warning extends Log{

}


class Error extends Log{

}
/*
Example usage
*/
$log =new Info();
$log = Info::create('ERROR','newadditem(processname)');


