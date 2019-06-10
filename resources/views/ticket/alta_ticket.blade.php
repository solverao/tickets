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
        <form class="form-horizontal" method="POST" action="{{ route('tk_crear') }}">
            {{ csrf_field() }}
            <fieldset class="content-group">

                <div class="form-group">
                    <div class="col-lg-12">
                        <label class="control-label">Asunto</label>
                        <div>
                            <input type="text" class="form-control" name="asunto" placeholder="Breve descripción...">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-xs-3">
                                <label class="control-label">Sistema</label>
                                <div>
                                    <select name="select" class="form-control" name="status">
                                        @forelse($catalogos['status'] as $status)
                                            <option value="{{ $status->display_name }}">{{ $status->display_name }}</option>
                                        @empty
                                            No hay prioridad disponible
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <label class="control-label">Tipo de ticket</label>
                                <div>
                                    <select name="select" class="form-control" name="type">
                                        @forelse($catalogos['type'] as $type)
                                            <option value="{{ $type->display_name }}">{{ $type->display_name }}</option>
                                        @empty
                                            No hay prioridad disponible
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-5">
                                <label class="control-label">Prioridad</label>
                                <div>
                                    <select name="select" class="form-control" name="priority">
                                        @forelse($catalogos['priority'] as $priority)
                                            <option value="{{ $priority->display_name }}">{{ $priority->display_name }}</option>
                                        @empty
                                            No hay prioridad disponible
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <label class="control-label">Fecha de vencimiento</label>
                        <div>
                            <input type="text" class="form-control daterange-single" value="03/18/2013">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-lg-12">
                        <label class="control-label">Descripcion</label>
                        <div>
                            <textarea name="descripcion" id="editor-full" rows="4" cols="4"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Guardar <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
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
@endsection

