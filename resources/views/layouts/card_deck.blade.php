


@section('content')
<div class="top-main-wrapper">
    <a class="alt-ref" href="#">Current Siries</a>
    <div class="container">
        @foreach ($comics as $comic)
        <div class="my-card">
            <a href=" {{route('comics.show' , $comic->id)}} ">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            </a>
            <p>{{ $comic['series'] }}</p>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="{{route('comics.create')}}" class="btn btn-primary">Crea un nuovo fumetto</a>
    </div>
</div>
<div class="divider">
    <div class="container h-100">
        <div class="my-col">
            <div class="img-wrapper">
                <img src="/img/buy-comics-digital-comics.png" alt="" class="img-fluid">
            </div>
            <p>Digital comics</p>
        </div>
        <div class="my-col">
            <div class="img-wrapper">
                <img src="/img/buy-comics-merchandise.png" alt="" class="img-fluid">
            </div>
            <p>Dc merchandise</p>
        </div>
        <div class="my-col">
            <div class="img-wrapper">
                <img src="/img/buy-comics-shop-locator.png" alt="" class="img-fluid">
            </div>
            <p>Subscription</p>
        </div>
        <div class="my-col">
            <div class="img-wrapper">
                <img src="/img/buy-comics-subscriptions.png" alt="" class="img-fluid">
            </div>
            <p>Comic shop locator</p>
        </div>
        <div class="my-col">
            <div class="img-wrapper">
                <img src="/img/buy-comics-digital-comics.png" alt="" class="img-fluid">
            </div>
            <p>Dc power vis</p>
        </div>
    </div>
</div>
@endsection