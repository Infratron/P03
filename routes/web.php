<?php

use Illuminate\Support\Facades\Route;

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
    return view('Homepage');
})->name('Homepage');

Route::get('/chi-siamo', function () {
    $utenti = 
    [
    ['id'=> 1, 'name'=> 'Mario', 'surname'=>'Rossi', 'age'=> 25],
    ['id'=> 2, 'name'=> 'Filippo', 'surname'=>'Tedeshi', 'age'=> 42],
    ['id'=> 3, 'name'=> 'Manuel', 'surname'=>'Genovesi', 'age'=> 30],
    ['id'=> 4, 'name'=> 'Sara', 'surname'=>'Pileio', 'age'=> 27],  
    ];

    return view('chisiamo', ['users' => $utenti]);
})->name('chi.siamo');

// rotta parametrica

Route::get('/chi-siamo/utenti/dettaglio/{id}', function($id){
// recupero l'user che ha scelto l'utente
$utenti = 
    [
    ['id'=> 1, 'name'=> 'Mario', 'surname'=>'Rossi', 'age'=> 25, 'materia' => 'CSS'],
    ['id'=> 2, 'name'=> 'Filippo', 'surname'=>'Tedeshi', 'age'=> 42, 'materia' => 'Javascript'],
    ['id'=> 3, 'name'=> 'Manuel', 'surname'=>'Genovesi', 'age'=> 30, 'materia' => 'HTML'],
    ['id'=> 4, 'name'=> 'Sara', 'surname'=>'Pileio', 'age'=> 27, 'materia' => 'Laravel'],  
    ];

    foreach($utenti as $utente){

        if($id == $utente['id']){
            return view('dettaglio-utente', ['utente' => $utente]);
        }

    };

})->name('dettaglio-utente');

Route::get('/dettagli-utente', function () {
    return view('dettaglio-utente');
})->name('dettagli.utente');