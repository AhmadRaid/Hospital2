<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $doctros=Doctor::all();
        return view('doctor.index');
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        Department::create($request->all());

        // Department::create([
        //     'name'=> $request->name,
        // ]);
        return redirect()->back()->with(['success' => 'the Department added successfully.']);

    }

    public function update()
    {

    }

    public function delete()
    {

    }}
