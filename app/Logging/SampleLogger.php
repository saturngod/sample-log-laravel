<?php

namespace App\Logging;
use Monolog\Logger;

class SampleLogger
{

    public function __invoke(array $config)
    {
     
        $logger = new Logger($config['channel']);
        return $logger->pushHandler(new SampleLogHandler(Logger::DEBUG,true,$config['with']));
        
    }
}