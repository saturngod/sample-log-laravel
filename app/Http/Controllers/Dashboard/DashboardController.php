<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logs;
use Log;
class DashboardController extends Controller
{
    public function home(Request $request) {
        $logs = Logs::orderBy('id', 'desc')->simplePaginate(50);

        $from_date = date("Y-m-d") . " 00:00";
        $to_date = date("Y-m-d"). " 23:59";
        $channel = "";
        $type = "";
        $text = "";
        return view("admin",compact('logs','from_date','to_date','channel','type','text'));
    }

    public function search(Request $request) {
        
        $logs = Logs::query();

        $from_date = date("Y-m-d") . "00:00";
        $to_date = date("Y-m-d"). "23:59";
        $channel = "";
        $type = "";
        $text = "";

        if($request->from_date != "" && $request->to_date != "" && $request->from_date != null && $request->to_date != null) {
            
            $from_date = $request->from_date;
            $to_date = $request->to_date;

            $logs->where('created_at', '>=', $request->from_date)->where('created_at', '<=', $request->to_date);
        }
        if($request->channel != null || $request->channel != "") {
            $channel = $request->channel;
            $logs->where("channel",$request->channel);
        }

        if($request->type != null || $request->type != "") {
            $type = $request->type;
            $logs->where("type",$request->type);
        }

        if($request->text != null || $request->text != "") {
            $text = $request->text;
            $logs->whereRaw("MATCH (text) AGAINST ('$request->text' WITH QUERY EXPANSION)");
        }
        $logs = $logs->orderBy('id', 'desc')->simplePaginate(50);

        return view("admin",compact('logs','from_date','to_date','channel','type','text'));
        
    }

    public function testLog() {
        $msg = array(
            "photo" => "data:image\/jpeg;base64,\/9j\/4AAQSkZJRg"
        );

        Log::info($msg);
        return "done";
    }
}
