<template>
    <div>

        <div class="jumbotron">

            <div class="container-fluid mx-auto mt-3">

                <div class="row justify-content-center align-items-center">

                    <div class="col col-sm-5">
            
                        <form @submit.prevent='register()'>
                            <h1>Login:</h1>
                            <hr/>

                            <!-- E-mail -->
                            <div class="form-group">
                                <label for="username">Email:</label>
                                <input type="email" class="form-control" v-model="email">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="username">Password:</label>
                                <input type="password" class="form-control" v-model="password">
                            </div>

                            <hr class="my-4">

                            <!-- submit button -->
                            <div  class="form-group" id="lower">
                                <!-- <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label> -->
                                <!-- Submit Button -->
                                <input class="mt-2 btn btn-primary" type="submit" value="Submit">
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
                };
            
            console.log ("llamando al servidor...")

            axios.post('/api/login/', userDataL ).then((response) => {
                //const salida = response.data.token
                //console.log("login OK:" + response.data.token)
                
                //Guardar en local-storage valores recibidos...
                localStorage.LoginUserName = response.data.user.name
                localStorage.LoginToken = response.data.token

                //Valor leido:
                // user = localStorage.LoginUserName
                // token = localStorage.LoginToken
                // console.log ("leido user: " + localStorage.LoginUserName)
                // console.log ("leido token: " + localStorage.LoginToken)

                console.log ("guardado ok :-DD ")
                this.$router.push({name: 'SelectAGallery'});
            })
            }
        }
    }
</script>