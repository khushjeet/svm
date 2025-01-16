<?php

namespace App\Http\Controllers;

use App\Models\ParentInformation;
use App\Http\Requests\StoreParentInformationRequest;
use App\Http\Requests\UpdateParentInformationRequest;

class ParentInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreParentInformationRequest $request)
    {
        $parent = new ParentInformation();
        $parent->student_id = $request->student_id;
        $parent->father_name = $request->father_name;
        $parent->father_email = $request->father_email;
        $parent->father_mobile_number = $request->father_mobile_number;
        $parent->father_occupation = $request->father_occupation;
        $parent->mother_name = $request->mother_name;
        $parent->mother_email = $request->mother_email;
        $parent->mother_mobile_number = $request->mother_mobile_number;
        $parent->mother_occupation = $request->mother_occupation;
        $parent->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(ParentInformation $parentInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentInformation $parentInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParentInformationRequest $request, ParentInformation $parentInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentInformation $parentInformation)
    {
        //
    }
}
