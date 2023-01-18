<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HelperController extends Controller
{
    public function responseApiData($data){
        $website_code = base64_encode(env('WEBSITE_CODE'));

        $res = Http::get('https://backend.meeting.co.th/api/'.$data.'/'.$website_code);
        $data = json_decode($res->body());

        $str_len = strlen($data);
        $substring = substr($data,0,20);
        $substring2 = substr($data,20,$str_len);

        $array_substring = str_split($substring);

        for($i=18; $i >= 0; $i-=2){
            unset($array_substring[$i]);
        }

        $data = json_decode(base64_decode(implode($array_substring) . $substring2));
        return $data;
    }
}
