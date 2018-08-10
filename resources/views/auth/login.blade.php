<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 13:46:22 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>BitBook-Login or Sign Up</title>

    <!-- Stylesheets
    ================================================= -->
    <link href="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/title.png')}}" class="img img-circle"/>
	</head>

<style>
  .navcolor{
    background-color: rgba(74,95,89,0.6);
  }
  .title{
    color: #ffffff;
  }
  .bitLogo{
    margin-top: 18px;
  }
  .logotxt{
      font-size: 28px;
    color: #fff;
  }
  .logog{
    margin-top: -10px;
  }
  .txtbox{
  }
  .submit{
    height: 25px;
  }

  .iconnn{
       color: #000;
     }
  .iconnn:hover{
    color: #5fb3ef;
  }
  .txt{
    font-size: 16px;
    color:#c1d5fb;
  }
  .img{
    height: 250px;
    width: 400px;
    background-image:url("{{asset('assets/images/theme.png')}}");
  }
  label.error{
      color: red;
      font-weight:  bold;
      font-size: 12px;

  }
  form-control.error{
      border: 1px solid #ff6356;
      background-color: #fff0fe;
  }
</style>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header-inverse navcolor">
      <nav class="navbar navbar-default navbar-fixed-top menu ">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header bitLogo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" >
              <i>
                <img src="{{ asset('assets/images/001_lg.png')}}" class="img-circle logog" height="36" width="36">
                <i  class="logotxt">BitBook</i>
              </i>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-right" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                <div class="form-group msg">
                    <label for="nj" class="title"></label><br>
                </div>
                <div class="form-group">
                  {!! Form::label('email', 'Email',  ['class' => 'title', ]) !!}<br>
                  <input id="email" type="email" class="form-control txtbox" placeholder="Enter email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                  {!! Form::label('password', 'Password',  ['class' => 'title', ]) !!}<br>
                  <input id="password" type="password" class="form-control txtbox" placeholder="Enter Password" name="password" required>
                </div>
                <div class="form-group">
                  <label for="password" class="title"></label><br>
                  <input type="submit" name="login" value="Log In" class="btn btn-group-xs btn-primary">
                </div>
                </form>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
        </div>
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<p class="txt">Bit Books is a social network site that can be used to connect people and helps you connect and share with the people in your life.</p>
              <div class="img"></div>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                  <li><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                    @if ($errors->has('password') or $errors->has('email'))
                        <span class="help-block">
                            {{--<div class="alert alert-danger"> <strong>  Opps!! </strong>  {{'Wrong email or password' }}</div>--}}
                            <div class="alert alert-danger">{{ $errors->first('email') }} <br> {{ $errors->first('password') }}</div>
                        </span>
                    @endif

                  <h3>Create an account</h3>
                  <p>It's free and always will be.</p>
                  <!--Register Form-->
                        <form class="form-inline" id="registration_form" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                    {{--<div class="row">
                      <div class="form-group col-xs-6">
                        <label for="f_name" class="sr-only col-form-label">First Name</label>
                          <input id="name" type="text" class="form-control" name="name" placeholder="First name" required autofocus>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="l_name" class="sr-only">Last Name</label>
                          <input id="l_name" type="text" class="form-control" name="l_name" placeholder="Last name" required autofocus>
                      </div>
                    </div>--}}
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Full Name</label>
                          <input id="name" type="text" class="form-control" name="name" placeholder="Full name" required autofocus>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Enter password" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="con_password" class="sr-only">Confirm Password</label>
                          <input id="password-confirm" type="password" class="form-control"placeholder="Confirm password" name="password_confirmation" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Sign Up Now
                    </button>

              </form><!--Register Now Form Ends-->
                </div><!--Registration Form Contents Ends-->





                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>

                  <!--Login Form-->
                    <form  role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="row">
                      <div class="form-group col-xs-12">
                          {!! Form::label('email', 'Email',  ['class' => 'sr-only', ]) !!}
                        <input id="email" class="form-control input-group-lg" required="required" type="text" name="email" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                          {!! Form::label('password', 'Password',  ['class' => 'sr-only', ]) !!}
                        <input id="my-password" class="form-control input-group-lg"required="required" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div><!--Login Form Ends-->
                  <input type="submit" name="login" value="Log In" class="btn btn-group-xs btn-primary">
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
  {{--  <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>--}}

    <!-- Scripts
    ================================================= -->
    <script src="{{ asset('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.incremental-counter.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>

    <script src="{{ asset('assets/js/validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/validation/form_validation_signup.js')}}"></script>
	</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 13:46:26 GMT -->
</html>
