<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $seo = (session('locale') == 'en') ? 'About me' : 'Sobre mi';


        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();
        return view('about.index', ['seo' => $seo, 'page' => $page]);
    }
}
