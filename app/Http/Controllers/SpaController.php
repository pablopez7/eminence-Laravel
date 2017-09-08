<?php

namespace App\Http\Controllers;

use App\Spa;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response()->json('Admin Part! for Spa CRUD, Protected with Auth Middleware');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function show(Spa $spa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function edit(Spa $spa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spa $spa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spa $spa)
    {
        //
    }
}
