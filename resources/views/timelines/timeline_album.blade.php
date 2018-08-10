@extends('layouts.public.master_public')

@section('time_act', 'active')
@section('content')

    <div class="container">
        <div class="timeline">
            <div class="timeline-cover">
                @include('layouts.public.partials.timeline_head')
            </div>
            <div id="page-contents">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">

                        <!-- Photo Album
                        ================================================= -->
                        <ul class="album-photos">
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                    <img src="{{ asset('assets/images/album/1.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/1.jpg')}}" alt="photo" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-2">
                                    <img src="{{ asset('assets/images/album/2.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-2" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/2.jpg')}}" alt="photo" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-3">
                                    <img src="{{ asset('assets/images/album/3.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-3" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/3.jpg')}}" alt="photo" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-4">
                                    <img src="{{ asset('assets/images/album/4.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-4" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/4.jpg')}}" alt="photo" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-5">
                                    <img src="{{ asset('assets/images/album/5.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-5" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/5.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-6">
                                    <img src="{{ asset('assets/images/album/6.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-6" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/6.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-7">
                                    <img src="{{ asset('assets/images/album/7.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-7" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/7.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-8">
                                    <img src="{{ asset('assets/images/album/8.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-8" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/8.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper" data-toggle="modal" data-target=".photo-9">
                                    <img src="{{ asset('assets/images/album/9.jpg')}}" alt="photo" />
                                </div>
                                <div class="modal fade photo-9" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/images/album/9.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @include('layouts.public.partials.activity')
                </div>
            </div>
        </div>
    </div>


@endsection