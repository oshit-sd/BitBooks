@extends('layouts.public.master_public')

@section('time_act', 'active')
@section('content')

    <div class="container">
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
        <!-- Timeline
        ================================================= -->
        <div class="timeline">
            @include('layouts.public.partials.confirm_timelines_head')
            <div id="page-contents">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">

                        <!-- Post Create Box
                        ================================================= -->
                    @include('layouts.public.partials.post')
                    <!-- Post Create Box End-->


                        <!-- Post Content
                        ================================================= -->
                        @foreach($myallstatus as $item)
                            <div class="post-content">
                                <!--Post Date-->
                                <div class="post-date hidden-xs hidden-sm">
                                    <h5>{{$item->u_name}}</h5>
                                    <p class="text-grey">Sometimes ago</p>
                                </div><!--Post Date End-->
                                <div class="post-container">
                                    @foreach($friend as $user)
                                        @if(isset($user->user_image))
                                            <img src="{{ $user->user_image }}" class="profile-photo-md pull-left" />
                                        @else
                                            <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="profile-photo-md pull-left" />
                                        @endif
                                    @endforeach
                                    <div class="post-detail">
                                        <div class="user-info">
                                            <h5><a href="{{url('/StFriend-timeline/'.$user->u_id) }}" class="profile-link">{{$item->u_name}}</a></h5>
                                            <p class="text-grey">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</p>
                                        </div>
                                        <div class="reaction">
                                            {{--<ul class="nav navbar-nav navbar-right main-menu">--}}
                                                {{--<li class="dropdown">--}}
                                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span><img src="{{ asset('assets/images/down-arrow.png')}}" alt="" /></span></a>--}}
                                                    {{--<ul class="dropdown-menu newsfeed-home" id="more">--}}
                                                        {{--<li><a href="{{ url('/Edit-post/'.$item->id.'/edit') }} ">Edit Post</a></li>--}}
                                                        {{--<li><a href="{{ url('/Edit-image/'.$item->id.'/image') }} ">Edit Image</a></li>--}}
                                                        {{--<li><a href="{{ url('/Delete-post/'.$item->id) }}">Delete</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        </div>
                                        <div class="line-divider"></div>
                                        <div class="post-text">
                                            <p>{{$item->status}}</p>
                                        </div>
                                        @if(isset($item->img))
                                            <img src="{{ $item->img }}" class="img-responsive post-image"/>
                                        @endif

                                        <div class="line-divider"></div>
                                        {{--@include('layouts.public.partials.post-comment')--}}
                                    </div>
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