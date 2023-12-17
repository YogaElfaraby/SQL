<?php

namespace App\Http\Controllers;
use App\Models\Tasks;


use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar.calendar');
    }

    public function events()
    {
        $events = Tasks::all()->map(function ($task) {
            return [
                'title' => $task->name,
                'start' => $task->start_time,
                'end' => $task->end_time,
            ];
        });

        return response()->json($events);
    }


}
