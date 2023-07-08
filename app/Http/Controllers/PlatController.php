<?php

namespace App\Http\Controllers;

use App\Models\plat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PlatController extends BaseController
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

        // Register new plat
        $plat = plat::create([
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
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image2 != null) {
            $replace = substr($request->image2, 0, strpos($request->image2, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image2);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image2' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image3 != null) {
            $replace = substr($request->image3, 0, strpos($request->image3, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image3);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image3' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image4 != null) {
            $replace = substr($request->image4, 0, strpos($request->image4, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image4);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image4' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        return $this->handleResponse($plat, 'Plat enregistré');
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
    public function update(Request $request, $id)
    {
        // Find plat by given ID
        $plat = plat::find($id);

        if (is_null($plat)) {
            return $this->handleError('Plat non trouvé');
        }

        if ($request->nom != null) {
            $plat->update([
                'nom' => $request->nom,
                'updated_at' => now()
            ]);
        }

        if ($request->prix != null) {
            $plat->update([
                'prix' => $request->prix,
                'updated_at' => now()
            ]);
        }

        if ($request->monaie != null) {
            $plat->update([
                'monaie' => $request->monaie,
                'updated_at' => now()
            ]);
        }

        if ($request->quantite != null) {
            $plat->update([
                'quantite' => $request->quantite,
                'updated_at' => now()
            ]);
        }

        if ($request->description != null) {
            $plat->update([
                'description' => $request->description,
                'updated_at' => now()
            ]);
        }

        if ($request->categorie_id != null) {
            $plat->update([
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
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image2 != null) {
            $replace = substr($request->image2, 0, strpos($request->image2, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image2);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image2' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image3 != null) {
            $replace = substr($request->image3, 0, strpos($request->image3, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image3);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image3' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        if ($request->image4 != null) {
            $replace = substr($request->image4, 0, strpos($request->image4, ',') + 1);
            // Find substring from replace here eg: data:image/png;base64,
            $image = str_replace($replace, '', $request->image4);
            $image = str_replace(' ', '+', $image);
            // Create image URL
            $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

            // Upload image
            Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

            $plat->update([
                'image4' => '/storage' . $image_url,
                'updated_at' => now()
            ]);
        }

        return $this->handleResponse($plat, 'Plat modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plat = plat::find($id);
        $plats = plat::all();

        if (is_null($plat)) {
            return $this->handleError('Plat non trouvé');
        }

        $this->deleteDir($_SERVER['DOCUMENT_ROOT'] . '/storage/images/plats/' . $plat->id);
        $plat->delete();

        return $this->handleResponse($plat, 'Plat supprimé');
    }
}
