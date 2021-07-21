<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ligaFtblController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [ligaFtblController::class, 'home'])
    ->name('home');



//TEAM----------------------------------------
//Show
/* Grupo de rutas protegidas por middleware auth
Route::group(['middleware']=>'Auth'], function(){...});
*/
Route::get('/ligaFutbol/team/show', [LigaFtblController::class, 'showTeam'])
    ->middleware(['auth'])
    ->name('team.show');
//Show id
Route::get('/ligaFutbol/team/show/{id}', [LigaFtblController::class, 'showTeamId'])
    ->middleware(['auth'])
    ->name('team.showid');

//Create
Route::get('/ligaFutbol/team/create', [LigaFtblController::class, 'createTeam'])
    ->middleware(['auth'])
    ->name('team.create');  
Route::post('/ligaFutbol/team/create', [LigaFtblController::class, 'createTeamStore'])
    ->middleware(['auth'])
    ->name('team.createStore');


//Edit
Route::get('/ligaFutbol/team/edit/{id}', [LigaFtblController::class, 'editTeam'])
    ->middleware(['auth'])
    ->name('team.edit');
Route::put('/ligaFutbol/team/edit/{id}', [LigaFtblController::class, 'editTeamStore'])
    ->middleware(['auth'])
    ->name('team.editStore');

//Delete
Route::delete('ligaFutbol/team/delete/{id} ', [LigaFtblController::class, 'destroyTeamStore'])
    ->middleware(['auth'])
    ->name('team.destroy');



//MATCH----------------------------------------
//Show
Route::get('/ligaFutbol/match/show', [LigaFtblController::class, 'showMatch'])
    ->middleware(['auth'])
    ->name('match.show');

//Show id
Route::get('/ligaFutbol/match/show/{id}', [LigaFtblController::class, 'showMatchId'])
    ->middleware(['auth'])
    ->name('match.showid');

//Create
Route::get('/ligaFutbol/match/create', [LigaFtblController::class, 'createMatch'])
    ->middleware(['auth'])
    ->name('match.create');  
Route::post('/ligaFutbol/match/create', [LigaFtblController::class, 'createMatchStore'])
    ->middleware(['auth'])
    ->name('match.createStore');

//Edit
Route::get('ligaFutbol/matches/edit/{id}', [LigaFtblController::class, 'editMatch'])
    ->middleware(['auth'])
    ->name('match.edit');
Route::put('/ligaFutbol/matches/edit/{id}', [LigaFtblController::class, 'editMatchStore'])
    ->middleware(['auth'])
    ->name('match.editStore');

//Delete
Route::delete('ligaFutbol/match/delete/{id} ', [LigaFtblController::class, 'destroyMatchStore'])
    ->middleware(['auth'])
    ->name('match.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
