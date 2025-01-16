<?php
namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SchoolClassController extends Controller
{
    public function index()
    {
        $classes = SchoolClass::all();
        return view('frontend.backend.school_classes.school_classes_index', compact('classes'));
    }

    public function create()
    {
        return view('frontend.backend.school_classes.school_classes_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teacher_name' => 'required|string|max:255',
            'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'class_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'time' => 'nullable|string',
            'capacity' => 'nullable|integer',
        ]);

        $data = $request->except(['teacher_image', 'class_image']);

        if ($request->hasFile('teacher_image')) {
            $data['teacher_image'] = $request->file('teacher_image')->store('teachers', 'public');
        }

        if ($request->hasFile('class_image')) {
            $data['class_image'] = $request->file('class_image')->store('classes', 'public');
        }

        SchoolClass::create($data);
        return redirect()->route('school_classes.index')->with('success', 'Class created successfully.');
    }

    public function edit(SchoolClass $schoolClass)
    {
        return view('frontend.backend.school_classes.school_classes_edit', compact('schoolClass'));
    }

    public function update(Request $request, SchoolClass $schoolClass)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teacher_name' => 'required|string|max:255',
            'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'class_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'time' => 'nullable|string',
            'capacity' => 'nullable|integer',
        ]);

        $data = $request->except(['teacher_image', 'class_image']);

        if ($request->hasFile('teacher_image')) {
            $data['teacher_image'] = $request->file('teacher_image')->store('teachers', 'public');
        }

        if ($request->hasFile('class_image')) {
            $data['class_image'] = $request->file('class_image')->store('classes', 'public');
        }

        $schoolClass->update($data);
        return redirect()->route('school_classes.index')->with('success', 'Class updated successfully.');
    }

    public function destroy(SchoolClass $schoolClass)
    {
        if ($schoolClass->teacher_image) {
            File::delete($schoolClass->teacher_image);
        }
        if ($schoolClass->class_image) {
            File::delete($schoolClass->class_image);
        }
        $schoolClass->delete();
        return redirect()->route('school_classes.index')->with('success', 'Class deleted successfully.');
    }
}

