<?php

namespace App\Http\Controllers\Service;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Servicecontroller extends Controller
{
    public function Service()
    {

        $data = Services::all();
        return view('admin.Services.services', compact('data'));
    }
    public function Addservices(Request $request)
    {




        $data = new  Services;

        $data->link = $request->link;
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('services')->with($notification);
    }
    public function  Editservices($id)
    {
        $data = Services::find($id);
        return view('admin.Services.editservices', compact('data'));
    }


    public function Updateservices(Request $request)
    {
        $request->validate([
            'link' => 'required'
        ]);

        $data =  Services::find($request->id);
        $data->link = $request->link;
        $data->name = $request->name;
        $data->save();



        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('services')->with($notification);
    }
    public function Deleteservices($id)
    {
        $data =  Services::find($id);
        $data->delete();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('services')->with($notification);
    }
}
