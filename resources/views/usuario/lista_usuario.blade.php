@extends('layouts.app')

@section('content')

    <!-- Page length options -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Lista de usuario</h5>
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
                <th>Email</th>
                <th>Sistemas</th>
                <th>Roles</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
                @if($users)
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->systems)
                                    <select class="form-control" name="system_id">
                                        @forelse($user->systems as $system)
                                            <option value="{{ $system->id }}">{{ $system->name }}</option>
                                        @empty
                                            <option value="0">No tiene sistemas</option>
                                        @endforelse
                                    </select>
                                @endif
                            </td>
                            <td>
                                @if($user->roles)
                                    <select class="form-control" name="role_id">
                                        @forelse($user->roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @empty
                                            <option value="0">No tiene roles</option>
                                        @endforelse
                                    </select>
                                @endif
                            </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-database-remove"></i> Eliminar</a></li>
                                            <li><a href="#"><i class="icon-database-edit2"></i> Editar</a></li>
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
    <script src="{{ asset('assets/js/pages/form_inputs.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->
@endsection
