<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaintingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Array con: nombres de fichero, titulo, autor
        $DataFNameArr = array(
            1 => array('file_name' => 'c001', 'title' => 'Composición en rojo, amarillo, marron y negro', 'author' => 'Pier Mondriaan'),
            2 => array('file_name' => 'c002', 'title' => 'Madonna Sixtina', 'author' => 'Rafael'),
            3 => array('file_name' => 'c003', 'title' => 'Lección de anatomía del Dr. Nicolaes Tulp', 'author' => 'Rembrandt'),
            4 => array('file_name' => 'c004', 'title' => 'Las Meninas', 'author' => 'Velazquez'),
            5 => array('file_name' => 'c005', 'title' => 'La Mona Lisa', 'author' => 'Leonardo da Vince'),
            6 => array('file_name' => 'c006', 'title' => 'La ultima cena', 'author' => 'Leonardo da Vince'),
            7 => array('file_name' => 'c007', 'title' => 'La persistencia de la memoria', 'author' => 'Salvador Dali'),
            8 => array('file_name' => 'c008', 'title' => 'Saturno devorando a su hijo', 'author' => 'Francisco de Goya'),
            9 => array('file_name' => 'c009', 'title' => 'Retrato de Giovanni Arnolfini y su esposa', 'author' => 'Van Eyck'),
            10 => array('file_name' => 'c010', 'title' => 'El Guernica', 'author' => 'Picasso'),
            11 => array('file_name' => 'c011', 'title' => 'El Beso', 'author' => 'Gustav Klimt'),
            12 => array('file_name' => 'c012', 'title' => 'La joven de la perla', 'author' => 'Johannes Vermeer'),
            13 => array('file_name' => 'c013', 'title' => 'La muerte de Marat', 'author' => 'Jacques-Louis David'),
            14 => array('file_name' => 'c014', 'title' => 'El caminante sobre el mar de nubes', 'author' => 'Caspar David Friedrich'),
            15 => array('file_name' => 'c015', 'title' => 'Washington cruzando el Delaware', 'author' => 'Emanuel Leutze'),
            16 => array('file_name' => 'c016', 'title' => 'El nacimiento de Venus', 'author' => 'Sandro Botticelli'),
            17 => array('file_name' => 'c017', 'title' => 'Noctambulos', 'author' => 'Edward Hopper'),
            18 => array('file_name' => 'c018', 'title' => 'La creacion de Adan', 'author' => 'Miguel Angel'),
            19 => array('file_name' => 'c019', 'title' => 'El tres de mayo', 'author' => 'Francisco de Goya'),
            20 => array('file_name' => 'c020', 'title' => 'Las Meninas', 'author' => 'Velazquez'),
            21 => array('file_name' => 'c021', 'title' => 'La balsa de la medusa', 'author' => 'Théodore Géricault'),
            22 => array('file_name' => 'c022', 'title' => '¿De dónde venimos? ¿Quiénes somos? ¿Adónde vamos?', 'author' => 'Paul Gauguin'),
            23 => array('file_name' => 'c023', 'title' => 'Noche Estrellada', 'author' => 'Van Gogh'),
            24 => array('file_name' => 'c024', 'title' => 'La rendicion de Breda', 'author' => 'Velazquez'),
            25 => array('file_name' => 'c025', 'title' => 'Terraza de cafe por la noche', 'author' => 'Van Gogh'),
            26 => array('file_name' => 'c026', 'title' => 'El Jardin de las Delicias', 'author' => 'El Bosco'),
            27 => array('file_name' => 'c027', 'title' => 'La Lechera', 'author' => 'Johannes Vermeer van Delft'),
            28 => array('file_name' => 'c028', 'title' => 'La Torre de Babel', 'author' => 'Pieter Bruegel the Elder'),
            29 => array('file_name' => 'c029', 'title' => 'La Escuela de Atenas', 'author' => 'Rafael Sanzio'),
            30 => array('file_name' => 'c030', 'title' => 'Los Embajadores', 'author' => 'Hans Holbein el Joven'),
            31 => array('file_name' => 'c031', 'title' => 'La Libertad guiando al pueblo', 'author' => 'Eugene Delacroix'),
            32 => array('file_name' => 'c032', 'title' => 'Impresion, Sol Naciente', 'author' => 'Claude Monet'),
            33 => array('file_name' => 'c033', 'title' => 'El Grito', 'author' => 'Edvard Munch'),
            34 => array('file_name' => 'c034', 'title' => 'Napoleon cruzando los Alpes', 'author' => 'Jacques-Louis David'),
            35 => array('file_name' => 'c035', 'title' => 'Boulevard Montmartre', 'author' => 'Camille Pissarro'),
            36 => array('file_name' => 'c036', 'title' => 'Las Bodas de Cana', 'author' => 'Paolo Veronese'),
            37 => array('file_name' => 'c037', 'title' => 'El bar del Folies Bergère', 'author' => 'Edouard Manet'),
            38 => array('file_name' => 'c038', 'title' => 'Mujeres Bañandose', 'author' => 'Cezanne'),
            39 => array('file_name' => 'c039', 'title' => 'Mujeres en Haiti', 'author' => 'Paul Gauguin'),
            40 => array('file_name' => 'c040', 'title' => 'El columpio', 'author' => 'Jean-Honoré Fragonard'),
            41 => array('file_name' => 'c041', 'title' => 'Retrato de la madre del artista', 'author' => 'McNeill Whistler'),
            42 => array('file_name' => 'c042', 'title' => 'Derbi en Epsom', 'author' => 'Théodore Géricault'),
            43 => array('file_name' => 'c043', 'title' => 'Pollice verso', 'author' => 'Jean-Léon Gérôme'),
            44 => array('file_name' => 'c044', 'title' => 'El último dia de Pompeya', 'author' => 'Karl Pávlovich Briulov'),
            45 => array('file_name' => 'c045', 'title' => 'Sobrevolando la ciudad', 'author' => 'Marc Chagall'),
            46 => array('file_name' => 'c046', 'title' => 'Vista de Toledo', 'author' => 'El Greco'),
            47 => array('file_name' => 'c047', 'title' => 'El entierro del conde de Orgaz', 'author' => 'El Greco'),
            48 => array('file_name' => 'c048', 'title' => 'La danza', 'author' => 'Henri Matisse'),
            49 => array('file_name' => 'c049', 'title' => 'Demonio sentado en el jardín', 'author' => 'Mijaíl Vrúbel'),
            50 => array('file_name' => 'c050', 'title' => 'Bodegón de caza, hortalizas y frutas', 'author' => 'Juan Sánchez Cotán'),
            51 => array('file_name' => 'c051', 'title' => 'Niños comiendo uvas y melon', 'author' => 'Murillo'),
            52 => array('file_name' => 'c052', 'title' => 'Paseo a orillas del mar', 'author' => 'Sorolla'),
            53 => array('file_name' => 'c053', 'title' => 'La Gran Via', 'author' => 'Antonio Lopez'),
            54 => array('file_name' => 'c054', 'title' => 'Las lagrimas de San Pedro', 'author' => 'El greco'),
            55 => array('file_name' => 'c055', 'title' => 'La familia de Carlos IV', 'author' => 'Goya'),
            56 => array('file_name' => 'c056', 'title' => 'La catedral de Rouen', 'author' => 'Claude Monet'),
            57 => array('file_name' => 'c057', 'title' => 'Santo Entierro', 'author' => 'Caravaggio'),
            58 => array('file_name' => 'c058', 'title' => 'Retrato de una mujer joven', 'author' => 'Rogier van der Weyden'),
            59 => array('file_name' => 'c059', 'title' => 'Salvator Mundi', 'author' => 'Leonardo da Vinci'),
            60 => array('file_name' => 'c060', 'title' => 'La dama del armiño', 'author' => 'Leonardo da Vinci'),
            61 => array('file_name' => 'c061', 'title' => 'El triunfo de galatea', 'author' => 'Rafael'),
            62 => array('file_name' => 'c062', 'title' => 'El retorno del hijo pródigo', 'author' => 'Rembrandt'),
            63 => array('file_name' => 'c063', 'title' => 'Madonna Litta', 'author' => 'Leonardo da Vinci'),
            64 => array('file_name' => 'c064', 'title' => 'Suprematist Composition', 'author' => 'Kazimir Malevich'),
            65 => array('file_name' => 'c065', 'title' => 'El beso', 'author' => 'Francesco Hayez'),
            66 => array('file_name' => 'c066', 'title' => 'El rapto de las hijas de Leucipo', 'author' => 'Peter Paul Rubens y Jan Wildens'),
            67 => array('file_name' => 'c067', 'title' => 'Lamentación sobre Cristo muerto', 'author' => 'Andrea Mantegna'),
            68 => array('file_name' => 'c068', 'title' => 'El desesperado', 'author' => 'Gustave Courbet'),
            69 => array('file_name' => 'c069', 'title' => 'La ronda de noche', 'author' => 'Rembrandt'),
            70 => array('file_name' => 'c070', 'title' => 'Watson y el tiburón', 'author' => 'John Singleton Copley'),
            71 => array('file_name' => 'c071', 'title' => 'La maja desnuda', 'author' => 'Francisco de Goya'),
            72 => array('file_name' => 'c072', 'title' => 'El expolio', 'author' => 'El Greco'),
            73 => array('file_name' => 'c073', 'title' => 'La tentacion de San Antonio', 'author' => 'Dali'),
            74 => array('file_name' => 'c074', 'title' => 'La gran Ola', 'author' => 'Kanagawa'),
            75 => array('file_name' => 'c075', 'title' => 'El Juramento de los Horacios', 'author' => 'Jacques-Louis David'),
            76 => array('file_name' => 'c076', 'title' => 'Retrato de una dama desconocida', 'author' => 'Ivan Kramkoi'),
            77 => array('file_name' => 'c077', 'title' => 'La novena ola', 'author' => 'Iván Aivazovski'),
            78 => array('file_name' => 'c078', 'title' => 'Venus durmiente', 'author' => 'Giorgione'),
            79 => array('file_name' => 'c079', 'title' => 'La gran odalisca', 'author' => 'Dominique Ingres'),
            80 => array('file_name' => 'c080', 'title' => 'Olympia', 'author' => 'Edouard Manet'),
            81 => array('file_name' => 'c081', 'title' => 'La decapitación de San Juan Bautista', 'author' => 'Caravaggio'),
            82 => array('file_name' => 'c082', 'title' => 'El acrobata de la bola', 'author' => 'Picasso'),
            83 => array('file_name' => 'c083', 'title' => 'Amor sacro y amor profano', 'author' => 'Tizziano'),
            84 => array('file_name' => 'c084', 'title' => 'Composicion 7', 'author' => 'Vassily Kandinsky'),
            85 => array('file_name' => 'c085', 'title' => 'Dante y Virgilio en el infierno', 'author' => 'Bouguereau'),
            86 => array('file_name' => 'c086', 'title' => 'El desayuno sobre la hierva', 'author' => 'Edouard Manet'),
            87 => array('file_name' => 'c087', 'title' => 'Las espigadoras', 'author' => 'Millet'),
            88 => array('file_name' => 'c088', 'title' => 'El recaudador de impuestos y su mujer', 'author' => 'Marinus Claeszoon van Reymerswaele'),
            89 => array('file_name' => 'c089', 'title' => 'El cuarto estado', 'author' => 'Giuseppe Pellizza da Volpedo'),
            90 => array('file_name' => 'c090', 'title' => 'Cristo de San Juan de la Cruz', 'author' => 'Dali'),
            91 => array('file_name' => 'c091', 'title' => 'La chiquita piconera', 'author' => 'Julio Romero de Torres'),
            92 => array('file_name' => 'c092', 'title' => 'El caballero de la mano en el pecho', 'author' => 'El Greco'),
            93 => array('file_name' => 'c093', 'title' => 'La transfiguracion', 'author' => 'Rafael'),
            94 => array('file_name' => 'c094', 'title' => 'Baile en el Moulin de la Galette', 'author' => 'Pierre-Auguste Renoir'),
            95 => array('file_name' => 'c095', 'title' => 'La dama de Shalott', 'author' => 'John William Waterhouse'),
            96 => array('file_name' => 'c096', 'title' => 'Perseo y Andromeda', 'author' => 'Frederic Leighton'),
            97 => array('file_name' => 'c097', 'title' => 'Los girasoles', 'author' => 'Van Gogh'),
            98 => array('file_name' => 'c098', 'title' => 'Ophelia', 'author' => 'John Everett Millais'),
            99 => array('file_name' => 'c099', 'title' => 'Las tres gracias', 'author' => 'Rubens'),
            100 => array('file_name' => 'c100', 'title' => 'Lady Lilith', 'author' => 'Dante Gabriel Rossetti'),
        );


        //Se genera un numero rnd para obtener datos del array-arreglo-matriz ;-)
        $NumRndCua = $this->faker->unique()->numberBetween(1, 31);

        
        return [
            'author' => $DataFNameArr[$NumRndCua]['author'],  //autor
            'picture_name' => $DataFNameArr[$NumRndCua]['title'], //titulo del cuadro
            'shop_id' => $this->faker->randomElement([1, 2, 3, 4, 5]), //tienda
            'price' => $this->faker->numberBetween($min = 100, $max = 1000), //precio
            'entry_date' => $this->faker->date(), //fecha de entrada
            'url' => './img/' . $DataFNameArr[$NumRndCua]['file_name'] . '.jpg', //nombre del fichero
            'comment' => $this-> faker->sentence(10), //comentario
        ];
    }
}
