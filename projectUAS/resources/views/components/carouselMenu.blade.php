<link rel="stylesheet" href="{{ asset('css/carouselMenu.css') }}">
<div class="carousel-wrapper">
    <img src="{{ asset($image) }}" class="carousel-img">

    <div class="overlay"></div>

    <div class="carousel-text">
        <h1>{{ $title }}</h1>
        <p>{{ $text }}</p>
    </div>
</div>
