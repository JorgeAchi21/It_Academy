<template>
    <div>
        <div class="jumbotron">
    
                <!-- <form action="#" method="POST"> -->
                <form v-on:submit.prevent="BurnDown()">

                <!-- <div class="form-group">
                    <label for="galleryName">Select a Gallery to <strong>burn down</strong>:  *(list select)</label>
                    <select class="form-control" id="galleryName" name="galleryName">

                    </select>                    
                </div> -->

                <div class="form-group">
                    <label for="galleryName">Select a Gallery to <strong>burn down</strong>:  *(list select)</label>
                    <select class="form-control" v-model="selected">
                        <option v-for="shop in shops" v-bind:value="shop.id">
                            {{ shop.id }} {{ shop.name }} 
                        </option>
                    </select>
                </div>
                <div><span>Seleccionado: {{ selected }} </span></div>
                
                <button type="submit" class="btn btn-primary">Burn Down...</button>
                </form>
            </div>
    </div>
</template>

<script>
export default{
    name: 'IndexShops',

    data(){
        return {
            shops: [
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
            // },
            // {
            //     id: 3,
            //     name: 'Galeria 3',
            //     address: 'bcn3',
            //     max_capacity: '23'
            // },
            // {
            //     id: 4,
            //     name: 'Galeria 4',
            //     address: 'bcn4',
            //     max_capacity: '24'
            // }
            ],
            selected: ''
        }
    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        //console.log('montado... :D');
        this.showShops();
    },
    methods: {
       BurnDown() {
            var url= '/api/shops/' + this.selected + '/pictures'
            alert (url)
            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            axios.delete(url).then((response) => {
                console.log(response)
                let pos = this.products.map(function(product) { return product.id }).indexOf(productId);
                //map=crea un nuevo array, indexof= retorna la posicin del elemento
                this.products.splice(pos, 1);  //quita un elemento del array
                //refrescar el navegador ??
            })
       },
        showShops() {
            // console.log(this.product, ':D');
            console.log('Entra en show products :D');

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.get('/api/shops/').then((response) => {
            // axios.get('https://jsonplaceholder.typicode.com/posts').then((response) => {
                  //evento al array de datos
                  console.log(response.data)
                  this.shops = response.data.shops
            })
        }
    }
} 
</script>