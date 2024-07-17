<?php

namespace App\Http\Controllers\Banner;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use App\Models\Registration;
use Illuminate\Support\Facades\File;

class Bannercontroller extends Controller

{
    public  function Banner()
    {

        $data = Banner::all();
        return view('admin.Banner.banner', compact('data'));
    }
    public function  Addbanner(Request $request)
    {

        $request->validate([

            // 'photo' => 'required|image|mimes:jpg,png,jpeg|max:5000',

        ]);

        $filename = time() . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move('upload/banner', $filename);


        $data = new Banner;
        $data->title = $request->title;
        $data->photo = $filename;
        $data->save();

        $notification = array(
            'message' => 'Banner Added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('banner')->with($notification);
    }

    public function EditBanner($id)
    {
        $data = Banner::find($id);
        return view('admin.Banner.editbanner', compact('data'));
    }
    public function UpdateBanner(Request $request)
    {

        $request->validate([

            'image' => 'nullable',

        ]);


        $data =  Banner::find($request->id);
        $data->title = $request->title;

        $data->save();
        if ($request->hasFile('photo')) {
            $destination = 'upload/banner' . $data->photo;
            if (File::exists($destination)) {
                unlink($destination);
            }
            $filename = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move('upload/banner', $filename);
            $data->photo = $filename;
        }

        $data->save();


        $notification = array(
            'message' => 'Data  Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('banner')->with($notification);
    }
    public function DeleteBanner($id)
    {
        $data =  Banner::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Image   Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('banner')->with($notification);
    }
    public function Viewregistration()
    {
        $data = Registration::all();
        return view('admin.registration.registration', compact('data'));
    }
    public function Viewdata($id)
    {
        $data = Registration::find($id);
        return view('admin.registration.fulldata', compact('data'));
    }
    public function Feedback()
    {
        $data = Contactus::all();
        return view('admin.registration.contactus', compact('data'));
    }
    public function Viewfeedback($id)
    {
        $data = Contactus::find($id);
        return  view('admin.registration.viewcontactus', compact('data'));
    }
}
