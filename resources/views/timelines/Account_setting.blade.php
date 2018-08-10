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
                            <li class="active"><i class="icon ion-ios-settings"></i><a href="{{ url('/Account-setting') }}">Account Settings</a></li>
                            <li><i class="icon ion-ios-locked-outline"></i><a href="{{ url('/Change-password') }}">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">

                        <!-- Profile Settings
                        ================================================= -->
                        <div class="edit-profile-container">
                            <div class="block-title">
                                <h4 class="grey"><i class="icon ion-ios-settings"></i>Account Settings</h4>
                                <div class="line"></div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                <div class="line"></div>
                            </div>
                            <div class="edit-block">
                                <div class="settings-block">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="switch-description">
                                                <div><strong>Enable follow me</strong></div>
                                                <p>Enable this if you want people to follow you</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="toggle-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="settings-block">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="switch-description">
                                                <div><strong>Send me notifications</strong></div>
                                                <p>Send me notification emails my friends like, share or message me</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="toggle-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="settings-block">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="switch-description">
                                                <div><strong>Text messages</strong></div>
                                                <p>Send me messages to my cell phone</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="toggle-switch">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="settings-block">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="switch-description">
                                                <div><strong>Enable tagging</strong></div>
                                                <p>Enable my friends to tag me on their posts</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="toggle-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="settings-block">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="switch-description">
                                                <div><strong>Enable sound</strong></div>
                                                <p>You'll hear notification sound when someone sends you a private message</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="toggle-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection