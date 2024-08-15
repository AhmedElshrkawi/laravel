<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrackController;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    return view('home');
});
Route::get('/users',function()
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];

return view('usersData',["users"=>$users]);
});

Route::get('/userView/{id}',function($id)
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];
   return view('userView',["user"=>$users[$id]]);
});



 
 Route::get('/tracks',[TrackController::class,'index'])->name('tracks.index');
 Route::get('/tracks/{id}',[TrackController::class,'view'])->name('tracks.view');

Route::delete('/tracks/{id}', [TrackController::class, 'destroy'])->name('tracks.destroy');

Route::post('/tracks/store',[TrackController::class,'store'])->name('tracks.store');

Route::get('/tracks/{id}/edit',[TrackController::class,'edit'])->name('tracks.edit');

Route::put('/tracks/{id}/update',[TrackController::class,'update'])->name('tracks.update');

Route::get('/tracks/{id}/create',[TrackController::class,'create'])->name('tracks.create');



Route::get('/students/{id}/create',[StudentController::class,'create'])->name('students.create');
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');

Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('students.edit');

Route::put('/students/{id}/update',[StudentController::class,'update'])->name('students.update');




Route::get('/courses/{id}/create',[CourseController::class,'create'])->name('courses.create');
Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
Route::get('/courses/{id}',[CourseController::class,'view'])->name('courses.view');
Route::delete('/courses/{id}',[CourseController::class,'destroy'])->name('courses.destroy');
Route::post('/courses/store',[CourseController::class,'store'])->name('courses.store');

Route::get('/courses/{id}/edit',[CourseController::class,'edit'])->name('courses.edit');

Route::put('/courses/{id}/update',[CourseController::class,'update'])->name('courses.update');
