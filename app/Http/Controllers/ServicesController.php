<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $seo = (session('locale') == 'en') ? 'My Portfolio' : 'Mi Portafolio';

        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();


        $services = Service::all();





        return view('services.index', ['seo' => $seo, 'page' => $page, 'services' => $services]);
    }
}
