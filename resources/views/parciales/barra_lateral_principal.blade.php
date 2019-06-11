<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    @role('admin')
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Administrador</span></a>
                        <ul>
                            <li class="{{ navActive('usr_alta') }}"><a href="{{ route('usr_lista') }}">Usuarios</a></li>
                            <li class="{{ navActive('usr_lista') }}"><a href="{{ route('usr_alta') }}">Alta usuario</a></li>
                            <li class="{{ navActive('sys_lista') }}"><a href="{{ route('sys_lista') }}">Sistemas</a></li>
                            <li class="{{ navActive('sys_alta') }}"><a href="{{ route('sys_alta') }}">Alta sistema</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('realizar')
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Gestion de Tickets</span></a>
                        <ul>
                            <li class="{{ navActive('tk_lista') }}"><a href="{{ route('tk_lista') }}">Tickets</a></li>
                            <li class="{{ navActive('tk_alta') }}"><a href="{{ route('tk_alta') }}">Alta ticket</a></li>
                        </ul>
                    </li>
                    @endrole
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
<!-- /main sidebar -->
