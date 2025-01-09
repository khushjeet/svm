<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendView extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');

    }
    public function school_facilities(){
        return view('frontend.facility');

    }
    public function popular_teacher(){
        return view('frontend.team');

    }
    public function appointment(){
        return view('frontend.appointment');
    }
    public function testimonial(){
        return view('frontend.testimonial');
    }

    public function classes(){
        return view('frontend.classes');
    }


    public function contact_us(){
        return view('frontend.contact');
    }

    public function call_to_action(){
        return view('frontend.call-to-action');
    }



}
