<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Work;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function portfolio()
    {

        $categories = Categorie::all();
        $works = Work::all();

        return view('pages/portfolio', compact("categories", 'works'));
    }
}