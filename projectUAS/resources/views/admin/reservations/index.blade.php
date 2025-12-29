<!DOCTYPE html>
<html>

<head>
    <title>View Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table th,
        table td {
            padding: 50px;
        }
    </style>
</head>

<body class="bg-light">
    <section class="Viewreservations">
        <div class="container mt-5" style="max-width:1200px">
            <h1 class="text-center" style="font-family: 'Times New Roman', Times, serif">Reservation List</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/admin/reservations/history" class="btn btn-outline-dark btn-sm">
                View History
            </a>
            <a href="/admin/reservations/create" class="btn btn-sm btn-success float-end mb-3"
                style="width:100px">Add</a>
            <table class="table table-bordered mt-4 text-center align-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Guest</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Special Request</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Reservation Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $r)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $r->user->name ?? '-' }}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->date }}</td>
                            <td>{{ $r->time }}</td>
                            <td>{{ $r->guest }}</td>
                            <td>{{ $r->address }}</td>
                            <td>{{ $r->phone_number }}</td>
                            <td>{{ $r->desc }}</td>
                            <td>
                                <span class="badge {{ $r->payment_status == 'paid' ? 'bg-success' : 'bg-warning' }}">
                                    {{ ucfirst($r->payment_status) }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-info">Ongoing</span>
                            </td>

                            <td>
                                <a href="/admin/reservations/{{ $r->id }}/edit"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <form action="/admin/reservations/{{ $r->id }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Do you want to delete this reservation?')"
                                        class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                <form action="{{ route('reservations.payment', $r->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-warning">Toggle Payment</button>
                                </form>
                                <form action="{{ route('reservations.finish', $r->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-success">Finish</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/admin" class="d-block text-center">Back to dashboard</a>
    </section>

</body>

</html>
