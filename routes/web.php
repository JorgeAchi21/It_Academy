<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

//PAGINA DE INICIO
 Route::get('/', [HotelController::class, 'coolHome'])
     ->name('home');

    
    //=============================
    //==========CoolAdmin==========
    Route::get("/hotel/cool", [HotelController::class, 'coolHome'])
         ->name ('cool.home');


    //----------Rooms: 
    //Show
    Route::get("/hotel/cool/rooms/show", [HotelController::class, 'coolRoomsShow'])
    ->middleware(['auth'])
    ->name ('cool.roomsShow');

    //Show Id
    Route::get('/hotel/cool/rooms/show/{id}', [HotelController::class, 'coolRoomsShowId'])
    ->middleware(['auth'])
    ->name('cool.roomsShowId');

    //Create
    Route::get("/hotel/cool/rooms/create", [HotelController::class, 'coolRoomsCreate'])
    ->middleware(['auth'])
    ->name ('cool.roomsCreate');
    //->middleware(['auth', 'can:create.room'])
    
    Route::post('/hotel/cool/rooms/create', [HotelController::class, 'coolRoomsCreateStore'])
    ->name('cool.roomsCreateStore');
    
    //Edit
    Route::get('/hotel/cool/rooms/edit/{id}', [HotelController::class, 'coolRoomsEdit'])
    ->middleware(['auth'])
    ->name('cool.roomsEdit');
    Route::put('/hotel/cool/rooms/edit/{id}', [HotelController::class, 'coolRoomsEditStore'])
    ->middleware(['auth'])
    ->name('cool.roomsEditStore');
    
    //Delete
    Route::delete('hotel/cool/rooms/delete/{id} ', [HotelController::class, 'coolRoomsDestroy'])
    ->middleware(['auth'])
    ->name('cool.roomsDestroy');
    
    
    
    //----------Reservations:
    //Show    
    Route::get("/hotel/cool/reservations/show", [HotelController::class, 'coolReservationsShow'])
    ->middleware(['auth'])
    ->name ('cool.reservationsShow');
    //Show Id
    Route::get('/hotel/cool/reservations/show/{id}', [HotelController::class, 'coolReservationsShowId'])
    ->middleware(['auth'])
    ->name('cool.reservationsShowId');
    
    //Create
    Route::get("/hotel/cool/reservations/create", [HotelController::class, 'coolReservationsCreate'])
    ->middleware(['auth'])
    ->name ('cool.reservationsCreate');
    //->middleware(['auth', 'can:create.reservation'])
    
    Route::post('/hotel/cool/reservations/create', [HotelController::class, 'coolReservationsCreateStore'])
    ->name('cool.reservationsCreateStore');

    //Edit
    Route::get('/hotel/cool/reservations/edit/{id}', [HotelController::class, 'coolReservationsEdit'])
    ->middleware(['auth'])
    ->name('cool.reservationsEdit');
    Route::put('/hotel/cool/reservations/edit/{id}', [HotelController::class, 'coolReservationsEditStore'])
    ->middleware(['auth'])
    ->name('cool.reservationsEditStore');

    //Delete
    Route::delete('hotel/cool/reservations/delete/{id} ', [HotelController::class, 'coolreservationsDestroy'])
    ->middleware(['auth'])
    ->name('cool.reservationsDestroy');


//DASHBOARD - BREEZE---------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');

require __DIR__.'/auth.php';
