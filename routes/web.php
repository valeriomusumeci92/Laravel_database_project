<?php

use App\Http\Controllers\AlbumController;
use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;


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

Route::get('/', function () {
    return view('home');
})->name('homepage');

//Inside the name curly brackets i put the name that i recall in the attribute href in the tag a in the component navbar.blade file in order to connect the created route with the {{ dear blade }} syntax

// ROUTES FOR ARTIST MODEL 
// REMEMBER TO -IMPORT THE CLASS- HERE IN web.php 

route::get('/artist/create' , [ArtistController::class , 'create'])->name('artist.create');
route::post('/artist/store' , [ArtistController::class , 'store'])->name('artist.store');
route::get('/artists' , [ArtistController::class , 'index'])->name('artist.index');
// vado su artist controller e creo il controllero con la logica cioè la funzione parametrica che mi ritorni la vista show che mostra la card dell'artista creato
route::get('/artist/show/{id}',[ArtistController::class , 'show'])->name('artist.show');

// ROUTES FOR MODEL ALBUM

route::get('/album/create' , [AlbumController::class , 'create'])->name('album.create');