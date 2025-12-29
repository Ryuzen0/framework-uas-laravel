<!DOCTYPE html>
<html>

<head>
    <title>Reservation History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <section class="history">
        <div class="container mt-5" style="max-width:1200px">

            <h1 class="text-center mb-4" style="font-family:'Times New Roman', Times, serif">
                Reservation History
            </h1>

            <a href="/admin/reservations" class="btn btn-secondary btn-sm mb-3">
                ← Back to Active Reservations
            </a>

            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guest</th>
                        <th>Phone</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reservations as $r)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $r->user->name ?? '-' }}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->date }}</td>
                            <td>{{ $r->time }}</td>
                            <td>{{ $r->guest }}</td>
                            <td>{{ $r->phone_number }}</td>
                            <td>
                                <span class="badge bg-secondary">Finished</span>
                            </td>

                            <td>
                                <form action="{{ route('reservations.undo', $r->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-outline-primary">Undo to Active</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No reservation history yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>
