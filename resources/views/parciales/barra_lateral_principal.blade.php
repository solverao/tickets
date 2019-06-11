<!-- Main sidebar -->
<div class="sidebar sidebar-default">
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
                            <li class="{{ navActive('usuario.index') }}"><a href="{{ route('usuario.index') }}">Lista de usuarios</a></li>
                            <li class="{{ navActive('sistema.index') }}"><a href="{{ route('sistema.index') }}">lista de Sistemas</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('realizar')
                    <li>
                        <a href="#"><i class="icon-ticket"></i> <span>Ticket</span></a>
                        <ul>
                            <li class="{{ navActive('ticket.index') }}"><a href="{{ route('ticket.index') }}">Lista de tickets</a></li>
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
