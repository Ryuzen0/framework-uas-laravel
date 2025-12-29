<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Mea+Culpa&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reservasi/reservasi.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('components.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    @include('components.carouselMenu', [
        'image' => 'img/image.png',
        'title' => 'Table Reservation',
        'text' => 'Reserve your table ',
    ])
    {{-- End Carousel --}}

    <section class="container reservasi my-5">
        <div class="text-center my-5">
            <h1>Table Reservation</h1>
            <p>Reserve your table in advance to ensure a delightful dining experience at Tulip Restaurant.</p>
        </div>

        <div class="row g-3">
            @if (session('success'))
                <div id="alertBox" class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($errors->any())
                <div id="alertBox" class="alert alert-danger">
                    <strong>Please check your input:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <form class="row g-3" action="{{ route('reservation.store') }}" method="POST" id="reservationForm">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Yourname" name="name"
                        value="{{ auth()->user()->name }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="youremail@gmail.com"
                        name="email" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone_number" placeholder="+62 812 3456 7890"
                        name="phone_number" required>
                </div>
                <div class="col-md-6">
                    <label for="guest" class="form-label">How Many Guest?</label>
                    <input type="number" class="form-control" id="guest" placeholder="6" name="guest" required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputState" name="date" required>
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">In Time</label>
                    <input type="time" class="form-control" id="inputState" name="time" required>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" style="height: 100px" name="desc"></textarea>
                    <label for="floatingTextarea2">Special Request</label>
                </div>
                <button type="button" class="btn btn-primary" id="submitBtn" onclick="confirmSubmit()">
                    <span id="btnText">Reserve</span>
                    <span id="btnSpinner" class="spinner-border spinner-border-sm d-none"></span>
                </button>
            </form>
        </div>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('[name="date"]').addEventListener('change', checkAvailability);
        document.querySelector('[name="time"]').addEventListener('change', checkAvailability);

        function checkAvailability() {
            const date = document.querySelector('[name="date"]').value;
            const time = document.querySelector('[name="time"]').value;

            if (!date || !time) return;

            fetch(`/check-availability?date=${date}&time=${time}`)
                .then(res => res.json())
                .then(data => {
                    if (!data.available) {
                        Swal.fire(
                            'Unavailable',
                            'This time slot is full. Please choose another time.',
                            'error'
                        );
                    }
                });
        }
    </script>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Confirm Reservation',
                text: 'Please make sure your data is correct before submitting.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, submit',
                cancelButtonText: 'Cancel',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    submitForm();
                }
            });
        }

        function submitForm() {
            // Disable button
            const btn = document.getElementById('submitBtn');
            btn.disabled = true;

            // Show spinner
            document.getElementById('btnText').textContent = 'Submitting...';
            document.getElementById('btnSpinner').classList.remove('d-none');

            // Submit form
            document.getElementById('reservationForm').submit();
        }
    </script>


</body>

</html>
