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
        <a href="{{route('comics')}}" class="btn btn-danger">indietro</a>
    </div>
</div>
@endsection