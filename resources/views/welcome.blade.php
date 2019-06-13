@extends('layouts.app')

@section('content')

    <!-- Combination and connection -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chart-container">
                        <ul class="list list-unstyled media-list-bordered">
                            <li>Total de tickets: <span class="text-semibold">{{ $tickets['todo']->count() }}</span></li>
                            <li>Tickets de TAXI: <span class="text-semibold">{{ $tickets['systems']->count() }}</span></li>
                            <li>Tickets de DOCUMENTAL: <span class="text-semibold">{{ $tickets['documental']->count() }}</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="chart-container">
                        Grafica
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /combination and connection -->

@endsection

@section('theme_js_files')
    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->
@endsection
