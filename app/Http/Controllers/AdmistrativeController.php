<?php


namespace App\Http\Controllers;
use App\Models\Admistrative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmistrativeController extends Controller
{
    public function index()
    {
        $admistratives = Admistrative::all();
        return view('frontend.backend.adminstrative.index', compact('admistratives'));
    }

    public function create()
    {
        return view('frontend.backend.adminstrative.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'desination' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('admistrative_images', 'public');

        Admistrative::create([

            'image' => $imagePath,
            'name' => $request->name,
            'desination' => $request->desination,
        ]);

        return redirect()->route('admistratives.index')->with('success', 'Admistrative added successfully!');
    }

    // public function show(Admistrative $admistrative)
    // {
    //     return view('frontend.backend.adminstrative.edit', compact('admistrative'));
    // }

    public function edit(Admistrative $admistrative)
    {
        return view('frontend.backend.adminstrative.edit', compact('admistrative'));
    }

    public function update(Request $request, Admistrative $admistrative)
    {
        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'desination' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($admistrative->image);
            $imagePath = $request->file('image')->store('admistrative_images', 'public');
            $admistrative->update(['image' => $imagePath]);
        }

        $admistrative->update([
            
            'name' => $request->name,
            'desination' => $request->desination,
        ]);

        return redirect()->route('admistratives.index')->with('success', 'Admistrative updated successfully!');
    }

    public function destroy(Admistrative $admistrative)
    {
        Storage::disk('public')->delete($admistrative->image);
        $admistrative->delete();

        return redirect()->route('admistratives.index')->with('success', 'Admistrative deleted successfully!');
    }
}
