<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Mea+Culpa&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/menu/menu.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('components.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    @include('components.carouselMenu', [
        'image' => 'img/lily-banse--YHSwy6uqvk-unsplash.jpg',
        'title' => 'Our Menu',
        'text' => 'Explore our delicious menu offerings!',
    ])
    {{-- End Carousel --}}

    {{-- Menu --}}
    <section class="menu-section py-5">
        <div class="container appetizer-menu py-3">

            <!-- Subtitle -->
            <div class="text-center mb-2">
                <span class="menu-subtitle">STARTER MENU</span>
            </div>

            <!-- Title -->
            <h2 class="text-center menu-title mb-5">Appetizers</h2>

            @php
                // Split menu items into 2 columns (3 items each)
                $columns = $appetizers->chunk(3);
            @endphp

            <div class="row position-relative">

                <!-- LEFT COLUMN -->
                <div class="col-md-6 border-end">
                    @foreach ($columns[0] as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- VERTICAL LINE -->
                <div class="divider"></div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-6">
                    @foreach ($columns[1] as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        {{-- Main dishes --}}
        <div class="container mainDishes-menu py-3">
            <!-- Title -->
            <h2 class="text-center menu-title mb-5">Main Dishes</h2>

            @php
                // Split menu items into 2 columns (3 items each)
                $columns = $mainDishes->chunk(3);
            @endphp

            <div class="row position-relative">

                <!-- LEFT COLUMN -->
                <div class="col-md-6 border-end">
                    @foreach ($columns->get(0, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- VERTICAL LINE -->
                <div class="divider"></div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-6">
                    @foreach ($columns->get(1, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        {{-- End Main Dishes --}}

        {{-- Drinks --}}
        <div class="container mainDishes-menu py-3">
            <!-- Title -->
            <h2 class="text-center menu-title mb-5">Drinks</h2>

            @php
                // Split menu items into 2 columns (3 items each)
                $columns = $drinks->chunk(3);
            @endphp

            <div class="row position-relative">

                <!-- LEFT COLUMN -->
                <div class="col-md-6 border-end">
                   @foreach ($columns->get(0, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- VERTICAL LINE -->
                <div class="divider"></div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-6">
                     @foreach ($columns->get(1, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Drinks --}}

        {{-- Desserts --}}
        <div class="container mainDishes-menu py-3">
            <!-- Title -->
            <h2 class="text-center menu-title mb-5">Desserts</h2>

            @php
                // Split menu items into 2 columns (3 items each)
                $columns = $desserts->chunk(3);
            @endphp

            <div class="row position-relative">

                <!-- LEFT COLUMN -->
                <div class="col-md-6 border-end">
                    @foreach ($columns->get(0, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- VERTICAL LINE -->
                <div class="divider"></div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-6">
                    @foreach ($columns->get(1, collect()) as $item)
                        <div class="menu-item d-flex mb-5">
                            <img src="{{ asset('img/' . $item->img) }}" class="menu-img me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h5 class="menu-name">{{ $item->name }}</h5>
                                    <span class="menu-price">${{ $item->price }}</span>
                                </div>
                                <p class="menu-desc">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Drinks --}}
    </section>

    {{-- End Menu --}}

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
</body>

</html>
