@extends('layouts.public.master_public')

@section('time_act', 'active')
@section('content')

    <div class="container">
        <div class="timeline">
            <div class="timeline-cover">
                @include('layouts.public.partials.timeline_head')
            </div>
            <div id="page-contents">
                <div class="row">
                    <div class="col-md-3">
                        <!--Edit Profile Menu-->
                        <ul class="edit-menu">
                            <li><i class="icon ion-ios-information-outline"></i><a href="{{ url('/Timeline-edit-profile') }}">Basic Information</a></li>
                            <li><i class="icon ion-ios-briefcase-outline"></i><a href="{{ url('/Timeline-edit-work') }}">Education and Work</a></li>
                            <li><i class="icon ion-ios-heart-outline"></i><a href="{{ url('/Timeline-edit-interest') }}">My Interests</a></li>
                            <li><i class="icon ion-ios-settings"></i><a href="{{ url('/Account-setting') }}">Account Settings</a></li>
                            <li><i class="icon ion-ios-locked-outline"></i><a href="{{ url('/Change-password') }}">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <br><br>
                        @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
                        <!-- Edit Interests
                        ================================================= -->
                        {!! Form::open(['url' => '/changeProfile' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <div class="edit-profile-container">
                            <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="u_name" value="{{ Auth::user()->name }}">
                            <input type="file" class="imgggg" name="user_image" src="">
                        </div><br>
                        <div>
                            <button type="submit" class="btn btn-success">Change</button>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection