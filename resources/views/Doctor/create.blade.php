<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"
                    >Home <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"
                    >Add Department <span class="sr-only">(current)</span></a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- add doctor form -->

<div class="container">
    <div class="add-doctor p-5 mt-4 mb-4 rounded" style="background-color: rgb(211, 212, 214);">
        <form action="{{route('doctor.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Full Name"
                    name="name"
                />
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Birth Day</label>
                <input
                    type="date"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Birth Day"
                    name="bithday"
                />
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone Number</label>
                <input
                    type="number"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Phone Number"
                    name="phone"
                />
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Address</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Address"
                    name="address"
                />
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2"
                >Example multiple select</label
                >
                <select
                    class="form-control"
                    id="exampleFormControlSelect2"
                    name="department_id"
                >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input
                    type="number"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="name@example.com"
                    name="salary"
                />
            </div>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg fs-2 px-5">Add</button>
            </div>

        </form>
    </div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
