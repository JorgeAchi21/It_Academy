<template>
    <div>
        <h1>Paining by gallery, Gallery Number: {{ $route.params.id }}</h1>

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">PICTURES:</h1>
                
                <p><h6>Total picture number: {{ paintings.length }}</h6></p>
                <p>
                    <!-- <a href="{{ route('selectGallery.painting') }}" class="btn btn-primary my-2">Go to home</a> -->
                </p>
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
                                        <!-- <router-link class='btn btn-success' :to='{name: "PaintingByGallery"}'>Painting by Gallery</router-link> -->
                                        <!-- <a href='{{ route('viewPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>View</a> -->

                                        <!-- <a href='{{ route('editPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Edit</a> -->
                                        
                                        <!-- <a href='{{ route('deletePicture.paintingDestroy', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Delete</a> -->

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
        // console.log('montado... :D');
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
                //this.$emit('add', response.data.product);
                //this.$route.push({ name: 'Home'}); //redireccion a pagina index
                //                                vvv : nombre de la llamada de la ruta
                this.paintings = response.data.paintingByShop
            })
        }
    }
}
</script>
