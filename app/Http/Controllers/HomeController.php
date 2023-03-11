<?php

namespace App\Http\Controllers;

use App\Models\CalenderEvent;
use App\Models\Event;
use App\Models\Facil;
use App\Models\Gallery;
use App\Models\HomeSlider;
use App\Models\Polices;
use App\Models\ReachUs;
use App\Models\Tut;
use App\Models\Welcome;
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
        $school_calender = CalenderEvent::select('start', 'end', 'display', 'color', 'category', 'type')->get()->map(function($school_calender, $key) {									
            return [
                'start' => $school_calender->start, 
                'end' => $school_calender->end, 
                'display' => $school_calender->display, 
                'color' => $school_calender->color,
                'title' => $school_calender->type,
                ];
            });;

        $sliders = HomeSlider::all();
        $cards = Event::latest()->get()->take(6);
        return view('home', compact('school_calender', 'sliders', 'cards'));
    }
    public function welcome() 
    {   
        $welcome  = Welcome::first();
        return view('welcome',  compact('welcome'));

    }
    //end of welcome
    public function reachus() 
    {   
        $reachus = ReachUs::first();
        return view('reachus', compact('reachus'));

    }
    //end of reachus
    public function schoolPolice() {
        $police = Polices::first();
        return view('schoolPolice', compact('police'));
    }
    //end of schoolPloice
    public function tuitionFees() {
        $tuts = Tut::all();
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
        $school_calender = CalenderEvent::select('start', 'end', 'display', 'color', 'category', 'type')->get()->map(function($school_calender, $key) {									
            return [
                'start' => $school_calender->start, 
                'end' => $school_calender->end, 
                'display' => $school_calender->display, 
                'color' => $school_calender->color,
                'title' => $school_calender->type,
                ];
            });;

        return view('calender', compact('school_calender'));
    }
    //end of calender
    public function gallery() {
        return view('gallery');
    }
    //end of gallery
    public function getGallery($id) {
        $gals = Gallery::where('category_id', $id)->get();
        return view('getGallery', compact('gals'));
    }
    //end of getGallery
    public function facilities() {
        return view('facilities');
    }
    //end of facilities
    public function getFacilities($id) {
        $facs = Facil::where('category_id', $id)->get();
        return view('getFacilities', compact('facs'));
    }
    //end of getFacilities
    public function getTut(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);
        $tut = Tut::where('class', $request->name)->first();
        return $tut;
    }
    public function media() {
        return view('media');

    }
}
