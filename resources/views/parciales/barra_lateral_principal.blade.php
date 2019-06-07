<!-- Main sidebar -->
<div class="sidebar sidebar-main ">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active">
                        <a href="#"><i class="icon-stack2"></i> <span>Administrador</span></a>
                        <ul>
                            <li><a href="{{ route('inicio') }}">Alta sistema</a></li>
                            <li><a href="{{ route('inicio') }}">Alta usuario</a></li>
                            <li><a href="{{ route('inicio') }}">Asignaciones</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Tickets</span></a>
                        <ul>
                            <li><a href="{{ route('tk_lista') }}">Mis tickets</a></li>
                            <li><a href="{{ route('tk_alta') }}">Nuevo ticket</a></li>
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
