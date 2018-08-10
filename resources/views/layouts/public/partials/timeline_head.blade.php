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
                    <p><a href="{{ url('/changeProfile') }}"> Change profile</a> | <a href="{{ url('/changeCover') }}">Change cover</a></p>
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="list-inline profile-menu">
                    <li class="@yield('time_act')"><a href="{{ url('/Timeline') }}">Timeline</a></li>
                    <li><a href="{{ url('/Timeline-about') }}">About</a></li>
                    <li><a href="{{ url('/Timeline-album') }}">Album</a></li>
                    <li><a href="{{ url('/Timeline-edit-profile') }}">Edit Profile</a></li>
                </ul>
                <ul class="follow-me list-inline">
                    {{--<li>1,299 people following her</li>--}}
                    {{--<li><button class="btn-primary">Add Friend</button></li>--}}
                </ul>
            </div>
        </div>
    </div><!--Timeline Menu for Large Screens End-->
</div>
    @endforeach