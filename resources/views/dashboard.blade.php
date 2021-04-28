@extends('layouts.main')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">

<h1>Minhas compras</h1>
</div>

    @if(count(events) > 0)

    @else

    <p>Você ainda não fez nenhuma compra, <a href="/faleConosco">Compras</a></p>



@endsection