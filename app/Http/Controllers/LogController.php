<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessLog;

class LogController extends Controller
{
    function write(Request $request) {
        
        if(request()->getHttpHost() != env("LOG_ADDRESS")) {
            return "";
        }
        if($request->token == env("LOG_TOKEN")) {
            if($request->text != "" && $request->text != null) {

                $channel = $request->channel;
                $type = $request->type;
                $text = $request->text;
                if($channel == null || $channel == "") {
                    $channel = "default";
                }

                if($type == null || $type == "") {
                    $type = "info";
                }

                if($text == null || $text == "") {
                    //not saving
                    return "";
                }
                

                ProcessLog::dispatch($channel,$type,$text);
                return "";
            }
        }
        return "";
    }
}
