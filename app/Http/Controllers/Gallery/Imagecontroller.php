<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Thumbnail;
use App\Models\Eventgallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Imagecontroller extends Controller
{
    public function Thumbnail()
    {
        $events = Event::all();
        $data = Thumbnail::all();
        return view('admin.Gallery.thumbnail', compact('data', 'events'));
    }
    public function Addthumbnail(Request $request)
    {
        $request->validate([

            'footerslider' => '|mimes:jpg,png,jpeg'

        ]);

        $filename = time() . '.' . $request->thumbnail_image->getClientOriginalExtension();
        $request->thumbnail_image->move('upload/thumbnail', $filename);

        $data = new Thumbnail;
        $data->title = $request->title;
        $data->thumbnail_image = $filename;
        $data->save();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('image.thumbnail')->with($notification);
    }
    public function Editthumbnail($id)
    {

        $data = Thumbnail::find($id);

        return view('admin.Gallery.editthumbnail', compact('data'));
    }

    public function Allgallery($id)
    {

        $data = Thumbnail::find($id);
        $main = $data->gallery;
        return view('admin.Gallery.allgallery', compact('data', 'main'));
    }
    public function Updatethumbnail(Request $request)
    {

        $data =  Thumbnail::find($request->id);
        $data->title = $request->title;
        $data->save();
        if ($request->hasFile('thumbnail_image')) {
            $destination = 'upload/thumbnail' . $data->thumbnail_image;
            if (File::exists($destination)) {
                unlink($destination);
            }
            $filename = time() . '.' . $request->thumbnail_image->getClientOriginalExtension();
            $request->thumbnail_image->move('upload/thumbnail', $filename);
            $data->thumbnail_image = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'thumbnail Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('image.thumbnail')->with($notification);
    }
    public function  Deletethumbnail($id)
    {
        $data =  Thumbnail::find($id);
        $data->delete();


        $notification = array(
            'message' => 'Thumbnail Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('image.thumbnail')->with($notification);
    }


    //============gallery image========


    public function Maingallery($id)
    {
        $thumbnailid = $id;
        $image = Thumbnail::find($id);
        $data = Gallery::all();
        return view('admin.Gallery.maingallery', compact('image', 'data', 'thumbnailid'));
    }

    public function Addgallery(Request $request)
    {

        $request->validate([
            'image' => '|mimes:jpg,png,jpeg,JPG',

        ]);

        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('upload/gallery', $filename);

        $data = new Gallery;
        $data->title = $request->title;
        $data->thumbnail_id = $request->thumbnail_id;
        $data->image = $filename;
        $data->save();


        $notification = array(
            'message' => 'Gallery Added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('main.gallery', ['id' => $request->thumbnail_id])->with($notification);
    }
    public function EditGallery($id)
    {

        $data = Gallery::find($id);
        return view('admin.Gallery.editgallery', compact('data'));
    }
      public function UpdateGallery(Request $request)
     {

        
    $data =  Gallery::find($request->id);
        $data->title = $request->title;

         $data->save();
         if ($request->hasFile('photo')) {
             $destination = 'upload/gallery' . $data->photo;
             if (File::exists($destination)) {
           unlink($destination);
             }
            $filename = time() . '.' . $request->photo->getClientOriginalExtension();
             $request->photo->move('upload/gallery', $filename);
             $data->photo = $filename;
         }

     $data->save();


     $notification = array(
            'message' => 'Data  Updated successfully',
             'alert-type' => 'success'
        );

         return redirect()->route('banner')->with($notification);
    }

    public function Deletegallery($id)
    {
        $data = Gallery::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Gallery Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('image.thumbnail')->with($notification);
    }
    //=====================event page=====================
    public function Events()
    {
        $data = Event::all();
        return view('admin.Gallery.event', compact('data'));
    }
    public function  AddEvent(Request $request)
    {
        $request->validate([
            'name' => 'required',
          
            'description' => 'required|max:500'
            
        ]);
        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('upload/eventthumbnail', $filename);

        $data = new Event;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->place_of_event = $request->place_of_event;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->image = $filename;

        $data->save();

        $notification = array(
            'message' => 'Gallery Added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('event')->with($notification);
    }
    public function Eventthumbnail($id)

    {
        $main = Eventgallery::all();
        $data = Event::find($id);
        return view('admin.Gallery.addeventthumbnail', compact('data', 'main'));
    }

    public function Addeventthumbnail(Request $request)
    {

        $main = Eventgallery::all();
        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('upload/eventgallery', $filename);

        $data = new Eventgallery;
        $data->event_id = $request->event_id;
        $data->title = $request->title;
        $data->image = $filename;
        $data->save();

        $notification = array(
            'message' => 'slider Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('event')->with(compact('notification', 'main'));
    }


    public function Editevents($id)
    {
        $data = Event::find($id);
        return view('admin.Gallery.editevent', compact('data'));
    }
    public function Updateevent(Request $request)
    {

        $data =  Event::find($request->id);
        $data->name = $request->name;
        $data->type = $request->type;
        //$data->event_id = $request->event_id;
        $data->place_of_event = $request->place_of_event;
        $data->description = $request->description;
        $data->date = $request->date;
        //$data->title = $request->title;
        $data->save();
        if ($request->hasFile('image')) {
            $destination = 'upload/eventgallery' . $data->image;
            if (File::exists($destination)) {
                unlink($destination);
            }
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('upload/eventgallery', $filename);
            $data->image = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'thumbnail Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('home.event')->with($notification);
    }
    public function DeleteEventGallery($id)
    {
        $data = Eventgallery::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Event Gallery Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('event')->with($notification);
    }




    public function Deleteevents($id)
    {
        $data = Event::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Event Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('event')->with($notification);
    }
}
