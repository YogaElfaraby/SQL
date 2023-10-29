<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AddScheduleController extends Controller
{
    public function index() {
        return view('AddSchedule');
    }

    public function create(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required|date',
            'sTime' => 'required',
            'eTime' => 'required',
        ]);

        // Create a new event in the database
        $event = new Event();
        $event->name = $request->input('name');
        $event->date = $request->input('tanggal');
        $event->start_time = $request->input('sTime');
        $event->end_time = $request->input('eTime');
        $event->save();

        // Redirect back to the Add Schedule page or another appropriate page
        return redirect()->route('add_schedule')->with('success', 'Schedule added successfully');
    }
}