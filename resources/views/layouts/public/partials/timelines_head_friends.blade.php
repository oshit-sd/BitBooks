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
                        <li class="@yield('time_act')"><a href="{{ url('/Friend-timeline/'.$userinfo->u_id) }}">Timeline</a></li>
                        <li><a href="{{ url('/Friend-timeline-about/'.$userinfo->u_id) }}">About</a></li>
                        <li><a href="{{ url('/Friend-timeline-album/'.$userinfo->u_id)}}">Album</a></li>
                        {{--<li><a href="{{ url('/Friend-timeline-friends/'.$userinfo->u_id) }}">Friends</a></li>--}}
                    </ul>
                    <ul class="follow-me list-inline">
                        {{--<li>1,299 people following her</li>--}}
                        <div class="col-md-3 col-sm-3">
                            <form action="{{ url('/Send_request_timeline') }}" method="post" name="form1" id="form1">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="user_id" id="field1" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="friend_id" id="field1" value="{{ $userinfo->id  }}">
                                <input type="hidden" name="accepted"id="field1" value="0">
                            <?php
                            $check = DB::table('friends')
                                ->where('friend_id', '=', $userinfo->id)
                                ->where('user_id', '=', Auth::user()->id)
                                ->first();
                            if($check =='')
                            {
                            ?>
                            <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Add Friend</button>
                            <?php } else { ?>
                            <a class="btn btn-primary" style="margin-top: 10px;">Request send</a>
                            <?php  }?>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
        </div><!--Timeline Menu for Large Screens End-->
    </div>
@endforeach