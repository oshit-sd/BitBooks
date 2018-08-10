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
                            <li class="active"><i class="icon ion-ios-locked-outline"></i><a href="{{ url('/Change-password') }}">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">

                        <!-- Change Password
                        ================================================= -->
                        <div class="edit-profile-container">
                            <div class="block-title">
                                <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                                <div class="line"></div>
                            </div>
                            <div class="edit-block">
                                <form name="update-pass" id="education" class="form-inline">
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="my-password">Old password</label>
                                            <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label>New password</label>
                                            <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label>Confirm password</label>
                                            <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                                        </div>
                                    </div>
                                    <button class="btn btn-success">Update Password</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection