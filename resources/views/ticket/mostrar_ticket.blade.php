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
                <li>Fecha de creacion: <span class="text-semibold">{{ $selected_ticket->created_at  }}</span></li>
                <li>Realizado por: <span class="text-semibold">{{ $selected_ticket->user->name  }}</span></li>
                <li>
                    <blockquote>
                        <ul class="media-list media-list-linked">


                            <li class="media panel-flat border-left-lg border-left-info">
                                <div class="media-link cursor-pointer" data-toggle="collapse" data-target="#descripcion">
                                    <div class="media-body">
                                        <div class="media-heading text-semibold">Descripcion completa</div>
                                    </div>
                                    <div class="media-right media-middle text-nowrap">
                                        <i class="icon-menu7 display-block"></i>
                                    </div>
                                </div>

                                <div class="collapse" id="descripcion">
                                    <div class="contact-details">
                                        {!! $selected_ticket->descripcion !!}
                                    </div>
                                </div>
                            </li>

                            <li class="media-header"><code><h5>Respuestas</h5></code></li>

                            <li class="media panel-flat border-left-lg border-left-danger">
                                <div class="media-link cursor-pointer" data-toggle="collapse" data-target="#respuesta">
                                    <div class="media-body">
                                        <div class="media-heading text-semibold">NOMBRE</div>
                                        <span class="text-muted">FECHA</span>
                                    </div>
                                    <div class="media-right media-middle text-nowrap">
                                        <i class="icon-menu7 display-block"></i>
                                    </div>
                                </div>

                                <div class="collapse" id="respuesta">
                                    <div class="contact-details">



                                    </div>
                                </div>
                            </li>
                            <li class="media panel-flat border-left-lg border-left-danger">
                                <div class="media-link cursor-pointer" data-toggle="collapse" data-target="#respuesta">
                                    <div class="media-body">
                                        <div class="media-heading text-semibold">NOMBRE</div>
                                        <span class="text-muted">FECHA</span>
                                    </div>
                                    <div class="media-right media-middle text-nowrap">
                                        <i class="icon-menu7 display-block"></i>
                                    </div>
                                </div>

                                <div class="collapse" id="respuesta">
                                    <div class="contact-details">



                                    </div>
                                </div>
                            </li>
                        </ul>
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
                    <a href="{{ route('inicio') }}">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-right">
                        <b><i class="icon-circle-right2"></i></b> Responder</button>
                    </a>
                </div>
            </div>

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

