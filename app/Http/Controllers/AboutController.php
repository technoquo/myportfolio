<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use App\Models\Menu;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $seo = (session('locale') == 'en') ? 'About me' : 'Sobre mi';


        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();

        $learnings = Learning::where('active', 1)->get();
        return view('about.index', ['seo' => $seo, 'page' => $page, 'learnings' => $learnings]);
    }
}
