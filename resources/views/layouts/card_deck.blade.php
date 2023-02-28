@php
$comics = config('comic')
@endphp


@section('content')
<div class="top-main-wrapper">
    <a href="#">Current Siries</a>
    <div class="container">
        @foreach ($comics as $comic)
        <div class="my-card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <p>{{ $comic['series'] }}</p>
        </div>
        @endforeach
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