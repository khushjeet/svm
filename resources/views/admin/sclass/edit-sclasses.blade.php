@extends('layouts.app')

@section('content_one')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white text-center">
            <h3>Edit Class</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('sclass.update', $sclass->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="class_name_in_words">Class Name (Words):</label>
                            <input type="text"
                                   name="class_name_in_words"
                                   id="class_name_in_words"
                                   value="{{ old('class_name_in_words', $sclass->class_name_in_words) }}"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="class_fee">Class Fee:</label>
                            <input type="number"
                                   name="class_fee"
                                   id="class_fee"
                                   value="{{ old('class_fee', $sclass->class_fee) }}"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_of_students">Number of Students:</label>
                            <input type="number"
                                   name="no_of_students"
                                   id="no_of_students"
                                   value="{{ old('no_of_students', $sclass->no_of_students) }}"
                                   class="form-control"
                                   required>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="class_name_in_number">Class Name (Number):</label>
                            <input type="text"
                                   name="class_name_in_number"
                                   id="class_name_in_number"
                                   value="{{ old('class_name_in_number', $sclass->class_name_in_number) }}"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="class_code">Class Code:</label>
                            <input type="text"
                                   name="class_code"
                                   id="class_code"
                                   value="{{ old('class_code', $sclass->class_code) }}"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_of_subject">Number of Subjects:</label>
                            <input type="number"
                                   name="no_of_subject"
                                   id="no_of_subject"
                                   value="{{ old('no_of_subject', $sclass->no_of_subject) }}"
                                   class="form-control"
                                   required>
                        </div>
                    </div>
                </div>

                <!-- Teacher Selection -->
                <div class="form-group mb-3">
                    <label for="teacher_id">Class Teacher:</label>
                    <select name="teacher_id" id="teacher_id" class="form-control" required>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                    {{ $teacher->id == old('teacher_id', $sclass->teacher_id) ? 'selected' : '' }}>
                                {{ $teacher->first_name }} {{ $teacher->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Class Teacher Details -->
                <div class="form-group mb-3">
                    <label for="class_teacher_first_name">Class Teacher First Name:</label>
                    <input type="text"
                           name="class_teacher_first_name"
                           id="class_teacher_first_name"
                           value="{{ old('class_teacher_first_name', $sclass->class_teacher_first_name) }}"
                           class="form-control"
                           required>
                </div>
                <div class="form-group mb-3">
                    <label for="class_teacher_last_name">Class Teacher Last Name:</label>
                    <input type="text"
                           name="class_teacher_last_name"
                           id="class_teacher_last_name"
                           value="{{ old('class_teacher_last_name', $sclass->class_teacher_last_name) }}"
                           class="form-control"
                           required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success w-100">Update Class</button>
            </form>
        </div>
    </div>
</div>
@endsection
