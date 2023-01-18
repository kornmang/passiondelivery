<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\HelperController;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $banners = (new HelperController)->responseApiData('banners');

        // $res = Http::get('https://backend.meeting.co.th/api/banners/WB20230101');
        // $banners = json_decode($res->body());

		// $str_len = strlen($banners);

		// $substring = substr($banners,0,20);
        // $substring2 = substr($banners,20,$str_len);

        // $array_substring = str_split($substring);

		// for($z=18; $z >= 0; $z-=2){
        //     unset($array_substring[$z]);
        // }

        // $banners = json_decode(base64_decode(implode($array_substring) . $substring2));

        return view('client.home',compact('banners'));
    }

    public function aboutus()
    {
        return view('client.passionfood.aboutus');
    }

    public function menu()
    {
        return view('client.passionfood.menu');
    }

    public function menusignature()
    {
        return view('client.passionfood.menusignature');
    }

    public function menudetail()
    {
        return view('client.passionfood.menudetail');
    }

    public function blogall()
    {
        return view('client.passionfood.blogall');
    }

    public function blog()
    {

        return view('client.passionfood.blog');
    }

    public function contact()
    {
        return view('client.passionfood.contact');
    }
}
