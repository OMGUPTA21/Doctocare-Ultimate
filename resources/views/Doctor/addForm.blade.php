@extends('Doctor.common.main')
@section('main-section')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Doctors Registration Form</h6>
                <form action="{{ url('/') }}/register/5" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                            else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Work Experience</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="experience">
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect"name="category_id"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            @foreach ($category as $cat)
                            <option value="{{$cat->id}}">{{ $cat->category_name }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Select Your Category</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Your Profile Photo</label>
                        <input class="form-control bg-dark" type="file" id="formFile"name="profile_photo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Addhar Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="addhar_number">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Addhar Card</label>
                        <input class="form-control bg-dark" type="file" id="formFile" name="addhar_photo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Doctor lisence
                            Registration No</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="lisence_no">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Your Doctor lisence </label>
                        <input class="form-control bg-dark" type="file" id="formFile"name="lisence_photo">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Your Prescription photo </label>
                        <input class="form-control bg-dark" type="file" id="formFile" name="prescription">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fees</span>
                        <input type="text" class="form-control"
                            aria-label="Amount (to the nearest dollar)" name="fees">
                        <span class="input-group-text">.00</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>


    </div>
    <!-- Form End -->
@endsection
