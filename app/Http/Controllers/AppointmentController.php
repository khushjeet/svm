<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function index()
    {
        // Implement if needed
    }

    public function store(Request $request)
    {
        $request->validate([
            'guardian_name' => 'required|string|max:255',
            'guardian_email' => 'required|email|max:255',
            'child_name' => 'required|string|max:255',
            'child_age' => 'required|string',
            'mobile_number' => 'required|string|max:15',
            'whatsapp_number' => 'required|string|max:15',
            'message' => 'nullable|string',
        ]);

        try {
            Appointment::create($request->all());
            return redirect()->back()->with('success', 'Appointment created successfully!');
        } catch (\Exception $e) {
            Log::error('Appointment save failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create appointment. Please try again.');
        }
    }
}
