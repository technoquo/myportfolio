<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $seo = (session('locale') == 'en') ? 'Contact' : 'Contacto';

        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();
        return view('contact.index', ['seo' => $seo, 'page' => $page]);
    }
}
