<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="logo-nav-item">
                    <a class="navbar-brand" href="{{ route('index.admin') }}">
                        <img src="{{ asset('archivos/sisu-white.png') }}" width="80" height="80" alt="SISU">
                    </a>
                </li>
                <li>
                    <h6 class="nav-header">General</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index.admin') ? 'active' : '' }}" href="{{ route('index.admin') }}">
                        <i class="batch-icon batch-icon-browser-alt"></i>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li>
                    <h6 class="nav-header">Módulos</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('incidencia.index') ? 'active' : '' }}" href="{{ route('incidencia.index') }}">
                        <i class="batch-icon batch-icon-calendar"></i>
                        Incidencias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">
                        <i class="batch-icon batch-icon-calendar"></i>
                        Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('roles.index') ? 'active' : '' }}" href="{{ route('roles.index') }}">
                        <i class="batch-icon batch-icon-calendar"></i>
                        Roles
                    </a>
                </li>
            </ul>
        </nav>




