<?php

namespace App\Http\Controllers;

use App\Models\CalenderEvent;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $school_calender = CalenderEvent::select('start', 'end', 'display', 'color')->get();
        return view('home', compact('school_calender'));
    }
    public function welcome() 
    {   return view('welcome');

    }
    //end of welcome
    public function reachus() 
    {   return view('reachus');

    }
    //end of reachus
    public function schoolPolice() {
        return view('schoolPolice');
    }
    //end of schoolPloice
    public function tuitionFees() {
        return view('tuitionFees');
    }
    //end of tuitionfees
    public function applyNow() {
        return view('applyNow');
    }
    //end of applynow
    public function primary() {
        return view('primary');
    }
    //end of primary
    public function KG() {
        return view('KG');
    }
    //end of KG
    public function MYP() {
        return view('MYP');
    }
    //end of MYP
    public function IBDP() {
        return view('IBDP');
    }
    //end of IBDP
    public function CAS() {
        return view('CAS');
    }
    //end of CAS
    public function calender() {
        return view('calender');
    }
    //end of calender
    public function gallery() {
        return view('gallery');
    }
    //end of gallery
    public function getGallery() {
        return view('getGallery');
    }
    //end of getGallery
    public function facilities() {
        return view('facilities');
    }
    //end of facilities
    public function getFacilities() {
        return view('getFacilities');
    }
    //end of getFacilities
}
