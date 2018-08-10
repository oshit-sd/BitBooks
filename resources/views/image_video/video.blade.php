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
                    @include('layouts.public.partials.post')
                    <!-- Media
            ================================================= -->
                        <div class="media">
                            <div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                                <div class="grid-item col-md-6 col-sm-6">
                                    <div class="media-grid">
                                        <div class="img-wrapper" data-toggle="modal" data-target=".modal-2">
                                            <video controls>
                                                <source src="{{ asset('assets/videos/2.mp4')}}" type="{{ asset('assets/video/mp4')}}">
                                            </video>
                                        </div>
                                        <div class="media-info">
                                            <div class="reaction">
                                                <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 30</a>
                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 7</a>
                                            </div>
                                            <div class="user-info">
                                                <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                                                <div class="user">
                                                    <h6><a href="#" class="profile-link">John Doe</a></h6>
                                                    <a class="text-green" href="#">Friend</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Popup-->
                                        <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="post-content">
                                                        <video controls>
                                                            <source src="{{ asset('assets/videos/2.mp4')}}" type="{{ asset('assets/video/mp4')}}">
                                                        </video>
                                                        <div class="post-container">
                                                            <img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                                                            <div class="post-detail">
                                                                <div class="user-info">
                                                                    <h5><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                                                    <p class="text-muted">Published a photo about 3 mins ago</p>
                                                                </div>
                                                                <div class="reaction">
                                                                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                                                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <input type="text" class="form-control" placeholder="Post a comment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Popup End-->

                                    </div>
                                </div>
                                <div class="grid-item col-md-6 col-sm-6">
                                    <div class="media-grid">
                                        <div class="img-wrapper" data-toggle="modal" data-target=".modal-3">
                                            <video controls>
                                                <source src="{{ asset('assets/videos/4.mp4')}}" type="video/mp4')}}">
                                            </video>
                                        </div>
                                        <div class="media-info">
                                            <div class="reaction">
                                                <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 233</a>
                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 30</a>
                                            </div>
                                            <div class="user-info">
                                                <img src="{{ asset('assets/images/users/user-9.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                                                <div class="user">
                                                    <h6><a href="#" class="profile-link">Anna Young</a></h6>
                                                    <a class="text-green" href="#">Friend</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Popup-->
                                        <div class="modal fade modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="post-content">
                                                        <video controls>
                                                            <source src="{{ asset('assets/videos/4.mp4')}}" type="video/mp4')}}">
                                                        </video>
                                                        <div class="post-container">
                                                            <img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                                                            <div class="post-detail">
                                                                <div class="user-info">
                                                                    <h5><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                                                    <p class="text-muted">Published a photo about 3 mins ago</p>
                                                                </div>
                                                                <div class="reaction">
                                                                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                                                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <input type="text" class="form-control" placeholder="Post a comment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Popup End-->

                                    </div>
                                </div>
                                <div class="grid-item col-md-6 col-sm-6">
                                    <div class="media-grid">
                                        <div class="img-wrapper" data-toggle="modal" data-target=".modal-4">
                                            <video controls>
                                                <source src="{{ asset('assets/videos/5.mp4')}}" type="video/mp4')}}">
                                            </video>
                                        </div>
                                        <div class="media-info">
                                            <div class="reaction">
                                                <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 27</a>
                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                            </div>
                                            <div class="user-info">
                                                <img src="{{ asset('assets/images/users/user-2.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                                                <div class="user">
                                                    <h6><a href="#" class="profile-link">Linda Lohan</a></h6>
                                                    <a class="text-green" href="#">Friend</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Popup-->
                                        <div class="modal fade modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="post-content">
                                                        <video controls>
                                                            <source src="{{ asset('assets/videos/5.mp4')}}" type="video/mp4')}}">
                                                        </video>
                                                        <div class="post-container">
                                                            <img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                                                            <div class="post-detail">
                                                                <div class="user-info">
                                                                    <h5><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                                                    <p class="text-muted">Published a photo about 3 mins ago</p>
                                                                </div>
                                                                <div class="reaction">
                                                                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                                                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <input type="text" class="form-control" placeholder="Post a comment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Popup End-->

                                    </div>
                                </div>
                                <div class="grid-item col-md-6 col-sm-6">
                                    <div class="media-grid">
                                        <div class="img-wrapper" data-toggle="modal" data-target=".modal-5">
                                            <video controls>
                                                <source src="{{ asset('assets/videos/6.mp4')}}" type="video/mp4')}}">
                                            </video>
                                        </div>
                                        <div class="media-info">
                                            <div class="reaction">
                                                <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 34</a>
                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                                            </div>
                                            <div class="user-info">
                                                <img src="{{ asset('assets/images/users/user-3.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                                                <div class="user">
                                                    <h6><a href="#" class="profile-link">Sophia Lee</a></h6>
                                                    <a class="text-green" href="#">Friend</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Popup-->
                                        <div class="modal fade modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="post-content">
                                                        <video controls>
                                                            <source src="{{ asset('assets/videos/6.mp4')}}" type="video/mp4')}}">
                                                        </video>
                                                        <div class="post-container">
                                                            <img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                                                            <div class="post-detail">
                                                                <div class="user-info">
                                                                    <h5><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                                                    <p class="text-muted">Published a photo about 3 mins ago</p>
                                                                </div>
                                                                <div class="reaction">
                                                                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                                                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                                                </div>
                                                                <div class="line-divider"></div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                                </div>
                                                                <div class="post-comment">
                                                                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                                                                    <input type="text" class="form-control" placeholder="Post a comment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Popup End-->

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                @include('layouts.public.partials.right_newsfeed')
            </div>
        </div>
    </div>

@endsection