<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index(Request $request)
    {
        $exercises = Exercise::where('created_by', $request->user()->id)->get();

        return $exercises;
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'video_url' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255'
        ]);

        $exercise = Exercise::create([
            'name' => $validatedData['name'],
            'created_by' => $request->user()->id,
            'video_url' => $validatedData['video_url'],
            'description' => $validatedData['description']
        ]);

        return 'Successfully created new exercise: ' . $exercise['name'];
    }

    public function store()
    {
        // ???
    }

    public function show()
    {
        // show a single exercise
    }

    public function edit()
    {
        // edit an exercise
    }

    public function update()
    {
        // update an exercise
    }

    public function destroy()
    {
        // delete an exercise
    }
}
