@extends('layouts.app')

@section('content_one')
<div class="container">
    <h2>Class and Subjects Management</h2>
    <hr>

    <!-- Combined Form: Class Details and Subjects -->
    <div class="card">
        <div class="card-header">Class and Subjects Details</div>
        <div class="card-body">
            <form action="{{ route('sclass.class_store') }}" method="POST">
                @csrf

                <!-- Class Details Section -->
                <h5>Class Details</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="class_name">Class Name</label>
                        <input type="text" name="class_name" id="class_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="class_code">Class Code</label>
                        <input type="text" name="class_code" id="class_code" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="start_from">Start From</label>
                        <input type="date" name="start_from" id="start_from" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="duration">Duration (Months)</label>
                        <input type="number" name="duration" id="duration" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="class_fee">Class Fee</label>
                        <input type="number" name="class_fee" id="class_fee" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="class_teacher_name">Class Teacher Name</label>
                        <input type="text" name="class_teacher_name" id="class_teacher_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="max_no_students">Max Number of Students</label>
                        <input type="number" name="max_no_students" id="max_no_students" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="class_teacher_mobile_number">Class Teacher Mobile Number</label>
                        <input type="text" name="class_teacher_mobile_number" id="class_teacher_mobile_number" class="form-control" required>
                    </div>
                </div>

                <!-- Subjects Section -->
                <h5 class="mt-4">Subjects</h5>
                <div id="subjects-container">
                    <div class="subject-row row mb-4">
                        <div class="col-md-4">
                            <label for="subject_name">Subject Name</label>
                            <input type="text" name="subjects[0][subject_name]" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="teacher_id">Select Teacher</label>
                            <select name="subjects[0][teacher_id]" class="form-control" required>
                                <option value="" selected disabled>Select Teacher</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="time">Time</label>
                            <input type="time" name="subjects[0][time]" class="form-control" required>
                        </div>
                        <div class="col-md-1 d-flex align-items-center">
                            <button type="button" class="btn btn-danger remove-subject">X</button>
                        </div>
                    </div>
                </div>
                <button type="button" id="add-subject" class="btn btn-success mb-3">+ Add Subject</button>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Save Class and Subjects</button>
            </form>
        </div>
    </div>
</div>

<script>
    let subjectIndex = 1;

    // Add new subject row
    document.getElementById('add-subject').addEventListener('click', function () {
        const container = document.getElementById('subjects-container');
        const newRow = document.createElement('div');
        newRow.classList.add('subject-row', 'row', 'mb-3');
        newRow.innerHTML = `
            <div class="col-md-4">
                <label for="subject_name">Subject Name</label>
                <input type="text" name="subjects[${subjectIndex}][subject_name]" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="teacher_id">Select Teacher</label>
                <select name="subjects[${subjectIndex}][teacher_id]" class="form-control" required>
                    <option value="" selected disabled>Select Teacher</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->first_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="time">Time</label>
                <input type="time" name="subjects[${subjectIndex}][time]" class="form-control" required>
            </div>
            <div class="col-md-1 d-flex align-items-center">
                <button type="button" class="btn btn-danger remove-subject">X</button>
            </div>
        `;
        container.appendChild(newRow);
        subjectIndex++;
    });

    // Remove subject row
    document.getElementById('subjects-container').addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-subject')) {
            e.target.closest('.subject-row').remove();
        }
    });
</script>
@endsection
