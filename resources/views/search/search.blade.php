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
                    <div class="people-nearby">




                    </div>
                </div>
                {{--@include('layouts.public.partials.right_newsfeed')--}}
            </div>
        </div>
    </div>

@endsection

