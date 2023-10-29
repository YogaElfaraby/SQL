<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('calendar', compact('events'));
    }
}
