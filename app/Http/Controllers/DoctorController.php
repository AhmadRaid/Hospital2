<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;


class DoctorController extends Controller
{
    public function index()
    {
        $doctros=Doctor::all();
        return view('doctor.index');
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function store(Request $request)
    {

        Doctor::create([
            'name'=> $request->name,
            'birthday'=> $request->bithday,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'department_id'=> $request->department_id,
            'salary'=> $request->salary,
            33333
        ]);

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
