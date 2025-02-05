<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\student;

class studentcontrollers extends Controller
{
   public function index(){
    return view('create');
   }
   public function store(Request $request){
    $request->validate([
     'name' => "required",
     'email' => "required|email|unique:students,studnet_email",
     'phone' => "required",
     'course' => "required",
     'db' => "required"

    ]);
    $student = new student;
    $student->studnet_name = $request->input('name');
    $student->studnet_email = $request->input('email');
    $student->studnet_phone = $request->input('phone');
    $student->studnet_course_enrolls = $request->input('course');
      $student->studnet_db = $request->input('db');

      $insert = $student->save();
      if($insert){
        return redirect('read')->with('success','data enserted');
      }
      else{
        return redirect('create')->with('fail','data not enserted');
      }
   }
   public function show(){
    $students = student::all();
    return view('read')->with('students' , $students);
   }

    public function destroy($id) {
        $user = student::find($id); 
        if ($user) {
            $user->delete(); 
            return redirect()->route('read')->with('success', 'Student deleted successfully');
        }
        return redirect()->route('read')->with('error', 'Student not found');
    
   }
   public function edit($id){
    // echo $id;
    $user = student::findorfail($id); 
    return view('edit',[
      'student' => $user
    ]);
    
   }
   public function update(Request $request,$id){
    $user = student::findorfail($id); 
    $request->validate([
      'name' => "required",
      'email' => "required",
      'phone' => "required",
      'course' => "required",
      'db' => "required"
 
     ]);
    //  $student = new student;
     $user->studnet_name = $request->input('name');
     $user->studnet_email = $request->input('email');
     $user->studnet_phone = $request->input('phone');
     $user->studnet_course_enrolls = $request->input('course');
       $user->studnet_db = $request->input('db');
 
       $insert = $user->save();
       if($insert){
         return redirect('read')->with('success','data update successfuly enserted');
       }
       else{
         return redirect('create')->with('fail','data not updated');
       }
   }

  public function trash(){
    $student = student::onlyTrashed()->get();

    return view('trash',compact('student'));
  }
    
  public function restore($id){
    // echo $id;
    $students = student::withTrashed()->find($id);
    $students->restore();
    return redirect('read')->with('success' ,'data restore successfuly');

  }
  // public function forceDelete($id){
  
  //   $student = student::withTrashed()->find($id);
  //   $student->forceDelete();
  //   return redirect( route('fordelete'))->with('success' , 'data was permenent deldted');


  // }
  // public function forceDelete($id){
  //   $student = student::withTrashed()->find($id);
  //   $student->forceDelete();
  //   return redirect(route('forcdelete'));

  // }
  public function forcedelete($id)
  {
      $student = Student::withTrashed()->find($id);  
  
      if (!$student) {
          return redirect()->route('trashdata')->with('error', 'Student not found.');
      }
  
      $student->forceDelete();  
      return redirect()->route('trashdata')->with('success', 'Student deleted permanently.');
  }
  

}
