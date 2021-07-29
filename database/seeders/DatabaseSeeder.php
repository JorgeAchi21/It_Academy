<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Team;
use App\Models\Match;
use App\Models\Element;

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
        //---SEGURIDAD
        // 1º añadirmos los usuarios para que no de problema al crear los partidos.
        //necesita referencias: 
        //use App\Models\User;
        //use Illuminate\Support\Str;

        //Creacion de roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);
        
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
          $user1->assignRole('manager');
          $user2->assignRole('manager');
          
        
        //---EQUIPOS 
        $equipo1 = new Team();

        $equipo1->name ="FC Barcelona";
        $equipo1->city="Barcelona";
        $equipo1->stadium_name="Nou Camp";
        $equipo1->president ="Laporta";
        $equipo1->aditional_info ="Tanto el club como sus hinchas reciben el apelativo de cules y tambien, en referencia a sus colores, azulgranas o blaugranas.";
        $equipo1 -> save();

        $equipo2 = new Team();

        $equipo2->name ="RCD Español";
        $equipo2->city="Cornella/El Prat";
        $equipo2->stadium_name="RCDE Stadium";
        $equipo2->president ="Chen Yansheng";
        $equipo2->aditional_info ="Actualmente participa en la primera categoría de la Liga Nacional de Fútbol Profesional, habiendo competido en Primera División un total de 85 ediciones y logrando como mejor resultado finalizar en el tercer puesto en cuatro temporadas.";
        $equipo2->save();

        $equipo3 = new Team();

        $equipo3->name ="Real Madrid";
        $equipo3->city="Madrid";
        $equipo3->stadium_name="Santiago Bernabeu";
        $equipo3->president ="Florentino Perez";
        $equipo3->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. In doloremque ex labore expedita saepe voluptate quam, minus perspiciatis repudiandae omnis.";
        $equipo3->save();
       
        $equipo4 = new Team();

        $equipo4->name ="Atletico de Madrid";
        $equipo4->city="Madrid";
        $equipo4->stadium_name="Wanda Metropolitano";
        $equipo4->president ="Enrique Cerezo";
        $equipo4->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. In doloremque ex labore expedita saepe voluptate quam, minus perspiciatis repudiandae omnis.";
        $equipo4->save();

        $equipo5 = new Team();

        $equipo5->name ="Sevilla FC";
        $equipo5->city="Sevilla";
        $equipo5->stadium_name="Ramón Sánchez-Pizjuán";
        $equipo5->president ="Jose Castro Carmona";
        $equipo5->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. In doloremque ex labore expedita saepe voluptate quam, minus perspiciatis repudiandae omnis.";
        $equipo5->save();
        
        $equipo6 = new Team();

        $equipo6->name ="Real Sociedad de Fútbol";
        $equipo6->city="San Sebastian";
        $equipo6->stadium_name="Reale Arena";
        $equipo6->president ="Jokin Aperribay";
        $equipo6->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. In doloremque ex labore expedita saepe voluptate quam, minus perspiciatis repudiandae omnis.";
        $equipo6->save();

        $equipo7 = new Team();

        $equipo7->name ="Real Betis Balompie";
        $equipo7->city="Sevilla";
        $equipo7->stadium_name="Benito Villamarin";
        $equipo7->president ="Angel Haro";
        $equipo7->aditional_info ="Es uno de los unicos 9 clubes españoles que han conquistado Liga y Copa Nacional y también es el club que mas veces ha subido y bajado a segunda división de la liga.";
        $equipo7->save();

        $equipo8 = new Team();

        $equipo8->name ="Villarreal Club de Fútbol,";
        $equipo8->city="Villareal";
        $equipo8->stadium_name="Estadio de la Ceramica";
        $equipo8->president ="Angel Haro";
        $equipo8->aditional_info ="Desde la decada de 1940, la indumentaria del club se ha caracterizado por el color amarillo de su camiseta, y el equipo es conocido popularmente bajo el apodo de submarino amarillo.";
        $equipo8->save();


        //---PARTIDOS
        $partido1 = new Match();

        $partido1->date_match='2021-07-17';
        $partido1->time_match='15:00';
        $partido1->city='Barcelona';
        $partido1->stadium_name='Nou Camp';
        $partido1->referee='Jose';
        $partido1->local_team_name='FC Barcelona';
        $partido1->local_score=0;
        $partido1->visitor_team_name='RCD Español';
        $partido1->visitor_score=0;
        $partido1->status='pending'; //pending, played, delayed, canceled
        $partido1->aditional_info='problemas con el estadio';
        $partido1->user_id = 2;
 
        $partido1->save();

        $partido2 = new Match();

        $partido2->date_match='2021-07-17';
        $partido2->time_match='15:00';
        $partido2->city='Barcelona';
        $partido2->stadium_name='Nou Camp';
        $partido2->referee='Jose';
        $partido2->local_team_name='FC Barcelona';
        $partido2->local_score=0;
        $partido2->visitor_team_name='RCD Español';
        $partido2->visitor_score=0;
        $partido2->status='pending'; //pending, played, delayed, canceled
        $partido2->aditional_info='problemas con el estadio';
        $partido2->user_id = 3;

        $partido2->save();

        $partido3 = new Match();

        $partido3->date_match='2021-07-17';
        $partido3->time_match='15:00';
        $partido3->city='Barcelona';
        $partido3->stadium_name='Nou Camp';
        $partido3->referee='Jose';
        $partido3->local_team_name='FC Barcelona';
        $partido3->local_score=0;
        $partido3->visitor_team_name='RCD Español';
        $partido3->visitor_score=0;
        $partido3->status='pending'; //pending, played, delayed, canceled
        $partido3->aditional_info='problemas con el estadio';
        $partido3->user_id = 2;

        $partido3->save();

        $partido4 = new Match();

        $partido4->date_match='2021-07-17';
        $partido4->time_match='15:00';
        $partido4->city='Barcelona';
        $partido4->stadium_name='Nou Camp';
        $partido4->referee='Jose';
        $partido4->local_team_name='FC Barcelona';
        $partido4->local_score=0;
        $partido4->visitor_team_name='RCD Español';
        $partido4->visitor_score=0;
        $partido4->status='pending'; //pending, played, delayed, canceled
        $partido4->aditional_info='problemas con el estadio';
        $partido4->user_id = 3;

        $partido4->save();

        $partido5 = new Match();

        $partido5->date_match='2021-07-17';
        $partido5->time_match='15:00';
        $partido5->city='Barcelona';
        $partido5->stadium_name='Nou Camp';
        $partido5->referee='Jose';
        $partido5->local_team_name='FC Barcelona';
        $partido5->local_score=0;
        $partido5->visitor_team_name='RCD Español';
        $partido5->visitor_score=0;
        $partido5->status='pending'; //pending, played, delayed, canceled
        $partido5->aditional_info='problemas con el estadio';
        $partido5->user_id = 2;

        $partido5->save();

        $partido6 = new Match();

        $partido6->date_match='2021-07-17';
        $partido6->time_match='15:00';
        $partido6->city='Barcelona';
        $partido6->stadium_name='Nou Camp';
        $partido6->referee='Jose';
        $partido6->local_team_name='FC Barcelona';
        $partido6->local_score=0;
        $partido6->visitor_team_name='RCD Español';
        $partido6->visitor_score=0;
        $partido6->status='pending'; //pending, played, delayed, canceled
        $partido6->aditional_info='problemas con el estadio';
        $partido6->user_id = 3;

        $partido6->save();

        //---Elementos de lista
        Element::create([
          'element' =>'match_status',
          'value' =>'pending',
         ]);
         Element::create([
          'element' =>'match_status',
          'value' =>'played',
         ]);
         Element::create([
          'element' =>'match_status',
          'value' =>'delayed',
         ]);
         Element::create([
          'element' =>'match_status',
          'value' =>'canceled',
         ]);

    }
}
