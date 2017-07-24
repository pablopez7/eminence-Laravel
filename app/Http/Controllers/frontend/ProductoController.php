<?php

namespace App\Http\Controllers\frontend;

use App\Catalogue;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Catalogue $catalogue, Category $category){

        $catalogues = Catalogue::where('status', 'active')->get();
        $categories = Category::where('status', 'active')->get();

        $products = Product::where('status', 'active')
                            ->where('category_id', $category->id)
                            ->orderBy('id', 'desc')
                            ->paginate(12);

        $category_id = $category->id;
        $category_title = $category->title;
        $catalogue_id = $catalogue->id;
        $category_description = $category->description;

        return view('frontend.productos', [
            'products' => $products,
            'categories' => $categories,
            'catalogues' => $catalogues,
            'category_id' => $category_id,
            'category_title' => $category_title,
            'catalogue_id' => $catalogue_id,
            'category_description' => $category_description
        ]);
    }
}