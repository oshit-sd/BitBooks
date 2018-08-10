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
        .menuu ul li{
            list-style: none;
        }
    </style>
    <div id="page-contents">
        <div class="container">
            <div class="row">
                @include('layouts.public.partials.left_newsfeed')
                <div class="col-md-7">
                    <div class="post-content">
                        <div class="post-container menuu">
                            {{--@if(isset(Auth::user()->id))--}}
                                {{--<div class="alert alert-success"> Ami </div>--}}
                            {{--@endif--}}
                            @foreach($note as $not)
                                {{--@elseif(isset($not))--}}
                                <ul>
                                    @if($not->status==1)
                                        <li style=" background-color:#dde7ef; color: #bcc5d7">
                                    @else
                                        <li style="">
                                            @endif
                                        <a href="{{ url('/Notifications/'.$not->u_id) }}">
                                            <div class="row" style="width: 500px;">
                                                <div class="col-md-2" >
                                                    @if(isset($not->user_image))
                                                        <img src="{{ $not->user_image }}" class="img-rounded" style="border: 1px solid #eee; background: #fff;  padding:5px; height: 50px; width: 50px;"  />
                                                    @else
                                                        <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="img-rounded" style="border: 1px solid #eee; background: #fff;  padding:5px; width: 50px;"/>
                                                    @endif
                                                </div>
                                                <div class="col-md-10">

                                                    <b style="color:#45af28; font-weight: bold; font-size:16px;">{{ ucwords($not->u_name) }}</b> {{ $not->note }}

                                                    <br>
                                                    <small style="color: #bcc5d7;">
                                                        <i aria-hidden="true" style="color: #83aae3;" class="fa fa-users"></i>
                                                        {{ date('j-F-Y', strtotime($not->created_at)) }} at
                                                        {{ date('H: i', strtotime($not->created_at)) }}
                                                        {{--{{Carbon\Carbon::parse($not->created_at)->diffForHumans()}}--}}
                                                    </small>
                                                </div>
                                            </div></a><br><div class="line-divider"></div>
                                    </li>
                                </ul>
                                {{--@endif--}}
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('layouts.public.partials.right_newsfeed')
            </div>
        </div>
    </div>

@endsection