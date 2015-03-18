<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

	public function index()
	{
	    $students = Student::all();

        return $students;
	}

}
