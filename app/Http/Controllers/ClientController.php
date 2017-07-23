<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $clients = Client::all();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:100|unique:clients',
            'description' => 'required|max:1000',
            'status' => 'required|max:10',
            'kind' => 'required',
            'image' => 'required|image'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.unique' => 'El titulo que has introduciodo ya existe',
            'title.max' => 'El titulo solo acepta un maximo de 250 caracteres',
            'description.required' => 'La descripcion es requerida',
            'image.required' => 'Es necesario introducir una imagen',
            'kind.required' => 'Es necesario saber que tipo de cliente es.'
        ]);

        $img = $request->file('image');
        $file_route = time() . '_' . $img->getClientOriginalName();
        Storage::disk('imgClients')->put($file_route, file_get_contents($img->getRealPath()));

        $data = $request->all();
        $data['image'] = $file_route;
        $data['user_id'] = Auth::user()->id;

        $client = Client::create($data);

        if ($client->save()) {
            return redirect('clients')->with('message', 'Catalogo creado correctamente.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $this->validate($request, [
            'title' => 'required|max:100|unique:clients,title,' . $client->id,
            'description' => 'required|max:1000',
            'status' => 'required|max:10',
            'kind' => 'required',
            'image' => 'image'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.unique' => 'El titulo que has introduciodo ya existe',
            'title.max' => 'El titulo solo acepta un maximo de 250 caracteres',
            'description.required' => 'La descripcion es requerida',
            'image.image' => 'Es necesario introducir una imagen',
            'kind.required' => 'Es necesario saber que tipo de cliente es.'
        ]);

        $client->fill($request->intersect(['title', 'description', 'image', 'status', 'kind']));

        if ($request->hasFile('image')){

            $img = $request->file('image');
            $file_route = time() . '_' . $img->getClientOriginalName();

            Storage::disk('imgClients')->put($file_route, file_get_contents($img->getRealPath()));
            $client['image'] = $file_route;
        }

        if ($client->isClean()) {
            return Redirect::back()->with('message', 'Debe especificar al menos un valor diferente para actualizar.');
        }

        $client->user_id = Auth::user()->id;

        if ($client->save()) {
            return redirect('clients')->with('message', 'Cliente editado correctamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('clients')->with('message', 'Cliente eliminado correctamente.');
    }
}

