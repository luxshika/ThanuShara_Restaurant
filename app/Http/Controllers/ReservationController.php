<?php

namespace App\Http\Controllers;
use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store1(Request $request)
    {
        
        $requestedTime = strtotime($request->input('time'));
        $hour = date('H', $requestedTime);
        $timeOfDay = '';
    
      
        if ($hour >= 6 && $hour < 12) {
            $timeOfDay = 'morning';
        } elseif ($hour >= 14 && $hour < 19) {
            $timeOfDay = 'afternoon';
        } elseif (($hour >= 20 && $hour <= 23) || ($hour >= 0 && $hour < 2)) {
            $timeOfDay = 'night';
        } else {
            return redirect()->back()->with('error', 'Invalid reservation time. Please choose a valid time.');
        }
    
       
        $existingReservations = Reservation::where('date', $request->input('date'))
            ->where('time_of_day', $timeOfDay)
            ->count();
    
       
        $availableTables = 10;
        if ($existingReservations >= $availableTables) {
            return redirect()->back()->with('error', 'Sorry, all tables are reserved for this time period. Please choose another time.');
        }
    
       
        $reservation = new Reservation;
        $reservation->id = $request->input('id');
        $reservation->name = $request->input('name');
        $reservation->phone_number = $request->input('phone_number');
        $reservation->number_of_guests = $request->input('number_of_guests');
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->time_of_day = $timeOfDay;
        $reservation->save();
    
        
        return redirect()->back()->with('success', 'Reservation successful!');
    }
    
    
}

