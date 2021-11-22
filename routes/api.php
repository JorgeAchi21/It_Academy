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
    //listar tiendas
    Route::get('/shops/', [WCApiController::class, 'viewShops'])
    ->name ('shops.view');
    
    //info una tienda
    Route::get('/shops/info/{id}', [WCApiController::class, 'viewIdShops'])
    ->name ('shops.viewId');

    //editar tienda
    Route::put('/shops/edit/{id}/', [WCApiController::class, 'updateShops'])
    ->name ('shops.editId');

    //crear tienda
    Route::post('/shops/', [WCApiController::class, 'createShops'])
    ->name ('shops.create');
    
    // Ver detalles.
    Route::post('/shops/{id}/', [WCApiController::class, 'detailShops'])
    ->name ('shops.detail');

    //Burn down Shop
    Route::delete('/shops/delete/{id}', [WCApiController::class, 'deleteShops'])
    ->name ('shops.delete');
    


    // === === === CUADROS
    //Listar cuadros de una tienda
    Route::get('/shops/{id}/pictures/', [WCApiController::class, 'viewPictureByShop'])
    ->name ('shop.pictureViewByShop');

    //Añadir cuadro
    Route::post('/shops/{id}/pictures/', [WCApiController::class, 'addPicture'])
    ->name ('picture.create');
        
    //Listar todos los cuadros
    Route::get('/show/picture/', [WCApiController::class, 'viewPictures'])
    ->name ('shop.pictureView');

    //borrar cuadros
    Route::post('/show/picture/delete/{id}', [WCApiController::class, 'deletePicture'])
    ->name ('picture.delete');
    
    //Burn down Shop
    //Route::delete('shops/{id}/pictures/', [WCApiController::class, 'destroy'])
    //->name ('shop.destroy');

    
    //desloguearse
    Route::post('logout', [PassportController::class, 'logout'])
    ->name('PassportLogout');
});