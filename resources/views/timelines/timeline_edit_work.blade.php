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
                        <li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="{{ url('/Timeline-edit-work') }}">Education and Work</a></li>
                        <li><i class="icon ion-ios-heart-outline"></i><a href="{{ url('/Timeline-edit-interest') }}">My Interests</a></li>
                        <li><i class="icon ion-ios-settings"></i><a href="{{ url('/Account-setting') }}">Account Settings</a></li>
                        <li><i class="icon ion-ios-locked-outline"></i><a href="{{ url('/Change-password') }}">Change Password</a></li>
                    </ul>
                </div>
                <div class="col-md-7">

                    <!-- Edit Work and Education
                    ================================================= -->
                    <div class="edit-profile-container">
                        {!! Form::open(['url' => '/Timeline-edit-work' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                        <div class="block-title">
                            @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
                            <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                            <div class="line"></div>
                        </div>
                        <div class="edit-block">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{ csrf_field() }}
                            {{--<form name="education" id="education" class="form-inline">--}}
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                                        <label for="school">Your School</label>
                                        <input id="school" class="form-control input-group-lg" type="text" name="school" placeholder="Your School" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label for="from_school">From</label>
                                        <input id="from_school" class="form-control input-group-lg" type="text" name="from_school" title="Enter a Date" placeholder="from"/>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="to_school" class="">To</label>
                                        <input id="to_school" class="form-control input-group-lg" type="text" name="to_school" title="Enter a Date" placeholder="to" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="description_school">Description</label>
                                        <textarea id="description_school" name="description_school" class="form-control" placeholder="Some texts about your education" rows="4" cols="400"></textarea>
                                    </div>
                                </div>
                        </div>

                        <div class="block-title">
                            <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                            <div class="line"></div>
                        </div>
                        <div class="edit-block">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="university">Your university or College</label>
                                        <input id="university" class="form-control input-group-lg" type="text" name="university" placeholder="Your University or College" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label for="from_uni">From</label>
                                        <input id="from_uni" class="form-control input-group-lg" type="text" name="from_uni" title="Enter a Date" placeholder="from"/>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="to_uni" class="">To</label>
                                        <input id="to_uni" class="form-control input-group-lg" type="text" name="to_uni" title="Enter a Date" placeholder="to" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="description_uni">Description</label>
                                        <textarea id="description_uni" name="description_uni" class="form-control" placeholder="Some texts about your education" rows="4" cols="400"></textarea>
                                    </div>
                                </div>
                        </div>


                        <div class="block-title">
                            <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                            <div class="line"></div>
                        </div>
                        <div class="edit-block">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="company">Company</label>
                                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="designation">Designation</label>
                                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label for="from_work">From</label>
                                        <input id="from_work" class="form-control input-group-lg" type="text" name="from_work" title="Enter a Date" placeholder="from" />
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="to_work" class="">To</label>
                                        <input id="to_work" class="form-control input-group-lg" type="text" name="to_work" title="Enter a Date" placeholder="to" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="city_work">City/Town</label>
                                        <input id="city_work" class="form-control input-group-lg" type="text" name="city_work" title="Enter city" placeholder="Your city"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="description_work">Description</label>
                                        <textarea id="description_work" name="description_work" class="form-control" placeholder="Some texts about your work" rows="4" cols="400"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-success">Save Changes</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('layouts.public.partials.activity')
            </div>
        </div>
    </div>
</div>


@endsection