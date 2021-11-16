<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Shop;
use App\Models\Painting;

class WCApiController extends Controller
{
    public function home(){
        //return 'Home api/home/';
        return view('app');
    }

    //--- --- --- SHOP
    //view shops
    public function viewShops(){
        //return "viewShops";
        //return $request;
        
        $shops = Shop::all();
        return response()->json(compact('shops'));
    }

    //create shop
    public function createShops(Request $request){
        // return "createShops";
        //return $request;
        
        //validaciones
        $request->validate([
            "name" => 'required | min:5 | max:50',
            "address" => 'required ',
            "max_capacity" => 'min:1 | max:50'
        ]);
        $NewGallery = Shop::create($request->all());
        
        $shops = Shop::all();
        return response()->json(compact('shops'));
    }

    public function updateShops(Request $request, $id){
        // --- validaciones
        $request->validate([
            "name" => 'required | min:5 | max:50',
            "address" => 'required ',
            "max_capacity" => 'min:1 | max:50'
        ]);

        $shopUdt = Shop::find($id);
        $shopUdt ->update($request->all());
        
        $shops = Shop::all();
        return response()->json(compact('shops'));
    }

    //delete shop
    public function deleteShops($id){
        //return $id
        $shop = Shop::find($id);
        $shop -> delete();
        
        $shop = Shop::all();
        return response()->json(compact('shop'), 200);
        // return response()->json([
        //     'salida:' => $id
        // ], 200);
    }


    //--- --- --- CUADROS
    //Añadir cuadro
    public function addPicture(Request $request){
        $Shop = Painting::create($request->all());
        return response()->json(compact('Shop'));
    }
    
    //Listar cuadros de una tienda
    public function viewPictureByShop($id){
        $paintingByShop = Painting::where('shop_id', '=', $id)->get();
        return response()->json(compact('paintingByShop'));
    }

    //Listar todos cuadros
    public function viewPictures(){
        $paintings = Painting::all();
        return response()->json(compact('paintings'));
    }
    
    public function destroy($id){
        //borrar cuadros (no necesario ya que relacionados)
        //$pictures = Painting::where('shop_id', '=', $id)->get();
        //$pictures -> Delete();
        //borrar galeria
        $gallery = Shop::find($id);
        $gallery -> delete();

        $shops = Shop::all();
        return response()->json(compact('shops'), 200);

    }
}
