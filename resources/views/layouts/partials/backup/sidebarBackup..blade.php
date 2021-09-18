<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li @if($currentPage == "dashboard1") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route ('cool.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                <li @if($currentPage == "dashboardDt") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route ('cool.data') }}">
                        <i class="fas fa-home"></i>Data</a>
                </li>

                {{-- home --}}
                <li @if($currentPage == "dashboardDt") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-home"></i>Home:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                    </ul>
                </li>

                {{-- room --}}
                <li @if($currentPage == "dashboardDt") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-thumb-tack"></i>Rooms:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Show</a>
                        </li>
                        <li>
                            <a href="index.html">Create</a>
                        </li>
                    </ul>
                </li>

                {{-- reservations --}}
                <li @if($currentPage == "dashboardDt") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-plane"></i>Reservations:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Show</a>
                        </li>
                        <li>
                            <a href="index.html">Create</a>
                        </li>
                    </ul>
                </li>

                {{-- login-logout --}}
                <li @if($currentPage == "dashboardDt") class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-info"></i>Login/Logout:
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Login/logout</a>
                        </li>
                        <li>
                            <a href="index.html">Password recovery</a>
                        </li>

                        <li>
                            <a href="index.html">Register new user</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->