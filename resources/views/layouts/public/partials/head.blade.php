<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 13:46:57 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>BitBook</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" />
    <link href="{{ asset('assets/css/emoji.css')}}" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/title.png')}}"/>
</head>
<style>
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
</style>
<body>

<!-- Header
================================================= -->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/Newsfeed')}}" title="Bitbook.com" >
                    <i>
                        <img src="{{ asset('assets/images/001_lg.png')}}" class="img-circle logog" height="36" width="36">
                        <i  class="logotxt">BitBook</i>
                    </i>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown"><a href="{{ url('/Newsfeed') }}">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" title="Notification" role="button" aria-haspopup="true" aria-expanded="false">
                         <?php
                           $data =  App\Notifications::where('status', 1)
                                ->where('friend_id', Auth::user()->id)->count();
                            ?>
                           <i class="fa fa-globe fa-2x"></i>
                             @if(isset($data) == $data)
                                 <span class="badge" style="background-color: red; position:relative; top: -15px; left: -10px;">
                                {{--{{ App\Notifications::where('status', 1)--}}
                                       {{--->where('friend_id', Auth::user()->id)->count()--}}
                                  {{--}}--}}
                                     {{ $data }}
                            </span>
                              @endif
                        </a>
                        <?php
                        $noti = DB::table('notifications')
                            ->leftJoin('informations', 'informations.u_id', '=', 'notifications.user_id')
                            ->where('friend_id', Auth::user()->id)
                            //->where('status', 1)
                            ->orderBy('notifications.id', 'desc')->limit(7)
                            ->get();
                        ?>
                        <ul class="dropdown-menu" role="menu">

                            @foreach($noti as $not)
                                @if($not->status==1)
                                    <li style=" background-color: #666; color: #bcc5d7">
                                @else
                                    <li style="">
                                        @endif
                                        <a href="{{ url('/Notifications/'.$not->u_id) }}" >
                                            <div class="row" style="width: 500px;">
                                                <div class="col-md-2" align="center">
                                                    @if(isset($not->user_image))
                                                        <img src="{{ $not->user_image }}" class="img-rounded" style="border: 1px solid #eee; background: #fff;  padding:5px; height: 50px; width: 50px;"  />
                                                    @else
                                                        <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="img-rounded" style="border: 1px solid #eee; background: #fff;  padding:5px; width: 50px;"/>
                                                    @endif
                                                </div>
                                                <div class="col-md-10">

                                                    <b style="color:#5ac89a;">{{ ucwords($not->u_name) }}</b> {{ $not->note }}

                                                    <br>
                                                    <small style="color: #bcc5d7;">
                                                        <i aria-hidden="true" style="color: #83aae3;" class="fa fa-users"></i>
                                                        {{ date('j-F-Y', strtotime($not->created_at)) }} at
                                                        {{ date('H: i', strtotime($not->created_at)) }}
                                                        {{--{{Carbon\Carbon::parse($not->created_at)->diffForHumans()}}--}}
                                                    </small>
                                                </div>
                                            </div></a>
                                    </li>
                                    @endforeach
                                <div style="height: 50px; line-height: 50px; text-align: center;">
                                <a href="{{ url('/SeeAllNoti/'.Auth::user()->name) }}" class="btn btn-success btn-xs">See more</a>
                                </div>
                        </ul>
                    <li class="dropdown"><a href="{{ url('/Contact') }}">Contact</a></li>
                    <li class="dropdown">
                        @foreach($friend as $user)
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                @if(isset($user->user_image))
                                    <img src="{{ $user->user_image }}"class="img-circle" style="height: 30px; width: 30px;" title="{{ $user->u_name }}"  />
                                @else
                                    <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="img-rounded" style="height: 30px; width: 30px;" />
                                @endif
                            @endforeach
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu login">
                            <li><a href="{{ url('/Timeline-edit-profile') }}">Edit Profile</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->