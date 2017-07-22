<?php

namespace App\Http\Controllers;

use App\Catalogue;
use App\Category;
use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function index(Catalogue $catalogue, Category $category)
    {
        $products = $category->products;
        $category_id = $category->id;
        $catalogue_id = $catalogue->id;

        return view('products.index', ['products' => $products, 'category_id' => $category_id, 'catalogue_id' => $catalogue_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category, Product $product)
    {
        return view('products.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Catalogue $catalogue, Category $category){
        $this->validate($request, [
            'title' => 'required|max:100|unique:catalogues',
            'description' => 'required|max:1000',
            'status' => 'required|max:10',
            'image' => 'required|image'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.unique' => 'El titulo que has introduciodo ya existe',
            'title.max' => 'El titulo solo acepta un maximo de 250 caracteres',
            'description.required' => 'La descripcion es requerida',
            'image.required' => 'Es necesario introducir una imagen'
        ]);

        $img = $request->file('image');
        $file_route = time() . '_' . $img->getClientOriginalName();
        Storage::disk('imgProducts')->put($file_route, file_get_contents($img->getRealPath()));

        $data = $request->all();
        $data['image'] = $file_route;
        $data['user_id'] = Auth::user()->id;
        $data['category_id'] = $category->id;
        $data['catalogue_id'] = $catalogue->id;

        $category = Product::create($data);

        if ($category->save()) {
            return Redirect::back()->with('message', 'Categoria creada correctamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogue $catalogue ,Category $category, Product $product)
    {
        $category_id = $category->id;
        $catalogue_id = $catalogue->id;

        return view('products.edit', ['product' => $product, 'category_id' => $category_id, 'catalogue_id' => $catalogue_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, Product $product)
    {
        $this->validate($request, [
            'title' => 'required|max:100|unique:catalogues,title,' . $category->id,
            'description' => 'required|max:1000',
            'status' => 'required|max:10',
            'image' => 'image'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.unique' => 'El titulo que has introduciodo ya existe',
            'title.max' => 'El titulo solo acepta un maximo de 250 caracteres',
            'description.required' => 'La descripcion es requerida',
            'image.image' => 'Es necesario introducir una imagen'
        ]);

        $this->verificaCategory($category, $product);

        $product->fill($request->intersect(['title', 'description', 'image', 'status']));

        if ($request->hasFile('image')){

            $img = $request->file('image');
            $file_route = time() . '_' . $img->getClientOriginalName();

            Storage::disk('imgProducts')->put($file_route, file_get_contents($img->getRealPath()));

            $product->image = $file_route;
        }

        if ($product->isClean()) {
            return Redirect::back()->with('message', 'Debe especificar al menos un valor diferente para actualizar.');
        }

        $product->user_id = Auth::user()->id;

        if ($product->save()) {
            return Redirect::back()->with('message', 'Categoria editada correctamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Product $product)
    {
        $this->verificaCategory($category, $product);

        $product->delete();
        return Redirect::back()->with('message', 'Categoria eliminada correctamente.');
    }

    protected function verificaCategory(Category $category, Product $product){
        if ($category->id != $product->product_id){
            return Redirect::back()->with('message', 'La categoria que tratas de editar no corresponde a este catalogo.');
        }
    }
}