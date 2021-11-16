<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
use App\Http\Controllers\PassportController;
use App\Http\Controllers\WCApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// === HOME
Route::get('/home/', [WCApiController::class, 'home'])
->name ('home.spa');


// === === === Seguridad
//Register (fuera del grupo de seguidad)
Route::post('register', [PassportController::class, 'register'])
->name('PassportRegister');

//login (fuera del grupo de seguidad)
Route::post('login', [PassportController::class, 'login'])
->name('PassportLogin');


// === === === Rutas aseguradas por el middleware
Route::middleware('auth:api')->group(function() {
    Route::get('pruebas', [PassportController::class, 'pruebas'])
    ->name('PassportPruebas');

    // === === === TIENDAS/GALERIAS
    //crear tienda
    Route::post('/shops/', [WCApiController::class, 'createShops'])
    ->name ('shops.create');

    //borrar tienda
    Route::post('/shops/delete/{id}/', [WCApiController::class, 'deleteShops'])
    ->name ('shops.delete');

    //editar tienda
    Route::post('/shops/edit/{id}/', [WCApiController::class, 'updateShops'])
    ->name ('shops.edit');

    //listar tiendas
    Route::get('/shops/', [WCApiController::class, 'viewShops'])
    ->name ('shops.view');


    // === === === CUADROS
    //Añadir cuadro
    Route::post('/shops/{id}/pictures/', [WCApiController::class, 'addPicture'])
    ->name ('picture.create');
    
    //Listar cuadros de una tienda
    Route::get('/shops/{id}/pictures/', [WCApiController::class, 'viewPictureByShop'])
    ->name ('shop.pictureViewByShop');
    
    //Listar todos los cuadros
    Route::get('/show/picture/', [WCApiController::class, 'viewPictures'])
    ->name ('shop.pictureView');

    //Burn out Shop
    Route::delete('shops/{id}/pictures/', [WCApiController::class, 'destroy'])
    ->name ('shop.destroy');

    
    Route::post('logout', [PassportController::class, 'logout'])
    ->name('PassportLogout');
});