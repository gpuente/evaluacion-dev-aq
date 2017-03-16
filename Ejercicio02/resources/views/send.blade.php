@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form action="{{ url('/sendmessage') }}" method="POST">
                
                	{{ csrf_field() }}
					<select name="destinatario" id="destinatario">
						@foreach($usuarios as $usuario)
							<option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
						@endforeach
						
					</select>
					<br>
					<br>
	                <input type="text" name="titulo">
	                <br><br>
	                <textarea name="texto" id="" cols="30" rows="10"></textarea>
	                <br><br>
	                <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
