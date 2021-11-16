<template>
    <div>

        <div class="jumbotron">

            <div class="container-fluid mx-auto mt-3">

                <div class="row justify-content-center align-items-center">

                    <div class="col col-sm-5">
            
                        <form @submit.prevent='logout()'>
                            <h1>Logout:</h1>
                            <hr/>
                            

                            <!-- submit button -->
                            <div  class="form-group" id="lower">
                                <!-- <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label> -->
                                <!-- Submit Button -->
                                <H3>Push button to logout...</H3>
                                <input class="mt-2 btn btn-primary" type="submit" value="LOGOUT...">
                            </div>
                        </form>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
export default
{
    data(){
        return {
            email: '',
            password: ''
        }
    },
    methods: {  
        register(){
                var userDataL = {
                    email: this.email,
                    password: this.password
                }
        },  
        logout(){
            console.log ("llamando al servidor x logout...")

            //cargando el token
            console.log("Logout Token: " + localStorage.LoginToken);

            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("LoginToken")
            };
            axios.post('/api/logout').then(() => {
                //this.axios.defaults.headres.common['Authorization'] = 'Bearer' + this.Token;
                
                //const salida = response.data.token
                //console.log("login OK:" + response.data.token)
                
                // --- Borrado de variables local-storage
                //Storage.clear();
                localStorage.removeItem('LoginUserName');
                localStorage.removeItem('LoginToken');

                console.log ("Deslogando:-DD ");
                this.$router.push({name: 'Login'});
            })
        }
    }

}
</script>