<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="header-wrap content-end">
                <div class="header-button">

                    <div class="container">                   
                        <div class="row justify-content-end">

                            <div class="account-item clearfix js-item-menu content-end">
                                <div class="image">
                                    <img src="{!! asset('theme/images/icon/avatar-01.jpg') !!}" alt="alt" />
                                </div>

                                <div class="content">
                                    <a class="js-acc-btn" href="#">
                                        <?php
                                        use Illuminate\Support\Facades\Cookie;
                                
                                        if (Auth::check()) {
                                            $usuario=Cookie::get('usuario');
                                            $rol = Cookie::get('rol');
                                            echo "$usuario";
                                            //echo "User: $usuario - rol: $rol";
                                    
                                        } else {
                                            echo "NO Login :-(";
                                        }
                                        ?>
                                    </a>
                                </div>

                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{!! asset('theme/images/icon/avatar-01.jpg') !!}" alt="alt" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">
                                                    User name:
                                                    <?php
                                                        if (Auth::check()) {
                                                            $usuario=Cookie::get('usuario');
                                                            echo " $usuario";
                                                    
                                                        } else {
                                                            echo "NO Login";
                                                        }
                                                    ?>
                                                </a>
                                            </h5>
                                            <span class="email">
                                                Rol:
                                                <?php
                                                    if (Auth::check()) {
                                                        $rol=Cookie::get('rol');
                                                        echo " $rol";
                                                
                                                    } else {
                                                        echo " ---- ";
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        {{-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div> --}}
                                        {{-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div> --}}
                                        {{-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div> --}}
                                    </div>
                                    
                                    <!-- Logout con error-->
                                    <div class="account-dropdown__footer">
                                        <div class="text-center">
                                            @if (Auth::check())                                       
                                                <form action="{{ route('logout') }}" method="Post">
                                                    @CSRF
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="zmdi zmdi-power"></i>
                                                        Logout
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>