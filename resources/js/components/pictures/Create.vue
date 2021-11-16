<template>
    <div>
        <h1>Create picture</h1>
        <form v-on:submit.prevent="addShop()">

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" v-model="picture.author">
            </div>

            <div class="form-group">
                <label for="picture_name">Picture name:</label>
                <input type="text" class="form-control" id="picture_name"v-model="picture.picture_name">
            </div>

            <div class="form-group">
                <label for="shop_id">Shop id:</label>
                <input type="number" class="form-control" id="shop_id" v-model="picture.shop_id">
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
                <label for="url">Select a Gallery to <strong>Image url</strong>:  *(list select)</label>
                <select class="form-control" v-model="selected">
                    <option v-for="picture in pictureIn" v-bind:value="picture.url">
                        {{ picture.autor }} - {{ picture.nombre_cuadro }} 
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <input type="text" class="form-control" id="url" v-model="picture.comment">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <br>{{ picture }}
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            picture: [
                // {
                // author: '',
                // picture_name: '',
                // shop_id: 0,
                // price: 0.0,
                // entry_date: '2021-01-01',
                // url: 'https://via.placeholder.com/150',
                // comment: ''
                //  }
            ],
            pictureIn:[
            {autor: 'Pier Mondriaan', nombre_cuadro: "Composición en rojo, amarillo, marron y negro", file_name: './img/c001.jpg'},
            {autor: 'Rafael', nombre_cuadro: 'Madonna Sixtina', file_name: './img/c002'},
            {autor: 'Rembrandt', nombre_cuadro: 'Lección de anatomía del Dr. Nicolaes Tulp', file_name: './img/c003'},
            {autor: 'Velazquez', nombre_cuadro: 'Las Meninas', file_name: './img/c004'},
            {autor: 'Leonardo da Vince', nombre_cuadro: 'La Mona Lisa', file_name: './img/c005'},
            {autor: 'Leonardo da Vince', nombre_cuadro: 'La ultima cena', file_name: './img/c006'},
            {autor: 'Salvador Dali', nombre_cuadro: 'La persistencia de la memoria', file_name: './img/c007'},
            {autor: 'Francisco de Goya', nombre_cuadro: 'Saturno devorando a su hijo', file_name: './img/c008'},
            {autor: 'Van Eyck', nombre_cuadro: 'Retrato de Giovanni Arnolfini y su esposa', file_name: './img/c009'},
            {autor: 'Picasso', nombre_cuadro: 'El Guernica', file_name: './img/c010'}
            ]
        }

    },
    methods: {
        addShop() {
            console.log(this.product, ':D');

            //llamada a la api para añadir datos
            url = "api/shops/5/pictures"

                        //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            
            axios.post(url, this.picture).then((response) => {
                //evento al padre
                this.$emit('add', response.data.product);
                this.$route.push({ name: 'Home'}); //redireccion a pagina index
            })
        }
    }
}
</script>
