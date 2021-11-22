<template>
    <div>
        <div class="jumbotron">
            <h1 class="text-primary text-center"><span class="font-weight-bold">Add</span> a picture:</h1>
            <form v-on:submit.prevent="addPicture()">
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" id="author" v-model="picture.author">
                </div>
                <div class="form-group">
                    <label for="picture_name">Picture name:</label>
                    <input type="text" class="form-control" id="picture_name" v-model="picture.picture_name">
                </div>
               
                <div class="form-group">
                    <label for="shop_id">Select a existing Gallery:  *(list select)</label>
                    <select class="form-control" v-model="picture.shop_id">
                        <option v-for="(shop, index, key) in shops" v-bind:key="shop.id" v-bind:value="shop.id">
                            {{ key }} - {{ index }} = {{ shop.id }} : {{ shop.name }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" v-model="picture.price">
                </div>
                <div class="form-group">
                    <label for="entry_date">Entry date:</label>
                    <input type="date" class="form-control" id="entry_date" v-model="picture.entry_date">
                </div>
                <div class="form-group">
                    <label for="url">Select a <strong>Image url</strong>:  *(list select)</label>
                    <select class="form-control" v-model="picture.url">
                        <option v-for="cuadro in pictureIn" v-bind:key="cuadro.nombre_cuadro" v-bind:value="cuadro.file_name">
                            {{ cuadro.autor }} - {{ cuadro.nombre_cuadro }} - {{ cuadro.file_name }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <input type="text" class="form-control" id="url" v-model="picture.comment">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            shops:[
            ],
            picture: {},
            
            //     //ejemplo para pruebas estaticas:
            //     {
            //     author: '',
            //     picture_name: '',
            //     shop_id: 0,
            //     price: 0,
            //     entry_date: '2021-01-01',
            //     url: 'https://via.placeholder.com/150',
            //     comment: ''
            //     }
            
            //array con la lista de las 100 imagenes: autores, nombre cuadro y nombre y ruta del fichero.
            pictureIn:[
            {autor: 'Pier Mondriaan', nombre_cuadro: "Composición en rojo, amarillo, marron y negro", file_name: './img/c001.jpg'},
            {autor: 'Rafael', nombre_cuadro: 'Madonna Sixtina', file_name: './img/c002.jpg'},
            {autor: 'Rembrandt', nombre_cuadro: 'Lección de anatomía del Dr. Nicolaes Tulp', file_name: './img/c003.jpg'},
            {autor: 'Velazquez', nombre_cuadro: 'Las Meninas', file_name: './img/c004.jpg'},
            {autor: 'Leonardo da Vince', nombre_cuadro: 'La Mona Lisa', file_name: './img/c005.jpg'},
            {autor: 'Leonardo da Vince', nombre_cuadro: 'La ultima cena', file_name: './img/c006.jpg'},
            {autor: 'Salvador Dali', nombre_cuadro: 'La persistencia de la memoria', file_name: './img/c007.jpg'},
            {autor: 'Francisco de Goya', nombre_cuadro: 'Saturno devorando a su hijo', file_name: './img/c008.jpg'},
            {autor: 'Van Eyck', nombre_cuadro: 'Retrato de Giovanni Arnolfini y su esposa', file_name: './img/c009.jpg'},
            {autor: 'Picasso', nombre_cuadro: 'El Guernica', file_name: './img/c010.jpg'},
            {autor: 'Gustav Klimt', nombre_cuadro: 'El Beso',  file_name: './img/c011.jpg'},
            {autor: 'Johannes Vermeer', nombre_cuadro: 'La joven de la perla',  file_name: './img/c012.jpg'},
            {autor: 'Jacques-Louis David', nombre_cuadro: 'La muerte de Marat',  file_name: './img/c013.jpg'},
            {autor: 'Caspar David Friedrich', nombre_cuadro: 'El caminante sobre el mar de nubes',  file_name: './img/c014.jpg'},
            {autor: 'Emanuel Leutze', nombre_cuadro: 'Washington cruzando el Delaware',  file_name: './img/c015.jpg'},
            {autor: 'Sandro Botticelli', nombre_cuadro: 'El nacimiento de Venus',  file_name: './img/c016.jpg'},
            {autor: 'Edward Hopper', nombre_cuadro: 'Noctambulos',  file_name: './img/c017.jpg'},
            {autor: 'Miguel Angel', nombre_cuadro: 'La creacion de Adan',  file_name: './img/c018.jpg'},
            {autor: 'Francisco de Goya', nombre_cuadro: 'El tres de mayo',  file_name: './img/c019.jpg'},
            {autor: 'Théodore Géricault', nombre_cuadro: 'La balsa de la medusa',  file_name: './img/c021.jpg'},
            {autor: 'Paul Gauguin', nombre_cuadro: '¿De dónde venimos? ¿Quiénes somos? ¿Adónde vamos?',  file_name: './img/c022.jpg'},
            {autor: 'Van Gogh', nombre_cuadro: 'Noche Estrellada',  file_name: './img/c023.jpg'},
            {autor: 'Velazquez', nombre_cuadro: 'La rendicion de Breda',  file_name: './img/c024.jpg'},
            {autor: 'Van Gogh', nombre_cuadro: 'Terraza de cafe por la noche',  file_name: './img/c025.jpg'},
            {autor: 'El Bosco', nombre_cuadro: 'El Jardin de las Delicias',  file_name: './img/c026.jpg'},
            {autor: 'Johannes Vermeer van Delft', nombre_cuadro: 'La Lechera',  file_name: './img/c027.jpg'},
            {autor: 'Pieter Bruegel the Elder', nombre_cuadro: 'La Torre de Babel',  file_name: './img/c028.jpg'},
            {autor: 'Rafael Sanzio', nombre_cuadro: 'La Escuela de Atenas',  file_name: './img/c029.jpg'},
            {autor: 'Hans Holbein el Joven', nombre_cuadro: 'Los Embajadores',  file_name: './img/c030.jpg'},
            {autor: 'Eugene Delacroix', nombre_cuadro: 'La Libertad guiando al pueblo',  file_name: './img/c031.jpg'},
            {autor: 'Claude Monet', nombre_cuadro: 'Impresion, Sol Naciente',  file_name: './img/c032.jpg'},
            {autor: 'Edvard Munch', nombre_cuadro: 'El Grito',  file_name: './img/c033.jpg'},
            {autor: 'Jacques-Louis David', nombre_cuadro: 'Napoleon cruzando los Alpes',  file_name: './img/c034.jpg'},
            {autor: 'Camille Pissarro', nombre_cuadro: 'Boulevard Montmartre',  file_name: './img/c035.jpg'},
            {autor: 'Paolo Veronese', nombre_cuadro: 'Las Bodas de Cana',  file_name: './img/c036.jpg'},
            {autor: 'Edouard Manet', nombre_cuadro: 'El bar del Folies Bergère',  file_name: './img/c037.jpg'},
            {autor: 'Cezanne', nombre_cuadro: 'Mujeres Bañandose',  file_name: './img/c038.jpg'},
            {autor: 'Paul Gauguin', nombre_cuadro: 'Mujeres en Haiti',  file_name: './img/c039.jpg'},
            {autor: 'Jean-Honoré Fragonard', nombre_cuadro: 'El columpio',  file_name: './img/c040.jpg'},
            {autor: 'McNeill Whistler', nombre_cuadro: 'Retrato de la madre del artista',  file_name: './img/c041.jpg'},
            {autor: 'Théodore Géricault', nombre_cuadro: 'Derbi en Epsom',  file_name: './img/c042.jpg'},
            {autor: 'Jean-Léon Gérôme', nombre_cuadro: 'Pollice verso',  file_name: './img/c043.jpg'},
            {autor: 'Karl Pávlovich Briulov', nombre_cuadro: 'El último dia de Pompeya',  file_name: './img/c044.jpg'},
            {autor: 'Marc Chagall', nombre_cuadro: 'Sobrevolando la ciudad',  file_name: './img/c045.jpg'},
            {autor: 'El Greco', nombre_cuadro: 'Vista de Toledo',  file_name: './img/c046.jpg'},
            {autor: 'El Greco', nombre_cuadro: 'El entierro del conde de Orgaz',  file_name: './img/c047.jpg'},
            {autor: 'Henri Matisse', nombre_cuadro: 'La danza',  file_name: './img/c048.jpg'},
            {autor: 'Mijaíl Vrúbel', nombre_cuadro: 'Demonio sentado en el jardín',  file_name: './img/c049.jpg'},
            {autor: 'Juan Sánchez Cotán', nombre_cuadro: 'Bodegón de caza,hortalizas y frutas',  file_name: './img/c050.jpg'},
            {autor: 'Murillo', nombre_cuadro: 'Niños comiendo uvas y melon',  file_name: './img/c051.jpg'},
            {autor: 'Sorolla', nombre_cuadro: 'Paseo a orillas del mar',  file_name: './img/c052.jpg'},
            {autor: 'Antonio Lopez', nombre_cuadro: 'La Gran Via',  file_name: './img/c053.jpg'},
            {autor: 'El greco', nombre_cuadro: 'Las lagrimas de San Pedro',  file_name: './img/c054.jpg'},
            {autor: 'Goya', nombre_cuadro: 'La familia de Carlos IV',  file_name: './img/c055.jpg'},
            {autor: 'Claude Monet', nombre_cuadro: 'La catedral de Rouen',  file_name: './img/c056.jpg'},
            {autor: 'Caravaggio', nombre_cuadro: 'Santo Entierro',  file_name: './img/c057.jpg'},
            {autor: 'Rogier van der Weyden', nombre_cuadro: 'Retrato de una mujer joven',  file_name: './img/c058.jpg'},
            {autor: 'Leonardo da Vinci', nombre_cuadro: 'Salvator Mundi',  file_name: './img/c059.jpg'},
            {autor: 'Leonardo da Vinci', nombre_cuadro: 'La dama del armiño',  file_name: './img/c060.jpg'},
            {autor: 'Rafael', nombre_cuadro: 'El triunfo de galatea',  file_name: './img/c061.jpg'},
            {autor: 'Rembrandt.', nombre_cuadro: 'El retorno del hijo pródigo',  file_name: './img/c062.jpg'},
            {autor: 'Leonardo da Vinci', nombre_cuadro: 'Madonna Litta',  file_name: './img/c063.jpg'},
            {autor: 'Kazimir Malevich', nombre_cuadro: 'Suprematist Composition',  file_name: './img/c064.jpg'},
            {autor: 'Francesco Hayez', nombre_cuadro: 'El beso',  file_name: './img/c065.jpg'},
            {autor: 'Peter Paul Rubens y Jan Wildens', nombre_cuadro: 'El rapto de las hijas de Leucipo',  file_name: './img/c066.jpg'},
            {autor: 'Andrea Mantegna', nombre_cuadro: 'Lamentación sobre Cristo muerto',  file_name: './img/c067.jpg'},
            {autor: 'Gustave Courbet', nombre_cuadro: 'El desesperado',  file_name: './img/c068.jpg'},
            {autor: 'Rembrandt', nombre_cuadro: 'La ronda de noche',  file_name: './img/c069.jpg'},
            {autor: 'John Singleton Copley', nombre_cuadro: 'Watson y el tiburón',  file_name: './img/c070.jpg'},
            {autor: 'Francisco de Goya', nombre_cuadro: 'La maja desnuda',  file_name: './img/c071.jpg'},
            {autor: 'El Greco', nombre_cuadro: 'El expolio',  file_name: './img/c072.jpg'},
            {autor: 'Dali', nombre_cuadro: 'La tentacion de San Antonio',  file_name: './img/c073.jpg'},
            {autor: 'Kanagawa', nombre_cuadro: 'La gran Ola',  file_name: './img/c074.jpg'},
            {autor: 'Jacques-Louis David', nombre_cuadro: 'El Juramento de los Horacios',  file_name: './img/c075.jpg'},
            {autor: 'Ivan Kramkoi', nombre_cuadro: 'Retrato de una dama desconocida',  file_name: './img/c076.jpg'},
            {autor: 'Iván Aivazovski', nombre_cuadro: 'La novena ola',  file_name: './img/c077.jpg'},
            {autor: 'Giorgione', nombre_cuadro: 'Venus durmiente',  file_name: './img/c078.jpg'},
            {autor: 'Dominique Ingres', nombre_cuadro: 'La gran odalisca',  file_name: './img/c079.jpg'},
            {autor: 'Edouard Manet', nombre_cuadro: 'Olympia',  file_name: './img/c080.jpg'},
            {autor: 'Caravaggio', nombre_cuadro: 'La decapitación de San Juan Bautista',  file_name: './img/c081.jpg'},
            {autor: 'Picasso', nombre_cuadro: 'El acrobata de la bola',  file_name: './img/c082.jpg'},
            {autor: 'Tizziano', nombre_cuadro: 'Amor sacro y amor profano',  file_name: './img/c083.jpg'},
            {autor: 'Vassily Kandinsky', nombre_cuadro: 'Composicion 7',  file_name: './img/c084.jpg'},
            {autor: 'Bouguereau', nombre_cuadro: 'Dante y Virgilio en el infierno',  file_name: './img/c085.jpg'},
            {autor: 'Edouard Manet', nombre_cuadro: 'El desayuno sobre la hierva',  file_name: './img/c086.jpg'},
            {autor: 'Millet', nombre_cuadro: 'Las espigadoras',  file_name: './img/c087.jpg'},
            {autor: 'Marinus Claeszoon van Reymerswaele', nombre_cuadro: 'El recaudador de impuestos y su mujer',  file_name: './img/c088.jpg'},
            {autor: 'Giuseppe Pellizza da Volpedo', nombre_cuadro: 'El cuarto estado',  file_name: './img/c089.jpg'},
            {autor: 'Dali', nombre_cuadro: 'Cristo de San Juan de la Cruz',  file_name: './img/c090.jpg'},
            {autor: 'Julio Romero de Torres', nombre_cuadro: 'La chiquita piconera',  file_name: './img/c091.jpg'},
            {autor: 'El Greco', nombre_cuadro: 'El caballero de la mano en el pecho',  file_name: './img/c092.jpg'},
            {autor: 'Rafael', nombre_cuadro: 'La transfiguracion',  file_name: './img/c093.jpg'},
            {autor: 'Pierre-Auguste Renoir', nombre_cuadro: 'Baile en el Moulin de la Galette',  file_name: './img/c094.jpg'},
            {autor: 'John William Waterhouse', nombre_cuadro: 'La dama de Shalott',  file_name: './img/c095.jpg'},
            {autor: 'Frederic Leighton', nombre_cuadro: 'Perseo y Andromeda',  file_name: './img/c096.jpg'},
            {autor: 'Van Gogh', nombre_cuadro: 'Los girasoles',  file_name: './img/c097.jpg'},
            {autor: 'John Everett Millais', nombre_cuadro: 'Ophelia',  file_name: './img/c098.jpg'},
            {autor: 'Rubens', nombre_cuadro: 'Las tres gracias',  file_name: './img/c099.jpg'},
            {autor: 'Dante Gabriel Rossetti', nombre_cuadro: 'Lady Lilith',  file_name: './img/c100.jpg'},

            ],

            pos: '',
            selected: '',
            selectedIndex: '',
            
        }

    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        //console.log('montado... :D');
        this.showShops();
    },
    methods: {
        addPicture() {
            console.log("Mostrar data:");
            
            var urlSend = "/api/shops/" + this.picture.shop_id + "/pictures";
            //console.log("Shop id: " + url );
            
            //llamada a la api para añadir datos

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };

            // === checks               
            // console.log( urlSend );
            // console.log( this.picture.url );
            // this.picture.url = "pruebas";
            // console.log( this.picture.url );
            // console.log( this.picture);

            axios.post(urlSend, this.picture).then((response) => {
                //console.log(response);

                this.$router.push( { name: 'SelectAGallery'} ); //redireccion al indexshop
            })
        },
        showShops() {
            //console.log(this.product, ':D');
            //console.log('Entra en show shops :D');

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.get('/api/shops/').then((response) => {
                  //evento al array de datos
                  //console.log(response.data)
                  this.shops = response.data.shops
            })
        }
    }
}
</script>
