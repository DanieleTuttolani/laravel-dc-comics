@extends('layouts.header_footer')

@section('content')
    <div class="container my-5">
        <div class="text-center">
            <h1>New Comic New Me ;)</h1>
        </div>
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            <div class="mb-3 d-flex">
                {{-- title --}}
                <input type="text" name="title" id="title" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert title" required>
                {{-- price --}}
                <input type="number" name="price" id="price" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert Price" required min="0" >
                {{-- series --}}
                <input type="text" name="series" id="series" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser series" required>
            </div>
            <div class="mb-3 d-flex">
                {{-- date --}}
                <input type="text" name="sale_date" id="sale_date" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser sale data">

                {{-- type --}}
                <input type="text" name="type" id="type" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser type">

            </div>
            {{-- description --}}
            <div class="mb-3">
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Insert description"></textarea>
            </div>
            {{-- artists --}}
            <div class="mb-3">
                <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Insert Artists list"></textarea>
            </div>
            {{-- writers --}}
            <div class="mb-3">
                <textarea class="form-control" id="writers" name="writers" rows="3"placeholder="Insert writers list"></textarea>
            </div>
            {{-- thumb --}}
            <div class="mb-3">
                <input type="url" class="form-control" id="thumb" name="thumb" placeholder="insert comic image link"></input> 
            </div>

            <button class="btn btn-primary">send</button>
        </form>
        <a href="{{route('comics')}}" class="btn btn-danger">indietro</a>
    </div>
@endsection