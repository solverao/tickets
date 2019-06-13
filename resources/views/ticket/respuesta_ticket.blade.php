@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Respuesta de ticket <code>{{ $selected_ticket->id }}</code></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <ul class="list list-unstyled media-list-bordered">
                <li>Asunto: <code>{{ $selected_ticket->asunto }}</code></li>
                <li>Sistema: <code>{{ $selected_ticket->system->display_name }}</code></li>
                <li>Tipo de ticket: <code>{{ $selected_ticket->type->display_name }}</code></li>
                <li>Prioridad: <code>{{ $selected_ticket->priority->display_name  }}</code></li>
                <li>Fecha de creacion: <code>{{ $selected_ticket->created_at  }}</code></li>
                <li>Realizado por: <code>{{ $selected_ticket->user->name  }}</code></li>
                <li>
                    <form class="form-horizontal" method="POST" action="{{ route('ticket.update', $selected_ticket->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <fieldset class="content-group">

                            <div class="form-group">
                                <div class="col-lg-12">

                                    <label class="control-label"><small>Descripcion completa</small></label>
                                    <textarea id="summernote" name="answer" class="summernote"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class="col-xs-6">
                                <a class="btn btn-link" href="{{ route('ticket.index') }}">
                                    <i class="icon-arrow-left13 position-left"></i> Regresar a la lista de tickets
                                </a>
                            </div>

                            <div class="col-xs-6 text-right">
                                <button type="submit" class="btn btn-primary btn-labeled btn-labeled-right">
                                    <b><i class="icon-circle-right2"></i></b> Guardar respuesta</button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- /form horizontal -->

@endsection

@section('theme_js_files')
    <script src="{{ asset('assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/editor_summernote.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/notifications/pnotify.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form_multiselect.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/ui/ripple.min.js') }}"></script>
@endsection

