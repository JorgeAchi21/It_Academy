<template>
    <div>
<!-- table: gallery list -->
        <div class="jumbotron">
            <p class="text-center h3 text-primary"><span class="font-weight-bold">Gallery </span> list:</p>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name:</th>
                    <th scope="col">Address:</th>
                    <th scope="col">Max capacity:</th>
        
                    <th scope="col">Detail:</th>
                    <th scope="col">Edit:</th>
                    <th scope="col">Delete:</th>
                </tr>
                </thead>

                <tbody>
                    <tr  v-for="shop in shops" :key="shop.id">
                        <td class="text-white bg-secondary">
                            {{ shop.id }}
                        </td>
                        <td>
                            {{ shop.name }}
                        </td>
                        <td>
                            {{ shop.address }}
                        </td>
                        <td>
                            {{ shop.max_capacity }}
                        </td>
            
                        <td>
                            <router-link class="btn btn-success" :to='{name: "ShowShop", params: {id: shop.id}}'>Detail</router-link>
                        </td>
            
                        <td>
                            <router-link class="btn btn-info" :to='{name: "EditShop", params: {id: shop.id}}'>Edit</router-link>
                        </td>
            
                        <td>
                            <form v-on:submit.prevent="deleteShop( shop.id  )">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>
</template>

<script>
export default{
    name: 'IndexShops',

    data(){
        return {
            shops: {
            // {
            //     id: 1,
            //     name: 'Galeria 1',
            //     address: 'bcn1',
            //     max_capacity: '21'
            // },
            // {
            //     id: 2,
            //     name: 'Galeria 2',
            //     address: 'bcn2',
            //     max_capacity: '22'
            // }
            }
        }
    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        //console.log('montado... :D');
        this.showShops();
    },
    methods: {
        showShops() {
            // console.log(this.product, ':D');
            console.log('Entra en show products :D');

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.get('/api/shops/').then((response) => {
                  //evento al array de datos
                  console.log(response.data) //mostrar info retornada.
                  this.shops = response.data.shops //listar galerias
            })
        },
        deleteShop( delId ) {
            // console.log(this.product, ':D');
            console.log('Borrado shop :-D' + delId);
            
            var urlSend = '/api/shops/delete/' + delId ;
            console.log("url: " + urlSend );

            //añadir token a la peticion
            axios.defaults.headers.common = {
                 Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.post(urlSend).then((response) => {

                console.log(response.data.shops); //mostrar info retornada.

                this.shops = response.data.shops //actuliar las galerias
            })
        }
    }
} 
</script>
