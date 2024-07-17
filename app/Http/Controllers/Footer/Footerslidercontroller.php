<?php

namespace App\Http\Controllers\Footer;

use App\Models\Footerslider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Footerslidercontroller extends Controller
{
    public function Slider()
    {

        $data = Footerslider::all();
        return view('admin.Footer-slider.footerslider', compact('data'));
    }
    public function Addslider(Request $request)
    {

        $request->validate([

            'footerslider' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'link' => 'required'

        ]);

        $filename = time() . '.' . $request->footerslider->getClientOriginalExtension();
        $request->footerslider->move('upload/footerslider', $filename);

        $data = new  Footerslider;

        $data->link = $request->link;
        $data->footerslider = $filename;
        $data->save();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('footer.slider')->with($notification);
    }
    public function Editslider($id)
    {


        $data = Footerslider::find($id);
        return view('admin.Footer-slider.editfooterslider', compact('data'));
    }


    public function Updateslider(Request $request)
    {
        $request->validate([


            'link' => 'required'

        ]);


        $data =  Footerslider::find($request->id);
        $data->link = $request->link;

        $data->save();
        if ($request->hasFile('footerslider')) {
            $destination = 'upload/footerslider' . $data->footerslider;
            if (File::exists($destination)) {
                unlink($destination);
            }
            $filename = time() . '.' . $request->footerslider->getClientOriginalExtension();
            $request->footerslider->move('upload/footerslider', $filename);
            $data->footerslider = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('footer.slider')->with($notification);
    }
    public function Deleteslider($id)
    {
        $data =  Footerslider::find($id);
        $data->delete();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('footer.slider')->with($notification);
    }
}
