<?php

namespace App\Http\Controllers;

use App\Models\Sclass;
use App\Http\Requests\StoreSclassRequest;
use App\Http\Requests\UpdateSclassRequest;
use App\Models\Teacher;


class SclassController extends Controller
{
    public function index()
    {
        $classes = Sclass::with('teacher')->get(); // Eager loading the teacher relationship
        return view('admin.sclass.all-courses', compact('classes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('admin.sclass.add-courses', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSclassRequest $request)
    {
        // Validate and save the data using the request rules
        $validated = $request->validated();

        // Save the data into the Sclass model
        Sclass::create($validated);

        // Redirect back with a success message
        return redirect()->route('sclass.sclass_index')->with('success', 'Class created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $class)


    {
        $sclass = Sclass::findOrFail($class);

        return view('admin.sclass.edit-courses',compact('sclass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $class)
    {
        $teachers = Teacher::all();
        $sclass = Sclass::findOrFail($class);
        return view('admin.sclass.edit-sclasses', compact('sclass', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSclassRequest $request, string $class)
    {
                // Validate and save the data using the request rules
               $sclass = Sclass::findOrFail($class);
                $sclass->class_name_in_words = $request->class_name_in_words;
                $sclass->class_fee = $request->class_fee;
                $sclass->no_of_students = $request->no_of_students;
                $sclass->class_name_in_number=$request->class_name_in_number;
                $sclass->class_code=$request->class_code;
                $sclass->no_of_subject=$request->no_of_subject;
                $sclass->teacher_id=$request->teacher_id;
                $sclass->class_teacher_first_name = $request->class_teacher_first_name;
                $sclass->class_teacher_last_name = $request->class_teacher_last_name;
                $sclass->save();
        return redirect()->route('sclass.sclass_index')->with('success', 'Class updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $class)

    {
        $sclass = Sclass::findOrFail($class);
        $sclass->delete();


        return redirect()->route('sclass.sclass_index')->with('success', 'Class deleted successfully!');
    }
}
