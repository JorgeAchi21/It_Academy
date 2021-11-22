<template>
    <div role="main">

        <!-- menu nav-bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">White Collar</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link class="nav-link active" :to='{name: "Home"}'>Home</router-link>
                        </li>

                        <!-- <li class="nav-item">
                            <router-link class="nav-link active" :to='{name: "IndexShop"}'>Index Shop</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link active" :to='{name: "Contact"}'>Contact</router-link>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Security:
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <router-link class="dropdown-item" :class="{disabled: lnk_Reg }" :to='{name: "Register"}'>Register</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_Log }" :to='{name: "Login"}'>Login</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "LogoutV"}'>Logout</router-link>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Art Galleries:
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "IndexShop"}'>View galleries</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "CreateShop"}'>Add a gallery</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "BurnDownShop"}'>Burn down a gallery</router-link>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Paintings
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "SelectAGallery"}'>Painting by Gallery</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "AllPainting"}'>All painting</router-link>
                                <router-link class="dropdown-item" :class="{disabled: lnk_LogOut }" :to='{name: "CreatePainting"}'>Add a painting</router-link>
                            </div>

                        </li>
                    </ul>

                    <span class="navbar-text">
                        = Usuario: {{ LName }} - {{ LTokenC }}
                    </span>

                </div>
            </div>
        </nav>

        <!-- insercion de la vista a cargar por vue-->
        <router-view></router-view>

    </div>
</template>

<script>
export default
{
    data() {
        return {
        LName: '',
        LTokenC: '',

        lnk_Reg: false,
        lnk_Log: false,
        lnk_LogOut: true
        } 
    },
    mounted() {
        // this.lnk_Reg = true;
        // this.lnk_Log = true;
        // this.lnk_LogOut = true;

        if (localStorage.LoginUserName) {
            this.LName = localStorage.LoginUserName;
            this.lnk_Reg = true;
            this.lnk_Log = true;
            this.lnk_LogOut = false;
        } else {
            this.LName = "Unknown/Desconocido.";
            this.lnk_Reg = false;
            this.lnk_Log = false;
            this.lnk_LogOut = true;
        }

        if (localStorage.LoginToken) {
            this.LToken = localStorage.LoginToken;
            this.LTokenC = ".";
        } else {
            this.LTokenC = "x";
        }

    },
    updated(){
        // this.lnk_Reg = true;
        // this.lnk_Log = true;
        // this.lnk_LogOut = true;

        //carga el usuario + token en la nav-bar
        if (localStorage.LoginUserName) {
            this.LName = localStorage.LoginUserName;
            this.lnk_Reg = true;
            this.lnk_Log = true;
            this.lnk_LogOut = false;
        } else {
            this.LName = "Unknown/Desconocido..";
            //"Unknown/Desconocido..";
            this.lnk_Reg = false;
            this.lnk_Log = false;
            this.lnk_LogOut = true;
        }
        if (localStorage.LoginToken) {
            this.LToken = localStorage.LoginToken;
            this.LTokenC = ".";
        } else {
            this.LTokenC = "x";
        }
    }
}
</script>
