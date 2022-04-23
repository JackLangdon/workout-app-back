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
        // create new exercise
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
