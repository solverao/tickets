@extends('layouts.home')

@section('content')

<!-- Error title -->
<div class="text-center content-group">
    <h1 class="error-title">404</h1>
    <h5>Se ha producido un error. ¡Página no encontrada!</h5>
</div>
<!-- /error title -->


<!-- Error content -->
<div class="text-center">
    <a href="{{ route('inicio') }}" class="btn bg-pink-400"><i class="icon-circle-left2 position-left"></i> Volver a inicio</a>
</div>
<!-- /error wrapper -->


@endsection
