<?php

namespace App\Http\Controllers;

use App\Catalogue;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $catalogues = Catalogue::paginate(5);

        return view('catalogues.index', ['catalogues' => $catalogues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

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
        Storage::disk('imgCatalogues')->put($file_route, file_get_contents($img->getRealPath()));

        $data = $request->all();
        $data['image'] = $file_route;
        $data['user_id'] = Auth::user()->id;

        $catalogue = Catalogue::create($data);

        if ($catalogue->save()) {
            return redirect('catalogues')->with('message', 'Catalogo creado correctamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogue $catalogue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogue $catalogue)
    {
        return view('catalogues.edit', ['catalogue' => $catalogue]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogue $catalogue)
    {
        $this->validate($request, [
            'title' => 'required|max:100|unique:catalogues,title,' . $catalogue->id,
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

        $catalogue->fill($request->intersect(['title', 'description', 'image', 'status']));

        if ($request->hasFile('image')){

            $img = $request->file('image');
            $file_route = time() . '_' . $img->getClientOriginalName();

            Storage::disk('imgCatalogues')->put($file_route, file_get_contents($img->getRealPath()));
            $catalogue['image'] = $file_route;
        }

        if ($catalogue->isClean()) {
            return Redirect::back()->with('message', 'Debe especificar al menos un valor diferente para actualizar.');
        }

        $catalogue->user_id = Auth::user()->id;

        if ($catalogue->save()) {
            return redirect('catalogues')->with('message', 'Catalogo editado correctamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogue $catalogue)
    {
        $catalogue->delete();
        return redirect('catalogues')->with('message', 'Catalogo eliminado correctamente.');
    }
}
