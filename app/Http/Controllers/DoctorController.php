<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors=Doctor::all();
        return view('doctor.index', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('Doctor.create', compact('departments'));
    }

    public function store(ValidateRequest $request)
    {
        Doctor::create($request->all());

        // Doctor::create([
        //     'name'=> $request->name,
        //     'birthday'=> $request->bithday,
        //     'phone'=> $request->phone,
        //     'address'=> $request->address,
        //     'department_id'=> $request->department_id,
        //     'salary'=> $request->salary,
        // ]);
        return redirect()->back()->with(['success' => 'the Department added successfully.']);

    }

    public function edit($doctor_id)
    {
        if(! Doctor::find($doctor_id)){
            return redirect()->back();
        }

        $doctor = Doctor::find($doctor_id);
        $departments = Department::all();

        //$doctor = Doctor::find($id);
        return view('Doctor.edit', compact('doctor', 'departments'));
    }

    public function update(ValidateRequest $request, $doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        if(! $doctor){
            return redirect()->back();
        }
        $doctor->update($request->all());
        return redirect()->back()->with(['success'=>'updated successfully']);
    }

    public function delete($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        $doctor->delete();
        return redirect()->back()->with(['success'=> 'Deleted Successfully']);
    }
}
