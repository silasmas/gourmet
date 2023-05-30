<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\plat;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateplatRequest;
use GuzzleHttp\Exception\ClientException;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    /**
     * Display the specified resource.
     */
    public function show(plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateplatRequest $request, plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plat $plat)
    {
        //
    }
}
