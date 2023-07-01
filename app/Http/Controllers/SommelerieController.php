<?php

namespace App\Http\Controllers;

use App\Models\sommelerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SommelerieController extends Controller
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->categorie_id == null OR !is_numeric($request->categorie_id)) {
            return Redirect::back()->with('error_message', 'Veuillez sélectionner une catégorie !');
        }

        // Register new sommelerie
        $sommelerie = sommelerie::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'monaie' => $request->monaie,
            'quantite' => $request->quantite,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id
        ]);

        if ($request->image != null) {
            $replace = substr($request->image, 0, strpos($request->image, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/sommeleries/' . $sommelerie->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $sommelerie->update([
                'image' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        return Redirect::back()->with('success_message', 'Boisson enregistré');
    }

    /**
     * Display the specified resource.
     */
    public function show(sommelerie $sommelerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sommelerie $sommelerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sommelerie $sommelerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sommelerie = sommelerie::find($id);
        $sommeleries = sommelerie::all();

        if (is_null($sommelerie)) {
            return [
                'success' => false,
                'message' => 'Boisson non trouvée',
                'data' => $sommeleries
            ];
        }

        $sommelerie->delete();

        return [
            'success' => true,
            'message' => 'Donnée supprimée',
            'data' => $sommeleries
        ];
    }
}
