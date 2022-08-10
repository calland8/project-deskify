<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\Office;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return the bookings of a user that is logged in
        $userBookings = Booking::where('user_id', Auth::user()->id)->get();
        return view('booking.bookingView', ['bookings' => $userBookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($office_id)
    {


        //get the data for the selected office to show the desks
        $officeData = Office::with('desks')->get()->find($office_id);

        // show create form 
        return view('booking.create', compact('officeData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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


        return (view('booking.bookingView'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   //delete a user
        Booking::destroy($id);

        // confirming booking is deleted
        return back()->with('success', 'Booking deleted');
    }
}
