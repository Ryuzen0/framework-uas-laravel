<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Mea+Culpa&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stats.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('components.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    @include('components.carouselMenu', [
        'image' => 'img/Grupa osób opracowujących plan biznesowy w biurze _ Darmowe zdjęcie.jpg',
        'title' => 'About Us',
        'text' =>
            'Learn more about Tulip Restaurant and our commitment to providing an exceptional dining experience.',
    ])
    {{-- End Carousel --}}

    {{-- About Us --}}



    {{-- Card about company --}}
    <section class="container my-5 py-5">
        <div class="row g-3 justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('img/Take a Look at Los Angeles’s Most Beautiful___.jpg') }}" alt="about us"
                    style="width: 100%; height: auto; border-radius: 10px;">
            </div>
            <div class="col-md-6">
                <h2>About Tulip Restaurant</h2>
                <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                    Tulip Restaurant offers a refined dining experience where elegance and flavor come together.
                    Inspired
                    by the beauty of tulip flowers, our modern and cozy atmosphere is perfect for romantic dinners and
                    special moments. Every dish is crafted with premium ingredients, bringing you exceptional taste and
                    unforgettable presentation. At Tulip Restaurant, every visit becomes a beautiful and memorable
                    experience.
                </p>
            </div>
        </div>
    </section>
    {{-- End Card about company --}}

    {{-- List about our superiority --}}
    <section class="container my-5 py-5">
        <div class="text-center mb-5">
            <h2>Why Choose Tulip Restaurant?</h2>
            <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                Discover the unique qualities that set Tulip Restaurant apart and make us the preferred choice for
                discerning diners.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <img width="85" height="85" class="mb-3"
                    src="https://img.icons8.com/external-outline-icons-maxicons/85/external-cuisine-restaurants-and-dining-outline-outline-icons-maxicons-3.png"
                    alt="external-cuisine-restaurants-and-dining-outline-outline-icons-maxicons-3" />
                <h4>Exquisite Cuisine</h4>
                <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                    Our menu features a diverse selection of gourmet dishes, expertly prepared by our talented chefs
                    using the freshest ingredients.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img width="85" height="85" class="mb-3" src="https://img.icons8.com/ios/100/restaurant.png"
                    alt="restaurant" />
                <h4>Elegant Ambiance</h4>
                <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                    Experience a sophisticated and inviting atmosphere, perfect for intimate dinners, celebrations, and
                    special occasions.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img width="85" height="85" class="mb-3"
                    src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/85/external-Serving-Dish-food-and-restaurant-kmg-design-glyph-kmg-design-2.png"
                    alt="external-Serving-Dish-food-and-restaurant-kmg-design-glyph-kmg-design-2" />
                <h4>Exceptional Service</h4>
                <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                    Our dedicated staff is committed to providing attentive and personalized service to ensure your
                    dining experience is flawless.
                </p>
            </div>
        </div>
    </section>
    {{-- End List about our superiority --}}

    {{-- Card about relation --}}
    <section class="container my-5 py-5">
        <div class="row g-3 justify-content-center align-items-center">
            <div class="col-md-6">
                <h2>Our Relationship with Customers</h2>
                <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400;">
                    At Tulip Restaurant, we cherish the bond we share with our customers. We believe that dining is not
                    just about food; it's about creating memorable experiences. Our dedicated team is committed to
                    providing personalized service, ensuring that every guest feels valued and appreciated. We listen to
                    your feedback and continuously strive to exceed your expectations. Your satisfaction is our top
                    priority, and we look forward to welcoming you back time and time again.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/Share - Be gentle (1).jpg') }}" alt="about us"
                    style="width: 100%; height: auto; border-radius: 10px;">
            </div>
        </div>
    </section>

    {{-- Meet our Team --}}
    <section class="container reservasi my-5">
        <div class="text-center my-5">
            <h1>Our Team</h1>
            <p>
                Meet the dedicated individuals behind Tulip Restaurant, committed to delivering an exceptional dining
                experience.
            </p>
        </div>

        {{-- The Team --}}
        <div class="team d-flex justify-content-center align-items-center flex-wrap gap-5 my-5">
            {{-- Anggota 1 --}}
            <div class="crd-wrapper">
                <div class="crd">
                    <div class="crd-image">
                        <img src="{{ asset('img/profile_picture/Bibble raging 💋💅✨.jpg') }}" alt="profile one"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="details">
                        <h5>Erina Dwi Noviandri
                            <br>
                            <span class="job-title">2023230013</span>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- end box wrapper -->

            {{-- Anggota 2 --}}
            <div class="crd-wrapper">
                <div class="crd">
                    <div class="crd-image">
                        <img src="{{ asset('img/profile_picture/download (3).jpg') }}" alt="profile one"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="details">
                        <h5>Tommy Satrio Wichaksono
                            <br>
                            <span class="job-title">2023230020</span>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- end box wrapper -->

            {{-- Anggota 3 --}}
            <div class="crd-wrapper">
                <div class="crd">
                    <div class="crd-image">
                        <img src="{{ asset('img/profile_picture/download (344.jpg') }}" alt="profile one"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="details">
                        <h5>Zahra Khanza Aurelia
                            <br>
                            <span class="job-title">2023230000</span>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- end box wrapper -->

            {{-- Anggota 4 --}}
            <div class="crd-wrapper">
                <div class="crd">
                    <div class="crd-image">
                        <img src="{{ asset('img/profile_picture/A short history of the Willem Dafoe Looking Up meme.jpg') }}"
                            alt="profile one" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="details">
                        <h5>Ingat Cristiani Gulo
                            <br>
                            <span class="job-title">20232300200</span>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- end box wrapper -->
        </div><!-- END container -->
    </section>
    {{-- End Meet our Team --}}

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
