<template>
    <div>

        <div class="jumbotron">

            <div class="container-fluid mx-auto mt-3">

                <div class="row justify-content-center align-items-center">

                    <div class="col col-sm-5">
            
                        <form @submit.prevent='register()'>
                            <h1>Register:</h1>
                            <hr/>
                            <!-- Username -->
                            <div  class="form-group">
                                <label for="name">User name:</label>
                                <input type="name" class="form-control" v-model="name">
                            </div>

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
                name: '',
                email: '',
                password: ''
         }

     },
     methods: {
         register(){
            var  userData= {
                name: this.name,
                email: this.email,
                password: this.password
            };

            // console.log('data: ' + userData.name);
            // console.log('data: ' + userData.email);
            // console.log('data: ' + userData.password);

            //Guardamos data usu en local storage
            localStorage.name = userData.name
            localStorage.email = userData.email
            localStorage.pass = userData.password

            console.log("Guardado en local storage...")

            axios.post('/api/register/', userData

            ).then((response) => {
                console.log('response ok: ' + response)
                //guardar token recibido.
                //token = '123'
                //localstorage.RegisterToken = token

                //si ok go to login
                this.$router.push({name: 'Login'});
            })
            // .catch(error => {
            //     //var dataErr = error
            //     console.log ('Response KO: ')

            // })
         }
     }

}
</script>
            