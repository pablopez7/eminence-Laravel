<?php

namespace App\Http\Controllers\frontend;

use App\Catalogue;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues = Catalogue::where('status', 'active')->get();

        return view('frontend.home', ['catalogues' => $catalogues]);
    }

    public function menu(){
        $catalogues = Catalogue::where('status', 'active')->get();

        return view('layouts.eminence', ['catalogues' => $catalogues]);
    }

    public function catalogos(Category $category){
        $catalogues = Catalogue::where('status', 'active')
                                ->orderBy('id', 'asc')
                                ->paginate(4);

        $categories = Category::where('status', 'active')->get();

        return view('frontend.catalogos', [
            'catalogues' => $catalogues,
            'categories' => $categories
        ]);
    }
}
