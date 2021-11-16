<template>
    <div>
        <h1>select a gallery </h1>

        <div class="jumbotron">
    <p class="text-center h3 text-primary"><span class="font-weight-bold">Select </span> a gallery to show pictures</p>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name:</th>
            <th scope="col">Address:</th>
  
            <th scope="col">Detail:</th>
          </tr>
        </thead>
        <tbody>
            <!-- <tr> -->
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
                <router-link class='btn btn-success' :to="'/PaintingByGallery/'+ shop.id ">Painting by Gallery</router-link>
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
            ]
        }
    },
    mounted() {
        //llama a la funcion cuando se carga el componente x inicializar.
        // console.log('mounted... :D');
        this.showShops();
    },
    methods: {
        showShops() {
            // console.log('show products... :D');

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para obtener shops
            axios.get('/api/shops/').then((response) => {
            // // axios.get('https://jsonplaceholder.typicode.com/posts').then((response) => {
                    //evento al array de datos
                    // console.log("Mostrar datos:")
                    // console.log(response.data)
                    this.shops = response.data.shops
            })
        }
    }
}
</script>
