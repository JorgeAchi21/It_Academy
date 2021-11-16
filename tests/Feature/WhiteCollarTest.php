<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
//
use App\Models\User;
use App\Models\Shop;

class WhiteCollarTest extends TestCase
{
    use WithFaker;

    // === Variables que utilizamos para cargar valores por defecto.
    static $tokenLogin;
    static $userName = "maria";
    static $email = "@gmail.com";
    static $password = "12345678";

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example(){
        //Home
        $salida = $this->get('/');
        $salida->assertStatus(200);
    }


    public function test_home(){
        $salida = $this->get('/api/home/');
        $salida->assertOk(200);
    }


    // === Registrar un usuario
    public function test_register(){
        echo "\n-------------------------------------------\n";
        $sur_name = rand(10,1000);  //generacion de num rnd para que no se repita
        self::$userName = self::$userName . $sur_name; //usuario= nombre + (num rnd)
        self::$email = self::$userName . self::$email; //email=  nombre + (num rnd) + @gmail.com

        echo "REGISTER NEW USER: \n";
        echo "User generated: " . self::$userName . "\n";
        echo "email generated: ". self::$email;
        echo "\n-------------------------------------------\n";
        $salida = $this->post('/api/register/', [
            'name' => self::$userName,
            'email' => self::$email,
            'password' => self::$password
        ]);
        $salida->assertOk(200);
    }


    // === Login un usuario
    public function test_login(){
        $find_first_user = User::all()->first();
        $log_user = $find_first_user->name;
        $log_email = $find_first_user->email;
        $log_pass = "12345678"; //"Password";
        $log_passG = $find_first_user->password;

        echo "-------------------------------------------\n";
        echo "LOGIN USER: \n";
        echo "usuario: " . $log_user . "\n";
        echo "email: " . $log_email . "\n";
        echo "password: " . $log_pass . " - Cript: " . $log_passG . "\n";

        // print_r ($find_first_user);

        $salida = $this->postJson('/api/login', [
            // 'email' => self::$email,
            // 'password' => self::$password
            'email' => $log_email,
            'password' => $log_pass

        ]);
        //echo ("Login token:" . $salida->json('token') . "\n\n");
        self::$tokenLogin = $salida->json('token'); //pasar el token a var. estatica
        echo ("\nToken de login generado srv.: \n" . self::$tokenLogin . "\n");
        echo "-------------------------------------------\n";
        $salida->assertOk(200);
    }

    // === Listar shops
    public function test_listarShops(){
        $token = self::$tokenLogin;
        $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
           ->get('/api/shops');
           
           $respuesta->assertOk(200);
    }
    
    // === Añadir shop
    public function test_añadirShops(){
        $token = self::$tokenLogin;
        echo "-------------------------------------------\n";
        echo "AÑADIR SHOP: \n";
        $name =  "Gallery " . $this->faker->name();
        $address = $this->faker->address();
        $max_capacity= $this->faker->numberBetween(15, 30);
        echo ("Name: " . $name . "\nAddress: " . $address . "\nMax_capacity: " . $max_capacity . "\n");
        echo "-------------------------------------------\n";

        $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
             ->post('/api/shops', [
                'name' => $name,
                'address' => $address,
                'max_capacity' => $max_capacity
            ]);
            
        $respuesta->assertOk(200);
    }

    // === Edit shop
    public function test_editShops(){
        $token = self::$tokenLogin;
        $num = rand(10,100);

        echo "-------------------------------------------\n";
        echo "EDIT SHOP: \n";
        //$updt_shop = Shop::all()->first();
        
        $arr_updt = Shop::all('id')->toArray();
        $arr_updt_num = count($arr_updt);
        echo ("Arr:\n");
        echo ("Num total de elementos:". $arr_updt_num . "\n");
        $rnd = rand(0, $arr_updt_num - 1 );
        echo ("Pos rnd: " . $rnd . "\n");
        $idEdit = $arr_updt[$rnd]['id'];
        echo ("Valor a editar id:" );
        print_r ($idEdit);
        //echo ("New id: " . $idEdit);
        //print_r($arr_updt);
        echo "\n-------------------------------------------\n";

        //$id_updt_shop = $updt_shop->id;
        $route_update = '/api/shops/edit/' . $idEdit;

        $updt_shop = Shop::find($idEdit);
        $name = $updt_shop->name . "_" . $num;
        $address = $updt_shop->address . "_" . $num;
        $max_capacity = $updt_shop->max_capacity + 1;

        echo "Id:" . $idEdit . "\n";
        echo "ruta:" . $route_update . "\n";
        echo "Data Old value:---\n";
        echo ("Name: " . $updt_shop->name . "\nAddress: " . $updt_shop->address . "\nMax_capacity: " . $updt_shop->max_capacity . "\n");
        echo "Data New value:---\n";
        echo ("Name: " . $name . "\nAddress: " . $address . "\nMax_capacity: " . $max_capacity . "\n");
        echo "-------------------------------------------\n";

        // $updt = [
        // 'name' => $name,
        // 'address' => $address,
        // 'max_capacity' => $max_capacity
        // ];

        $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
            ->post($route_update, [
                'name' => $name,
                'address' => $address,
                'max_capacity' => $max_capacity
            ]);
        //$respuesta->update($updt->all());

        $respuesta->assertOk(200);
    }

    // // === Borrar shop
    // public function test_borrarShop(){
    //     $token = self::$tokenLogin;
    //     echo "-------------------------------------------\n";
    //     echo "BORRAR SHOP: \n";
    //     $del_shop = Shop::all()->first();
    //     $id_del_shop = $del_shop->id;

    //     $route_delete = '/api/shops/delete/' . $id_del_shop;
    //     echo ("Deleted Id: " . $id_del_shop . "\nsrc: ". $route_delete . "\n");
    //     echo "-------------------------------------------\n";

    //     $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
    //         ->post($route_delete);
            
    //     $respuesta->assertOk(200);
    // }


    // === Listar cuadros
    public function test_listarPictures(){
        //$data ="";
        $token = self::$tokenLogin;
        $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
        ->get('api/show/picture');
        
        //$data = $respuesta->assertJson();
        //$this->assetTrue($respuesta['created']);
        $arr_data = $respuesta->Json();
        //$arr_data = $respuesta()->json();
        
        //Contar y mostrar el array
        echo "-------------------------------------------\n";
        echo "LISTAR CUADROS: \n";
        echo ("\nNum reg arr data: " . count($arr_data) ." \n");
        echo ( "Json retornado:\n\n");
        print_r($arr_data);
        echo "\n-------------------------------------------\n";

        $respuesta->assertOk(200);
    }
    

    // === Logout un usuario
    public function test_logout(){
        //echo ("LLegada token: \n" . self::$tokenLogin . "\n");
        $token = self::$tokenLogin;
        $respuesta = $this->withHeader('Authorization', 'Bearer ' . $token)
           ->post('/api/logout');

        $respuesta->assertOk(200);
    }
}
