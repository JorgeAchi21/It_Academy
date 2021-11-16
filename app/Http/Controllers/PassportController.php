<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    // ---  REGISTRO
    public function register(Request $request){
        //dd ($request.name);

        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Personal Access Token')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    // ---  LOGIN
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // $dataOut = auth()->attempt($data);
        // return response()-> json (['data:'=> $dataOut], 200);

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Personal Access Token')->accessToken;
            return response()->json([
                'user' => auth()->user(),
                'token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }

    // ---  LOGOUT
    public function logout(Request $request){
        // return "function logout";
        // return $token;
        
        // $nom = auth() -> user();
        // return $nom;
        //dd(Auth::user());

        $token = Auth::user()-> token();
        //return $token;
        $token -> revoke();
        
        return response()->json([
            'message' => 'Successfully logged out'
        ]);    

    }

    public function pruebas(Request $request){
        return "Pruebas middelware: asegurado ok enviando token";  
    }
}
