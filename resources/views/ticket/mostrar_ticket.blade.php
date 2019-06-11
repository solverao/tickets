@extends('layouts.app')

@section('content')

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Ticket <code>{{ $selected_ticket->id ?? '' }}</code>
                <small>Status: <span class="{{ valStatus($selected_ticket->status->display_name) }}">{{ $selected_ticket->status->display_name }}</span> </small></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <ul class="list list-unstyled media-list-bordered">
                <li>Asunto: <span class="text-semibold">{{ $selected_ticket->asunto }}</span></li>
                <li>Sistema: <span class="text-semibold">{{ $selected_ticket->system->display_name }}</span></li>
                <li>Tipo de ticket: <span class="text-semibold">{{ $selected_ticket->type->display_name }}</span></li>
                <li>Prioridad: <span class="text-semibold">{{ $selected_ticket->priority->display_name  }}</span></li>
                <li>
                    <blockquote>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title">Descripcion completa</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            {!! $selected_ticket->descripcion !!}
                        </div>
                    </div>
                    </blockquote>
                </li>
            </ul>

            <div class="row">
                <div class="col-xs-6">
                    <a class="btn btn-link" href="{{ route('ticket.index') }}">
                        <i class="icon-arrow-left13 position-left"></i> Regresar a la lista de tickets
                    </a>
                </div>

                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-primary btn-labeled btn-labeled-right">
                        <b><i class="icon-circle-right2"></i></b> Responder</button>
                </div>
            </div>

        </div>
    </div>
    <!-- /form horizontal -->

@endsection

@section('theme_js_files')
    <!-- Theme JS files -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_inputs.js') }}"></script>

    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/editor_ckeditor.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->


    <script src="{{ asset('assets/js/plugins/notifications/jgrowl.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/anytime.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/pickadate/legacy.js') }}"></script>

    <script src="{{ asset('assets/js/pages/picker_date.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
@endsection

