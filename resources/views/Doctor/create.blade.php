@extends('layouts.main')

@section('content')

    <!-- add doctor form -->
    <div class="container">
        <div class="add-doctor p-5 mt-4 mb-4 rounded text-white" style="background-color: #203647">
            @if (Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="{{ route('doctor.store') }}" method="post">
                @csrf
                <div class="h3 mb-3" style="color: #ffc107">Add New Doctor</div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name"
                                name="name" />
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Birth Day</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Birth Day"
                                name="birthday" />
                            @error('birthday')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number"
                                name="phone" />
                            @error('phone')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address"
                                name="address" />
                            @error('address')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Select Department</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="department_id">
                                @foreach ($departments as $dep)
                                    <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="salary"
                                name="salary" />
                            @error('salary')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-outline-warning btn-lg fs-2 px-5">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
