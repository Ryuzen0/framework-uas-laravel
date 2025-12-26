<h3>Review Your Reservation</h3>

<ul class="list-group mb-3">
    @foreach ($validated as $key => $value)
        <li class="list-group-item">
            <strong>{{ ucfirst(str_replace('_',' ',$key)) }}:</strong> {{ $value }}
        </li>
    @endforeach
</ul>

<form method="POST" action="{{ route('reservation.store') }}">
    @csrf
    @foreach ($validated as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach

    <button class="btn btn-success">Confirm Reservation</button>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Edit</a>
</form>
