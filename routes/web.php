<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Page avec le login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Pages authentification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Page Principal
    Route::get('/main', [ProduitController::class, 'show'])->name('ertc.main');

    //Pages gestion produits
        Route::get('/produit/index', [ProduitController::class, 'index'])->name('produits.index');
        Route::get('/produit/create', [ProduitController::class, 'create'])->name('produits.create');
        Route::post('/produit', [ProduitController::class, 'store'])->name('produits.store');
        Route::get('/produit/{produits}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
        Route::put('/produit/{produits}/update', [ProduitController::class, 'update'])->name('produits.update');
        Route::delete('/produit/{produits}/destroy', [ProduitController::class, 'destroy'])->name('produits.destroy');

    //Pages gestion tests
        Route::get('/test/index', [TestController::class, 'index'])->name('tests.index');
        Route::get('/test/create', [TestController::class, 'create'])->name('tests.create');
        Route::post('/test', [TestController::class, 'store'])->name('tests.store');
        Route::get('/test/{tests}/edit', [TestController::class, 'edit'])->name('tests.edit');
        Route::put('/test/{tests}/update', [TestController::class, 'update'])->name('tests.update');
        Route::delete('/test/{tests}/destroy', [TestController::class, 'destroy'])->name('tests.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');