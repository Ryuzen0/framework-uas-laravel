<!DOCTYPE html>
<html>

<head>
    <title>Condition and Terms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <section class="conditionTerms">
        <div class="container mt-5" style="max-width:800px">
            <h1 class="text-center mb-4" style="font-family: 'Times New Roman', Times, serif">Condition and Terms</h1>
            <ol>
                <li>Reservations must be made at least 24 hours in advance.</li>
                <li>Please inform us of any special dietary requirements or allergies when making your reservation.</li>
                <li>Cancellations must be made at least 12 hours prior to the reserved time to avoid a cancellation fee.
                </li>
                <li>We reserve the right to refuse service to anyone not adhering to our restaurant policies.</li>
                <li>For large parties (more than 8 guests), a deposit may be required to secure the reservation.</li>
            </ol>
            {{-- Balik ke halaman sebelumnya --}}
            <div class="text-center mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
            </div>
    </section>
</body>

</html>
