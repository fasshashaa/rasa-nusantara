<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menuFavorit = Menu::where('is_favorit', true)->take(6)->get();

        return view('home', compact('menuFavorit'));
    }
}