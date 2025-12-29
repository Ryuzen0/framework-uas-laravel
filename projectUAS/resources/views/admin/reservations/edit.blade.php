<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <section class="editReservation">
        <div class="container mt-5" style="max-width:600px">
            <h3 class="text-center mb-4">Edit Reservation</h3>

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="/admin/reservations/{{ $reservation->id }}">
                @csrf
                @method('PUT')
                <input type="text" name="name" class="form-control mb-3" placeholder="Name"
                    value="{{ $reservation->name }}">
                <input type="email" name="email" class="form-control mb-3" placeholder="Email"
                    value="{{ $reservation->email }}">
                <input type="number" name="guest" class="form-control mb-3" placeholder="Guest"
                    value="{{ $reservation->guest }}">
                <input type="date" name="date" class="form-control mb-3" value="{{ $reservation->date }}">
                <input type="time" name="time" class="form-control mb-3" value="{{ $reservation->time }}">
                <input type="text" name="phone_number" class="form-control mb-3" placeholder="+62 812 3456 7890"
                    value="{{ $reservation->phone_number }}">
                <input type="text" name="address" class="form-control mb-3" placeholder="Address"
                    value="{{ $reservation->address }}">
                <textarea name="desc" class="form-control mb-3" placeholder="Special Request">{{ $reservation->desc }}</textarea>
                <button class="btn btn-primary w-100">Update</button>
            </form>
            <a href="/admin/reservations" class="d-block text-center mt-3">Back to Reservation List</a>
    </section>

</body>

</html>
