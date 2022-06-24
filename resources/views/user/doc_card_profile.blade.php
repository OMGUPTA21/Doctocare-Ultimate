@extends('common.main')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3 ms-4">
            <div class="col-6 mt-5">
                <h1>We care about your safty</h1>
                <h4 class="mt-2">That's why we prefer best doctors for you and your family</h4>
                <div class="row">
                    <div class="col-12 mt-3">
                        <button type="button" class="btn btn-outline-info btn-lg">
                            <span class="btn-text">Register as a doctor</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ url('userDashboard/img/visitdoc.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 px-5 fw-normal">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nam eaque ab porro minima
                beatae saepe modi quam in debitis! Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iste, beatae culpa nemo fugiat dicta officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, consequuntur ad necessitatibus corporis aut magnam repellat mollitia ipsa harum quis.

            </div>
        </div>
        <hr>
        <h4 class="fw-bold text-center">DoctoCare serves 24x7</h4>
        <h6 class="fw-normal text-center">Lorem, ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit
            amet.</h6>


    </div>
    <div class="container mb-5  px-4 py-5">
        <div class="row g-4 py-5">
                @foreach ($doctor as $doc)
                <div class="col-md-4 ">
                    <div class="card rounded-3 shadow">
                        <img src="{{url('/uploads/doctor/profileimage/'.$doc->profile_photo)}}" class="card-img-top img-fluid zoom cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $doc->name }}</h5>
                            <p class="card-text">{{ $doc->email }}</p>
                            <a href="{{url('/profile/'.$doc->id.'/'.$doc->id)}}" class="btn btn-outline-success w-100">Check Profile</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        <div class="clearfix mt-5 ">
            <img src="{{ url('userDashboard/img/hospital.jpg') }}"
                class="col-md-6 float-md-end mb-3 ms-md-3 rounded img-fluid" alt="...">

            <p>
                A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding
                quite a few meaningless phrases here to demonstrate how the columns interact here with the floated
                image.
            </p>

            <p>
                As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look
                with some actual content in here, rather than just this boring placeholder text that goes on and on, but
                actually conveys no tangible information at. It simply takes up space and should not really be read.
            </p>

            <p>
                And yet, here you are, still persevering in reading this placeholder text, hoping for some more
                insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that
                here.
            </p>
        </div>

    </div>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Hanging icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="image/blood-transfusion.png" class="bi" width="30em" height="30em" alt="">
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-outline-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="image/blood-transfusion.png" class="bi" width="30em" height="30em" alt="">
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-outline-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="image/blood-transfusion.png" class="bi" width="30em" height="30em" alt="">
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-outline-primary">
                        Primary button
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
