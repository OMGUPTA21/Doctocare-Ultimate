<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @stack('title')
    </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- dashboard css --}}
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="stylesheet" href="{{ url('userDashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('userDashboard/css/img.css') }}">
    <link rel="stylesheet" href="{{ url('userDashboard/css/carousel.css') }}">
    {{-- dashboard css --}}

    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="{{ url('landingPage/css/bootstrapCdn.css') }}">
    {{-- bootstrap cdn --}}


    {{-- login page css --}}

    {{-- <link rel="icon" type="image/png" href="{{url('login/images/icons/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/css/main.css')}}"> --}}

    {{-- login page css --}}

    {{-- navbar css js --}}
    <link rel="stylesheet" href="{{ url('userDashboard/css/navstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- navbar css js --}}

    {{-- doc_card_profile css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    {{-- doc_card_profile css --}}
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                DOCTOCARE
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                @if (Session::get('user'))
                    <span class="btn-text" style="color:#fff;">Welcome|{{ Session::get('user') }}</span>
                @endif

                <li>
                    <a href="{{ url('/home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/service') }}">Service</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>
                <li>
                    <a href="{{ url('/profile') }}">Profile</a>
                </li>
                <li>
                    <a href="{{ url('/category') }}">Book Appointment</a>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="POST" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>

            </ul>
            {{-- class="{{ Request::is('/home') ? 'btn active' : ''}}" --}}
        </nav>
    </header>
