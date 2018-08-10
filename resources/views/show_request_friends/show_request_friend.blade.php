@extends('layouts.public.master_public')
@section('content')
    <style>
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .iconnn {
            height: 20px;
            width: 20px;
        }
    </style>
    <div id="page-contents">
        <div class="container">
            <div class="row">
                @include('layouts.public.partials.left_newsfeed')
                <div class="col-md-7">

                    <!-- Post Create Box
                    ================================================= -->
                @include('layouts.public.partials.post')
                <!-- Post Create Box End -->

                    <!-- Friend List
                    ================================================= -->
                    <div class="friend-list" style=" color: #297db4">
                        <div class="row">
                            {{--@if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif--}}
                            {{--@if(isset($request))--}}
                                {{--<div class="alert alert-success">Nai kichu</div>--}}
                            {{--@endif--}}

                            @if ( session()->has('message'))
                                <p class="alert alert-success">
                                    {{session()->get('message')}}
                                </p>
                            @endif
                            @if ( session()->has('msg'))
                                <p class="alert alert-danger">
                                    {{session()->get('msg')}}
                                </p>
                            @endif
                        @foreach($RequestFriend as $req)

                            <div class="col-md-6 col-sm-6">

                                <div class="friend-card">
                                    @if(isset($req->user_coverphoto))
                                        <img src="{{ $req->user_coverphoto }}" height="120" width="300"/>
                                    @else
                                        <img src="{{ asset('assets/images/beauty-of-nature-17.jpg') }}" height="120" width="300"  />
                                    @endif
                                    <div class="card-info">
                                        @if(isset($req->user_image))
                                            <img src="{{ $req->user_image }}" class="profile-photo-lg" />
                                        @else
                                            <img src="{{ asset('assets/images/man-icon-2x.png') }}"  class="profile-photo-lg" />
                                        @endif
                                        <div class="friend-info">

                                            {{--Confirm friend--}}
                                            <input type="hidden" name="accepted" id="field1">
                                           <a href="{{ url('/confirmFriend/'.$req->id.'/'.$req->u_name) }}" class="pull-right btn btn-success btn-sm">
                                                Confirm
                                            </a>


                                            {{--Reject friend--}}
                                            <input type="hidden" name="accepted" id="field1">
                                            <a href="{{ url('/Reject/'.$req->id) }}" class="pull-right btn btn-danger btn-sm">
                                                Reject
                                            </a>


                                            <h5><a href="{{ url('/Confirm-Friend-timeline/'.$req->id) }}" class="profile-link">{{ $req->u_name }}</a></h5>
                                            <p>{{ $req->university }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('layouts.public.partials.right_newsfeed')
            </div>
        </div>
    </div>

@endsection