@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Editar sistema <code>{{ $selected_system->name ?? '' }}</code></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('sistema.update', $selected_system->id) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <fieldset class="content-group">
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" value="{{ $selected_system->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre a mostrar</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="display_name" value="{{ $selected_system->display_name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Descripcion</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="description" value="{{ $selected_system->description }}" required>
                        </div>
                    </div>
                </fieldset>

                <div class="row">
                    <div class="col-xs-6">
                        <a class="btn btn-link" href="{{ route('sistema.index') }}">
                            <i class="icon-arrow-left13 position-left"></i> Regresar a la lista de sistemas
                        </a>
                    </div>

                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-primary">Guardar cambios<i class="icon-arrow-right14 position-right"></i></button>
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
    <!-- /theme JS files -->
@endsection

