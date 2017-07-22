<?php

namespace App\Http\Controllers\frontend;

use App\Catalogue;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Catalogue $catalogue){
        $catalogues = Catalogue::all();
        $categories = $catalogue->categories;
        $catalogue_id = $catalogue->id;
        $catalogue_title = $catalogue->title;

        return view('frontend.categorias', ['categories' => $categories, 'catalogues' => $catalogues, 'catalogue_id' => $catalogue_id, 'catalogue_title' => $catalogue_title]);
    }

    public function sidebar(Catalogue $catalogue)
    {
        $categories = $catalogue->categories;

        return view('frontend.sidebar', ['categories' => $categories]);
    }

    public function contacto(Catalogue $catalogue)
    {
        $categories = $catalogue->categories;
        $catalogues = Catalogue::all();

        return view('frontend.contacto', ['categories' => $categories, 'catalogues' => $catalogues]);
    }

    public function empresaVerde(Catalogue $catalogue)
    {
        $categories = $catalogue->categories;
        $catalogues = Catalogue::all();

        return view('frontend.empresaVerde', ['categories' => $categories, 'catalogues' => $catalogues]);
    }
}
