<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', ['reservations' => $reservations]);
    }
    public function create()
    {
        return view('reservations.create');
    }
    public function store(Request $request)
    {
        Reservation::addNew($request->validated());
        return redirect('reservations.index');
    }
    public function show(Reservation $reservation)
    {
        return view('reservations.show', ['reservation' => $reservation]);
    }
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', ['reservation' => $reservation]);
    }
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->validated());
        return redirect(route('reservations.show', ['reservation' => $reservation]));

    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
    }
}
