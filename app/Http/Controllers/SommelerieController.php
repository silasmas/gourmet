<?php

namespace App\Http\Controllers;

use App\Models\sommelerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SommelerieController extends BaseController
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
            'quantite' => $request->quantite != null ? $request->quantite : 1,
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

        return $this->handleResponse($sommelerie, 'Boisson enregistrée');
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
    public function update(Request $request, $id)
    {
        // Find sommelerie by given ID
        $sommelerie = sommelerie::find($id);

        if (is_null($sommelerie)) {
            return $this->handleError('Boisson non trouvée');
        }

        if ($request->nom != null) {
            $sommelerie->update([
                'nom' => $request->nom,
                'updated_at' => now()
            ]);
        }

        if ($request->prix != null) {
            $sommelerie->update([
                'prix' => $request->prix,
                'updated_at' => now()
            ]);
        }

        if ($request->monaie != null) {
            $sommelerie->update([
                'monaie' => $request->monaie,
                'updated_at' => now()
            ]);
        }

        if ($request->quantite != null) {
            $sommelerie->update([
                'quantite' => $request->quantite,
                'updated_at' => now()
            ]);
        }

        if ($request->description != null) {
            $sommelerie->update([
                'description' => $request->description,
                'updated_at' => now()
            ]);
        }

        if ($request->categorie_id != null) {
            $sommelerie->update([
                'categorie_id' => $request->categorie_id,
                'updated_at' => now()
            ]);
        }

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

        return $this->handleResponse($sommelerie, 'Boisson modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sommelerie = sommelerie::find($id);
        $sommeleries = sommelerie::all();

        if (is_null($sommelerie)) {
            return $this->handleError('Boisson non trouvée');
        }

        $this->deleteDir($_SERVER['DOCUMENT_ROOT'] . '/storage/images/sommeleries/' . $sommelerie->id);
        $sommelerie->delete();

        return $this->handleResponse($sommeleries, 'Boisson supprimée');
    }
}
