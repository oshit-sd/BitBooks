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

                        <div class="post-content">
                            <div class="col-md-12">
                                <div class="col-md-3" style="background-color: #fff;">
                                       <h4 align="center">Left Sidebar</h4>
                                </div>

                                <div class="col-md-6"style="background-color: #fff;">
                                       <h4 align="center">Middle Sidebar</h4>
                                </div>

                                <div class="col-md-3" style="background-color: #fff;">
                                       <h4 align="center">Right Sidebar</h4>
                                </div>
                            </div>
                        </div>

                </div>


                @include('layouts.public.partials.right_newsfeed')
            </div>
        </div>
    </div>
    <script src> </script>
@endsection