<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banners;
use App\Models\ProductCategory;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {

        return view('client.home');
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

    public function blog()
    {

        return view('client.passionfood.blog');
    }

    public function contact()
    {

        return view('client.passionfood.contact');
    }




    // public function product()
    // {
    //     $categories = ProductCategory::where('publish',1)->orderBy('sort','asc')->get();
    //     return view('client.boorawee.product',compact('categories'));
    // }

    // public function minerals()
    // {
    //     $categories = ProductCategory::where('publish',1)->orderBy('sort','asc')->get();
    //     return view('client.boorawee.minerals',compact('categories'));
    // }

}
