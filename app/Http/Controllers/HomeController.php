<?php

namespace App\Http\Controllers;

use App\Models\ConfigLangs;
use App\Models\Menu;
use App\Models\Skills;
use Illuminate\Http\Request;

class  HomeController extends Controller
{
    public function index()
    {

        if (!session()->has('locale')) {
            session(['locale' => 'en']);
        }

        $seo = (session('locale') == 'en') ? 'Home' : 'Inicio';

        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();



        $config = ConfigLangs::where('language', session('locale'))->first();



        $skills = Skills::where('active', 1)->orderBy('name', 'asc')->get();



        return view('home.index', ['seo' => $seo, 'page' => $page, 'config' => $config, 'skills' => $skills]);
    }
}
