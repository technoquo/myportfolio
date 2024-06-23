<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Menu;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $seo = (session('locale') == 'en') ? 'Results' : 'Resultados';

        $page = Menu::where('language', session('locale'))->orderBy('order', 'asc')->get();




        return view('results', ['seo' => $seo, 'page' => $page, 'portfolios' => $tag->portfolios]);
    }
}
