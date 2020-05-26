<nav id="sidebar" class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="#">
        <img src="{{ asset('archivos/sisu.png') }}" width="100" height="100" alt="sisu">
    </a>
    <button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar"
            aria-expanded="false" aria-label="Toggle Sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
    </button>
    <!-- Added Mobile-Only Menu -->
    <ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile"
               data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                <i class="batch-icon batch-icon-search"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-fullscreen"
                aria-labelledby="navbar-notification-search-mobile">
                <li>
                    <form class="form-inline my-2 my-lg-0 no-waves-effect">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..."
                                   aria-label="Search for..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-gradient waves-effect waves-light"
                                        type="button">
                                    <i class="batch-icon batch-icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <!--  DEPRECATED CODE:
        <div class="navbar-collapse" id="navbarSupportedContent">
    -->
    <!-- USE THIS CODE Instead of the Commented Code Above -->
    <!-- .collapse added to the element -->
    <div class="collapse navbar-collapse" id="navbar-header-content">

        <div class="ml-auto">
            <ul class="navbar-nav navbar-profile ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile"
                       data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                        <div class="profile-name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="profile-picture bg-gradient bg-primary has-message float-right">
                            <img src="{{ asset('archivos/profile-pic.jpg') }}" width="44" height="44">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="navbar-dropdown-navbar-profile">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <a class="dropdown-item" href="#l">
                                Mensajes
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
