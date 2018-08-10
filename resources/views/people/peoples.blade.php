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

                <!-- Nearby People List
                ================================================= -->
                @foreach($Findfriend as $user)
                <div class="people-nearby">
                    <div class="nearby-user">
                        <form action="{{ url('/Send_request') }}" method="post" name="form1" id="form1">
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" id="field1" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="friend_id" id="field1" value="{{ $user->id  }}">
                            <input type="hidden" name="accepted"id="field1" value="0">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    @if(isset($user->user_image))
                                    <img src="{{ $user->user_image }}" class="profile-photo-lg" />
                                        @else
                                        <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="profile-photo-lg" />
                                        @endif
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h5><a href="{{ url('Friend-timeline/'.$user->u_id) }}" class="profile-link"> {{$user->u_name}} </a></h5>
                                    <p>{{ $user->university }}</p>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <?php
                                        $check = DB::table('friends')
                                        ->where('friend_id', '=', $user->id)
                                        ->where('user_id', '=', Auth::user()->id)
                                        ->first();
                                        if($check =='')
                                            {
                                        ?>
                                  <button class="btn btn-primary" type="submit">Add Friend</button>
                                    <?php } else { ?>
                                        <a class="btn btn-primary">Request send</a>
                                    <?php  }?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            @include('layouts.public.partials.right_newsfeed')
        </div>
    </div>
</div>

@endsection
