<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produit;
use App\Models\Entreprise;
use Silber\Bouncer\Bouncer;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\ProduitRequest;
use App\Repositories\ProduitRepository;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        if (Gate::allows('access-produit')) {
            $produits = Produit::with(['produit', 'test'])->get();
            return view('produits.index', ['produits' => $produits]);

        } else {
            abort(403, 'Accès refusé car vôtre compte n a pas le rôle Client');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('produits.create', ['entreprises' => $entreprises]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        // Attribuer l'ID de l'entreprise sélectionnée
        $data['entreprise_id'] = $request->input('entreprise_id');
    
        $newProduit = Produit::create($data);
    
        return redirect(route('produits.index'))->with('success', 'Produit créé avec succès');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Produit $produits)
    {
        $data = Produit::
        orderBy('type_produit', 'desc')
        ->orderBy('nom_produit', 'desc')
        ->get();

        return view('main',['produits'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produits)
    {
        return view('produits.edit', ['produits' => $produits]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produits)
    {
        $data = $request->all();

        $produits->update($data);

        return redirect(route('produits.index'))->with('success', 'Produit édité avec succès');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produits)
    {
        $produits->delete();
        return redirect(route('produits.index'))->with('success', 'Produit supprimé avec succès');

    }
}