@extends('common.main')
@section('main-section')
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($category as $cat)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ url('uploads/category/' . $cat->cat_image) }}" alt="" hight="400px"
                                    width="700px" class="img-fluid">
                                <div class="card-body">
                                    <h3>{{ $cat->category_name }}</h3>
                                    <p class="card-text">
                                        {{ $cat->cat_description }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary text-dark btn-outline-secondary"><a
                                                    href="{{ url('/view_doctors/'.$cat->id) }}">View Doctors</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection
