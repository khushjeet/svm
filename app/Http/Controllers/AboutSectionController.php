<?php
namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    public function index()
{
    $aboutSections = AboutSection::all();
    return view('frontend.backend.about_section.about_index', compact('aboutSections'));
}

public function create()
{
    return view('frontend.backend.about_section.about_create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'button_text' => 'nullable|string|max:255',
        'button_link' => 'nullable|url',
        'ceo_name' => 'nullable|string|max:255',
        'ceo_title' => 'nullable|string|max:255',
        'ceo_image' => 'nullable|image|max:2048',
        'images.*' => 'nullable|image|max:2048',
        'image_1' => 'nullable|image|max:2048',
        'image_2' => 'nullable|image|max:2048',
        'image_3' => 'nullable|image|max:2048',
    ]);

    $data = $request->all();

    // Handle images
    if ($request->hasFile('ceo_image')) {
        $data['ceo_image'] = $request->file('ceo_image')->store('uploads/ceo_images', 'public');
    }
    foreach (['image_1', 'image_2', 'image_3'] as $imageKey) {
        if ($request->hasFile($imageKey)) {
            $data[$imageKey] = $request->file($imageKey)->store('uploads/about_images', 'public');
        }
    }

    AboutSection::create($data);

    return redirect()->route('about_sections.index')->with('success', 'About section created successfully.');
}

public function edit($id)
{
    $aboutSection = AboutSection::findOrFail($id);
    return view('frontend.backend.about_section.about_edit', compact('aboutSection'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'button_text' => 'nullable|string|max:255',
        'button_link' => 'nullable|url',
        'ceo_name' => 'nullable|string|max:255',
        'ceo_title' => 'nullable|string|max:255',
        'ceo_image' => 'nullable|image|max:2048',
        'image_1' => 'nullable|image|max:2048',
        'image_2' => 'nullable|image|max:2048',
        'image_3' => 'nullable|image|max:2048',
    ]);

    $aboutSection = AboutSection::findOrFail($id);

    $data = $request->all();

    // Handle images
    if ($request->hasFile('ceo_image')) {
        $data['ceo_image'] = $request->file('ceo_image')->store('uploads/ceo_images', 'public');
    }
    foreach (['image_1', 'image_2', 'image_3'] as $imageKey) {
        if ($request->hasFile($imageKey)) {
            $data[$imageKey] = $request->file($imageKey)->store('uploads/about_images', 'public');
        }
    }

    $aboutSection->update($data);

    return redirect()->route('about_sections.index')->with('success', 'About section updated successfully.');
}

public function destroy($id)
{
    $aboutSection = AboutSection::findOrFail($id);

    // Delete images
    if ($aboutSection->ceo_image) {
        Storage::disk('public')->delete($aboutSection->ceo_image);
    }
    foreach (['image_1', 'image_2', 'image_3'] as $imageKey) {
        if ($aboutSection->$imageKey) {
            Storage::disk('public')->delete($aboutSection->$imageKey);
        }
    }

    $aboutSection->delete();

    return redirect()->route('about_sections.index')->with('success', 'About section deleted successfully.');
}


}
