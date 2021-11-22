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
        $shops = Shop::all();
        return response()->json(compact('shops'));
    }

    //view id shop
    public function viewIdShops($id){
        $shop = Shop::where('id', $id)->first();
        return response()->json(compact('shop'));
    }

    // Create shop
    public function createShops(Request $request){
        //validaciones
        $request->validate([
            "name" => 'required | min:2 | max:50',
            "address" => 'required ',
            "max_capacity" => 'min:1 | max:50'
        ]);
        $NewGallery = Shop::create($request->all());
        
        $shops = Shop::all();
        return response()->json(compact('shops'), 200);
    }

    // Update shop
    public function updateShops(Request $request, $id){
        // --- validaciones
        $request->validate([
            "name" => 'required | min:2 | max:50',
            "address" => 'required ',
            "max_capacity" => 'min:1 | max:500'
        ]);

        $shopUdt = Shop::find($id);
        $shopUdt ->update($request->all());
        
        //reenvio de toda la data
        $shops = Shop::all();
        return response()->json(compact('shops'), 200);
    }

    //delete shop
    public function deleteShops($id){

        $shop = Shop::find($id);
        $shop -> delete();
        
        $shops = Shop::all();
        return response()->json(compact('shops'), 200);

        //Json -> mensaje retorno personalizado
        // return response()->json([
        //     'salida:' => $id
        // ], 200);
    }


    //--- --- --- CUADROS / PICTURES
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
    
    //borrar un cuadro
    public function deletePicture($id){

        $picture = Painting::find($id);
        $picture -> delete();

        $pictures = Painting::all();
        return response()->json(compact('pictures'), 200);
    }

    //burn down a gallery
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
