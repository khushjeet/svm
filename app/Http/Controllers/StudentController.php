<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\ParentInformation;
use App\Models\Sclass;
use Illuminate\Http\Request;
use App\Models\Student; // Make sure you have a Student model
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Show the form for creating a new student.
     */

     public function index(Request $request)
     {


         // Check if the search term is provided
         if ($request->ajax()) {
            $query = Student::query();
            // Check and apply search filter
            if ($search = trim($request->get('search'))) {
                $query->where(function ($q) use ($search) {
                    $q->where('first_name', 'like', '%' . $search . '%')
                      ->orWhere('last_name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
                });
            }

            // Paginate the results
            $students = $query->paginate(10);

            // Return JSON response with the rendered partial view
            return response()->json([
                'html' => view('admin.students.partials.table', compact('teachers'))->render(),
                'pagination' => $students->render(),
                'status' => true,
            ]);
        }

        // Handle non-AJAX requests
        $students = Student::all();
        return view('admin.student.all-students', compact('students'));
       }

    public function create()
    {
        $sclasses = Sclass::all();
        $last_student=Student::latest('id')->first();

        return view('admin.student.add-student',compact('sclasses','last_student')); // Point to the Blade template
    }

    /**
     * Store a newly created student in storage.
     */

     public function store(Request $request)
     {
         DB::beginTransaction();

         try {
             // Save the student data
             $student = new Student();
             $student->academic_year = $request->academic_year;
             $student->admission_number = $request->admission_number;
             $student->admission_date = $request->admission_date;
             $student->roll_number = $request->roll_number;
             $student->first_name = $request->first_name;
             $student->last_name = $request->last_name;
             $student->class = $request->class;
             $student->religion = $request->religion;
             $student->category = $request->category;
             $student->primary_contact_number = $request->primary_contact_number;
             $student->caste = $request->caste;
             $student->mother_tongue = $request->mother_tongue;
             $student->dob = $request->dob;
             $student->gender = $request->gender;
             $student->blood_group = $request->blood_group;

             // Handle profile image upload
             if ($request->hasFile('profile_image')) {
                 $filePath = $request->file('profile_image')->store('profile_images', 'public');
                 $student->profile_image = $filePath;
             }

             $student->save();

             // Save parent information
             $parent = new ParentInformation();
             $parent->student_id = $student->id; // Use the ID of the saved student
             $parent->father_name = $request->father_name;
             $parent->father_email = $request->father_email;
             $parent->father_mobile_number = $request->father_mobile_number; // Fixed typo
             $parent->father_occupation = $request->father_occupation;
             $parent->mother_name = $request->mother_name;
             $parent->mother_email = $request->mother_email;
             $parent->mother_mobile_number = $request->mother_mobile_number;
             $parent->mother_occupation = $request->mother_occupation;
             $parent->save();

             // Save address information
             $address = new Address();
             $address->student_id = $student->id; // Use the ID of the saved student
             $address->permanent_address = $request->permanent_address;
             $address->current_address = $request->current_address;
             $address->save();

             // Commit the transaction
             DB::commit();
             return view('admin.dashboard.index');
         } catch (\Exception $e) {
             // Rollback the transaction in case of an error
             DB::rollBack();

             return response()->json([
                 'error' => 'Failed to save data.',
                 'details' => $e->getMessage(),
             ], 500);
         }
     }

    /**
     * Display a listing of the students.
     */

    /**
     * Show the form for editing the specified student.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.edit-student', compact('student'));
    }


    /**
     * Update the specified student in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'academic_year' => 'required|string',
            'admission_number' => 'required|string|unique:students,admission_number,' . $id,
            'admission_date' => 'required|date',
            'roll_number' => 'required|string',
            'status' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'blood_group' => 'nullable|string',
            'gender' => 'required|string',
            'category' => 'required|string',
            'primary_contact' => 'required|string',
            'email' => 'nullable|email',
            'mother_tongue' => 'nullable|string',
            'languages_known' => 'nullable|string',
            'photo' => 'nullable|image|max:4096',
        ]);

        $student = Student::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($student->photo) {
                Storage::disk('public')->delete($student->photo);
            }
            $student->photo = $request->file('photo')->store('student_photos', 'public');
        }

        // Update student in database
        $student->academic_year = $request->academic_year;
        $student->admission_number = $request->admission_number;
        $student->admission_date = $request->admission_date;
        $student->roll_number = $request->roll_number;
        $student->status = $request->status;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->date_of_birth = $request->date_of_birth;
        $student->blood_group = $request->blood_group;
        $student->gender = $request->gender;
        $student->category = $request->category;
        $student->primary_contact = $request->primary_contact;
        $student->email = $request->email;
        $student->mother_tongue = $request->mother_tongue;
        $student->languages_known = $request->languages_known;
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified student from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        // Delete photo if exists
        if ($student->photo) {
            Storage::disk('public')->delete($student->photo);
        }

        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
