<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('dashboard.dashboard', compact(['tasks']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.AddSchedule');
    }
   
    public function store(Request $request)
    {
        Tasks::create($request->except(['_token', 'submit']));
        return redirect('/dashboard');
    }
    
    
    public function edit($id)
    {
        $tasks = Tasks::find($id);
        return view('dashboard.EditSchedule', compact(['tasks']));
    }
  
    public function update($id, Request $request)
    {
        $tasks = Tasks::find($id);
        $tasks->update($request->except(['_token', 'submit']));
        return redirect('/dashboard');
    }
    public function delete($id){
        $tasks = Tasks::find($id);
        $tasks->delete();
        return redirect('/dashboard');
    }
    public function show($id){
        $t =Tasks::find(3);
        return view('dashboard.dashboard', ['user' => $user]);
    }


}
