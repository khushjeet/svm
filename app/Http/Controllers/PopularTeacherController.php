<?php

namespace App\Http\Controllers;

use App\Models\PopularTeacher;
use Illuminate\Http\Request;

class PopularTeacherController extends Controller
{
    public function index()
    {
        $teachers = PopularTeacher::all();
        return view('frontend.backend.popular_teacher.popular_teacher_index', compact('teachers'));
    }

    public function create()
    {
        return view('frontend.backend.popular_teacher.popular_teacher_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'teacher_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        // Handle file upload
        $imagePath = $request->file('teacher_image')->store('teachers', 'public');

        PopularTeacher::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'teacher_image' => $imagePath,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
        ]);

        return redirect()->route('popular_teachers.index')->with('success', 'Teacher created successfully!');
    }

    public function show($id)
    {
        $teacher = PopularTeacher::findOrFail($id);
        return view('frontend.backend.popular_teacher.popular_teacher_edit', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = PopularTeacher::findOrFail($id);
        return view('frontend.backend.popular_teacher.popular_teacher_edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'teacher_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        $teacher = PopularTeacher::findOrFail($id);

        // Handle file upload if present
        if ($request->hasFile('teacher_image')) {
            $imagePath = $request->file('teacher_image')->store('teachers', 'public');
            $teacher->teacher_image = $imagePath;
        }

        $teacher->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
        ]);

        return redirect()->route('popular_teachers.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy($id)
    {
        $teacher = PopularTeacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('popular_teachers.index')->with('success', 'Teacher deleted successfully!');
    }
}
