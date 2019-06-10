<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Administrador</span></a>
                        <ul>
                            <li class="{{ navActive('usr_alta') }}"><a href="{{ route('usr_alta') }}">Usuarios</a></li>
                            <li class="{{ navActive('usr_lista') }}"><a href="{{ route('usr_lista') }}">Alta usuario</a></li>
                            <li class="{{ navActive('sys_lista') }}"><a href="{{ route('sys_lista') }}">Sistemas</a></li>
                            <li class="{{ navActive('sys_alta') }}"><a href="{{ route('sys_alta') }}">Alta sistema</a></li>
                            <li class="{{ navActive('usr_asignar') }}"><a href="{{ route('usr_asignar') }}">Asignaciones</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Tickets</span></a>
                        <ul>
                            <li class="{{ navActive('tk_lista') }}"><a href="{{ route('tk_lista') }}">Tickets</a></li>
                            <li class="{{ navActive('tk_alta') }}"><a href="{{ route('tk_alta') }}">Alta ticket</a></li>
                        </ul>
                    </li>
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
<!-- /main sidebar -->
