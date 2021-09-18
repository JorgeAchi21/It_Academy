<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('cool.home') }}">
            <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="GOLD HOTEL" />
        </a>
    </div>

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                {{-- home --}}
                <li @if($currentPage == "home") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('cool.home')}}">
                        <i class="fas  fa-home"></i>Home:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                    </ul>
                </li>

                {{-- room --}}
                <li @if($currentPage == "rooms") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-thumb-tack"></i>Rooms:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('cool.roomsShow') }}">Show</a>
                        </li>
                        <li>
                            <a href="{{ route('cool.roomsCreate')}}">Create</a>
                        </li>
                    </ul>
                </li>

                {{-- reservations --}}
                <li @if($currentPage == "reservations") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-plane"></i>Reservations:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('cool.reservationsShow') }}">Show</a>
                        </li>
                        <li>    
                            <a href="{{ route('cool.reservationsCreate') }}">Create</a>
                        </li>
                    </ul>
                </li>

                {{-- login-logout --}}
                <li @if($currentPage == "login") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-info"></i>Login/Logout:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('dashboard') }}">Login/Logout</a>
                        </li>
                        <li>
                            <a href="{{ route('password.request') }}">Password recovery</a>
                        </li>

                        <li>
                            <a href="{{ route('register') }}">Register new user</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->