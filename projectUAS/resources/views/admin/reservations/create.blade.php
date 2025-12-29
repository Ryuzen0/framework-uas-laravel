<!DOCTYPE html>
<html>
<head>
    <title>Create data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<section class="addReservation">
<div class="container mt-5" style="max-width:600px">
    <h3 class="text-center mb-4">Add Reservation</h3>

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="/admin/reservations">
        @csrf
        <input type="text" name="name" class="form-control mb-3" placeholder="Name">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email">
        <input type="number" name="guest" class="form-control mb-3" placeholder="Guest">
        <input type="date" name="date" class="form-control mb-3">
        <input type="time" name="time" class="form-control mb-3">
        <input type="text" name="phone_number" class="form-control mb-3" placeholder="+62 812 3456 7890">
        <input type="text" name="address" class="form-control mb-3" placeholder="Address">
        <textarea name="desc" class="form-control mb-3" placeholder="Special Request"></textarea>
        <button class="btn btn-success w-100">Add</button>
    </form>
    <a href="/admin/reservations" class="d-block text-center mt-3">Back to Reservation List</a>
</div>
</section>

</body>
</html>
