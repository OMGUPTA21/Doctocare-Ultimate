@extends('Doctor.common.main')
@section('main-section')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Sale</p>
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Sale</p>
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Revenue</p>
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <!-- <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Worldwide Sales</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="worldwide-sales"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Salse & Revenue</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="salse-revenue"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Sales Chart End -->


    <!-- Pataiont table -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">New Pataient</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                            {{-- <th scope="col">no</th> --}}
                            <th scope="col">Pataient</th>
                            <th scope="col">Age</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Upload Prescription</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($app as $appointment)
                        @if ($appointment->status==0)
                        <tr>
                            <td>{{$appointment->patient_name}}</td>
                            <td>{{$appointment->age}}</td>
                            <td>{{$appointment->fees}}</td>
                            <td>
                                <form action="" method="POST">
                                    {{-- {{route('doctor.appointment.edit',['id' => $appointment->user_id])}} --}}
                                    @csrf
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" name="checked" class="form-check-input" id="exampleCheck1" value="1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Checked</button>
                                </form>
                            </td>
                        </tr>
                        @else
                            <tr>
                                <td>Sorry no data to show</td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                {{-- {{dd($appointment->status);}} --}}
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Pataient</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                            {{-- <th scope="col">no</th> --}}
                            <th scope="col">Pataient</th>
                            <th scope="col">Age</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Upload Prescription</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($app as $appointment)
                        @if ($appointment->status==1)
                        <tr>
                            <td>{{$appointment->patient_name}}</td>
                            <td>{{$appointment->age}}</td>
                            <td>{{$appointment->fees}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                {{-- {{dd($appointment->status);}} --}}
            </div>
        </div>
    </div>
    <!-- Pataiont table -->


    <!-- Widgets Start -->
    <div class="container mb-4">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-4 mt-4 ms-3">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calender</h6>
                        <a href="">Show All</a>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 mt-4 ms-3">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Schedule Time</h6>
                        <a href="">Show All</a>
                    </div>
                    <form action="{{url('/')}}/doctor/schedule/1" method="POST">
                        @csrf
                        <div class="d-flex mb-2">
                            <input class="form-control bg-dark border-0" name="schedule" type="text"
                                placeholder="Enter day start-end time">
                            <button type="submit" class="btn btn-primary ms-2">Add</button>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0" type="checkbox">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Widgets End -->
@endsection
