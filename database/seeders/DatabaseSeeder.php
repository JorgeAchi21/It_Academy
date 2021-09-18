<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Room;
use App\Models\Reservation;
use App\Models\Element; //elementos de la lista

//añadidos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; 

use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        {
            //---SEGURIDAD
            // 1º añadirmos los usuarios para que no de problema al crear los demas objetos.
            //necesita referencias: 
            //use App\Models\User;
            //use Illuminate\Support\Str;

            //Creacion de roles
            Role::create(['name' => 'admin']);
            //Role::create(['name' => 'manager']);
            Role::create(['name' => 'roomGest']);
            Role::create(['name' => 'reservationGest']);
            
            //Creacion de usuarios
            $admin = User::create([
                'name' =>'admin',
                'email' =>'admin@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10) 
            ]);
            $user1 = User::create([
                'name' =>'user1', //usu manager
                'email' =>'user1@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10) 
            ]);
            $user2 = User::create([
                'name' =>'user2', //usu manager
                'email' =>'user2@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10)
            ]);
            
            //asignacion de roles a usuarios
            $admin->assignRole('admin');
            $user1->assignRole('roomGest');
            $user2->assignRole('reservationGest');


            // CREACION DE HABITACIONES
            //habitacion 101
            $room1 = new Room();
            $room1->room = 101;
            $room1->guests = 2;
            $room1->state = 'free';
            $room1->price = 30;
            $room1->save();
            
            //habitacion 102
            $room2 = new Room();
            $room2->room = 102;
            $room2->guests = 2;
            $room2->state = 'free';
            $room2->price = 30;
            $room2->save();
            
            //habitacion 103
            $room3 = new Room();
            $room3->room = 103;
            $room3->guests = 2;
            $room3->state = 'free';
            $room3->price = 30;
            $room3->save();
            
            //habitacion 201
            $room4 = new Room();
            $room4->room = 201;
            $room4->guests = 3;
            $room4->state = 'free';
            $room4->price = 45;
            $room4->save();
    
            //habitacion 202
            $room5 = new Room();
            $room5->room = 202;
            $room5->guests = 2;
            $room5->state = 'free';
            $room5->price = 30;
            $room5->save();
    
            //habitacion 203
            $room6 = new Room();
            $room6->room = 203;
            $room6->guests = 2;
            $room6->state = 'free';
            $room6->price = 30;
            $room6->save();
    
            //habitacion 301
            $room7 = new Room();
            $room7->room = 301;
            $room7->guests = 3;
            $room7->state = 'free';
            $room7->price = 45;
            $room7->save();
            
            //habitacion 302
            $room8 = new Room();
            $room8->room = 302;
            $room8->guests = 2;
            $room8->state = 'free';
            $room8->price = 30;
            $room8->save();
            
            //habitacion 303
            $room9 = new Room();
            $room9->room = 303;
            $room9->guests = 4;
            $room9->state = 'free';
            $room9->price = 45;
            $room9->save();

            // CREACION DE RESERVAS
            $serv1 = new Reservation();
            $serv1 -> clientName = "DANIELA";
            $serv1 -> checkIn = "20210907";
            $serv1 -> checkOut = "20210917";
            $serv1 -> room = 101;
            $serv1 -> save();

            $serv2 = new Reservation();
            $serv2 -> clientName = "JUAN LUIS";
            $serv2 -> checkIn = "20210908";
            $serv2 -> checkOut = "20210918";
            $serv2 -> room = 102;
            $serv2 -> save();

            $serv3 = new Reservation();
            $serv3 -> clientName = "EDUARDO";
            $serv3 -> checkIn = "20210909";
            $serv3 -> checkOut = "20210919";
            $serv3 -> room = 103;
            $serv3 -> save();

            $serv4 = new Reservation();
            $serv4 -> clientName = "MARIO";
            $serv4 -> checkIn = "20210910";
            $serv4 -> checkOut = "20210920";
            $serv4 -> room = 103;
            $serv4 -> save();

            //---Elementos de lista
            //Room status: busy, free, reserved, out of order:ocupada, libre, reservada, sin uso
            Element::create([
            'element' =>'room_status',
            'value' => 'busy',
            ]);

            Element::create([
            'element' =>'room_status',
            'value' => 'free',
            ]);

            Element::create([
            'element' =>'room_status',
            'value' => 'reserved',
            ]);

            Element::create([
            'element' =>'room_status',
            'value' => 'out of order',
            ]);
        }
    }
}
