<template>
    <div>
        <div class="jumbotron">
            
            <h1 class="text-success">Show <span class="font-weight-bold">detail:</span></h1>
            <h2>id pasado: {{ $route.params.id }}</h2>
            <dl class="row">
                <dt class="col-sm-3">Gallery Name:</dt>
                <dd class="col-sm-9">{{ shop.name }}</dd>

                <dt class="col-sm-3">Address:</dt>
                <dd class="col-sm-9">{{ shop.address }}</dd>

                <dt class="col-sm-3">Num max of pictures:</dt>
                <dd class="col-sm-9">{{ shop.max_capacity }}</dd>
            </dl>
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
            console.log("Entra en edit/shop x Id");
            // console.log("Id pasado:" + this.$route.params.id);

            var urlEdit = "/api/shops/info/" + this.$route.params.id;
            console.log("url: " + urlEdit);

            //añadir token a la peticion
             axios.defaults.headers.common = {
                 Authorization: "Bearer " + localStorage.getItem("LoginToken")
             };
            //llamada a la api para añadir datos
             axios.get(urlEdit).then((response) => {
        
                console.log(response.data)
                console.log("---");

                this.shop = response.data.shop
            })
        }
    }
}
</script>
