@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Student Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Academic Year</th>
                        <td>{{ $student['academic_year'] }}</td>
                    </tr>
                    <tr>
                        <th>Admission Number</th>
                        <td>{{ $student['admission_number'] }}</td>
                    </tr>
                    <tr>
                        <th>Admission Date</th>
                        <td>{{ $student['admission_date'] }}</td>
                    </tr>
                    <tr>
                        <th>Roll Number</th>
                        <td>{{ $student['roll_number'] }}</td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $student['first_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $student['last_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>{{ $student['class'] }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ $student['religion'] }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $student['category'] }}</td>
                    </tr>
                    <tr>
                        <th>Primary Contact Number</th>
                        <td>{{ $student['primary_contact_number'] }}</td>
                    </tr>
                    <tr>
                        <th>Caste</th>
                        <td>{{ $student['caste'] }}</td>
                    </tr>
                    <tr>
                        <th>Mother Tongue</th>
                        <td>{{ $student['mother_tongue'] }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $student['dob'] }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $student['gender'] }}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{ $student['blood_group'] }}</td>
                    </tr>
                    <tr>
                        <th>Father's Name</th>
                        <td>{{ $student['father_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Father's Email</th>
                        <td>{{ $student['father_email'] }}</td>
                    </tr>
                    <tr>
                        <th>Father's Mobile Number</th>
                        <td>{{ $student['father_mobile_number'] }}</td>
                    </tr>
                    <tr>
                        <th>Father's Occupation</th>
                        <td>{{ $student['father_occupation'] }}</td>
                    </tr>
                    <tr>
                        <th>Mother's Name</th>
                        <td>{{ $student['mother_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Mother's Email</th>
                        <td>{{ $student['mother_email'] }}</td>
                    </tr>
                    <tr>
                        <th>Mother's Mobile Number</th>
                        <td>{{ $student['mother_mobile_number'] }}</td>
                    </tr>
                    <tr>
                        <th>Mother's Occupation</th>
                        <td>{{ $student['mother_occupation'] }}</td>
                    </tr>
                    <tr>
                        <th>Permanent Address</th>
                        <td>{{ $student['permanent_address'] }}</td>
                    </tr>
                    <tr>
                        <th>Current Address</th>
                        <td>{{ $student['current_address'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




  