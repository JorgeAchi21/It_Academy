<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\Reservation;

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
        return view('cool.roomsCreate');
    }
    //Create-Store
    public function coolRoomsCreateStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
        $request->validate([
            "room" => 'required |  numeric | min:10 | max:500',
            "guests" => 'required | min:1 | max:6',

            //lista de valores: busy, free, reserved, out of order
            "state" =>'required | min:2 | max:15', 
            "price" =>'required | min:1 | max:100'
        ]);
        //dd($request);
        $var =  Room::create($request->all());

        return redirect()->route('cool.roomsShow');
    }
    //Edit
    public function coolRoomsEdit($id){
        $room = Room::where('id', $id)->first();
        return view('cool.roomsEdit', compact('room'));
    }
    //Edit-Store
    public function coolRoomsEditStore(Request $request, $equipo){
        //return $request->all(); //ok pasa los datos bien.
        //return $equipo;  //id del registro update
        $request->validate([
            "room" => 'required |  numeric | min:10 | max:500',
            "guests" => 'required | min:1 | max:10',
            "state" => 'min:1 | max:50',
            "guestName" => 'max:50',
            "fromDate" => "date",
            "toDate" => "date",
            //lista de valores: busy, free, reserved, out of order
            "price" =>'required | min:1 | max:100'
        ]);
        //dd($request);

        $room = Room::find($equipo);
        $room -> update($request->all());

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
        return view('cool.reservationsCreate');
    }
    //Create-Store
    public function coolReservationsCreateStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
        $request->validate([
            "clientname" => 'required |  min:1 | max:50',
            "checkin" => 'required ',
            "checkout" => 'required ',
            "room" => 'required |  min:10 | max:500'
        ]);
        //dd($request);
        $var =  Reservation::create($request->all());

        return redirect()->route('cool.reservationsShow');
    }
    //Edit
    public function coolReservationsEdit($id){
        $reservation = Reservation::where('id', $id)->first();
        return view('cool.reservationsEdit', compact('reservation'));
    }
    //Edit-Store
    public function coolReservationsEditStore(Request $request, $equipo){
        //return $request->all(); //ok pasa los datos bien.
        //return $equipo;  //id del registro update
        $request->validate([
            "clientname" => 'required |  text | min:1 | max:50',
            "checkin" => 'required | date ',
            "checkout" => 'required | date ',
            "room" => 'required |  numeric | min:10 | max:500'
        ]);
        //dd($request);

        $reservation = Reservation::find($equipo);
        $reservation -> update($request->all());

        return redirect()->route('cool.ReservationsShow');
    }
    //Destroy
    public function coolReservationsDestroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return view('cool.ReservationsDestroy', compact('id'));
    }  

}