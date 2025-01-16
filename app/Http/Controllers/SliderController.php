<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNumeric;
use function PHPUnit\Framework\isString;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the latest slider record
        $latestSlider = Slider::orderBy('id', 'desc')->first();

        // Check if the latest slider exists
        if ($latestSlider) {
            $slider = Slider::orderBy('id', 'desc')->first();
            // If the latest slider exists, proceed to the update view
            return view('frontend.backend.update_slider',compact('slider'));
        } else {
            // If no slider exists, proceed to the create view
            return view('frontend.backend.slidebar');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $slider = new Slider();

        $slider->image_title_1 = $request->image_title_1;
        $slider->image_title_2 = $request->image_title_2;
        $slider->image_title_3 = $request->image_title_3;
        $slider->image_title_4 = $request->image_title_4;
        $slider->image_header_1 = $request->image_header_1;
        $slider->image_header_2 = $request->image_header_2;
        $slider->image_header_3 = $request->image_header_3;
        $slider->image_header_4 = $request->image_header_4;
        try {
            if ($request->hasFile('image_1')) {
                $image_1=$request->file('image_1');
                $fileName = $image_1->store('slider_image','public');
                $filePath = '/uploads/'.$fileName;
                $slider->image_1 = $filePath;
            } else {
                throw new Exception('No  image 1 file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['image' => ' image upload failed. Please try again.']);
        }


        try {
            if ($request->hasFile('image_2')) {
                $image_2=$request->file('image_2');
                $fileName = $image_2->store('slider_image','public');
                $filePath = '/uploads/'.$fileName;
                $slider->image_2 = $filePath;
            } else {
                throw new Exception('No  image 2 file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['image_2' => ' image 2 upload failed. Please try again.']);
        }
        try {
            if ($request->hasFile('image_3')) {
                $image_3=$request->file('image_3');
                $fileName = $image_3->store('slider_image','public');
                $filePath = '/uploads/'.$fileName;
                $slider->image_3 = $filePath;
            } else {
                throw new Exception('No image_3 file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['image_3' => 'image 3 upload failed. Please try again.']);
        }
        try {
            if ($request->hasFile('image_4')) {
                $image_4=$request->file('image_4');
                $fileName = $image_4->store('slider_image','public');
                $filePath = '/uploads/'.$fileName;
                $slider->image_4 = $filePath;
            } else {
                throw new Exception('No image 4 file uploaded.');
            }
        } catch (Exception $e) {
            logger('File upload error:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['image_4' => 'image 4 upload failed. Please try again.']);
        }
        $slider->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
        return view('frontend.backend.update_slider');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the slider record
        $slider = Slider::findOrFail($id);

        // Update text fields
        $slider->image_title_1 = $request->input('image_title_1');
        $slider->image_title_2 = $request->input('image_title_2');
        $slider->image_title_3 = $request->input('image_title_3');
        $slider->image_title_4 = $request->input('image_title_4');
        $slider->image_header_1 = $request->input('image_header_1');
        $slider->image_header_2 = $request->input('image_header_2');
        $slider->image_header_3 = $request->input('image_header_3');
        $slider->image_header_4 = $request->input('image_header_4');

        // Handle image uploads
        for ($i = 1; $i <= 4; $i++) {
            $imageField = 'image_' . $i;
            if ($request->hasFile($imageField)) {
                // Delete old image if exists
                if ($slider->{'image_' . $i}) {
                    $oldImagePath = public_path($slider->{'image_' . $i});
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Upload new image
                $image = $request->file($imageField);
                $fileName = $image->store('slider_image', 'public');
                $filePath = '/uploads/' . $fileName;
                $slider->{'image_' . $i} = $filePath;
            }
        }

        // Save the updated slider record
        $slider->save();

        return redirect()->route('dashboard')->with('success', 'Slider updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
