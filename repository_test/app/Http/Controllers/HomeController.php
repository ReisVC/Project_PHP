<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        $name = "Vitor";
        return view('site/home', [
            'name' => $name
        ]);
    }
}