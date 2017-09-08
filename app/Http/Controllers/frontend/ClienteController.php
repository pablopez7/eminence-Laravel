<?php

namespace App\Http\Controllers\frontend;

use App\Catalogue;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $professionals = Client::where('status', 'active')
            ->where('kind', 'professional')
            ->orderBy('order', 'asc')
            ->get();

        $retails = Client::where('status', 'active')
            ->where('kind', 'retail')
            ->orderBy('order', 'asc')
            ->get();

        $catalogues = Catalogue::all();

        return view('frontend.clientes', ['professionals' => $professionals, 'retails' => $retails, 'catalogues' => $catalogues]);
    }
}
