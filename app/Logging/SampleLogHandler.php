<?php
namespace App\Logging;
// use Illuminate\Log\Logger;
use DB;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class SampleLogHandler extends AbstractProcessingHandler{
    private $config;
    public function __construct($level = Logger::DEBUG, $bubble = true,$with) {
        $this->config = $with;
        parent::__construct($level, $bubble);
    }


    protected function write(array $record):void
    {

        $text = $record["message"];

        $re = '/("|\')data:image(.+);base64,(.+)("|\')/m';
        $subst = '"[IMAGE FILE]"';
        $text =  preg_replace($re, $subst, $text);

        $json = [
        "token" => $this->config["token"],
        "channel" => $record["channel"],
        "type" => $record["level_name"],
        "text" => $text
        ];
        
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => $this->config['address'],
        CURLOPT_RETURNTRANSFER => false,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 2,
        CURLINFO_HEADER_OUT => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($json),
        CURLOPT_HTTPHEADER => [
            "content-type: application/json"
        ],
        ]);

        curl_exec($curl);
        curl_close($curl);
   

        
    }
}