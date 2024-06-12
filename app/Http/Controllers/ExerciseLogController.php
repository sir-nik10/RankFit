<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//path might not be right
use App\Models\Exercise; 

class ExerciseLogController extends Controller
{
    public function create()
    {
        $names = Exercise::pluck('name');
        // You can pass workouts data from the database to the view
    
        return view('exercise-log.create', compact('names'));
    }

    public function store(Request $request)
    {
         // Validate the form data
        $request->validate([
            'exercise_id' => 'required|exists:exercises,id',
            'reps' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
        ]);

        // Create a new log entry
        Log::create([
            'created_at' => now(),
            'updated_at' => now(),
            'deleted' => 0, // Assuming null means not deleted
            'private' => 0, // Adjust based on your requirements
            'user_id' => 'null', // Assuming the user is logged in
            'exercise_id' => $request->exercise_id,
            'type' => 'Strength', // Adjust based on your requirements
            'name' => Exercise::find($request->exercise_id)->name,
            'measurement' => json_encode([
                'reps' => $request->reps,
                'weight' => $request->weight,
            ]),
        ]);
        // Redirect back with a success message
        return redirect()->route('exercise-log.create')->with('success', 'Exercise log saved successfully!');
    }
}