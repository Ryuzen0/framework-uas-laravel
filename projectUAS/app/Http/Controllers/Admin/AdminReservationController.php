<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::where('reservation_status', 'ongoing')
            ->orderBy('date', 'asc')
            ->get();

        return view('admin.reservations.index', compact('reservations'));
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
    public function create()
    {
        return view('admin.reservations.create');
    }

    /**
     * Store reservation created by admin.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'address'       => 'required|string|max:255',
            'phone_number'  => 'required|string|max:20',
            'guest'         => 'required|integer|min:1',
            'date'          => 'required|date',
            'time'          => 'required',
            'desc'          => 'nullable|string',
        ]);

        Reservation::create([
            'user_id'      => null, // reservasi manual oleh admin
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'address'      => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'guest'        => $validated['guest'],
            'date'         => $validated['date'],
            'time'         => $validated['time'],
            'desc'         => $validated['desc'] ?? null,
        ]);

        return redirect()->route('admin.reservations')
            ->with('success', 'Reservation added successfully');
    }

    /**
     * Show edit form.
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservations.edit', compact('reservation'));
    }

    /**
     * Update reservation.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'address'       => 'required|string|max:255',
            'phone_number'  => 'required|string|max:20',
            'guest'         => 'required|integer|min:1',
            'date'          => 'required|date',
            'time'          => 'required',
            'desc'          => 'nullable|string',
        ]);

        $reservation = Reservation::findOrFail($id);

        $reservation->update([
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'address'      => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'guest'        => $validated['guest'],
            'date'         => $validated['date'],
            'time'         => $validated['time'],
            'desc'         => $validated['desc'] ?? null,
        ]);

        return redirect()->route('admin.reservations')
            ->with('success', 'Reservation updated successfully');
    }

    /**
     * Delete reservation.
     */
    public function destroy($id)
    {
        Reservation::findOrFail($id)->delete();

        return back()->with('success', 'Reservation deleted successfully');
    }
}
