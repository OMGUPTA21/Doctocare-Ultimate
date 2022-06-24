@extends('common.main')
@section('main-section')
    <!-- home section start  -->
    <section class="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                        <img src="{{ url('uploads/doctor/profileimage/' . $doctor->profile_photo) }}"
                            class="rounded-circle border border-lg mw-100  " width="240" height="240" alt="profile img">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h1 class="text-danger text-uppercase fs-1 fw-bold">Doctor</h1>
                        <h2 class="fs-4">{{ $doctor->name }}</h2>
                        <p class="mt-4 text-muted">
                            Passionate doctor with extensive experience in internal medicine and hospital settings.
                            Adept in properly diagnosing and strategizing for the best patient treatment plans.
                            Empathetic and professional attitude, committed to providing patients with the best care
                            possible. Experienced in counseling patients on preventative care and positive lifestyle
                            changes. A strong leader who works well under pressure and with other medical
                            professionals.
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book an Appointment
                        </button>

                        <!-- modal start-->


                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Appointment form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                            <form
                                                action="{{ route('doctor.appointment', ['id' => $doctor->doctor_id, 'uid' =>2]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="mb-3">

                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="paitient name" aria-label="Username">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="age" class="form-control"
                                                        placeholder="paitient age" id="exampleInputEmail1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <input type="text" name="time" class="form-control"
                                                        aria-label="Text input with dropdown button">
                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                    {{-- <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>Visiting hours</li>
                                                    <li>Visiting hours</li>
                                                    <li>Visiting hours</li>
                                                </ul> --}}
                                                    {{-- @foreach ($schedule as $time)
                                                <option value="{{$time->timing}}">{{$time->timing}}</option>
                                                @endforeach --}}
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="fees"
                                                        placeholder="paitient age" value="{{ $doctor->fees }}">
                                                </div>

                                                <button type="submit" class="btn btn-danger col-12">Submit</button>
                                            </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->

    <!-- about sectijon start -->
    <section class="about bg-white py-3">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">
                            I'm a {{ $cat->category_name }}
                        </h3>
                        <p class="text-muted">
                            {{ $cat->cat_description }}
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">
                            My clinik address
                        </h3>
                        <p class="text-muted">
                            {{ $doctor->address }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="fact-item">
                                <h4>My contact number</h4>
                                <p class="text-muted">{{ $doctor->number }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
