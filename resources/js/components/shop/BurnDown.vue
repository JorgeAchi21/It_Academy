<template>
    <div>
        <div class="jumbotron">
            <h1 class="text-primary text center"><span class="font-weight-bold">Burn</span> Down:</h1>
                
                <form v-on:submit.prevent="BurnDown()">

                <div class="form-group">
                    <label for="galleryName">Select a Gallery to <strong>burn down</strong>:  *(list select)</label>
                    <select class="form-control" v-model="selected">
                        <option v-for="(shop, index, key) in shops" v-bind:value="shop.id">
                            - {{ key }} - {{ index }} = {{ shop.id }} : {{ shop.name }} 
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
            // }
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
       BurnDown() {
            console.log("Borrando galeria...");
            console.log("-----");
            var url= '/api/shops/delete/' + this.selected;
            console.log("url delete: " + url);

            //--------------------------------------------
            // obtener el id del registro

            // === no funciona ya que no es un array, es un objeto.
            console.log("-----obtener mal:");
            var idSlect = this.shops.indexOf(this.selected);
            console.log("id select: " + idSlect);
            console.log("Pos id: " + this.shops[0].id);
            console.log('id select: ' + idSlect);
            console.log("-----");

            
            console.log("--- Listar Las propiedades ---");
            var propName = "";
            for (propName in this.shops){
                console.log("Nombre: " + propName); //nombre de la propiedad
                console.log("valor id:" + this.shops[propName].id) //valor de la propiedad
                console.log("valor nombre:" + this.shops[propName].name) //valor de la propiedad
            }

            //
            console.log("----");
            this.selectedIndex = this.shops.indexOf(this.selected);
            //this.selectedIndex = this.shops.indexOf(1);
            //console.log (Object.keyOf(this.shops))
            console.log ("Tamaño :" + this.shops.length);
            //console.log ("Pos arr: " + this.selectedIndex);
            //console.log ("tipo de objeto: " + Object.typeof(this.shops));
            //console.log ("id select: " + id);

            //--------------------------------------------
            console.log("---obtener id y nombre de la propiedad 5(hardcoded)");
            console.log(this.shops[1].id);
            console.log(this.shops[1].name);
            console.log("--- --- ---");

            //-----------codigo sugerido por Nancy
            console.log("---Codigo sugerido: No")
            const result = this.shops.filter(shops=> shops.id  ==  this.selected);
            console.log("Var result: " + result);
            console.log("---")

            
            //-----------otro enfoque: no funciona
            console.log("---Codigo sugerido: No")
            var resultObj="";
            console.log("Result: " + resultObj.concat(Object.getOwnPropertyNames(this.shops)) );
            console.log("Var result: " + resultObj);

            console.log("Result: " + Object.values(this.shops) );
            console.log("---");

            //-----------otro enfoque: SI funciona
            //-----------recorrer el array de objetos.
            //-----------
            console.log("---Codigo funciona:")
            var salida = "";
            var obj = this.shops;
            var id = this.selected;
            var key ="";

            for (key in obj){
                var value = this.shops[key].id;
                if (value == id){
                    salida = key;
                }
            }
            console.log("Salida: " + salida);
            console.log("---Borramos elemento en list/select:")
            //delete this.shops[salida];
            this.$delete(this.shops, salida);
            console.log("---");

            

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };

            axios.delete(url).then((response) => {
                //se puede escoger entre redireccion o recarga dentro del mismo formulario.
                this.shops = response.data.shops // recarga de datos
                //this.$router.push({ name: 'IndexShop'}); //redireccion a pagina index
                
                alert("El elemento seleccionado id:" + this.selected + " ha sido eleminado.");
                
                console.log("--- fin carga burn-donw ---")
                //return;
            })
       },
        showShops() {
            console.log("Entra en burn down..");
            console.log("Obtener listado de galerias...");

            //añadir token a la peticion
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            //llamada a la api para añadir datos
            axios.get('/api/shops/').then((response) => {

                this.shops = response.data.shops
                console.log("---fin carga---")
            })
        }
    }
} 
</script>