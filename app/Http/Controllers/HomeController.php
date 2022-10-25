<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(string $name): View
    {
        return view('home', [
            'name' => $name
        ]);
    }
}
