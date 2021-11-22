<template>
    <div>
        <div class="jumbotron">
            <h1 class="text-primary"><span class="font-weight-bold">Edit</span> shop:</h1>
            <h2>id pasado: {{ $route.params.id }}</h2>
            <form v-on:submit.prevent="editShop()">

                <div class="form-group">
                    <label for="name">Gallery name:</label>
                    <input type="text" class="form-control" id="name" v-model="shop.name">
                </div>

                <div class="form-group">
                    <label for="description">Address:</label>
                    <input type="text" class="form-control" id="description" v-model="shop.address">
                </div>

                <div class="form-group">
                    <label for="price">Max capacity:</label>
                    <input type="text" class="form-control" id="price"  v-model="shop.max_capacity">
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
            shop: {
                name: '',
                address: '',
                max_capacity: 0
            }
        }
    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        this.showIdShops();
    },
    methods: {
        showIdShops() {
            console.log("Entra en edit/shop");
            console.log("Id pasado:" + this.$route.params.id);

            var urlEdit = "/api/shops/info/" + this.$route.params.id;
            console.log("url: " + urlEdit);

            //añadir token a la peticion
             axios.defaults.headers.common = {
                 Authorization: "Bearer " + localStorage.getItem("LoginToken")
             };
            //llamada a la api para añadir datos
             axios.get(urlEdit).then((response) => {
                
                console.log(response.data)
                this.shop = response.data.shop
                console.log("---");
            })
        },
        editShop() {
            console.log("Entra en edit/shop/guarda..");

            var dirEdit="";
            dirEdit = '/api/shops/edit/' + this.$route.params.id;
                
            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            console.log("Datos de shop:---");
            console.log(this.shop);
            console.log("url: " + dirEdit);
            //llamada a la api para añadir datos
            axios.put(dirEdit, this.shop).then((response) => {

                //evento al array de datos
                console.log ("Datos retorno:");
                console.log (response.data.shop);
                
                this.$router.push( { name: 'IndexShop'} ); //redireccion al indexshop
                console.log("---");
            })
        }
    }
}
</script>
