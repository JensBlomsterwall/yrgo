<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SimpleController extends Controller {

	//
    public function index($string = '')
    {
        return view('from-controller')->withString($string);
    }

}
