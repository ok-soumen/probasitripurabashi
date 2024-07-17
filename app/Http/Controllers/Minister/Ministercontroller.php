<?php

namespace App\Http\Controllers\Minister;

use App\Models\Minister;
use App\Models\CMminister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Ministercontroller extends Controller
{
    public function Minister()
    {

        $minister = Minister::all();
        return view('admin.minister.minister', compact('minister'));
    }
    public function AddMinister(Request $request)
    {


        $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'name' => 'required',
            'designation' => 'required',
        ]);

        $filename = time() . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move('upload/minister', $filename);

        $minister = new Minister;
        $minister->status = $request->status;
        $minister->name = $request->name;
        $minister->designation = $request->designation;
        $minister->photo = $filename;
        $minister->save();

        $minister = Minister::all();
        $notification = array(
            'message' => 'Minister details  Added successfully',
            'alert-type' => 'success'
        );
        return view('admin.minister.minister', compact('minister'))->with($notification);
    }

    public function EditMinister($id)
    {
        $data = Minister::find($id);
        return view('admin.minister.edit_minister', compact('data'));
    }

    //===============update Minister===================
    public function UpdateMinister(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg|max:5000',
        ]);
        $minister = Minister::find($request->id);
        $minister->status = $request->status;
        $minister->name = $request->name;
        $minister->designation = $request->designation;
        $minister->save();

        if ($request->hasFile('photo')) {
            $destination = 'upload/minister' . $minister->photo;
            if (File::exists($destination)) {
                unlink($destination);
            }
            $filename = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move('upload/minister', $filename);
            $minister->photo = $filename;
        }

        $minister->save();


        $notification = array(
            'message' => 'Minister updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('minister')->with($notification);
    }

    //delete part
    public function DeleteMinister($id)
    {

        $data = Minister::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Minister deleted successfully',
            'alert-type' => 'warning'
        );

        return redirect()->route('minister')->with($notification);
    }
}
