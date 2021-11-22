<template>
    <div>
        <div class="jumbotron">
            <h1 class="text-primary text-center"><span class="font-weight-bold">Create</span> gallery:</h1>
            <form v-on:submit.prevent="addShop()">
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
            shop : {
                name: '',
                address: '',
                max_capacity: 0
            }
        }
    },
    methods: {
        addShop() {
            console.log("Entra en create shop..");

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.post('/api/shops', this.shop).then((response) => {
                //evento al padre
                //this.$emit('add', response.data.shop);
                
                this.$router.push( { name: 'IndexShop'} ); //redireccion al indexshop
            })
        }
    }
}
</script>
