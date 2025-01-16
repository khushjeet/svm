<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('frontend.backend.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('frontend.backend.facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
            'color_class' => 'required|string|max:50',
        ]);

        // Handle file upload
        $iconPath = $request->file('icon')->store('icons', 'public');

        Facility::create([
            'name' => $request->name,
            'icon' => $iconPath,
            'description' => $request->description,
            'color_class' => $request->color_class,
        ]);

        return redirect()->route('facilities.index')->with('success', 'Facility added successfully!');
    }

    public function edit(Facility $facility)
    {
        return view('frontend.backend.facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
            'color_class' => 'required|string|max:50',
        ]);

        // Update icon if a new file is uploaded
        if ($request->hasFile('icon')) {
            // Delete the old icon if it exists
            if ($facility->icon) {
                Storage::disk('public')->delete($facility->icon);
            }

            $iconPath = $request->file('icon')->store('icons', 'public');
        } else {
            $iconPath = $facility->icon;
        }

        $facility->update([
            'name' => $request->name,
            'icon' => $iconPath,
            'description' => $request->description,
            'color_class' => $request->color_class,
        ]);

        return redirect()->route('facilities.index')->with('success', 'Facility updated successfully!');
    }

    public function destroy(Facility $facility)
    {
        // Delete the icon file if it exists
        if ($facility->icon) {
            Storage::disk('public')->delete($facility->icon);
        }

        $facility->delete();
        return redirect()->route('facilities.index')->with('success', 'Facility deleted successfully!');
    }
}
