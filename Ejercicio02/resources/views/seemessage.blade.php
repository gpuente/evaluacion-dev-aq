@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h2>{{$mensaje->titulo}}</h2>
				<p>{{$mensaje->texto}}</p>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection