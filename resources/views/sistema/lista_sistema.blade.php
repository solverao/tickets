@extends('layouts.app')

@section('content')

    <!-- Page length options -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Lista de sistemas</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

        </div>

        <table class="table datatable-show-all">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>nombre para mostrar</th>
                <th>Descripcion</th>
                <th>Fecha de creacion</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($sistemas)
                @forelse($sistemas as $sistema)
                    <tr>
                        <td>{{ $sistema->id }}</td>
                        <td>{{ $sistema->name }}</td>
                        <td>{{ $sistema->display_name }}</td>
                        <td>{{ $sistema->description }}</td>
                        <td>{{ $sistema->created_at }}</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                        <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @empty
                    <tr><td>No hay usuarios</td></tr>
                @endforelse
            @endif
            </tbody>
        </table>
    </div>
    <!-- /page length options -->
@endsection

@section('theme_js_files')
    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables_advanced.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->
@endsection
