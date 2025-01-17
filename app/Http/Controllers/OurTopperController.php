<?php

namespace App\Http\Controllers;

use App\Models\OurTopper;
use Illuminate\Http\Request;

class OurTopperController extends Controller
{
    // Show all toppers
    public function index()
    {
        $toppers = OurTopper::all();
        return view('frontend.backend.topper.topper_index', compact('toppers'));
    }

    // Show form to create a new topper
    public function create()
    {
        return view('frontend.backend.topper.topper_create');
    }

    // Store a new topper
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Create a new topper
        OurTopper::create([
            'name' => $request->name,
            'profession' => $request->profession,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('our_toppers.index')->with('success', 'Topper created successfully!');
    }

    // Show form to edit an existing topper
    public function edit($id)
    {
        $topper = OurTopper::findOrFail($id);
        return view('frontend.backend.topper.topper_edit', compact('topper'));
    }

    // Update an existing topper
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $topper = OurTopper::findOrFail($id);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $topper->image_path = $imagePath;
        }

        $topper->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'description' => $request->description,
        ]);

        return redirect()->route('our_toppers.index')->with('success', 'Topper updated successfully!');
    }

    // Delete a topper
    public function destroy($id)
    {
        $topper = OurTopper::findOrFail($id);
        $topper->delete();
        return redirect()->route('our_toppers.index')->with('success', 'Topper deleted successfully!');
    }
}
