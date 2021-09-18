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
    ->name('cool.roomsShowId');

    //Create
    Route::get("/hotel/cool/rooms/create", [HotelController::class, 'coolRoomsCreate'])
    ->name ('cool.roomsCreate');
    Route::post('/hotel/cool/rooms/create', [HotelController::class, 'coolRoomsCreateStore'])
    ->name('cool.roomsCreateStore');

    //Edit
    Route::get('/hotel/cool/rooms/edit/{id}', [HotelController::class, 'coolRoomsEdit'])
    ->name('cool.roomsEdit');
    Route::put('/hotel/cool/rooms/edit/{id}', [HotelController::class, 'coolRoomsEditStore'])
    ->name('cool.roomsEditStore');

    //Delete
    Route::delete('hotel/cool/rooms/delete/{id} ', [HotelController::class, 'coolRoomsDestroy'])
    ->name('cool.roomsDestroy');



    //----------Reservations:
    //Show    
    Route::get("/hotel/cool/reservations/show", [HotelController::class, 'coolReservationsShow'])
        ->name ('cool.reservationsShow');
    //Show Id
    Route::get('/hotel/cool/reservations/show/{id}', [HotelController::class, 'coolReservationsShowId'])
    ->name('cool.reservationsShowId');

    //Create
    Route::get("/hotel/cool/reservations/create", [HotelController::class, 'coolReservationsCreate'])
    ->name ('cool.reservationsCreate');

    //Create
    Route::get("/hotel/cool/reservations/create", [HotelController::class, 'coolReservationsCreate'])
    ->name ('cool.reservationsCreate');
    Route::post('/hotel/cool/reservations/create', [HotelController::class, 'coolReservationsCreateStore'])
    ->name('cool.reservationsCreateStore');

    //Edit
    Route::get('/hotel/cool/reservations/edit/{id}', [HotelController::class, 'coolReservationsEdit'])
    ->name('cool.reservationsEdit');
    Route::put('/hotel/cool/reservations/edit/{id}', [HotelController::class, 'coolReservationsEditStore'])
    ->name('cool.reservationsEditStore');

    //Delete
    Route::delete('hotel/cool/reservations/delete/{id} ', [HotelController::class, 'coolreservationsDestroy'])
    ->name('cool.reservationsDestroy');


//DASHBOARD - BREEZE---------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');

require __DIR__.'/auth.php';
