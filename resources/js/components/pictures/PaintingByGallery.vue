<template>
    <div>
        <div class="jumbotron">
            <h1 class="text-primary text-center">Paining by gallery:</h1>
            <h3 class="text-primary text-center">Gallery Number: {{ $route.params.id }}</h3>

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">PICTURES:</h1>
            
                    <p><h6>Total picture number: {{ paintings.length }}</h6></p>

                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"  v-for="painting in paintings" :key="painting.id">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top cuaImg rounded mx-auto" :src=" '../' + painting.url" :alt="painting.url">
            
                                <div class="card-body">
                                    <p class="h6">Title:</strong></p>
                                    <p class="h5"><strong>{{ painting.picture_name }}</strong></p>
                                    <p class="h6">Author:</p>
                                    <p class="h5"><strong>{{ painting.author }}</strong></p>
                                    <p class="h6 card-text">{{ painting.comment }}</p>
                                    <p class="small">Price: {{ painting.price }}</p>
                                    <p class="small">Entry date: {{ painting.entry_date }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">

                                            <form v-on:submit.prevent="deletePicture( painting.id  )">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted small">id: {{ painting.id }}</small>
                                    <small class="text-muted small">Gallery: {{ painting.shop_id }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data(){
        return {
            paintings: []
        }
    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        //console.log('montando... :D');
        this.paintingsByShop();
    },
    methods: {
        paintingsByShop() {
            var shop = 0
            var url = ""

            // console.log('painting by shop');
            // console.log('Parametro pasado:' + this.$route.params.id )

            this.shop = this.$route.params.id
            
            this.url = '/api/shops/' + this.shop + '/pictures'
            console.log ("url montada:" + this.url)

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.get(this.url).then((response) => {
                //obtener datos
                console.log(response.data)

                this.paintings = response.data.paintingByShop
            })
        },
        deletePicture( delId) {
            console.log("Borrando cuadro: " + delId);
            var shop = 0
            var url = ""

            // // console.log('painting by shop');
            // // console.log('Parametro pasado:' + this.$route.params.id )

            // this.shop = this.$route.params.id
            
            url = '/api/show/picture/delete/' + delId 
            console.log ("url montada:" + url)

            //añadir token a la peticion
            axios.defaults.headers.common = {
                 Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.post(url).then((response) => {
                //obtener datos
                console.log(response.data)

                this.$router.push({ name: 'SelectAGallery' } ); //redireccion a pagina index
            })
        }
    }
}
</script>
