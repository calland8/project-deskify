<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Desks;
use App\Models\Timeslot;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //display the different offices 

    public function index()
    {
        $offices = Office::all();

        return view('booking.offices')->with('offices', $offices);
    }


    public function showDesks($office_id)
    {
        //get the data for the selected office to show the desks
        $officeData = Office::with('desks')->get()->find($office_id);

        // show desks
        return view('booking.desks', compact('officeData'));
    }

    public function showTimeslots(Request $request)
    {
        $desk = $request->input('desk_id');
        $timeslots = Timeslot::where('desk_id', $desk)->get();

        return view('booking.create', ['timeslots' => $timeslots]);
    }
}
