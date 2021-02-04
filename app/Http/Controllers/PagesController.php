<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Welcome to Laravel!";
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "About Us!";
        $data = array(
            'weare' => 'An Agency of Peace',
            'wedo' => "All Kinds of Jobs",
            'wecreate' => "All kinds of Software",
            'coreValues' => ['Peace', 'Unity', 'Love']
        );
        return view('pages.about')->with($data);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'Man' => 'Man',
            'services' => ['web design', 'Web development', 'Seo'] 
        );
        return view('pages.services')->with($data);
    }
    public function contact(){
        return view('pages.contact');
    }
}
