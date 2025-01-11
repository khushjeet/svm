@extends('layouts.app')

@section('content_one')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Add New Class</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('sclass.sclass_store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="class_name_in_words" class="form-label">Class Name (Words):</label>
                            <input type="text" id="class_name_in_words" name="class_name_in_words" class="form-control" placeholder="Enter class name in words" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="class_fee" class="form-label">Class Fee:</label>
                            <input type="number" id="class_fee" name="class_fee" class="form-control" placeholder="Enter class fee" step="0.01" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_of_students" class="form-label">Number of Students:</label>
                            <input type="number" id="no_of_students" name="no_of_students" class="form-control" placeholder="Enter maximum number of students" required>
                        </div>

                        <label for="class_teacher_last_name" class="form-label">Class Teacher Last Name:</label>
                        <select id="class_teacher_last_name" name="class_teacher_last_name" class="form-control" required>
                            <option value="" disabled selected>Select Last Name</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->last_name }}">{{ $teacher->last_name }}</option>
                            @endforeach
                        </select>

                        {{-- <div class="form-group mb-3">
                            <label for="class_teacher_last_name" class="form-label">Class Teacher Last Name:</label>
                            <input type="text" id="class_teacher_last_name" name="class_teacher_last_name" class="form-control" placeholder="Enter last name" required>
                        </div> --}}
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="class_name_in_number" class="form-label">Class Name (Number):</label>
                            <input type="text" id="class_name_in_number" name="class_name_in_number" class="form-control" placeholder="Enter class name in number" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="class_code" class="form-label">Class Code:</label>
                            <input type="text" id="class_code" name="class_code" class="form-control" placeholder="Enter class code" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_of_subject" class="form-label">Number of Subjects:</label>
                            <input type="text" id="no_of_subject" name="no_of_subject" class="form-control" placeholder="Enter number of subjects" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="teacher_id" class="form-label">Class Teacher ID:And Mobile Number</label>
                            <select id="teacher_id" name="teacher_id" class="form-control" required>
                                <option value="" disabled selected>Select Teacher</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->id }} - {{ $teacher->mobile_number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Full Width Row for Teacher Names -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="class_teacher_first_name" class="form-label">Class Teacher First Name:</label>
                            <select id="class_teacher_first_name" name="class_teacher_first_name" class="form-control" required>
                                <option value="" disabled selected>Select First Name</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->first_name }}">{{ $teacher->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
