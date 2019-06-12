@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Editar Usuario <code>{{ $user->name ?? 'No encontrado' }}</code></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('usuario.update', $user->id) }}" autocomplete="off">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <fieldset class="content-group">


                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Correo electronico</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>

                <!-- Default multiselect -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Asignar sistemas</label>
                        <div class="multi-select-full col-lg-10">
                            <select class="multiselect" multiple="multiple" name="system[]" required>
                                @if($sistemas)
                                    @foreach($sistemas as $sistema)
                                        <option  value="{{ $sistema->id }}" {{ selected($sistema->name, $user->systems, 'name') }}>{{ $sistema->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Asignar roles</label>
                        <div class="multi-select-full col-lg-10">
                            <select class="multiselect" multiple="multiple" name="rol[]" required>
                                @if($roles)
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ selected($role->name, $user->roles, 'name') }}>{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- /default multiselect -->

                </fieldset>

                <div class="row">
                    <div class="col-xs-6">
                        <a class="btn btn-link" href="{{ route('usuario.index') }}">
                            <i class="icon-arrow-left13 position-left"></i> Regresar a la lista de usuarios
                        </a>
                    </div>

                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-default">Resetear contraseña <i class="icon-reset position-right"></i></button>
                        <button type="submit" class="btn btn-primary">Guardar cambios <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form horizontal -->

@endsection

@section('theme_js_files')
    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/editor_summernote.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/notifications/pnotify.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form_multiselect.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->
@endsection

