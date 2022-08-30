<?php
/* My own logging library :https://github.com/SirmaXX/phplogger */
class Log
{
    protected $severity;
    protected $user;
    protected $logfile;
    protected $path;
    protected $time;
    protected $process;
    protected $browser;

    public function __construct($severity,$user, $time,$process,$browser)
    {
        $this->logseverity = $severity;
        $this->logtime=$time;
        $this->loguser=$user;
        $this->logprocess=$process;
        $this->logbrowser=$browser;
    }

    public function getSeverity()
    {
     echo $this->logseverity;
     echo '<br>';
     echo $this->logtime;
     echo '<br>';
     echo $this->loguser;
     echo '<br>';
     echo $this->logprocess;
     echo '<br>';
     echo $this->logbrowser;
    }
}

class LogFactory 
{


    public static function create($severity, $process)
    {

    	
      	$log_file = 'log.txt';
        $currenttime=date("Y.m.d/h.i.sa");
        $user= $_SERVER['REMOTE_ADDR'];
        $browser=$_SERVER['HTTP_USER_AGENT'];
        $handle = fopen($log_file, 'a') or die('Cannot open file:  '.$log_file);
        $data = ".[Aciliyet: ].$severity. [Zaman :].$currenttime  . [Kullanıcı :] .$user.  [İŞLEM :]  .$process .[Tarayıcı :]  .$browser";
        fwrite($handle, $data);
       

    }
}

/*
Example usage

$log =new LogFactory();
$log = LogFactory::create('ERROR(severity)','newadditem(processname)');
*/

