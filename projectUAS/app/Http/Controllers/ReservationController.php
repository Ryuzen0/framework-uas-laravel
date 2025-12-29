<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
     public function index()
    {
        $reservations = Reservation::where('reservation_status', 'ongoing')
            ->orderBy('date', 'asc')
            ->get();

        return view('admin.reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reserve');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'address'       => 'required|string|max:255',
            'phone_number'  => 'required|numeric',
            'guest'         => 'required|integer|min:1',
            'date'          => 'required|date',
            'time'          => 'required',
            'desc'          => 'nullable|string',
        ]);

        $maxGuests = 10;

        $currentGuests = DB::table('reservations')
            ->where('date', $validated['date'])
            ->where('time', $validated['time'])
            ->sum('guest');

        if ($currentGuests + $validated['guest'] > $maxGuests) {
            return back()
                ->withInput()
                ->with('error', 'Sorry, this time slot is already full. Please choose another time.');
        }

        Reservation::create([
            'user_id'      => Auth::id(),
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'address'      => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'guest'        => $validated['guest'],
            'date'         => $validated['date'],
            'time'         => $validated['time'],
            'desc'         => $validated['desc'] ?? null,
            'payment_status' => 'unpaid',
            'reservation_status' => 'ongoing',
        ]);

        return back()->with('success', 'Reservation successfully submitted!');
    }

    public function checkAvailability(Request $request)
    {
        $maxGuests = 10;

        $currentGuests = Reservation::where('date', $request->date)
            ->where('time', $request->time)
            ->sum('guest');

        return response()->json([
            'available' => $currentGuests < $maxGuests,
            'remaining' => $maxGuests - $currentGuests
        ]);
    }
    public function markPaid($id)
    {
        Reservation::findOrFail($id)->update([
            'payment_status' => 'paid'
        ]);

        return back()->with('success', 'Payment marked as paid');
    }

    public function finish(Reservation $reservation)
    {
        $reservation->update([
            'reservation_status' => 'finished'
        ]);

        return redirect()->route('admin.reservations')
            ->with('success', 'Reservation finished');
    }

    public function togglePayment(Reservation $reservation)
    {
        $reservation->update([
            'payment_status' =>
                $reservation->payment_status === 'paid' ? 'unpaid' : 'paid'
        ]);

        return back()->with('success', 'Payment updated');
    }

    public function history()
    {
        $reservations = Reservation::where('reservation_status', 'finished')
            ->orderBy('date', 'desc')
            ->get();

        return view('admin.reservations.history', compact('reservations'));
    }

    public function undo(Reservation $reservation)
    {
        $reservation->update([
            'reservation_status' => 'ongoing'
        ]);

        return back()->with('success', 'Reservation restored');
    }
}
