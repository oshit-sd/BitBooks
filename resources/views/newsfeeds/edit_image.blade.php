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
        #more li{
            list-style: none;
        }
    </style>
    <div id="page-contents">
        <div class="container">
            <div class="row">
                <!-- Newsfeed Common Side Bar Left
                ================================================= -->
                @include('layouts.public.partials.left_newsfeed')
                <div class="col-md-7">

                    <!-- Post Create Box
                    ================================================= -->
                @include('layouts.public.partials.post')
                <!-- Post Create Box End-->


                    <div class="post-content">
                        <form action="{{ url('/Edit-image/'.$status->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <img src="{{ asset($status->img)}}" class="img-responsive post-image"/>
                            <input type="file" name="img" id="img"><br>
                            <a href="/Newsfeed" class="btn " style="background-color: #398cb4; color: #fff;">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>

                        </form>
                    </div>

                    <!-- End Post Content-->


                </div>


                {{--@include('layouts.public.partials.right_newsfeed')--}}
            </div>
        </div>
    </div>
@endsection