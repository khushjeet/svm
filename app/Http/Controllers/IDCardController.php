<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class IDCardController extends Controller
{
    public function generate()
    {
        $students = Student::all(); // Fetch student data
        $schoolDetails = [
            'name' => 'Your School Name',
            'logo' => asset('path/to/logo.png'),
        ];

        $pdf = Pdf::loadView('idcards.template', compact('students', 'schoolDetails'));
        return $pdf->stream('ID_Cards.pdf');
    }
}
