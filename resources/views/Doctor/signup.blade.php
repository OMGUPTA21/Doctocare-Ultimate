<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{url('login/images/icons/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/css/main.css')}}">


    <title>Document</title>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{url('login/images/img-01.png')}}">
				</div>

				<form action="{{url('/')}}/doc/signup" method="POST" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title">
						Doctor Signup
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="cpass" placeholder="Conform Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Signup
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
                        Already have an account
						<a class="txt2" href="{{url('/doctor_login')}}">
                            Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>



		</div>
	</div>


{{-- login page js --}}
<script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('login/vendor/select2/select2.min.js')}}"></script>
<script src="{{url('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script src="{{url('login/js/main.js')}}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })

</script>
{{-- login page js --}}
</body>
</html>
