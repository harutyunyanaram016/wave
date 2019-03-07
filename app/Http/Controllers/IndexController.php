<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class IndexController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index',compact('item'));
    }

    public function about()
    {
        return view('about');
    }

    public function team()
    {
        return view('team');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blogView()
    {
        return view('blogView');
    }

    public function logo()
    {
        return view('logo');
    }

    public function card()
    {
        return view('card');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function order()
    {
        return view('order');
    }

    public function html()
    {
        return view('html');
    }
    public function react()
    {
        return view('react');
    }
    public function oop()
    {
        return view('oop');
    }
    public function js()
    {
        return view('js');
    }
    public function php()
    {
        return view('php');
    }
     public function web()
    {
        return view('web');
    }
	 public function design()
    {
        return view('design');
    }
	 public function banners()
    {
        return view('banners');
    }
}
