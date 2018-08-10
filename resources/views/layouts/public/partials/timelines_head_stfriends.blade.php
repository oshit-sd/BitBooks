@foreach($friend as $userinfo)
    <div class="timeline-cover">
        <div style=" height: 360px; width: auto;" >
            <img src="{{ $userinfo->user_coverphoto }}" height="360" width="1030" alt=""  />
        </div>
        <!--Timeline Menu for Large Screens-->
        <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-info">
                        @if(isset($userinfo->user_image))
                            <img src="{{ $userinfo->user_image }}" alt="" class="img-responsive profile-photo" />
                        @else
                            <img src="{{ asset('assets/images/man-icon-2x.png') }}" alt="" class="img-responsive profile-photo" />
                        @endif
                        <h3>{{ $userinfo->u_name }}</h3>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="list-inline profile-menu">
                        <li class="@yield('time_act')"><a href="{{ url('/StFriend-timeline/'.$userinfo->u_id) }}">Timeline</a></li>
                        <li><a href="{{ url('/StFriend-timeline-about/'.$userinfo->u_id) }}">About</a></li>
                        <li><a href="{{ url('/StFriend-timeline-album/'.$userinfo->u_id)}}">Album</a></li>
                        {{--<li><a href="{{ url('/StFriend-timeline-friends/'.$userinfo->u_id) }}">Friends</a></li>--}}
                    </ul>
                    <ul class="follow-me list-inline">
                        {{--<li>1,299 people following her</li>--}}
                        {{--<div class="col-md-3 col-sm-3">--}}
                            {{--<a href="{{ url('/Unfriend/'.$userinfo->id) }}" style="margin-top: 10px;" class="pull-right btn btn-danger">Unfriend</a>--}}
                        {{--</div>--}}
                    </ul>
                </div>
            </div>
        </div><!--Timeline Menu for Large Screens End-->
    </div>
@endforeach