@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Nuevo Sistema</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('sys_crear') }}">
                {{ csrf_field() }}
                <fieldset class="content-group">
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre a mostrar</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="display_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Descripcion</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
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
    <!-- /theme JS files -->
@endsection

