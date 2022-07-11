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

        return view('offices')->with('offices', $offices);
    }
}
