<div class="col-md-3 static">
    <div class="profile-card">
        @foreach($friend as $user)
            @if(isset($user->user_image))
                <img src="{{ $user->user_image }}" class="profile-photo" title="{{ $user->u_name }}" />
            @else
                <img src="{{ asset('assets/images/man-icon-2x.png') }}" title="{{ $user->u_name }}" class="profile-photo" />
            @endif
        @endforeach
        <h5><a href="{{ url('Timeline') }}" class="text-white" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a></h5>
    </div><!--profile card ends-->
    <ul class="nav-news-feed">
        <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Newsfeed')}}">My Newsfeed</a></div></li>
        <li><i class="icon ion-ios-people"></i><div><a href="{{ url('/Find-friends') }}">Find friends</a></div></li>
        <li><i class="icon ion-ios-people-outline"></i><div><a href="{{ url('/My-friends') }}">My Friends</a></div></li>
        <li><i class="icon ion-ios-people-outline"></i><div><a href="{{ url('/Show-request') }}">Request Friends <span style=" font-weight: bold; color: #43b424;">(
                        {{ App\Friends::where('accepted', 0)->where('friend_id', Auth::user()->id)->count() }} )</span>
                </a></div></li>
        <li><i class="icon ion-chatboxes"></i><div><a href="{{ url('/Chat') }}">Messages</a></div></li>
        <li><i class="icon ion-images"></i><div><a href="{{ url('/Image') }}">Images</a></div></li>
        <li><i class="icon ion-ios-videocam"></i><div><a href="{{ url('/Video') }}">Videos</a></div></li>
    </ul><!--news-feed links ends-->
    <div id="chat-block">
        <div class="title">Chat online</div>
        <ul class="online-users list-inline">
            <li><a href="{{ url('/Chat') }}" title="Linda Lohan"><img src="{{ asset('assets/images/users/user-2.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="{{ url('/Chat') }}" title="Sophia Lee"><img src="{{ asset('assets/images/users/user-3.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="{{ url('/Chat') }}" title="John Doe"><img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="{{ url('/Chat') }}" title="Alexis Clark"><img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="{{ url('/Chat') }}" title="James Carter"><img src="{{ asset('assets/images/users/user-6.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>

        </ul>
    </div><!--chat block ends-->
</div>