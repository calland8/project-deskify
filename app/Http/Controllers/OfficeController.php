<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Support\Facades\Auth;
use App\Models\Desks;
use App\Models\User;
use App\Models\Booking;
use App\Models\Timeslot;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //display the different offices 

    public function index()
    {
        //get all offices 
        $offices = Office::all();

        return view('booking.offices')->with('offices', $offices);
    }


    public function showDesks($office_id)
    {
        //get the data from the selected office to show the desks
        $officeData = Office::with('desks')->get()->find($office_id);
        // show desks
        return view(
            'booking.desks',
            compact('officeData'),
            ['office' => Office::find($office_id)]
        );
    }


    public function showTimeslots($id)
    {
        // get the desk id of the selected desk 
        $desk = Desks::findorfail($id);
        //get the timeslots with the chosen desk
        $timeslots = Timeslot::where('desk_id', $desk->id)->get();
        // return the view with the available timeslots
        return view('booking.create', ['timeslots' => $timeslots]);
    }





    public function bookTimeslot(Request $request)
    {
        // create and store a booking

        $timeslot_id = $request->input('timeslot_id');
        $timeslot_date = $request->input('timeslot_date');
        $desk_id = $request->input('desk_id');

        $booking = new Booking();
        $booking->timeslot_id = $timeslot_id;
        $booking->date = $timeslot_date;
        $booking->user_id = Auth::user()->id;
        $booking->desk_id = $desk_id;

        $booking->save();


        // make the timeslot unavailable once the booking is made
        $takenTimeslot = Timeslot::findorfail($timeslot_id);
        $takenTimeslot->taken = '1';
        $takenTimeslot->save();
        return redirect('/bookings');
    }
}
