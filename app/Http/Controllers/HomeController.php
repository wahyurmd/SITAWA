<?php

namespace App\Http\Controllers;

use App\Models\IshiharaPlate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function ishiharaTest()
    {
        $ishiharaPlate = IshiharaPlate::inRandomOrder()->take(18 )->get();

        return view('ishihara-test', compact(
            'ishiharaPlate'
        ));
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
