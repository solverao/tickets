@extends('layouts.app')

@section('content')

<!-- Form horizontal -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Levantar Nuevo Ticket</h5>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="content-group">

                <div class="form-group">
                    <div class="col-lg-12">
                        <label class="control-label">Asunto</label>
                        <div>
                            <input type="text" class="form-control" name="asunto" placeholder="Breve descripción..." required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-xs-3">
                                <label class="control-label">Sistema</label>
                                <div>
                                    <select class="form-control" name="system_id" required>
                                        @if($catalogos['system'])
                                            @forelse($catalogos['system'] as $system)
                                                <option value="{{ $system->id }}">{{ $system->display_name }}</option>
                                            @empty
                                                No hay Sistemas disponibles
                                            @endforelse
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <label class="control-label">Tipo de ticket</label>
                                <div>
                                    <select class="form-control" name="type_id" required>
                                        @if($catalogos['type'])
                                            @forelse($catalogos['type'] as $type)
                                                <option value="{{ $type->id }}">{{ $type->display_name }}</option>
                                            @empty
                                                No hay prioridad disponible
                                            @endforelse
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-5">
                                <label class="control-label">Prioridad</label>
                                <div>
                                    <select class="form-control" name="priority_id" required>
                                        @if($catalogos['priority'])
                                            @forelse($catalogos['priority'] as $priority)
                                                <option value="{{ $priority->id }}">{{ $priority->display_name }}</option>
                                            @empty
                                                No hay prioridad disponible
                                            @endforelse
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <blockquote>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <label class="control-label">Descripcion completa</label>
                            <textarea id="summernote" name="descripcion" class="summernote"></textarea>
                        </div>
                    </div>

{{--                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="icons-list icons-list-extended mt-10">
                                <input type="file" class="file-styled-primary">
                                <li><a href="#" data-popup="tooltip" title="Adjuntar PDF" data-container="body"><i class="icon-file-pdf"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Adjuntar WORD" data-container="body"><i class="icon-file-word"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Adjuntar EXCEL" data-container="body"><i class="icon-file-excel"></i></a></li>
                            </ul>
                        </div>
                    </div>--}}

                    <div class="form-group">
                        <div class="col-lg-12">
                            <label class="control-label">Adjuntar archivos</label>
                            <div>
                                <input type="file" class="file-styled-primary" name="files[]" multiple="multiple"/>
                            </div>
                        </div>
                    </div>
                </blockquote>

            </fieldset>

            <div class="row">
                <div class="col-xs-6">
                    <a class="btn btn-link" href="{{ route('ticket.index') }}">
                        <i class="icon-arrow-left13 position-left"></i> Regresar a la lista de tickets
                    </a>
                </div>

                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-primary btn-labeled btn-labeled-right">
                        <b><i class="icon-circle-right2"></i></b> Guardar nuevo</button>
                </div>
            </div>
        </form>
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

    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_inputs.js') }}"></script>
@endsection

