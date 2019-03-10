<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
	public function index()
	{
		$teachers = Teacher::all();

		return view('teacher.index', compact('teachers'));
	}

	public function create()
	{
		return view('teacher.create');
	}

	public function save(Request $request)
	{
		Teacher::create([
				'name' => $request->name,
				'age' => $request->age,
				'address' => $request->address,
				'date_born' => $request->date_born,
			]);	

		return redirect()->route('teacher_index')->with('teacher', 'create');
	}

	public function delete(Request $request, $id)
	{
		$data = Teacher::find($id);
        $data->delete();
        return redirect()->route('teacher_index')->with('teacher','delete');
	}

	public function edit($id)
	{
		$teacher = Teacher::find($id);

		return view('teacher.edit', compact('teacher'));
	}

	public function update(Request $request, $id)
	{
		$data = teacher::find($id);
        $data->name = $request->name;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->date_born = $request->date_born;
        $data->save();
        return redirect()->route('teacher_index')->with('teacher','edit');
	}
}