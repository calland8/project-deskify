<?php

namespace App\Http\Controllers;

use App\Models\Office;
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

        // show create form 
        return view('booking.desks', compact('officeData'));
    }
}
