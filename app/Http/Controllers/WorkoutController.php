<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index(Request $request)
    {
        $workouts = Workout::where('created_by', $request->user()->id)->get();

        return $workouts;
    }

    public function create()
    {
        // return create workout view
    }

    public function store(Request $request)
    {
        // save new workout
    }

    public function show(Request $request, $id)
    {
        // show single workout
    }

    public function edit()
    {
        // return edit workout view
    }

    public function update(Request $request, $id)
    {
        // update workout
    }

    public function destroy(Request $request, $id)
    {
        // delete workout
    }
}
