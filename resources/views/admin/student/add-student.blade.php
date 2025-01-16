@extends('layouts.app')

@section('content_one')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Main Content Section -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <!-- Top Bar -->
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Add Student</h1>
                    </div>

                    <!-- Student Registration Form -->
                    <div class="container mt-4">
                        <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
                            @csrf

                            <!-- Personal Information -->
                            <div class="card mb-3">
                                <div class="card-header">Personal Information</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-3 mb-4">
                                                <label>Academic Year</label>
                                                <select name="academic_year" class="form-control">
                                                    <option value="">Select Year</option>
                                                    <option value="May2025/26">May2025/26</option>
                                                    <option value="May2026/27">May2026/27</option>
                                                    <option value="May2027/28">May2027/28</option>
                                                    <option value="May2028/29">May2028/29</option>
                                                    <option value="May2029/30">May2029/30</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4">



                                                <label>Admission Number: {{$last_student->admission_number}}</label>
                                                <input type="text" name="admission_number" class="form-control"
                                                    placeholder="Enter Admission Number">

                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Admission Date</label>
                                                <input type="date" name="admission_date" class="form-control"
                                                    placeholder="Enter Admission Date">
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Roll Number </label>
                                                <input type="text" name="roll_number" class="form-control"
                                                    placeholder="Enter Roll Number" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" class="form-control"
                                                    placeholder="Enter First Name" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" class="form-control"
                                                    placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Class</label>

                                                <select name="class" class="form-control" required>
                                                    <option value="">Select Class</option>
                                                    @foreach ($sclasses as $sclass)
                                                    <option value="{{$sclass->class_name_in_words}}">{{$sclass->class_name_in_words}}</option>

                                                    @endforeach
                                                </select>


                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Religion</label>
                                                <input type="text" name="religion" class="form-control"
                                                    placeholder="Enter the Religion" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 mb-4">
                                                <label>Category</label>
                                                <input type="text" name="category" class="form-control"
                                                    placeholder="Enter Category" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Primary Contact Number</label>
                                                <input type="text" name="primary_contact_number" class="form-control"
                                                    placeholder="Enter Contact Number">
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Caste </label>
                                                <input type="text" name="caste" class="form-control"
                                                    placeholder="Caste" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label>Mother Tongue</label>
                                                <input type="text" name="mother_tongue" class="form-control"
                                                    placeholder="Mother Tongue" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-4">
                                            <label>Profile Image</label>
                                            <input type="file" name="profile_image" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Date of Birth *</label>
                                            <input type="date" name="dob" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Blood Group</label>
                                            <select name="blood_group" class="form-control">
                                                <option value="">Select</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Parents & Guardians Information -->
                            <div class="card mb-3">
                                <div class="card-header">Parents & Guardian Information</div>
                                <div class="card-body">
                                    <!-- Fields for father, mother, and guardian details -->
                                    <div class="row">
                                        <div class="col-md-3 mb-4">
                                            <label>Father Name *</label>
                                            <input type="text" name="father_name" class="form-control"
                                                placeholder="Enter Father Name" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Email</label>
                                            <input type="text" name="father_email" class="form-control"
                                                placeholder="Enter email Name">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Father Mobile Number </label>
                                            <input type="text" name="father_mobile_number" class="form-control"
                                                placeholder="Father Mobile Number" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Father Occupation</label>
                                            <input type="text" name="father_occupation" class="form-control"
                                                placeholder="Father Occupation" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Mother Name *</label>
                                            <input type="text" name="mother_name" class="form-control"
                                                placeholder="Enter Father Name" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Mother Email</label>
                                            <input type="text" name="mother_email" class="form-control"
                                                placeholder="Enter email Name">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Mother Mobile Number </label>
                                            <input type="text" name="mother_mobile_number" class="form-control"
                                                placeholder="Father Mobile Numbert" required>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <label>Mother Occupation</label>
                                            <input type="text" name="mother_occupation" class="form-control"
                                                placeholder="Father Occupation" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Other Sections -->
                            <div class="card mb-6">
                                <div class="card-header">Address</div>
                                <div class="card-body">
                                    <!-- Fields for father, mother, and guardian details -->
                                    <div class="row">
                                    <!-- Address fields -->
                                    <div class="col-md-6 mb-2">
                                        <label>Permanent Address</label>
                                        <input type="text" name="permanent_address" class="form-control"
                                            placeholder="permanent_address" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label>Current Address</label>
                                        <input type="text" name="current_address" class="form-control"
                                            placeholder="Current Address" required>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>

    </body>
@endsection
