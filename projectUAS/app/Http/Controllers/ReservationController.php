<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reserve');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationRequest $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
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

        // ✅ Save if available
        Reservation::create($validated);

        return back()->with('success', 'Reservation successfully submitted!');
    }

    public function checkAvailability(Request $request)
    {
        $maxGuests = 5;

        $currentGuests = Reservation::where('date', $request->date)
            ->where('time', $request->time)
            ->sum('guest');

        return response()->json([
            'available' => $currentGuests < $maxGuests,
            'remaining' => $maxGuests - $currentGuests
        ]);
    }
}
