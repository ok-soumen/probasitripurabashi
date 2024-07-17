<?php

namespace App\Http\Controllers\Cmcorner;

use App\Models\Cmcorner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Cmcontroller extends Controller
{
    public function Cmcorner()
    {
        $data = Cmcorner::all();
        return view('admin.cmcorner.cmconer', compact('data'));
    }
    public function Addcmcorner(Request $request)
    {

        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('upload/cmcorner', $filename);

        $data = new Cmcorner;
        $data->title = $request->title;
        $data->image = $filename;
        $data->save();

        $notification = array(
            'message' => ' Added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('Cmcorner')->with($notification);
    }
    
    public function Deletecmcorner($id)
    {
        $data =  Cmcorner::find($id);
        $data->delete();

        $notification = array(
            'message' => ' Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Cmcorner')->with($notification);
    }
}
