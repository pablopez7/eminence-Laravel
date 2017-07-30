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
        $catalogues = Catalogue::where('status', 'active')->get();

        $categories = Category::where('status', 'active')
                                ->where('catalogue_id', $catalogue->id)
                                ->orderBy('id', 'desc')
                                ->paginate(28);

        $catalogue_id = $catalogue->id;
        $catalogue_title = $catalogue->title;
        $catalogue_description = $catalogue->description;

        return view('frontend.categorias', [
            'categories' => $categories,
            'catalogues' => $catalogues,
            'catalogue_id' => $catalogue_id,
            'catalogue_title' => $catalogue_title,
            'catalogue_description' => $catalogue_description
        ]);
    }

    public function sidebar(Catalogue $catalogue)
    {
        $categories = $catalogue->categories;

        return view('frontend.sidebar', ['categories' => $categories]);
    }

    public function empresaVerde(Catalogue $catalogue)
    {
        $categories = $catalogue->categories;
        $catalogues = Catalogue::all();

        return view('frontend.empresaVerde', ['categories' => $categories, 'catalogues' => $catalogues]);
    }
}
