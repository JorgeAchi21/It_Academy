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

//WELCOME DE INICIO
// Route::get('/', function () {
//     return view('welcome');
// });

//PAGINA DE INICIO
Route::get('/', [HotelController::class, 'home'])
    ->name('home');

    //==========ROOMS
    //Show
    Route::get("/hotel/rooms/show", [HotelController::class, 'showRooms'])
    ->name ('rooms.show');
    
    //Create
    Route::get("/hotel/rooms/create", [HotelController::class, 'createRooms'])
    ->name ('rooms.create');
    
    Route::post('/hotel/rooms/create', [HotelController::class, 'createRoomsStore'])
    ->name('rooms.createStore');
    
    //Show id
    Route::get('/hotel/rooms/show/{id}', [HotelController::class, 'showRoomId'])
    ->name('rooms.showid');
    
    //Edit
    Route::get('/hotel/rooms/edit/{id}', [HotelController::class, 'editRoom'])
    ->name('rooms.edit');
    Route::put('/hotel/rooms/edit/{id}', [HotelController::class, 'editRoomStore'])
    ->name('rooms.editStore');
    
    //Delete
    Route::delete('hotel/rooms/delete/{id} ', [HotelController::class, 'destroyRoomStore'])
    ->name('rooms.destroy');
    
    
    //==========RESERVATIONS
    //Show
    Route::get("/hotel/reservations/show", [HotelController::class, 'showReservations'])
    ->name ('reservations.show');
    
    //create
    Route::get("/hotel/reservations/create", [HotelController::class, 'createReservations'])
    ->name ('reservations.create');
    Route::post('/hotel/reservations/create', [HotelController::class, 'createReservationsStore'])
    ->name('reservations.createStore');
    
    //Show id
    Route::get('/hotel/reservations/show/{id}', [HotelController::class, 'showReservationId'])
    ->name('reservations.showid');
    
    //Edit
    Route::get('/hotel/reservations/edit/{id}', [HotelController::class, 'editReservation'])
    ->name('reservations.edit');
    Route::put('/hotel/reservations/edit/{id}', [HotelController::class, 'editReservationStore'])
    ->name('reservations.editStore');
    
    //Delete
    Route::delete('hotel/reservations/delete/{id} ', [HotelController::class, 'destroyReservationStore'])
    ->name('reservations.destroy');
    
    //==========CoolAdmin
    Route::get("/hotel/cool", [HotelController::class, 'showCool'])
        ->name ('cool.dashboard');

    Route::get("/hotel/cooledit", [HotelController::class, 'editCool'])
        ->name ('cool.edit');

    Route::get("/hotel/coolData", [HotelController::class, 'dataCool'])
        ->name ('cool.data');