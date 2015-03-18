<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

	public function index()
	{
	    $students = Student::all();

        return view('students', compact('students'));
	}

    public function show($name)
    {
        $student =  Student::where('first_name', $name)->first();
        if(null == $student) {
            abort(404);
        }

        return view('student', compact('student'));
    }

}
