<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Track;

class TrackController extends Controller
{
    function index()
    {
     
        //  $tracks=DB::table('track')->get();

        $tracks=Track::all();
        
        return view('tracks.tracksData',compact("tracks"));
    }


    function view($id)
    {
      $track=Track::find($id);
      $courses =$track->courses;
      return view('tracks.trackData',compact("track" , "courses"));
    }

   

    function create()
    {
       return view('tracks.create');
    }

    function store( Request $request)
    { 
        $request->validate([
        'name' => 'required|unique|min:3',
        'coursesnumber' => 'required',
        'location' => 'required|unique',
        'type' => 'required',
        'phone' => 'required',
        'image' => 'required',

        
    ],[
        'name.unique'=>"this course name already exist",
        'name.min'=>"track course must be more than 3",
        'location.required'=>'Location is Required ' ,
        'location.unique'=>'This Location is already exist ' ,
        'coursesnumber.required'=>'you must input the Courses Number',
        'type.required'=>'Type is Required only dotnet or php ' ,
        'phone.required'=>'phone is Required ' ,
        'image.required'=>'Image is Required ' ,

    ]);
  
      $img = $request->file('image');
      $ext = $img->getClientOriginalExtension();
      $name = uniqid() . '.' . $ext;
      $img->move(public_path('uploads/tracks'), $name);


      Track::create([
       'name' => $request->name,
       'location' => $request->location,
       'coursesnumber' => $request->coursesnumber,
       'type' => $request->type,
       'image' => $name,
       'phone' => $request->phone,
      ]);
       return to_route('tracks.index');


    }
 
    function edit($id)
    {
       $track=Track::findOrFail($id);
       return view('tracks.update',compact("track"));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique|min:3',
            'coursesnumber' => 'required',
            'location' => 'required|unique',
            'type' => 'required',
            'phone' => 'required',
            'image' => 'required',

            
        ],[
            'name.unique'=>"this course name already exist",
            'name.min'=>"track course must be more than 3",
            'location.required'=>'Location is Required ' ,
            'location.unique'=>'This Location is already exist ' ,
            'coursesnumber.required'=>'you must input the Courses Number',
            'type.required'=>'Type is Required only dotnet or php ' ,
            'phone.required'=>'phone is Required ' ,
            'image.required'=>'Image is Required ' ,

        ]);
        $track = Track::findOrFail($id);
    
   
        if ($request->hasFile('image')) {
         
            if ($track->image) {
                $oldImagePath = public_path('uploads/tracks/' . $track->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $name = uniqid() . '.' . $ext;
            $img->move(public_path('uploads/tracks'), $name);
    
            $track->image = $name;
        }
        $track->update([
            'name' => $request->name,
            'location' => $request->location,
            'coursesnumber' => $request->coursesnumber,
            'type' => $request->type,
            'phone' => $request->phone,
        ]);
        $track->save();
    
        
        return redirect()->route('tracks.index');
    }
    

    public function destroy($id)
{
   
    $track = Track::findOrFail($id);
    if ($track->image) {
      
        $imagePath = public_path('uploads/tracks/' . $track->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    $track->delete();
    return redirect()->route('tracks.index')->with('success', 'Track deleted successfully');
}




      
     

}