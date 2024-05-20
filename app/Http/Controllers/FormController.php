<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentForm;
use App\Models\Student;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class FormController extends Controller
{


public function create(){
    return view("form");
}

    function store_data(StudentForm $request)
    {
        $data = new Student; //send data though model (Student)


        //data assign and send to database

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->roll = $request->input('roll');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
       

        

        //image upload
        $imageName = time() . '.' . $request->image->extension();  
        $path = $request->image->storeAs('image', $imageName, 'public');
        //save the data
        $data->image = $path;
        $data->save();
        session()->flash('message', 'Successfully Saved!');
        // return back(); // after input data it will redirect same page
        return redirect()->route("students.index");
    }
    // data showing in a a table

    function index()
    {

        $records = Student::all(); //data fetch by model


        return view('records', compact('records'));
    }

    // DELETE DATA from table


    // function delete_record($id)
    // {
    //     student::destroy($id);
        
    //     session()->flash('message', 'Succesfully Deleted!');
    //     return back();
    // }


    function delete_record($id)
{
    $student = Student::findOrFail($id);

    // Delete the image from storage
    if ($student->image) { 
        Storage::disk('public')->delete($student->image);
        
    }






    $student->delete(); // Delete the student record

    session()->flash('message', 'Deleted successfully!');
    return back();
}

    // EDIT DATA from table 

    function edit_record($id)
    {

        $data = Student::find($id);
        return view('edit_form', compact('data'));
    }


    function update_data(StudentForm $request, $id)
    {

        $data = Student::find($id);

        if ($data->image) { 
            Storage::disk('public')->delete($data->image);
            
        }
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->roll = $request->input('roll');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->image = $request->input('image');
        
        $imageName = time() . '.' . $request->image->extension();  
        $path = $request->image->storeAs('image', $imageName, 'public');
        //save the data
        $data->image = $path;


        $data->save();


        return redirect()->route(("students.index"))->with("message", "Updated successfully");
    }
}
