<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Cards</title>
    <style>
        .id-card {
            width: 300px;
            height: 450px;
            border: 1px solid #000;
            border-radius: 10px;
            text-align: center;
            padding: 15px;
            margin: 10px;
            display: inline-block;
        }
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: auto;
        }
        .school-name {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .details {
            text-align: left;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    @foreach ($students as $student)
        <div class="id-card">
            <img src="" alt="School Logo" class="logo">
            <div class="school-name">{{$student->first_name}}</div>
            <div class="details">
                <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                <p><strong>Father's Name:</strong> {{ $student->parent_informations->first()->father_name ?? 'N/A' }}</p>
                <p><strong>Address:</strong> {{ $student->address }}</p>
                <p><strong>Blood Group:</strong> {{ $student->blood_group }}</p>
                <p><strong>Class:</strong> {{ $student->class }}</p>
                <p><strong>Admission Year:</strong> {{ $student->admission_year }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>
