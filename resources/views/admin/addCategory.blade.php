@extends('admin.common.main')
@section('main-containt')
    <!--<li class="nav-item">
                                <a class="nav-link text-white " href="../pages/sign-up.html">
                                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">assignment</i>
                                  </div>
                                  <span class="nav-link-text ms-1">Sign Up</span>-->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">

                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6 col-6">

                            </div>
                            <div class="col-md-6 col-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Add Category</h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn bg-gradient-dark mb-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Category
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('/') }}/category" method="POST"
                                                class=" col-12 m-auto " enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label">Category
                                                        Name</label>
                                                    <input type="text" name="category_name" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Category
                                                        Description</label>
                                                    <input type="text" name="cat_description" class="form-control">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <label class="form-label">Category
                                                        Image</label>
                                                    <input type="file" name="cat_image"
                                                        class="form-control btn btn-secondary text-dark"
                                                        id="inputGroupFile01">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal end -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3"><Canvas>Ctegorys</Canvas></h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Category ID
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category Name
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category
                                            Description
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Category Image
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($category as $cat)
                                    <tr>
                                            <div class="container">
                                                <div class="row">
                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center col-3">
                                                            <h6 class="mb-0 ms-5 text-sm">{{ $cat->id }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm font-weight-bold mb-0">{{ $cat->category_name }}
                                                        </p>
                                                    </td>
                                                    <div class="col-4">
                                                        <td>
                                                            <div class="d-flex flex-column justify-content-center  ">
                                                                <p class="mb-0 text-sm">{{ $cat->cat_description }}</p>
                                                            </div>
                                                        </td>
                                                    </div>

                                                </div>
                                            </div>
                                        </tr>
                                        @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
