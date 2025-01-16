@extends('layouts.app')

@section('content_one')
    <div class="content-body">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Students</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('students.create') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="javascript:void(0);">Professors</a>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- Search and Add New -->
            <div class="row mb-3">
                <div class="col-lg-6 text-right">
                    <a href="add-professor.html" class="btn btn-primary">+ Add New</a>
                </div>
                <div class="col-lg-3 text-right">
                    <button id="toggleViewBtn" class="btn btn-secondary">Switch to Grid View</button>
                </div>
            </div>

            <!-- List View -->
            <div id="listView" class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 1200px">
                            <thead>
                                <tr>
                                    <th>Img</th>
                                    <th>Admission Number</th>
                                    <th>Name</th>
                                    <th>Roll NO</th>
                                    <th>Gender</th>
                                    <th>Class</th>
                                    <th>Father Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" width="35"
                                                src="{{ asset($student->profile_image) }}" alt="">
                                        </td>
                                        <td>{{ $student->admission_number }}</td>
                                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                        <td>{{ $student->roll_number }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->class }}</td>
                                        @foreach ($student->parent_informations as $parent)
                                            <td>{{ $parent->mother_mobile_number }}</td>
                                        @endforeach
                                        <td>
                                            <a href="" class="btn btn-sm btn-info">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="la la-pencil"></i>
                                            </a>
                                            <a href="javascript:;"
                                                onclick="if(confirm('Are you sure you want to delete this student?')) { $('.form-{{ $student->id }}').submit(); }"
                                                class="btn btn-sm btn-danger">
                                                <i class="la la-trash-o"></i>
                                            </a>
                                            <form class="form-{{ $student->id }}" action="" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Grid View -->
            <div id="gridView" class="row" style="display: none;">
                @foreach ($students as $student)
                    <div class="col-lg-4 col-md-6 mb-4 grid-item" >
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle mb-3" width="80" src="{{ asset($student->profile_image) }}"
                                    alt="Student Image">
                                <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                                <p class="card-text">
                                    <strong>Roll No:</strong> {{ $student->roll_number }}<br>
                                    <strong>Class:</strong> {{ $student->class }}
                                </p>
                                <a href="{{ route('idcards.generate', ['id' => $student->id]) }}"
                                    class="btn btn-primary btn-sm">
                                    Generate ID Card
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- JavaScript for Toggle and Search -->
    <script>
        document.getElementById('toggleViewBtn').addEventListener('click', function() {
            const listView = document.getElementById('listView');
            const gridView = document.getElementById('gridView');
            const toggleBtn = document.getElementById('toggleViewBtn');

            if (listView.style.display === 'none') {
                listView.style.display = '';
                gridView.style.display = 'none';
                toggleBtn.textContent = 'Switch to Grid View';
            } else {
                listView.style.display = 'none';
                gridView.style.display = 'flex';
                toggleBtn.textContent = 'Switch to List View';
            }
        });

        document.getElementById('searchBox').addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const rows = document.querySelectorAll('#studentsTable tbody tr');
            const gridItems = document.querySelectorAll('#gridView .grid-item');

            // Filter List View
            rows.forEach(row => {
                const name = row.children[2].textContent.toLowerCase();
                const roll = row.children[3].textContent.toLowerCase();
                row.style.display = (name.includes(query) || roll.includes(query)) ? '' : 'none';
            });

            // Filter Grid View
            gridItems.forEach(item => {
                const name = item.querySelector('.card-title').textContent.toLowerCase();
                const roll = item.querySelector('.card-text').textContent.toLowerCase();
                item.style.display = (name.includes(query) || roll.includes(query)) ? '' : 'none';
            });
        });
    </script>
@endsection
