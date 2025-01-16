<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Exception;
use Illuminate\Http\Request; // Correct import for Request class
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\Cast\String_;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Check if the request is an AJAX call
        if ($request->ajax()) {
            $query = Teacher::query();
            // Check and apply search filter
            if ($search = trim($request->get('search'))) {
                $query->where(function ($q) use ($search) {
                    $q->where('first_name', 'like', '%' . $search . '%')
                      ->orWhere('last_name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
                });
            }

            // Paginate the results
            $teachers = $query->paginate(10);

            // Return JSON response with the rendered partial view
            return response()->json([
                'html' => view('admin.teachers.partials.table', compact('teachers'))->render(),
                'pagination' => $teachers->render(),
                'status' => true,
            ]);
        }

        // Handle non-AJAX requests
        $teachers = Teacher::all();
        return view('admin.teachers.all_teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.add_teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {

        $teacher = new Teacher();
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->joining_date = $request->joining_date;
        $teacher->password = $request->password;
        $teacher->confirm_password = $request->confirm_password;
        $teacher->mobile_number = $request->mobile_number;
        $teacher->gender = $request->gender;
        $teacher->designation = $request->designation;
        $teacher->class = $request->class;
        $teacher->dob = $request->dob;
        $teacher->qualifications = $request->qualifications;

        // Handle file uploads
        try {
            if ($request->hasFile('profile_image')) {
                $filePath = $request->file('profile_image')->store('teacher_profile_image', 'public');
                $teacher->profile_image = $filePath;
            } else {
                throw new Exception('No profile image file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['profile_image' => 'Profile image upload failed. Please try again.']);
        }

        try {
            if ($request->hasFile('doc')) {
                $filePath = $request->file('doc')->store('documents', 'public');
                $teacher->doc = $filePath;
            } else {
                throw new Exception('No document file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['doc' => 'Document upload failed. Please try again.']);
        }

        // Save teacher record
        $teacher->save();

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Teacher added successfully!');
    }

    // Other methods...

    public function show(string $id)
    {
        //
        $teacher=Teacher::findOrFail($id);
        return view('admin.teachers.teacher-profile',compact('teacher'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $teacher = Teacher::findOrFail($id);
       // dd($teacher);

        return view('admin.teachers.edit_teacher',compact('teacher'));

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateTeacherRequest $request, string $id)
    {
    $teacher =  Teacher::findOrFail($id);

    $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->joining_date = $request->joining_date;
        $teacher->password = $request->password;
        $teacher->confirm_password = $request->confirm_password;
        $teacher->mobile_number = $request->mobile_number;
        $teacher->gender = $request->gender;
        $teacher->designation = $request->designation;
        $teacher->class = $request->class;
        $teacher->dob = $request->dob;
        $teacher->qualifications = $request->qualifications;

    // // Handle file uploads
    try {
        if ($request->hasFile('profile_image')) {
            File::delete(public_path($teacher->profile_image));
            $profile_image=$request->file('profile_image');
            $fileName = $profile_image->store('','public');
            $filePath = '/uploads/'.$fileName;
            $teacher->profile_image = $filePath;
        } else {
            throw new Exception('No profile image file uploaded.');
        }
    } catch (Exception $e) {
        logger('File upload error:', ['error' => $e->getMessage()]);
        return redirect()->back()->withErrors(['profile_image' => 'Profile image upload failed. Please try again.']);
    }



    // Save teacher record
    $teacher->save();

    // // Redirect back with success message
     return redirect()->route('teacher.index/teacher')->with('success', 'Teacher added successfully!');



}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $teacher)
    {

        $tech = Teacher::findOrFail($teacher);
        File::delete(public_path($tech->profile_image));
        $tech->delete();

        return redirect()->route('teacher.index/teacher');

    }
}
