<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todo;

class TodoController extends Controller{

	public function index(){
		$data = Todo::all();
		return view('todo',compact('data'));
	}
}