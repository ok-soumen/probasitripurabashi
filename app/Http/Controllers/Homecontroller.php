<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Visitor;
use App\Models\Services;
use App\Models\Contactus;
use App\Models\Thumbnail;
use App\Models\Eventgallery;
use App\Models\Registration;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function FrontService()
    {
        $data = Services::all();
        return view('frontend.services.services', compact('data'));
    }

    //=====================registration===============
    public function Registration()
    {
        return view('frontend.registration.registration');
    }
    public function Addregistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:registrations',
        ]);

        $RandomId = 'PROBASI/' . str_pad(Registration::max('id') + 1, 5, '0', STR_PAD_LEFT);
        $data = new Registration;
        $data->randomid = $RandomId;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->state = $request->state;
        $data->district = $request->district;
        $data->city = $request->city;
        $data->pin = $request->pin;
        $data->current_address = $request->current_address;
        $data->current_district = $request->current_district;
        $data->current_city = $request->current_city;
        $data->current_pin = $request->current_pin;
        $data->roots = $request->roots;
        $data->occupation = $request->occupation;
        $data->nature_occupation = $request->nature_occupation;
        $data->industry_occupation = $request->industry_occupation;
        $data->last_visited = $request->last_visited;
        $data->reason_moving = $request->reason_moving;
        $data->time_visit = $request->time_visit;
        $data->govt_should = $request->govt_should;
        $data->solve_existing = $request->solve_existing;
        $data->things_refer_outside = $request->things_refer_outside;
        $data->save();

        $RegisteredName = ['name' => $request->name];
        // $RegisteredId = $RandomId;
        $subject = 'Your Dynamic Subject';

        Mail::to($request->email)->send(new SendMail($RegisteredName, $subject));
        
        
      
        return redirect()->route('thankyou');
    }
    public function Thankyou()
    {
        return view('frontend.registration.thankyou');
    }

    //===============aboutus==========
    public function Aboutus()
    {
        return view('frontend.Aboutus.aboutus');
    }
    //=========================contactus ==========
    public function Contactus()
    {
        return view('frontend.Contactus.contactus');
    }

    public function AddContactus(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'feedback' => 'required|max:500',


        ]);
        $data = new Contactus;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->feedback = $request->feedback;
        $data->save();

        return redirect()->route('home.contactus');
    }
    public function Thumbnail()
    {
        $data = Thumbnail::all();

        return view('frontend.Gallery.thumbnail', compact('data'));
    }
    public function Gallery($id)

    {
        $thumbnail = Thumbnail::find($id);
        $data = Gallery::where('thumbnail_id', $id)->get();
        //$main = $data->gallery;
        //dd($main);

        return view('frontend.Gallery.gallery', compact('data', 'thumbnail'));
    }
    //==================public Events===============
    public function Events()
    {
        $data = Event::all();
        return view('frontend.Events.event', compact('data'));
    }
    public function ViewEvent($id)

    {
        $main = Event::find($id);
        $data = Eventgallery::where('event_id', $id)->get();

        return view('frontend.Events.event_content', compact('data', 'main'));
    }
    //=======================visitor==============
    public function Visitors(Request $request)
    {



        $visitor = Visitor::where('ip', $request->ip())->first();

        if (!$visitor) {
            // If the visitor doesn't exist, create a new one
            $visitor = Visitor::create([
                'ip' => $request->ip(),
                'hits' => 1
            ]);
        } else {
            // If the visitor exists, store the current hits count
            $hits = $visitor->hits;

            // Update the existing visitor's IP and set hits to the stored count
            Visitor::where('ip', $request->ip())->update([
                'ip' => $request->ip(),
                'hits' => $hits
            ]);

            // Increment the hits count
            $visitor->increment('hits');
        }

        // Get the total count of visitors
        $data = Visitor::count();

        return view('frontend.Home.indexhome', compact('visitor', 'data'));
    }
}
