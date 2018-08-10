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
                            <li class="active"><i class="icon ion-ios-heart-outline"></i><a href="{{ url('/Timeline-edit-interest') }}">My Interests</a></li>
                            <li><i class="icon ion-ios-settings"></i><a href="{{ url('/Account-setting') }}">Account Settings</a></li>
                            <li><i class="icon ion-ios-locked-outline"></i><a href="{{ url('/Change-password') }}">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">

                        <!-- Edit Interests
                        ================================================= -->
                        {!! Form::open(['url' => '/Timeline-edit-interest' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <div class="edit-profile-container">
                            <div class="block-title">
                                <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="u_name" value="{{ Auth::user()->name }}">
                                <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>My Interests</h4>
                                <div class="line"></div>
                            </div>
                            <div class="edit-block">
                                <ul class="list-inline interests">
                                    <li><a href="#"><i class="icon ion-android-bicycle"></i> Bycicle</a></li>
                                    <li><a href="#"><i class="icon ion-ios-camera"></i> Photgraphy</a></li>
                                    <li><a href="#"><i class="icon ion-android-cart"></i> Shopping</a></li>
                                    <li><a href="#"><i class="icon ion-android-plane"></i> Traveling</a></li>
                                    <li><a href="#"><i class="icon ion-android-restaurant"></i> Eating</a></li>
                                </ul>
                                <div class="line"></div>
                                <div class="row">
                                    @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
                                    <p class="custom-label"><strong>Add interests</strong></p>
                                    <div class="form-group col-sm-8">
                                        <input id="interest" class="form-control input-group-lg" type="text" name="interest" title="Choose Interest" placeholder="Interests. For example, photography"/>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <button class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection