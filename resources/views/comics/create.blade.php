@extends('layouts.header_footer')

@section('content')
    <div class="container my-5">
        <div class="text-center">
            <h1>New Comic New Me ;)</h1>
        </div>
        <form action="">
            <div class="mb-3 d-flex">
                {{-- title --}}
                <input type="text" name="title" id="title" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert title">
                {{-- price --}}
                <input type="number" name="price" id="price" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Insert Price" min="0" >
                {{-- series --}}
                <input type="text" name="series" id="series" class="form-control col me-4" id="exampleFormControlInput1" placeholder="Inser series">
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
                <textarea class="form-control" id="thumb" name="thumb" rows="1"placeholder="insert comic image link"></textarea>
            </div>

            <button class="btn btn-primary">send</button>
        </form>
    </div>
@endsection