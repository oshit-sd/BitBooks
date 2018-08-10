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
            @include('layouts.public.partials.timelines_head_myfriends')
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
                                    <p class="text-grey">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</p>
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
                                            <h5><a href="{{ url('/StFriend-timeline/'.$item->u_id) }}" class="profile-link">{{$item->u_name}}</a></h5>
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
                                        <div style="height: 38px;">
                                            <div style="width: 120px; float: left;">
                                                <form action="{{ url('/myFriendLikes/'.$item->u_id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" value="1" name="like">
                                                    <input type="hidden" value="0" name="unlike">
                                                    <input type="hidden" value="{{Auth::user()->id}}" name="u_id">
                                                    <input type="hidden" value="{{ $item->id }}" name="status_id">
                                                    <input type="submit" name="submit" id="submit" class="inputfile"/>
                                                    <label for="submit" class="btn text-green" type="submit"><i class="icon ion-thumbsup"></i>&nbsp; Like
                                                        &nbsp; <span style=" font-weight: bold; color: #43b424;">{{ App\Likes::where('status_id', $item->id)->count() }}</span></i></a>
                                                    </label>
                                                </form>
                                            </div>

                                            {{--<div style="width: 120px; float: left;">--}}
                                            {{--<form action="{{ url('/Unikes') }}" method="post">--}}
                                            {{--{{ csrf_field() }}--}}
                                            {{--<input type="hidden" value="1" name="unlike">--}}
                                            {{--<input type="submit" name="submit" id="submit" class="inputfile"/>--}}
                                            {{--<label for="submit"  class="btn text-red" style="float: left;"><i class="fa fa-thumbs-down"></i>&nbsp; Unlike--}}
                                            {{--&nbsp; <span style=" font-weight: bold; ">{{ App\Likes::where('status_id', $item->id)->count() }}</span></i></a>--}}
                                            {{--</label> &nbsp; &nbsp;--}}
                                            {{--</form>--}}
                                            {{--</div>--}}
                                            <div style="width: 120px; float: left;">
                                                <a href="{{ url('/MyFriendsComments/'.$item->id)  }}" class="btn text-black" style="float: left;">
                                                    <i class="fa fa-comments-o" aria-hidden="true">&nbsp; Comment
                                                        &nbsp; <span style=" font-weight: bold; ">{{ App\Comments::where('s_id', $item->id)->count() }}</span></i></a>
                                            </div>
                                        </div>
                                        <div class="line-divider"></div>
                                        @include('layouts.public.partials.myfriend_post-comment')
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