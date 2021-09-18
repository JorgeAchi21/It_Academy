<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\Reservation;
use App\Models\Element;

class HotelController extends Controller
{
    //HOME DEL SITIO
    public function home(){
        return view('home');
        //return 'Hola mundo.';
    }
    
    //====================================================================
    //==========Cool-Admin
    //====================================================================
    public function coolHome(){
        return view('cool.home');
    }

    //====================================================================
    //----------Rooms: 
    //====================================================================
    //Show
    public function coolRoomsShow(){
        $room = Room::all();
        return view('cool.roomsShow', compact('room'));
    }
    //Show-id
    public function coolRoomsShowId($id){
        $room = Room::where('id', $id)->first();
        return view('cool.roomsShowId', compact('room'));
    }
    //Create
    public function coolRoomsCreate(){
        $roomState_status = Element::where('element', 'room_status')->get();
        return view('cool.roomsCreate', compact('roomState_status'));
    }
    //Create-Store
    public function coolRoomsCreateStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
        $request->validate([
            "room" => 'required |  numeric | min:10 | max:500',
            "guests" => 'required | min:1 | max:6',
            "state" =>'required | min:2 | max:15', 
            "price" =>'required | min:1 | max:200'
        ]);
        $var =  Room::create($request->all());

        return redirect()->route('cool.roomsShow');
    }
    //Edit
    public function coolRoomsEdit($id){
        $room = Room::where('id', $id)->first();
        $roomState_status = Element::where('element', 'room_status')->get();
        return view('cool.roomsEdit', compact('room', 'roomState_status'));
    }
    //Edit-Store
    public function coolRoomsEditStore(Request $request, $room){
        //return $request->all(); //ok pasa los datos bien.
        $request->validate([
            "room" => 'required | numeric | min:10 | max:500',
            "guests" => 'required | min:1 | max:10',
            "state" => 'min:1 | max:50',
            "guestName" => 'min:1 | max:50',
            "fromDate" => "date",
            "toDate" => "date",
            "price" =>'required | min:1 | max:200'
        ]);
        $roomUdt = Room::find($room);
        $roomUdt -> update($request->all());

        return redirect()->route('cool.roomsShow');
    }
    //Destroy
    public function coolRoomsDestroy($id){
        $room = Room::find($id);
        $room->delete();
        return view('cool.roomsDestroy', compact('id'));
    }  


    //====================================================================
    //----------Reservations:
    //====================================================================
    //Show   
    public function coolReservationsShow(Room $room){
        $reservation = Reservation::all();
        return view('cool.reservationsShow', compact('reservation'));
    }
    //Show-id
    public function coolReservationsShowId($id){
        $reservation = Reservation::where('id', $id)->first();
        return view('cool.reservationsShowId', compact('reservation'));
    }
    //Create
    public function coolReservationsCreate(){
        $roomAllow = Room::select('room')->get();
        return view('cool.reservationsCreate', compact('roomAllow'));
    }
    //Create-Store
    public function coolReservationsCreateStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
        $request->validate([
            "clientName" => 'required | min:2 | max:50',
            "checkIn" => 'required | date',
            "checkOut" => 'required | date',
            "room" => 'required | numeric | min:10'
        ]);
        $var =  Reservation::create($request->all());
        
        return redirect()->route('cool.reservationsShow');
    }
    //Edit
    public function coolReservationsEdit($id){
        $reservation = Reservation::where('id', $id)->first();
        return view('cool.reservationsEdit', compact('reservation'));
    }
    //Edit-Store
    public function coolReservationsEditStore(Request $request, $reservation){
        //return $request->all(); //ok pasa los datos bien.
        //return $equipo;  //id del registro update
        $request->validate([
            "clientName" => 'required | min:2 | max:50',
            "checkIn" => 'required | date',
            "checkOut" => 'required | date',
            "room" => 'required | numeric | min:10'
        ]);
        $reservationUdt = Reservation::find($reservation);
        $reservationUdt -> update($request->all());
        
        return redirect()->route('cool.reservationsShow');
    }
    //Destroy
    public function coolReservationsDestroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return view('cool.reservationsDestroy', compact('id'));
    }  

}