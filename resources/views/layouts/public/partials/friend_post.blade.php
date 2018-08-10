{!! Form::open(['url' => '/status' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{ csrf_field() }}
<div class="create-post">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="form-group">
                @foreach($friend as $user)
                    <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="u_name" value="{{ Auth::user()->name }}">
                    @if(isset($user->user_image))
                        <img src="{{ $user->user_image }}" class="profile-photo-md" />
                    @else
                        <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="profile-photo-md" />
                    @endif

                    <textarea name="status" id="exampleTextarea" cols="30" rows="1" class="form-control"
                              placeholder="Write what you wish"></textarea>
                @endforeach
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="tools">
                <ul class="publishing-tools list-inline">
                    {{--<li><a href="#"><i class="ion-compose"></i></a></li>--}}
                    <li><a>
                            <input type="file" name="img" id="img" class="inputfile"/>
                            <label for="img"><i class="ion-images"></i></label>
                        </a>Image
                    </li>
                    <li><a><i class="ion-ios-videocam"></i></a></li>Video
                </ul>
                <input type="submit" value="Post" class="btn btn-primary pull-right">
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
