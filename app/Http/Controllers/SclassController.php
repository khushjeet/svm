<?php

namespace App\Http\Controllers;

use App\Models\Sclass;
use App\Http\Requests\StoreSclassRequest;
use App\Http\Requests\UpdateSclassRequest;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Mockery\Matcher\Subset;

class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        $sclasses = Sclass::all();
        $subjects = Subject::all();
        return view('admin.sclass.all-courses'
        ,compact('teachers'),
        compact('sclasses'),
        compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
         return view('admin.sclass.add-courses',compact('teachers'));
    }
    public function storeClass(Request $request)
    {
        $validatedClass = $request->validate([
            'class_name' => 'required|string|max:255',
            'class_code' => 'required|string|max:255',
            'start_from' => 'required|date',
            'duration' => 'required|integer',
            'class_fee' => 'required|numeric',
            'class_teacher_name' => 'required|string|max:255',
            'max_no_students' => 'required|integer',
            'class_teacher_mobile_number' => 'required|string|max:15',
        ]);

        // Save class details
        $class = Sclass::create($validatedClass);

        // Validate and save subjects
        if ($request->has('subjects')) {
            $validatedSubjects = $request->validate([
                'subjects' => 'required|array',
                'subjects.*.subject_name' => 'required|string|max:255',
                'subjects.*.teacher_id' => 'required|exists:teachers,id',
                'subjects.*.time' => 'required',
            ]);

            foreach ($validatedSubjects['subjects'] as $subject) {
                $subject['sclass_id'] = $class->id; // Link subject to the created class
                Subject::create($subject);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Class and Subjects saved successfully!');
    }


public function storeSubjects(Request $request)
{
    $validated = $request->validate([
        'subjects' => 'required|array',
        'subjects.*.subject_name' => 'required|string|max:255',
        'subjects.*.teacher_id' => 'required|exists:teachers,id',
        'subjects.*.time' => 'required',
    ]);

    foreach ($validated['subjects'] as $subject) {
        Subject::create($subject);
    }

    return redirect()->route('dashboard')->with('success', 'Subjects saved successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(Sclass $sclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sclass $sclass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSclassRequest $request, Sclass $sclass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sclass $sclass)
    {
        //
    }
}
