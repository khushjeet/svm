@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <div class="mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Students</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Student</li>
            </ol>
        </nav>
    </div>

    <!-- Personal Information Section -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Personal Information</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <label>Upload Photo</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" accept="image/*">
                            <small class="text-muted">Upload image size 4MB, Format JPG, PNG, SVG</small>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Academic Year</label>
                                <select class="form-control">
                                    <option>June 2024/25</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Admission Number</label>
                                <input type="text" class="form-control" placeholder="Enter Admission Number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Admission Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Roll Number</label>
                                <input type="text" class="form-control" placeholder="Enter Roll Number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Blood Group</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Gender</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Category</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Primary Contact Number</label>
                                <input type="text" class="form-control" placeholder="Enter Contact Number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Mother Tongue</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Languages Known</label>
                                <input type="text" class="form-control" placeholder="Enter Languages Known">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Parents & Guardian Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Parents & Guardian Information</h5>
        </div>
        <div class="card-body">
            <!-- Add similar structure for father's, mother's, and guardian's info -->
        </div>
    </div>

    <!-- Siblings Section -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Siblings</h5>
        </div>
        <div class="card-body">
            <!-- Add siblings input structure -->
        </div>
    </div>

    <!-- Address Section -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Address</h5>
        </div>
        <div class="card-body">
            <!-- Add address fields -->
        </div>
    </div>

    <!-- Additional Sections: Transport, Hostel, Documents, etc. -->
    <!-- Add other sections as per the images -->
</div>
@endsection
