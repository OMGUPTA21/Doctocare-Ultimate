<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- landing page css --}}
    <link rel="stylesheet" href="{{ url('landingPage/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('landingPage/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('landingPage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('landingPage/css/owl.theme.default.min.css') }}">

    {{-- landing page css --}}
    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="{{ url('landingPage/css/bootstrapCdn.css') }}">
    {{-- bootstrap cdn --}}
    <title>Document</title>
</head>

<body>

    <div class="container-fluid px-0 position-relative z-index-1">
        <div class="row justify-content-between align-items-center mx-0">
            <div class="col-lg-5 col-xl-4 offset-lg-1 my-5 px-5 px-md-0 text-center text-lg-start">
                <a href="{{ url('/doctor_login') }}">
                    <h5 class="h5 dark-text-gray-2">
                        Join Us
                    </h5>
                </a>
                <h1 class="h1 dark-text-color" style="margin-top: 35px">
                    Meet the Best Doctors
                </h1>
                <h4 class="h4 dark-text-color" style="margin-top: 35px">
                    We are always fully focused on helping your child and you
                </h4>
                <div class="cta" style="margin-top: 35px">
                    {{-- signup Button trigger modal --}}
                    @if (Session::get('user'))
                        <span class="btn-text">Welcome|{{ Session::get('user') }}</span>
                    @else
                        <button class="btn primary-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="btn-text">Signup</span>
                        </button>
                        {{-- signup Button trigger modal --}}

                        {{-- Button trigger modal --}}
                        <button class="btn primary-color btn-outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" style="margin-left: 10px">
                            <span class="btn-text dark-text-color text-center">Login</span>

                        </button>
                        {{-- Button trigger modal --}}
                    @endif
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 px-0">
                <img class="cover" src="{{ url('landingPage/img/hero-cover-1.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="light-background-color">
        <div class="container py-7 py-lg-10 position-relative">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 my-5 my-lg-0">
                    <div class="primary-color" style="height: 7px; width: 94px"></div>
                    <h2 class="h2 text-color" style="margin-top: 35px">
                        Our Department
                    </h2>
                    <p class="paragraph second-text-color" style="margin-top: 35px">
                        Problems trying to resolve the conflict between the two major realms of Classical physics:
                        Newtonian
                        mechanics
                    </p><a class="d-flex flex-row justify-content-start align-items-center" href="#"
                        style="margin-top: 35px"><span class="link primary-text-color">Learn More</span><i
                            class="bi bi-chevron-right icn-xs primary-text-color" style="margin-left: 10px"></i></a>
                </div>
                <div class="row col-lg-6">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="light-background-color accentued-drop-shadow" style="padding: 35px 40px">
                            <div class="faded-primary-color radius-10" style="padding: 22px 19px; width: 70px">
                                <img src="{{ url('landingPage/img/cool-icon-123.svg') }}" alt="">
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 20px">
                                Cancer Care
                            </h5>
                            <div class="danger-color" style="margin-top: 15px; height: 2px; width: 50px"></div>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                The gradual accumulation of information about
                            </p>
                        </div>
                        <div class="light-background-color accentued-drop-shadow"
                            style="margin-top: 24px; padding: 35px 40px">
                            <div class="faded-secondary-color-1 radius-10" style="padding: 22px 19px; width: 70px">
                                <img src="{{ url('landingPage/img/cool-icon-1525.svg') }}" alt="">
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 20px">
                                Online Appoinment
                            </h5>
                            <div class="danger-color" style="margin-top: 15px; height: 2px; width: 50px"></div>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                The gradual accumulation of information about
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center mt-4 mt-lg-0">
                        <div class="light-background-color accentued-drop-shadow" style="padding: 35px 40px">
                            <div class="faded-secondary-color-2 radius-10" style="padding: 22px 19px; width: 70px">
                                <img src="{{ url('landingPage/img/cool-icon-154851.svg') }}" alt="">
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 20px">
                                Book now
                            </h5>
                            <div class="danger-color" style="margin-top: 15px; height: 2px; width: 50px"></div>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                The gradual accumulation of information about
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="light-background-color">
        <div class="container py-7 py-lg-10 position-relative">
            <div class="row align-items-center justify-content-between">
                <div class="row col-lg-6">
                    <img src="{{ url('landingPage/img/thumb-concept-12.png') }}" alt="">
                </div>
                <div class="col-lg-5 my-5 my-lg-0">
                    <div class="primary-color" style="height: 7px; width: 94px"></div>
                    <h2 class="h2 text-color" style="margin-top: 35px">
                        Leading Medicine
                    </h2>
                    <p class="paragraph second-text-color" style="margin-top: 35px">
                        Problems trying to resolve the conflict between the two major realms of Classical physics:
                        Newtonian
                        mechanics
                    </p><a class="d-flex flex-row justify-content-start align-items-center" href="#"
                        style="margin-top: 35px"><span class="link primary-text-color">Learn More</span><i
                            class="bi bi-chevron-right icn-xs primary-text-color" style="margin-left: 10px"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="light-background-color">
        <div class="container py-7 py-lg-10 position-relative">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 my-5 my-lg-0">
                    <div class="primary-color" style="height: 7px; width: 94px"></div>
                    <h2 class="h2 text-color" style="margin-top: 35px">
                        Our Activity
                    </h2>
                    <p class="paragraph second-text-color" style="margin-top: 35px">
                        Problems trying to resolve the conflict between the two major realms of Classical physics:
                        Newtonian
                        mechanics
                    </p><a class="d-flex flex-row justify-content-start align-items-center" href="#"
                        style="margin-top: 35px"><span class="link primary-text-color">Learn More</span><i
                            class="bi bi-chevron-right icn-xs primary-text-color" style="margin-left: 10px"></i></a>
                </div>
                <div class="row col-lg-6">
                    <div class="text-center radius-20 position-relative overflow-hidden px-0"
                        style="height: 440px; width: 100%">
                        <div class="media bg-cover">
                            <img class="cover"
                                src="{{ url('landingPage/img/features-11-video-thumb.jpg') }}" alt="">
                            <div class="filter gradient-filter"></div>
                        </div><button
                            class="btn primary-color btn-circle btn-lg center-content-align position-absolute"><i
                                class="bi bi-play-fill icn-sm light-text-color"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="dark-background-color">
        <div class="container py-7 py-lg-10 position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="h6 primary-text-color">
                        Practice Advice
                    </h6>
                    <h3 class="h3 light-text-color" style="margin-top: 10px">
                        Our Doctors Specialize in you
                    </h3>
                    <p class="paragraph light-text-color" style="margin-top: 10px">
                        Problems trying to resolve the conflict between the two major realms of Classical physics:
                        Newtonian
                        mechanics
                    </p>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center mt-5 mt-md-7">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item light-background-color">
                        <div class="product-media position-relative" style="height: 300px">
                            <img class="zoom cover"
                                src="{{ url('landingPage/img/product-cover-124%20sec-.jpg') }}" alt="">
                            <div class="product-actions position-absolute d-flex justify-content-center w-100"
                                style="bottom: 20px">
                                <a class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#"><i class="bi bi-heart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-cart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-eye-fill icn-xs text-color"></i></a>
                            </div>
                            <div class="tag position-absolute rounded danger-color text-center"
                                style="padding: 5px 10px; left: 20px; top: 20px">
                                <h6 class="h6 light-text-color">
                                    Sale
                                </h6>
                            </div>
                        </div>
                        <div style="padding: 25px 25px 35px 25px">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row justify-content-start align-items-center">
                                    <a class="link secondary-text-color-1" href="#">Best dental surgeons</a>
                                </div>
                                <div class="dark-background-color radius-20 d-flex flex-row justify-content-start align-items-center"
                                    style="margin-left: 10px; padding: 5px 5px 5px 5px">
                                    <img src="{{ url('landingPage/img/emojione-star.svg') }}" alt=""><small
                                        class="small light-text-color" style="margin-left: 5px">4.9</small>
                                </div>
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 10px">
                                Cancer Care
                            </h5>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                We focus on ergonomics and meeting you where you work. It's only a keystroke away.
                            </p>
                            <div class="sales d-flex align-items-center" style="margin-top: 10px">
                                <i class="bi bi-download icn-xs second-text-color"></i>
                                <h6 class="h6 second-text-color" style="margin-left: 10px">
                                    15 Sales
                                </h6>
                            </div>
                            <div class="d-flex" style="margin-top: 10px; padding: 5px 0px">
                                <h5 class="h5 muted-text-color line-through">
                                    $16.48
                                </h5>
                                <h5 class="h5 secondary-text-color-1" style="margin-left: 5px">
                                    $6.48
                                </h5>
                            </div><button class="btn secondary-color-1 btn-round btn-outline btn-sm"
                                style="margin-top: 10px"><span class="btn-text">Learn More</span><img
                                    src="img/arrow-right.svg" alt="" style="margin-left: 10px"></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item light-background-color">
                        <div class="product-media position-relative" style="height: 300px">
                            <img class="zoom cover"
                                src="{{ url('landingPage/img/product-cover-125%20sec-.jpg') }}" alt="">
                            <div class="product-actions position-absolute d-flex justify-content-center w-100"
                                style="bottom: 20px">
                                <a class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#"><i class="bi bi-heart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-cart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-eye-fill icn-xs text-color"></i></a>
                            </div>
                            <div class="tag position-absolute rounded danger-color text-center"
                                style="padding: 5px 10px; left: 20px; top: 20px">
                                <h6 class="h6 light-text-color">
                                    Sale
                                </h6>
                            </div>
                        </div>
                        <div style="padding: 25px 25px 35px 25px">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row justify-content-start align-items-center">
                                    <a class="link secondary-text-color-1" href="#">Painless procedures</a>
                                </div>
                                <div class="dark-background-color radius-20 d-flex flex-row justify-content-start align-items-center"
                                    style="margin-left: 10px; padding: 5px 5px 5px 5px">
                                    <img src="{{ url('landingPage/img/emojione-star.svg') }}" alt=""><small
                                        class="small light-text-color" style="margin-left: 5px">4.9</small>
                                </div>
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 10px">
                                Health Queries
                            </h5>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                We focus on ergonomics and meeting you where you work. It's only a keystroke away.
                            </p>
                            <div class="sales d-flex align-items-center" style="margin-top: 10px">
                                <i class="bi bi-download icn-xs second-text-color"></i>
                                <h6 class="h6 second-text-color" style="margin-left: 10px">
                                    15 Sales
                                </h6>
                            </div>
                            <div class="d-flex" style="margin-top: 10px; padding: 5px 0px">
                                <h5 class="h5 muted-text-color line-through">
                                    $16.48
                                </h5>
                                <h5 class="h5 secondary-text-color-1" style="margin-left: 5px">
                                    $6.48
                                </h5>
                            </div><button class="btn secondary-color-1 btn-round btn-outline btn-sm"
                                style="margin-top: 10px"><span class="btn-text">Learn More</span><img
                                    src="img/arrow-right.svg" alt="" style="margin-left: 10px"></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-item light-background-color">
                        <div class="product-media position-relative" style="height: 300px">
                            <img class="zoom cover"
                                src="{{ url('landingPage/img/product-cover-126%20sec-.jpg') }}" alt="">
                            <div class="product-actions position-absolute d-flex justify-content-center w-100"
                                style="bottom: 20px">
                                <a class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#"><i class="bi bi-heart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-cart icn-xs text-color"></i></a><a
                                    class="d-block icn-circle circle-sm light-background-color light-background-color"
                                    href="#" style="margin-left: 10px"><i
                                        class="bi bi-eye-fill icn-xs text-color"></i></a>
                            </div>
                            <div class="tag position-absolute rounded danger-color text-center"
                                style="padding: 5px 10px; left: 20px; top: 20px">
                                <h6 class="h6 light-text-color">
                                    Sale
                                </h6>
                            </div>
                        </div>
                        <div style="padding: 25px 25px 35px 25px">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row justify-content-start align-items-center">
                                    <a class="link secondary-text-color-1" href="#">Book now</a>
                                </div>
                                <div class="dark-background-color radius-20 d-flex flex-row justify-content-start align-items-center"
                                    style="margin-left: 10px; padding: 5px 5px 5px 5px">
                                    <img src="{{ url('landingPage/img/emojione-star.svg') }}" alt=""><small
                                        class="small light-text-color" style="margin-left: 5px">4.9</small>
                                </div>
                            </div>
                            <h5 class="h5 text-color" style="margin-top: 10px">
                                Quick examination
                            </h5>
                            <p class="paragraph second-text-color" style="margin-top: 10px">
                                We focus on ergonomics and meeting you where you work. It's only a keystroke away.
                            </p>
                            <div class="sales d-flex align-items-center" style="margin-top: 10px">
                                <i class="bi bi-download icn-xs second-text-color"></i>
                                <h6 class="h6 second-text-color" style="margin-left: 10px">
                                    15 Sales
                                </h6>
                            </div>
                            <div class="d-flex" style="margin-top: 10px; padding: 5px 0px">
                                <h5 class="h5 muted-text-color line-through">
                                    $16.48
                                </h5>
                                <h5 class="h5 secondary-text-color-1" style="margin-left: 5px">
                                    $6.48
                                </h5>
                            </div><button class="btn secondary-color-1 btn-round btn-outline btn-sm"
                                style="margin-top: 10px"><span class="btn-text">Learn More</span><img
                                    src="img/arrow-right.svg" alt="" style="margin-left: 10px"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-background-color">
        <div class="container py-7 py-lg-10">
            <div class="row justify-content-center">
                <div class="text-center col-lg-6">
                    <h6 class="h6 primary-text-color text-center">
                        Newsletter
                    </h6>
                    <h2 class="h2 text-color text-center" style="margin-top: 10px">
                        JOIN US
                    </h2>
                    <p class="paragraph second-text-color text-center" style="margin-top: 10px">
                        Problems trying to resolve the conflict between the two major realms of Classical physics:
                        Newtonian
                        mechanics
                    </p>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center mt-5 mt-md-7">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="form-group">
                        <div class="input-group input-style-2 mb-2 mr-sm-2">
                            <input class="form-control" type="text" placeholder="Your Email">
                            <div class="input-group-append mt-2 mt-sm-0">
                                <button class="btn primary-color"><span>Subscribe</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Signup here</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/') }}/user/register">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Conform Password</label>
                                <input type="password" class="form-control" name="cpassword"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/') }}/user/login">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal --}}
    </section>

    <footer>
        <div class="position-relative dark-background-color">
            <div class="container py-5">
                <div class="row align-items-stretch">
                    <div class="col-lg-2 col-md-4 mb-5 mb-lg-0">
                        <h5 class="h5 light-text-color">
                            Company Info
                        </h5>
                        <div class="links" style="margin-top: 20px">
                            <a class="link d-block light-text-color" href="#">About Us</a><a <a
                                class="link d-block light-text-color" href="#" style="margin-top: 10px">Carrier</a>
                            <a class="link d-block light-text-color" href="#" style="margin-top: 10px">Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
                        <h5 class="h5 light-text-color">
                            Get In Touch
                        </h5>
                        <div class="links" style="margin-top: 20px">
                            <div class="feature-item d-flex align-items-center">
                                <i class="bi bi-telephone-fill icn-sm light-text-color"></i>
                                <h6 class="h6 light-text-color" style="margin-left: 10px">
                                    (480) 555-0103
                                </h6>
                            </div>
                            <div class="feature-item d-flex align-items-center" style="margin-top: 10px">
                                <i class="bi bi-geo-alt icn-sm light-text-color"></i>
                                <h6 class="h6 light-text-color" style="margin-left: 10px">
                                    Techno India Hooghly Campus
                                </h6>
                            </div>
                            <div class="feature-item d-flex align-items-center" style="margin-top: 10px">
                                <i class="bi bi-envelope-fill icn-sm light-text-color"></i>
                                <h6 class="h6 light-text-color" style="margin-left: 10px">
                                    doctocare@example.com
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative light-gray-1">
            <div class="container py-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 mb-4 mb-md-0">
                        <h6 class="h6 second-text-color">
                            Follow Doctocare on
                        </h6>
                    </div>
                    <div class="col-md-3 text-start text-md-center">
                        <div class="card-content py-2">
                            <a class="facebook" href="#"><i
                                    class="bi bi-facebook icn-sm primary-text-color"></i></a><a class="instagram"
                                href="#"><i class="bi bi-instagram icn-sm primary-text-color"
                                    style="margin-left: 20px"></i></a><a class="twitter" href="#"><i
                                    class="bi bi-twitter icn-sm primary-text-color" style="margin-left: 20px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
{{-- landing page js --}}
<script src="{{ url('landingPage/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('landingPage/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('landingPage/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('landingPage/js/tools.js') }}"></script>
{{-- landing page js --}}
{{-- bootstrap js cdn --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- bootstrap js cdn --}}

</html>
