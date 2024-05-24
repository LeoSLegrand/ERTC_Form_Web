<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrprise;
use Silber\Bouncer\Bouncer;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\EntrepriseRequest;
use App\Repositories\EntrepriseRepository;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produits = Entreprise::all();
        if (Gate::allows('access-entreprise')) {
            $compagnies = Compagnies::all();
            return view('entreprises.index', ['entreprises' => $entreprises]);

        } else {
            abort(403, 'Accès refusé car vôtre compte n a pas le rôle Admin');

        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $entreprises = $this->repository->store($request->all());

        return redirect(route('entreprises.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprises)
    {
        return view('entreprises.edit', ['entreprises' => $entreprises]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprises)
    {

        $data = $request->all();

        //$entreprises->update($data);
        $this->repository->update($entreprises, $request->all());

        return redirect(route('entreprises.index'))->with('success', 'Entreprise édité avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprises)
    {
        $entreprises->delete();

        return redirect(route('entreprises.index'))->with('success', 'Entreprise supprimé avec succès');
    }

}
