    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <div class="img">
        <img src="{{ asset($image) }}" class="hero-img d-block">
        <div class="desc">
            <h1>{{ $title }}</h1>
            <p class="fs-5">
                {{ $text }}
            </p>
        </div>
    </div>
