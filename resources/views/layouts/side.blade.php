<!-- Logo -->
<a href="{{ route('home') }}" class="brand-link">
    <img src="{{ asset('dist/img/Madi.png') }}" class="brand-image img-circle m-1">
    <span class="brand-text font-weight-light">Madi</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @can('assistences.index')
                <li class="nav-item menu-close">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Deashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('assistences.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asistencia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('assistences.print') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabla</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can('cities.index')
                <li class="nav-item">
                    <a href="{{ route('cities.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Departamentos
                        </p>
                    </a>
                </li>
            @endcan

            @can('agencies.index')
                <li class="nav-item">
                    <a href="{{ route('agencies.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Oficinas
                        </p>
                    </a>
                </li>
            @endcan

            @can('roles.index')
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Roles
                        </p>
                    </a>
                </li>
            @endcan

            @can('users.index')
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
            @endcan

            @can('inputs.index')
                <li class="nav-item">
                    <a href="{{ route('inputs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Entradas
                        </p>
                    </a>
                </li>
            @endcan

            @can('outputs.index')
                <li class="nav-item">
                    <a href="{{ route('outputs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Salidas
                        </p>
                    </a>
                </li>
            @endcan

            @can('absences.index')
                <li class="nav-item">
                    <a href="{{ route('absences.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Faltas
                        </p>
                    </a>
                </li>
            @endcan
        </ul>
    </nav>
</div>
