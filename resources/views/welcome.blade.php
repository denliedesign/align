@extends('layouts.app')
@section('content')

    <!-- PHOTO CONTROL -->
    @can('update', \App\Photo::class)
        <div id="section-1-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">Section 1 Photo</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                    onClick="AddPhotoTag('section-1-photo');">
                Add New
            </button>
            @include('/photos/form')
        </div>
    @endcan
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="position: relative;">
        <div class="carousel-inner">
                    @foreach($photos as $photo)
                        @if($photo->tag == 'section-1-photo')
                    <div class="carousel-item active" data-bs-interval="3000">
                            <img src="{{ asset('/storage/' . $photo->image) }}" class="d-block w-100" alt="fitness">
                    </div>
                            @include('/photos/admin')
                        @endif
                    @endforeach

                <!-- END PHOTO CONTROL -->
            </div>
{{--            <div class="carousel-item" data-bs-interval="3000">--}}
{{--                <img src="/images/banner-2.jpg" class="d-block w-100" alt="fitness girl">--}}
{{--            </div>--}}

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        {{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
        {{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--            <span class="visually-hidden">Next</span>--}}
        {{--        </button>--}}
        <div id="txt-community" class="d-none d-md-block">
            COMMUNITY
        </div>
        <div id="bg-community" class="d-none d-md-block">
            COMMUNITY
        </div>
    </div>

    <div class="bg-pink-gradient">
        <div class="container">

            <!-- TEXT CONTROLLER -->
            @can('update', \App\Text::class)
                <div id="section-2-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">Section 2 Text</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                            onClick="AddTextTag('section-2-text');">
                        Create New
                    </button>
                    @include('/texts/modal')
                </div>
            @endcan
            @foreach($texts as $text)
                @if($text->textTag == 'section-2-text')
                    <div class="text-white text-center txt-lg">
                        {!! $text->content !!}
                        @include('/texts/admin')
                    </div>
            @endif
        @endforeach
            <!-- END TEXT CONTROLLER -->
{{--            <p class="text-white text-center txt-lg">--}}
{{--                Welcome to Align Boutique! Our store serves a community of movers... dancers, athletes, yogis, and those looking for athleisure wear will find their favorite brands locally in Friendswood at Align Boutique.--}}
{{--            </p>--}}
        </div>
    </div>
    <div style="position: relative;" class="mb-5 pb-5">
        <div class="custom-shape-divider-top-1656905030">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div class="container my-5" id="brand">
        <!-- PHOTO CONTROL -->
        @can('update', \App\Photo::class)
            <div id="section-3-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Section 3 Photo</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                        onClick="AddPhotoTag('section-3-photo');">
                    Add New
                </button>
                @include('/photos/form')
            </div>
        @endcan
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                @foreach($photos as $photo)
                    @if($photo->tag == 'section-3-photo')
                        <div class="m-0 p-0">
                            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="{{ asset('/storage/' . $photo->image) }}" alt="logo"></div></div>
                            @include('/photos/admin')
                        </div>
                    @endif
                @endforeach

            <!-- END PHOTO CONTROL -->
        </div>
    </div>

    <div class="geometric my-3">
        <div class="container">
            <div class="row">
                <div class="col-sm m-3 d-flex align-items-center justify-content-center">
                    <div>
                        <h2 class="quinn">Visit Our Store</h2>
                        <!-- TEXT CONTROLLER -->
                        @can('update', \App\Text::class)
                            <div id="section-4-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                                <span class="fw-bold mx-3">Section 4 Text</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                        onClick="AddTextTag('section-4-text');">
                                    Create New
                                </button>
                                @include('/texts/modal')
                            </div>
                        @endcan
                        @foreach($texts as $text)
                            @if($text->textTag == 'section-4-text')
                                <div>
                                    {!! $text->content !!}
                                    @include('/texts/admin')
                                </div>
                        @endif
                    @endforeach
                    <!-- END TEXT CONTROLLER -->
                    </div>
                </div>
                <div class="col-sm" style="position: relative;">
                    <!-- PHOTO CONTROL -->
                    @can('update', \App\Photo::class)
                        <div id="section-4-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">Section 4 Photo</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                                    onClick="AddPhotoTag('section-4-photo');">
                                Add New
                            </button>
                            @include('/photos/form')
                        </div>
                    @endcan
                    <div class="row mt-3">
                        @foreach($photos as $photo)
                            @if($photo->tag == 'section-4-photo')
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="dancer" class="img-fluid shadow rounded px-0" style="transform: scale(0.75);">
                                <div id="img-border"></div>
                                @include('/photos/admin')
                            @endif
                        @endforeach
                    </div>
                    <!-- END PHOTO CONTROL -->
                </div>
            </div>
        </div>
    </div>

@endsection
