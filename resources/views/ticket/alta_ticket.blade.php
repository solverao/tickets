@extends('layouts.app')

@section('content')

<!-- Form horizontal -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Levantar Nuevo Ticket</h5>
        <div class="heading-elements">
            <ul class="icons-list">
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" action="#">
            <fieldset class="content-group">
                <div class="form-group">
                    <label class="control-label col-lg-2">Asunto</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="Breve descripción...">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sistema</label>
                    <div class="col-lg-10">
                        <select name="select" class="form-control">
                            <option value="default">Por favor selecciona el sistema</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Tipo</label>
                    <div class="col-lg-10">
                        <select name="select" class="form-control">
                            <option value="default">Por favor selecciona el tipo</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Prioridad</label>
                    <div class="col-lg-10">
                        <select name="select" class="form-control">
                            <option value="default">Por favor selecciona la prioridad</option>
                        </select>
                    </div>
                </div>

                <!-- Summernote editor -->
                <div class="summernote">

                </div>
                <!-- /summernote editor -->
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
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/editor_summernote.js') }}"></script>
    <!-- /theme JS files -->
@endsection

