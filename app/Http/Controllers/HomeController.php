<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Anime;

class HomeController extends Controller
{

    public function index(): View
    {
        return view('home',
            ['animes' => Anime::all()]
        );
    }
}
