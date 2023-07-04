<?php

namespace App\Http\Controllers;

use App\Http\Resources\categorie as ResourcesCategorie;
use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
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
        $inputs = [
            'nom' => $request->register_nom,
            'description' => $request->register_description
        ];

        $categorie = categorie::create($inputs);

        return new ResourcesCategorie($categorie);
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = categorie::find($id);
        $categories = categorie::all();

        if (is_null($categorie)) {
            return [
                'success' => false,
                'message' => 'Catégorie non trouvée',
                'data' => ResourcesCategorie::collection($categories)
            ];
        }

        $categorie->delete();

        return [
            'success' => true,
            'message' => 'Donnée supprimée',
            'data' => ResourcesCategorie::collection($categories)
        ];
    }
}
