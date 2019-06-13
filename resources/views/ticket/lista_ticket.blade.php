@extends('layouts.app')

@section('encabezado_item')
    <li class="active">lista de tickets</li>
@endsection

@section('content')

    <!-- Page length options -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Lista de tickets</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <div class="text-left">
                <a href="{{ route('ticket.create') }}"><button type="button" class="btn btn-success">Nuevo ticket <i class="icon-add-to-list position-right"></i></button></a>
            </div>
        </div>

        <table class="table datatable-show-all">
            <thead>
            <tr>
                <th>No.</th>
                <th>Asunto</th>
                <th>Realizo</th>
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
                        <td>
                            <a href="{{ route('ticket.show', $ticket->id) }}">
                                <span class="label label-danger">{{ $ticket->answers->count() }}</span> {{ $ticket->asunto }}
                            </a>
                        </td>

                        <td>{{ $ticket->user->name }}</td>
                        <td>{{ $ticket->system->name }}</td>
                        <td>{{ $ticket->created_at }}</td>
                        <td>
                            <span class="{{ valStatus($ticket->status->display_name) }}">{{ $ticket->status->display_name }}</span>
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-check"></i> Resolucion</a></li>
                                        <li><a href="{{ route('ticket.show', $ticket->id) }}"><i class="icon-database-check"></i> Ver</a></li>
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
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables_advanced.js') }}"></script>
    <!-- /theme JS files -->
@endsection
