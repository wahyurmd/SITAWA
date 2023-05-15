<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function ishiharaTest()
    {
        return view('ishihara-test');
    }

    public function resultTest()
    {
        return view('result_test');
    }

    public function about()
    {
        return view('about');
    }

    public function howtodo()
    {
        return view('instruction');
    }
}
