@extends('layouts.main')

@section('title', 'Tudo Sobre Google Glass')
@section('content')

@foreach($events as $event)
    <div class="card col-md-3">
       {{$event->nome}} ---- {{$event->nome}}
        <div class="card-body">
            <p class="card-date">10/09/2020</p>
            <h5 class="card-title">{{$event->nome}}</h5>
            <p class="card-participants">X Participantes</p>
            <a href="/contatos/{{$event->id}}" class="btn btn-primary">Saber mais</a>

<br><br><br><hr>



        </div>
    </div>

@endforeach

@endsection
