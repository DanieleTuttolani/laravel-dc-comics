@extends('layouts.header_footer')


@section('content')
<div class="my-5">

    <ul>
        <li>
            Titolo: {{$comic ->title}}
        </li>
        <li>
            descrizione: {{$comic ->description}}
        </li>
        <li>
            prezzo: {{$comic ->price}}
        </li>
        <li>
            <img src="{{$comic ->thumb}}" alt="{{$comic ->title}}">
        </li>
        <li>
            Genere: {{$comic ->type}}
        </li>
        <li>
            Artisti: {{$comic ->artists}}
        </li>
    </ul>
    <div class="text-center">
        <a href="{{route('comics')}}" class="btn btn-primary">indietro</a>
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary">Modifica</a>
        <form action="{{route('comics.destroy' , $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Cancella</button>
        </form>


    </div>
</div>
@endsection