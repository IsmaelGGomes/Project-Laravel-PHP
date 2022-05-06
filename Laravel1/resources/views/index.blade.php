
<div>
    <h1>Listagem:</h1>
 
    @foreach ( $events as $event )
        <p>Nome: {{ $event->name }} -- {{ $event->description}}</p>
    @endforeach
</div>