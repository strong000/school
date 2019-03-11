<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{
	public function index()
	{
		$classrooms = Classroom::all();

		return view('classroom.index', compact('classrooms'));
	}	

	public function create()
	{
		return view('classroom.create');
	}

	public function save(Request $request)
	{
		Classroom::create([
				'class_name' => $request->class_name
			]);	

		return redirect()->route('classroom_index')->with('classroom', 'create');
	}

	public function delete(Request $request, $id)
	{
		$data = Classroom::find($id);
        $data->delete();
        return redirect()->route('classroom_index')->with('classroom','delete');
	}

	public function edit($id)
	{
		$classroom = Classroom::find($id);

		return view('classroom.edit', compact('classroom'));
	}

	public function update(Request $request, $id)
	{
		$data = classroom::find($id);
        $data->class_name = $request->class_name;
        $data->save();
        return redirect()->route('classroom_index')->with('classroom','edit');
	}
}
