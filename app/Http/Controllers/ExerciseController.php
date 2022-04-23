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

    public function create()
    {
        // return create exercise view
    }

    public function store(Request $request)
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

    public function show(Request $request, $id)
    {
        $exercise = Exercise::where('created_by', $request->user()->id)->where('id', $id)->first();

        if (!$exercise) {
            return response()->json([
                'message' => 'Exercise ID not found in your library'
            ], 404);
        }

        return $exercise;
    }

    public function edit()
    {
        // return edit exercise view
    }

    public function update(Request $request, $id)
    {
        $exercise = Exercise::where('created_by', $request->user()->id)->where('id', $id)->first();

        if (!$exercise) {
            return response()->json([
                'message' => 'Exercise ID not found in your library'
            ], 404);
        }
 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'video_url' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255'
        ]);

        $exercise->update([
            'name' => $validatedData['name'],
            'video_url' => $validatedData['video_url'],
            'description' => $validatedData['description']
        ]);
        
        $exercise->save();

        return 'Updated successfully';
    }

    public function destroy(Request $request, $id)
    {
        $exercise = Exercise::where('created_by', $request->user()->id)->where('id', $id)->first();

        if (!$exercise) {
            return response()->json([
                'message' => 'Exercise ID not found in your library'
            ], 404);
        }

        $exercise->delete();

        return $exercise->name . ' successfully removed';
    }
}
