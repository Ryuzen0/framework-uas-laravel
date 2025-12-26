<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Mea+Culpa&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome/welcome.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar --}}
@include('components.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    {{-- <x-carousel image="img/flat-lay-yogurt-with-pomegranate-copy-space.jpg" title="Welcome to Tulip Restaurant"
        text="Enjoy our delicious meals and have a great time!" /> --}}
    @include('components.carousel', [
        'image' => 'img/flat-lay-yogurt-with-pomegranate-copy-space.jpg',
        'title' => 'Welcome to Tulip Restaurant',
        'text' => 'Enjoy our delicious meals and have a great time!',
    ])

    {{-- Akhir Carousel --}}

    {{-- End Carousel --}}
    <section class="container-fluid py-5 text-center main">
        <h1>Our Specialties</h1>
        <div class="row g-3 mt-5 justify-content-center py-5">
            <div class="col-md-4">
                <div class="bakery-card p-4 d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3">
                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="d4af37" stroke="d4af37">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M359.8 368.7c-83.5 37-150 103.4-187.1 186.9-5.6 12.6 0.1 27.3 12.7 32.9 3.3 1.5 6.7 2.2 10.1 2.2 9.6 0 18.7-5.5 22.8-14.8 32.1-72.2 89.5-129.6 161.7-161.6 12.6-5.6 18.3-20.3 12.7-32.9-5.5-12.6-20.3-18.3-32.9-12.7z m214.6-108.5c7.2-11.8 11.6-25.5 11.6-40.3 0-42.8-34.7-77.4-77.4-77.4-42.8 0-77.4 34.7-77.4 77.4 0 14.8 4.4 28.6 11.6 40.3-216.7 31.9-383.5 219-383.5 444.4v54.1c0 13.8 11.2 25 25 25H933c13.8 0 25-11.2 25-25v-54.1c-0.1-225.4-167-412.4-383.6-444.4zM908 733.7H109.2v-29.1c0-220.2 179.2-399.3 399.4-399.3S908 484.4 908 704.6v29.1z m24.9 100.2H84.2c-13.8 0-25 11.2-25 25s11.2 25 25 25h848.7c13.8 0 25-11.2 25-25s-11.2-25-25-25z"
                                    fill="#d4af37"></path>
                            </g>
                        </svg>
                    </div>
                    <h4>Food</h4>
                    <p class="col-lg-8">Enjoy our signature dishes crafted with passion and made from the finest
                        ingredients. Each plate is thoughtfully prepared to deliver authentic flavors and a memorable
                        dining experience.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bakery-card p-4 d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3">
                        <svg width="100px" height="100px" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11 30.9998H25M18 30.9998V17.9998L29 6.99981H7L16 15.9998M12.2051 4.01351C11.1701 2.21251 9.2261 0.999512 7.0001 0.999512C3.6861 0.999512 1.0001 3.68651 1.0001 6.99951C1.0001 10.3135 3.6861 12.9995 7.0001 12.9995C8.6561 12.9995 10.1561 12.3275 11.2421 11.2425M29 0.999812L23 6.99981"
                                    stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h4>Drink</h4>
                    <p class="col-lg-8">Refresh your senses with our selection of premium beverages, from soothing warm
                        drinks to delightful fresh blends. Every sip is designed to complement your meal perfectly.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bakery-card p-4 d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3">
                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#d4af37"
                                    d="M128 416v-48a144 144 0 0 1 168.64-141.888 224.128 224.128 0 0 1 430.72 0A144 144 0 0 1 896 368v48a384 384 0 0 1-352 382.72V896h-64v-97.28A384 384 0 0 1 128 416zm287.104-32.064h193.792a143.808 143.808 0 0 1 58.88-132.736 160.064 160.064 0 0 0-311.552 0 143.808 143.808 0 0 1 58.88 132.8zm-72.896 0a72 72 0 1 0-140.48 0h140.48zm339.584 0h140.416a72 72 0 1 0-140.48 0zM512 736a320 320 0 0 0 318.4-288.064H193.6A320 320 0 0 0 512 736zM384 896.064h256a32 32 0 1 1 0 64H384a32 32 0 1 1 0-64z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h4>Dessert</h4>
                    <p class="col-lg-8">Indulge in our beautifully crafted desserts, combining delicate
                        textures and balanced sweetness. The perfect ending to elevate your culinary journey.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid secondary pt-5 px-0 text-center m-0">
        <h1 class="text-center pb-5">
            Favorite Menu
        </h1>
        @foreach ($data->take(4) as $item)
            @php
                $isOdd = $loop->iteration % 2 == 1; // ganjil = true, genap = false
            @endphp

            <div class="row justify-content-center align-items-start mt-5
        {{ $isOdd ? 'flex-md-row ms-1 ' : 'flex-md-row-reverse me-1' }} flex-column"
                style="max-width: 1000px; margin: auto;" data-aos="{{ $isOdd ? 'fade-right' : 'fade-left' }}"
                data-aos-duration="1000">

                <div class="col-md-5">
                    <img src="{{ asset('img/' . $item->img) }}" class="img-fluid rounded" alt="">
                </div>

                <div class="col-md-5 py-5 py-md-0 {{ $isOdd ? 'text-md-start' : 'text-md-end' }}">
                    <h1>{{ $item->heading }}</h1>
                    <p>{{ $item->desc }}</p>
                </div>
            </div>
        @endforeach
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fffdf7" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    {{-- Opening Hours --}}
    <section class="opening container-fluid py-5 text-center">

        <img class="tulip-icon" src="{{ asset('img/deceased_192dp_D4AF37_FILL0_wght400_GRAD0_opsz48.svg') }}"
            alt="tulip">

        <h1 class="opening-title">Opening Hours</h1>
        <p class="opening-tagline">Crafting unforgettable dining moments with elegance</p>

        <div class="divider"></div>

        <p class="today-hours">Today's Schedule: <strong>8 AM – 4 PM</strong></p>

        <div class="row justify-content-center mt-4">
            <div class="col-md-5">
                <div class="hours-card p-5">

                    <img class="corner corner-left" src="ornament-left.png">
                    <img class="corner corner-right" src="ornament-right.png">

                    <h3 class="brand-name">Tulip Restaurant</h3>
                    <h1 class="status">OPEN</h1>

                    <div class="divider-small"></div>

                    <div class="schedule mt-4">
                        <div class="row">
                            <div class="col-6">
                                <p class="day">MON – WED</p>
                                <p class="time">8<sup>AM</sup> – 4<sup>PM</sup></p>
                            </div>
                            <div class="col-6">
                                <p class="day">THURS – FRI</p>
                                <p class="time">9<sup>AM</sup> – 2<sup>PM</sup></p>
                            </div>
                        </div>
                    </div>

                    <p class="closed mt-4">CLOSED ON WEEKENDS</p>

                    <div class="extras mt-4">
                        <p>✨ Valet Parking Available</p>
                        <p>✨ Smart Casual Dress Code</p>
                        <p>✨ Chef’s Special Hour: 1 PM – 2 PM</p>
                    </div>

                    <div class="button-row mt-4">
                        <a href="reserve" class="btn reserve-btn">Reserve a Table</a>
                        <a href="menu" class="btn menu-btn">View Menu</a>
                    </div>

                </div>

                <p class="restaurant-info mt-4">
                    Sydney, Australia • +62 812-3456-7890
                    <br> <span>Follow us on IG: @TulipRestaurant</span>
                </p>
            </div>
        </div>
    </section>

    {{-- End Opening Hours --}}

    {{-- Footer --}}
    @include('components.footer')
    {{-- Akhir Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/c8a515c247.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js">
        gsap.registerPlugin(ScrollSmoother)
        ScrollSmoother.create({
            smooth: 1,
            effects: true,
        });
    </script>
</body>

</html>
