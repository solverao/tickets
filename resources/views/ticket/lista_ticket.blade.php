@extends('layouts.app')

@section('content')

    <!-- Page length options -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Lista de tickets</h5>
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
                <th>Asunto</th>
                <th>Realizo</th>
                <th>Asignar</th>
                <th>Sistema</th>
                <th>Fecha</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($tickets)
                @forelse($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->asunto }}</td>
                        <td>{{ $ticket->user->name }}</td>
                        <td>
                            @if($usuarios)
                                <select class="form-control" name="user_id">
                                    <option value="0">Sin asignar</option>
                                    @forelse($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                    @empty
                                        <option value="0">No hay usuarios</option>
                                    @endforelse
                                </select>
                            @endif
                        </td>
                        <td>{{ $ticket->system->name }}</td>
                        <td>{{ $ticket->created_at }}</td>
                        <td><span class="{{ valStatus($ticket->status->display_name) }}">{{ $ticket->status->display_name }}</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-alert"></i> Eliminar</a></li>
                                        <li><a href="#"><i class="glyphicon-edit"></i> Editar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay tickets</td>
                    </tr>
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
    <script src="{{ asset('assets/js/pages/datatables_advanced.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->
@endsection
