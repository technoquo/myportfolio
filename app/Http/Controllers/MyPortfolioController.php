<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class MyPortfolioController extends Controller
{
    public function index()
    {


        $seo = (session('locale') == 'en') ? 'My Portfolio' : 'Mi Portafolio';

        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();

        $portfolios = Portfolio::where('active', 1)->get();



        return view('myportfolio.index', ['seo' => $seo, 'page' => $page, 'portfolios' => $portfolios]);
    }
}
