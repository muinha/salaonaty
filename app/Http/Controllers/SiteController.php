<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\painel\TablePrice;

class SiteController extends Controller
{
    
    public function index()
    {
        return view('site.index');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function photo()
    {
        $tab = TablePrice::all();
        return view('site.photo', compact('tab'));
    }

    public function table()
    {
        $table = TablePrice::all();
        return view('site.table', compact('table'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function services($name)
    {
        $tab = TablePrice::all();
        $service = TablePrice::where('name_service', $name)->get();
        return view('site.service',[
            'tab'       =>  $tab,
            'service'   =>  $service
        ]);
    }

}
