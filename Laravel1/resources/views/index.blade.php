<!-- <div>
    <h1>Listagem:</h1>

    @foreach ( $events as $event )
    <p>Nome: {{ $event->title }} -- {{ $event->city}}</p>
    @endforeach
</div>
 -->
@extends('layouts.main')

@section('title')

@section('content')

<div id="serach-container" class="col-md-12">
    <h1> BUSQUE UM EVENTO </h1>
    
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure algo">
    </form>
    <a href="/events/create"><button class="btn btn-primary"> Cadastro de evento</button></a>
</div>
<div class="events-container" class="col-md-12">
    <h2> Proximos eventos</h2>
    <p> Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/logo-de-iso.png" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ $event->created_at }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary" id="botao">Saber mais</a>                
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection