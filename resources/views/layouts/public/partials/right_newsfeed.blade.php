<div class="col-md-2 static">
    <div class="suggestions" id="sticky-sidebar">
        <h4 class="grey" style=" text-align: center;">Quick Access</h4>
        {{--<div class="follow-user">--}}
            {{--<img src="images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />--}}
            {{--<div>--}}
                {{--<h5><a href="timeline.html">Diana Amber</a></h5>--}}
                {{--<a href="#" class="text-green">Add friend</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="follow-user">
            <div>
               <span style="color: #31d10d;"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Timeline') }}">Timeline</a>
            </div>
        </div>
        <div class="follow-user">
            <div>
                <span style="color: #2050d1;"><i class="fa fa-eye  fa-lg" aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Timeline-about') }}">About You</a>
            </div>
        </div>
        <div class="follow-user">
            <div>
                <span style="color: #d1596f;"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Timeline-edit-profile') }}">Edit:Basic Info</a>
            </div>
        </div>
        <div class="follow-user">
            <div>
                <span style="color: #d1596f;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Timeline-edit-work') }}">Edit Work</a>
            </div>
        </div>
        <div class="follow-user">
            <div>
                <span style="color: #d1596f;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Timeline-edit-interest') }}">Edit Interest</a>
            </div>
        </div>
        <div class="follow-user">
            <div>
                <span style="color: #d1c18a;"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></span> &nbsp;
                <a href="{{ url('/Contact') }}">Contact Us</a>
            </div>
        </div>

        {{--<div class="follow-user">--}}
            {{--<ul class="nav-news-feed">--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline') }}">Timeline</a></div></li>--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-about') }}">About You</a></div></li>--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-profile') }}">Edit:Basic Info</a></div></li>--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-work') }}">Edit Work</a></div></li>--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-interest') }}">Edit Interest</a></div></li>--}}
                {{--<li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Contact') }}">Contact Us</a></div></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
</div>