<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return Student::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $student = new Student();
        $student->name = $request->userName;
        $student->phone = $request->phone;
        $student->email = $request->email;

        $student->save();
        return redirect()->back()->with("done", "Insert Done");
    }


    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
