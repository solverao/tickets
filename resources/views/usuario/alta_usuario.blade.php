@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Nuevo Usuario</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('usr_crear') }}">
                {{ csrf_field() }}
                <fieldset class="content-group">


                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" value="{{ isset($editUser) ? $editUser->name : '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Correo electronico</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email" value="{{ isset($editUser) ? $editUser->email : '' }}">
                        </div>
                    </div>

                    @if(is_null($editUser))
                        <div class="form-group">
                            <label class="control-label col-lg-2">Contraseña</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                    @endif


                    <!-- Default multiselect -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Asignar sistemas</label>
                        <div class="multi-select-full col-lg-10">
                            <select class="multiselect" multiple="multiple" name="system[]">
                                @if($sistemas)
                                    @forelse($sistemas as $sistema)
                                        <option  value="{{ $sistema->id }}">{{ $sistema->name }}</option>
                                    @empty

                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Asignar roles</label>
                        <div class="multi-select-full col-lg-10">
                            <select class="multiselect" multiple="multiple" name="rol[]">
                                @if($roles)
                                    @forelse($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @empty

                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- /default multiselect -->

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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

