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
            return view('test.index', ['tests' => $tests]);

        } else {
            abort(403, 'Accès refusé car vôtre compte n a pas le rôle Testeur');
        }
    }
}
