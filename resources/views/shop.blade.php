@extends('layouts.app')
@section('content')

    <!-- PHOTO CONTROL -->
    @can('update', \App\Photo::class)
        <div id="shop-section-1-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">Shop Section 1 Photo</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                    onClick="AddPhotoTag('shop-section-1-photo');">
                Add New
            </button>
            @include('/photos/form')
        </div>
    @endcan
    <div class="container">
        <div class="mx-md-5 px-md-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                @foreach($photos as $photo)
                    @if($photo->tag == 'shop-section-1-photo')
                        <div class="col py-4 d-flex justify-content-center"><a href="{{ $photo->link }}"><img style="max-height: 500px;" src="{{ asset('/storage/' . $photo->image) }}" class="img-fluid my-2" alt="shop"></a>@include('/photos/admin')</div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- END PHOTO CONTROL -->

        <!-- TEXT CONTROLLER -->
        @can('update', \App\Text::class)
            <div id="shop-section-2-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Shop Section 2 Text</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                        onClick="AddTextTag('shop-section-2-text');">
                    Create New
                </button>
                @include('/texts/modal')
            </div>
        @endcan
        @foreach($texts as $text)
            @if($text->textTag == 'shop-section-2-text')
                <div class="text-center my-4">
                    {!! $text->content !!}
                    @include('/texts/admin')
                </div>
        @endif
    @endforeach
    <!-- END TEXT CONTROLLER -->

{{--        <p class="text-center my-4">--}}
{{--            Want to officially partner with Align Boutique for your team or studio? Email us at <a href="mailto: teamsales@alignboutiquefriendswood.com">teamsales@alignboutiquefriendswood.com</a>--}}
{{--        </p>--}}
    </div>

    {{--    <div id="block-pink" class="my-5"></div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-9">--}}
    {{--                <img src="/images/store-collage.jpg" alt="store collage" class="img-fluid">--}}
    {{--            </div>--}}
    {{--            <div class="col-3">--}}
    {{--                <p>--}}
    {{--                    <br><strong>LOCATION</strong>--}}
    {{--                    <br>122 S. Friendswood Dr.--}}
    {{--                    <br>Friendswood TX, 77546--}}
    {{--                    <br>--}}
    {{--                    <br><strong>STORE HOURS</strong>--}}
    {{--                    <br>Monday - Friday - 11:00am - 7:00pm--}}
    {{--                    <br>Saturday - 10:00am - 4:00pm--}}
    {{--                    <br>Sunday - Closed--}}
    {{--                    <br>--}}
    {{--                    <br><strong>CONTACT</strong>--}}
    {{--                    <br>Call | 281-992-2166--}}
    {{--                    <br>email | thedanceboutiquefwd@gmail.com--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div id="block-pink" class="my-5"></div>--}}

@endsection
