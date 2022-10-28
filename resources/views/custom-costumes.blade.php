@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="quinn text-center my-4">Custom Costumes</h2>
        <div class="row mb-3">
            <div class="col-sm-5 d-flex align-items-center">
                <img src="/images/logo-custom-costumes.png" alt="custom costumes logo" class="img-fluid">
            </div>
            <div class="col-sm-7 d-flex align-items-center">

                <!-- TEXT CONTROLLER -->
                @can('update', \App\Text::class)
                    <div id="custom-section-1-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">Custom Section 1 Text</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                onClick="AddTextTag('custom-section-1-text');">
                            Create New
                        </button>
                        @include('/texts/modal')
                    </div>
                @endcan
                @foreach($texts as $text)
                    @if($text->textTag == 'custom-section-1-text')
                        <div class="px-2 txt-lg" style="border-left: 2px solid #6A4187">
                            {!! $text->content !!}
                            @include('/texts/admin')
                        </div>
                @endif
            @endforeach
            <!-- END TEXT CONTROLLER -->

{{--                <p class="px-2 txt-lg" style="border-left: 2px solid #6A4187">--}}
{{--                    Stand out on stage with an original creation by Gaby, designed with you in mind!  Each costume is tailored to you physically and artistically, to enhance each movement and let your personality shine.--}}
{{--                </p>--}}
            </div>
        </div>

        <!-- PHOTO CONTROL -->
        @can('update', \App\Photo::class)
            <div id="custom-section-2-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Custom Section 2 Photo</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                        onClick="AddPhotoTag('custom-section-2-photo');">
                    Add New
                </button>
                @include('/photos/form')
            </div>
        @endcan
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            @foreach($photos as $photo)
                @if($photo->tag == 'custom-section-2-photo')
                    <div class="col py-4"><img src="{{ asset('/storage/' . $photo->image) }}" alt="dancer in custom costume" class="img-fluid shadow rounded">@include('/photos/admin')</div>
            @endif
        @endforeach
        </div>
        <!-- END PHOTO CONTROL -->



{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">--}}
{{--            <div class="col py-4"><img src="/images/cc-1.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col py-4"><img src="/images/cc-2.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col py-4"><img src="/images/cc-3.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>--}}
{{--        </div>--}}

        <div class="d-flex justify-content-center my-4">
            <div class="btn btn-lg btn-violet text-white px-4 shadow rounded">
                <a href="https://calendly.com/thedanceboutiquefwd/custom-costumes?month=2021-12" target="_blank" class="text-white" style="text-decoration: none;">
                    <ion-icon name="calendar-outline"></ion-icon>
                    Book Consultation
                </a>
            </div>
        </div>


        <!-- PHOTO CONTROL -->
        @can('update', \App\Photo::class)
            <div id="custom-section-3-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Custom Section 3 Photo</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                        onClick="AddPhotoTag('custom-section-3-photo');">
                    Add New
                </button>
                @include('/photos/form')
            </div>
        @endcan
        <div class="row">
            <div class="col-sm-9">
                    @foreach($photos as $photo)
                        @if($photo->tag == 'custom-section-3-photo')
                        <img src="{{ asset('/storage/' . $photo->image) }}" alt="costume options" class="img-fluid">
                    @include('/photos/admin')
                        @endif
                    @endforeach
                <!-- END PHOTO CONTROL -->
            </div>
            <div class="col-sm-3">
                <div class="px-2 mt-5" style="font-size: 2.25em; color: gold;">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <div class="d-flex justify-content-center px-2 mt-2" style="border-left: 2px solid #6A4187">
                    <p class="txt-lg">
                        Every dancer is looking to showcase their talent at competition. Gaby was able to bring MY vision to life, giving me a sense of ownership and pride on stage.
                    </p>
                </div>
            </div>
        </div>


        <div class="row my-5">
            <div class="col-sm-4">
                <!-- PHOTO CONTROL -->
                @can('update', \App\Photo::class)
                    <div id="custom-section-4-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">Custom Section 4 Photo</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                                onClick="AddPhotoTag('custom-section-4-photo');">
                            Add New
                        </button>
                        @include('/photos/form')
                    </div>
                @endcan
                @foreach($photos as $photo)
                    @if($photo->tag == 'custom-section-4-photo')
                        <img src="{{ asset('/storage/' . $photo->image) }}" alt="gaby chacon" class="img-fluid shadow rounded">
                    @include('/photos/admin')
                @endif
            @endforeach
            <!-- END PHOTO CONTROL -->

            </div>
            <div class="col-sm-8">
                <!-- TEXT CONTROLLER -->
                @can('update', \App\Text::class)
                    <div id="custom-section-4-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">Custom Section 4 Text</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                onClick="AddTextTag('custom-section-4-text');">
                            Create New
                        </button>
                        @include('/texts/modal')
                    </div>
                @endcan
                @foreach($texts as $text)
                    @if($text->textTag == 'custom-section-4-text')
                        <div class="mt-2">
                            {!! $text->content !!}
                            @include('/texts/admin')
                        </div>
                @endif
            @endforeach
            <!-- END TEXT CONTROLLER -->
            </div>
        </div>

        <div class="mt-5 px-2" style="border-left: 2px solid #6A4187">
            <p class="txt-lg">
                “I was raised with a needle in one hand and a pencil in the other one.” –  Gaby Chacon
            </p>
        </div>

    </div>

    @include('divider')

@endsection
