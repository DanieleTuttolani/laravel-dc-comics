@extends('layouts.header_footer')

@section('content')
    <div class="container my-5">
        <div class="text-center">
            <h1>Edit this comic</h1>
        </div>
        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3 d-flex">
                {{-- title --}}
                <input value="{{old('title' , $comic->title)}}"  type="text" name="title" id="title" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert title" required>
                {{-- price --}}
                <input value="{{old('price' , $comic->price)}}"  type="number" name="price" id="price" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert Price" required min="0" >
                {{-- series --}}
                <input value="{{old('series' , $comic->series)}}"  type="text" name="series" id="series" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser series" required>
            </div>
            <div class="mb-3 d-flex">
                {{-- date --}}
                <input value="{{old('date' , $comic->date)}}"  type="text" name="sale_date" id="sale_date" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser sale data">

                {{-- type --}}
                <input value="{{old('type' , $comic->type)}}"  type="text" name="type" id="type" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser type">

            </div>
            {{-- description --}}
            <div class="mb-3">
                <textarea value="{{old('description' , $comic->description)}}"  class="form-control" name="description" id="description" rows="3" placeholder="Insert description"></textarea>
            </div>
            {{-- artists --}}
            <div class="mb-3">
                <textarea value="{{old('artists' , $comic->artists)}}"  class="form-control" id="artists" name="artists" rows="3" placeholder="Insert Artists list"></textarea>
            </div>
            {{-- writers --}}
            <div class="mb-3">
                <textarea value="{{old('writers' , $comic->writers)}}"  class="form-control" id="writers" name="writers" rows="3"placeholder="Insert writers list"></textarea>
            </div>
            {{-- thumb --}}
            <div class="mb-3">
                <input value="{{old('thumb' , $comic->thumb)}}"  type="url" class="form-control" id="thumb" name="thumb" placeholder="insert comic image link"></input> 
            </div>

            <button class="btn btn-primary">send</button>
        </form>
        <a href="{{route('comics')}}" class="btn btn-danger">indietro</a>
    </div>
@endsection