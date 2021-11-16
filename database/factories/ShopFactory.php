<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Array con: nombres de fichero, titulo, autor	
	$ShopArr = array( 
        array('Tomio Koyama', 'Tokio, Kioto, Japón'),
        array('Esther Arias Galerías de Arte y Taller', 'Barcelona, España'),
        array('Hans Mayer', 'Düsseldorf, Alemania'),
        array('MoMA', 'Nueva York, EE.UU.'),
        array('Galerie Bruno Bishofberger', 'Zúrich, Alemania'),
        array('Annely Juda Fine Art', 'Londres, Inglaterra'),
        array('Marlborough Fine Art', 'Londers, Inglaterra'),
        array('Opera Gallery', 'Paris, Francia'),
        array('The Saatchi Gallery', 'Londres, Inglaterra'),
        array('Gagosian Gallery', 'Nueva York, Estados Unidos'),
        array('Galería Peragón', 'Barcelona, España'),
        array('Galería Toni Tàpies', 'Barcelona, España'),
        array('Galería Marlborough Barcelona', 'Barcelona, España'),
        array('Galería Joan Gaspar', 'Barcelona, España'),
        array('Galería Àngels Barcelona', 'Barcelona, España'),
        array('Galería Joan Prats', 'Barcelona, España'),
        array('3 Punts Galería', 'Barcelona, España'),
        array('Galería Balaguer', 'Barcelona, España'),
        array('Galería Trama', 'Barcelona, España'),
        array('Galería ProjecteSD', 'Barcelona, España'),
        array('Espacio Trafalgar', 'Barcelona, España'),
        array('Galería Heinrich Ehrhardt', 'Madrid, España'),
        array('Galería Casado Santapau', 'Madrid, España'),
        array('Galería Travesía 4', 'Madrid, España'),
        array('Galería Elvira Gonzalez', 'Madrid, España'),
        array('Galería Parra & Romero', 'Madrid, España'),
        array('Galería Juana de Aizpuru', 'Madrid, España'),
        array('Galería Maisterra Valbuena', 'Madrid, España'),
        array('Galería Helga de Alvear', 'Madrid, España'),
        array('Galería Nogueras Blanchard', 'Madrid, España'),
        array('Galería Elba Benítez', 'Madrid, España'),
       );
       
       $NumRndShop = $this->faker->unique()->numberBetween(0, 30);

        return [
            //'name' => $this->faker->sentence(3),
            'name' => $ShopArr[$NumRndShop][0],
            'address'=> $ShopArr[$NumRndShop][1],
            'max_capacity' => $this->faker->numberBetween(10, 15),
        ];
    }
}
