<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        $title = "WELCOME TO LOGIC !!!!!!!";
        return view('pages.index', compact('title'));
        // or   return view('pages.index')->with('title',$title);
    }
    public function about (){
        $title = "WELCOME TO ABOUT !!!!!!!";
        return view('pages.about')->with('title',$title);
    } public function services (){
       $data = array(
           'title'=>'OUR SERVICEEEES',
           'services'=>['react','redux','saga']
       );
        return view('pages.services')->with($data);
    }
}
