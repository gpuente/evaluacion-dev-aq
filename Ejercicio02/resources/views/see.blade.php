@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				
				@foreach($mensajes as $mensaje)
					@if($mensaje->destinatario == $destinatario)
						<a href="{{ url('vermensajes/'.$mensaje->id) }}"> {{ $mensaje->titulo }} </a>
						<br>
					@endif
				@endforeach

            </div>
        </div>
    </div>
</div>
@endsection