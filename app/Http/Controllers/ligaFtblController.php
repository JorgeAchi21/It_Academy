<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\Match;
use App\Models\Element;

class ligaFtblController extends Controller
{
    public function home(){
        return view('home');
    }

    //TEAM----------------------------------------
    public function showTeam(){
        $equipo = Team::all();
        return view('teams.show', compact('equipo'));
    }

    public function createTeam(){
        return view('teams.create');
    }

    public function showTeamId($id){
        $equipo = Team::where('id', $id)->first();
        return view('teams.showid', compact('equipo'));
    }

    public function createTeamStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
    
        $request->validate([
            "name" => 'required | min:2 | max:50',
            "city" => 'required | min:2 | max:50',
            "stadium_name" =>'required | min:2 | max:50',
            "president" =>'required | min:2 | max:50',
            "aditional_info" => 'max:100'
        ]);
        //dd($request);

        $var =  Team::create($request->all());

        return redirect()->route('team.show');
    }

    public function editTeam($id){
        $equipo = Team::where('id', $id)->first();
        return view('teams.edit', compact('equipo'));
    }

    public function editTeamStore(Request $request, $equipo){
        //return $request->all(); //ok pasa los datos bien.
        //return $equipo;  //id del registro update

        $request->validate([
            "name" => 'required | min:2 | max:50',
            "city" => 'required | min:2 | max:50',
            "stadium_name" =>'required | min:2 | max:50',
            "president" =>'required | min:2 | max:50',
            "aditional_info" => 'max:100'
        ]);
        //dd($request);
        $team = Team::find($equipo);

        $team -> update($request->all());
        //return $team1;

        return redirect()->route('team.show');
    }

    public function destroyTeamStore($id){
        //return $id;
        $equipo = Team::find($id);
        //$salida = $id . "-" . $equipo . "-";
        //return $salida;

        $equipo->delete();
        return view('teams.destroy', compact('id'));
    }  


    //MATCH----------------------------------------
    //Show
    public function showMatch(){
        $partido = Match::all();
        return view('matches.show', compact('partido'));
    }
    public function showMatchId($id){
        $partido = Match::where('id', $id)->first();
        return view('matches.showid', compact('partido'));
    }

    //Create
    public function createMatch(){
        //$match_status = ['pending', 'finish','delayed', 'canceled'];
        $match_status = Element::where('element', 'match_status')->get();
        return view('matches.create', compact('match_status'));
    }
    public function createMatchStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.
    
        $request->validate([
            "date_match" => 'date',
            //"time_match" => 'date_format:H:i',
            "city" =>'required | min:2 | max:50',
            "stadium_name" =>'required | min:2 | max:50',
            "referee" => 'required | min:2 | max:50',
            "local_team_name" => 'required | min:2 | max:50',
            "local_score" =>'required | numeric',
            "visitor_team_name" =>'required | min:2 | max:50',
            "visitor_score" => 'required | numeric',
            "status" => 'required',

            "aditional_info" => 'max:100'
        ]);
        //dd($request);

        $var =  Match::create($request->all());

        return redirect()->route('match.show');
    }

    //Edit
    public function editMatch($id){
        $partido = Match::where('id', $id)->first();
        //$match_status = ['pending', 'finish','delayed', 'canceled'];
        $match_status = Element::where('element', 'match_status')->get();
        return view('matches.edit', compact('partido', 'match_status')); 
    }
    public function editMatchStore(Request $request, $id){

        $request->validate([
            "date_match" => 'date',
            //"time_match" => 'date_format:H:i',
            "city" =>'required | min:2 | max:50',
            "stadium_name" =>'required | min:2 | max:50',
            "referee" => 'required | min:2 | max:50',
            "local_team_name" => 'required | min:2 | max:50',
            "local_score" =>'required | numeric',
            "visitor_team_name" =>'required | min:2 | max:50',
            "visitor_score" => 'required | numeric',
            "status" => 'required | min:2 | max:20',

            "aditional_info" => 'max:100'
        ]);

        $partido = Match::find($id); //añadido para que vincule el modelo y el id con $people, ya que no actualizaba bien los datos.
        $partido->update($request->all());

        return redirect()->route('match.show');
    }

    //Destroy
    public function destroyMatchStore($id){
        $equipo = Match::find($id);
        $equipo->delete();
        return view('matches.destroy', compact('id'));
    }  
}
