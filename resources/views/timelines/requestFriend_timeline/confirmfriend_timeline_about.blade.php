@extends('layouts.public.master_public')

@section('time_act', 'active')
@section('content')

    <div class="container">
        <div class="timeline">
            <div class="timeline-cover">
                @include('layouts.public.partials.confirm_timelines_head')
            </div>
            <div id="page-contents">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">

                        <!-- About
                        ================================================= -->
                        @foreach($friend as $userinfo)
                            <div class="about-profile">
                                <div class="about-content-block">
                                    <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{$userinfo->u_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$userinfo->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth</td>
                                            <td>{{$userinfo->dob_day}}-{{$userinfo->dob_month}}-{{$userinfo->dob_year}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>{{$userinfo->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{$userinfo->my_city}}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>{{$userinfo->my_country}}</td>
                                        </tr>
                                        <tr>
                                            <td>About Me</td>
                                            <td>{{$userinfo->about_me}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="about-content-block">
                                    <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Your School </h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>School</td>
                                            <td>{{$userinfo->school}}</td>
                                        </tr>
                                        <tr>
                                            <td>From</td>
                                            <td>{{$userinfo->from_school}}</td>
                                        </tr>
                                        <tr>
                                            <td>To</td>
                                            <td>{{$userinfo->to_school}}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{$userinfo->description_school}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="about-content-block">
                                    <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Your College or University</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>University</td>
                                            <td>{{$userinfo->university}}</td>
                                        </tr>
                                        <tr>
                                            <td>From</td>
                                            <td>{{$userinfo->from_uni}}</td>
                                        </tr>
                                        <tr>
                                            <td>To</td>
                                            <td>{{$userinfo->to_uni}}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{$userinfo->description_uni}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="about-content-block">

                                    <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>
                                    <div class="organization">
                                        <img src="{{ asset('assets/images/envato.png')}}" alt="" class="pull-left img-org" />
                                        <div class="work-info">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Company</td>
                                                    <td>{{$userinfo->company}}</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>{{$userinfo->from_work}}</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>{{$userinfo->to_work}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>{{$userinfo->description_work}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-block">
                                    <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                                    <ul class="list-inline interests">
                                        <li><a>{{$userinfo->interest}}</a></li>
                                    </ul>
                                </div>
                                <div class="about-content-block">
                                    <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Language</h4>
                                    <ul>
                                        <li><a> {{ $userinfo->language}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection