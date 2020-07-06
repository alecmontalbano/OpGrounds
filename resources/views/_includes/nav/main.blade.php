<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-paddingless" href="{{route('home')}}">
                <img src="{{asset('images/Cube_NH.png')}}" alt="OpGrounds Logo">
            </a>
            <a class="nav-burger" role="button" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>    
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
            </div>
            <div class="navbar-end navbar-menu" style="overflow: visible">   
                @guest
                    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                @else
                    <div class="has-dropdown navbar-item is-hoverable">
                        <a class="navbar-link">Hey, {{ Auth::user()->name }}</a>
                        <div class="navbar-dropdown is-right">
                            <a href="" class="navbar-item">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-user-circle-o"></i>
                                </span>
                                Profile
                            </a>
                            <a href="" class="navbar-item">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-bell"></i>
                                </span>
                                Notifications</a>
                            <a href="{{route('manage.dashboard')}}" class="navbar-item">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-cog"></i>
                                </span>
                                Manage
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-sign-out"></i>
                                </span>
                                Logout
                            </a>
                            @include('_includes.forms.logout')
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
