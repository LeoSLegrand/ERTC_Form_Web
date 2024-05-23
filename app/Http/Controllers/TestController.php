<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Silber\Bouncer\Bouncer;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\TestRequest;
use App\Repositories\TestRepository;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        if (Gate::allows('access-test')) {
            $tests = Test::all();
            return view('tests.index', ['tests' => $tests]);

        } else {
            abort(403, 'Accès refusé car vôtre compte n a pas le rôle Testeur');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtenir un produit aléatoire
        $produitAleatoire = Produit::inRandomOrder()->first();

        $data = $request->all();

        // Attribuer l'ID du produit aléatoire
        $data['produit_id'] = $produitAleatoire->id;

        $tests = $this->repository->store($request->all());

        return redirect(route('tests.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $tests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $tests)
    {
        return view('tests.edit', ['tests' => $tests]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $tests)
    {

        $data = $request->all();

        $this->repository->update($tests, $request->all());

        return redirect(route('tests.index'))->with('success', 'Test édité avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $tests)
    {
        $tests->delete();

        return redirect(route('tests.index'))->with('success', 'Test supprimé avec succès');
    }
}
