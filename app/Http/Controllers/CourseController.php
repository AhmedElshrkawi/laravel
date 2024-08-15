<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Track;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::orderBy('id',"asc")->paginate(5);
        return view('courses.coursesData',compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create' , ['tracks' =>Track::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    function store( Request $request)
    {

       $request->validate([
           'name' => 'required|unique|min:3',
           'totalgrade' => 'required',
           'description' => 'required|min:50',
           'track_id' => 'required',
           
       ],[
        'name.unique'=>"this course name already exist",
        'name.min'=>"track course must be more than 3",
        'description.min'=>'this course description is short' ,
        'totalgrade.required'=>'you must input the total Grade'
    ]
);
    


     Course::create([
       'name' => $request->name,
       'description' => $request->description,
       'totalgrade' => $request->totalgrade,
       'track_id' => $request->track_id,
      ]);
      return to_route('courses.index');
    }
   

    /**
     * Display the specified resource.
     */

    
     function view($id)
     {
       $course=Course::findOrFail($id);
       return view('courses.courseData',compact("course"));
     }
 
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $course = Course::findOrFail($id);  
    $tracks = Track::all();             

    return view('courses.update', compact('course', 'tracks'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique|min:3',
            'totalgrade' => 'required',
            'description' => 'required|min:50',
            'track_id' => 'required',
            
        ],[
            'name.unique'=>"this course name already exist",
            'name.min'=>"track course must be more than 3",
            'description.min'=>'this course description is short' ,
            'totalgrade.required'=>'you must input the total Grade'
        ]);
    
        $Course =Course::findOrFail($id);
    
       
       
    
       
        $Course->update([
            'name' => $request->name,
            'description' => $request->description,
            'totalgrade' => $request->totalgrade,
            'track_id' => $request->track_id,
           
        ]);
    
       
        $Course->save();
    
        return redirect()->route('Courses.index');
    }

    
    public function destroy($id)
    {
        $course=Course::findOrFail($id);
         $course->delete();
         return to_route('courses.index');
    }

   
}
