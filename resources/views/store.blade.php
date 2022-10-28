@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="quinn text-center my-4">The Store</h2>
        <div class="row">
            <div class="col-sm-5 d-flex align-items-center">
                <!-- TEXT CONTROLLER -->
                <div>
                    @can('update', \App\Text::class)
                        <div id="store-section-1-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">Store Section 1 Text</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextTag('store-section-1-text');">
                                Create New
                            </button>
                            @include('/texts/modal')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->textTag == 'store-section-1-text')
                            <div class="mt-2">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach
                </div>
            <!-- END TEXT CONTROLLER -->
            </div>
            <div class="col-sm-7" style="position: relative;">
                <div>
                    <!-- PHOTO CONTROL -->
                    @can('update', \App\Photo::class)
                        <div id="store-section-1-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">Store Section 1 Photo</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                                    onClick="AddPhotoTag('store-section-1-photo');">
                                Add New
                            </button>
                            @include('/photos/form')
                        </div>
                    @endcan
                    @foreach($photos as $photo)
                        @if($photo->tag == 'store-section-1-photo')
                            <img src="{{ asset('/storage/' . $photo->image) }}" alt="store collage" class="img-fluid shadow rounded">
                            <div id="img-border-store"></div>
                        @include('/photos/admin')
                    @endif
                @endforeach
                <!-- END PHOTO CONTROL -->
                </div>

            </div>
        </div>
    </div>


    @include('divider')

    <div class="container">
        <h2 class="quinn text-center my-4">The Team</h2>
        <!-- TEXT CONTROLLER -->
        <div>
            @can('update', \App\Text::class)
                <div id="store-section-2-text" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">Store Section 2 Text</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                            onClick="AddTextTag('store-section-2-text');">
                        Create New
                    </button>
                    @include('/texts/modal')
                </div>
            @endcan
            @foreach($texts as $text)
                @if($text->textTag == 'store-section-2-text')
                    <div>
                        {!! $text->content !!}
                        @include('/texts/admin')
                    </div>
                @endif
            @endforeach
        </div>
        <!-- END TEXT CONTROLLER -->


        <!-- TEAM CONTROL -->
        @can('update', \App\Team::class)
            <div id="store-section-3-team" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Store Section 3 Team</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#teamModal"
                        onClick="AddTeamTag('store-section-3-team');">
                    Add New
                </button>
                @include('/teams/modal')
            </div>
        @endcan
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">


                    @foreach($teams as $team)
                        @if($team->teamTag == 'store-section-3-team')
                    <div class="col-sm my-1 p-4">
                        <div class="row">
                            <div style="line-height: 0.8; position: relative; z-index: 4;">{{ $team->name }} <br><span class="quinn-sm">{{ $team->title }}</span></div>
                            <div class="col-sm" style="position: relative;"><img src="{{ asset('/storage/' . $team->teamImage) }}" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                            <div class="col-sm txt-team mt-2">
                                {{ $team->bio }}
                            </div>
                            @include('/teams/admin')
                        </div>
                    </div>

                    @endif
                @endforeach
                <!-- END TEAM CONTROL -->

{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Shanika Williams <br><span class="quinn-sm">Assistant Store Manager</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-shanika.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Shanika is a Drill Team Dance Mom herself and has been in the shoes of many of our customers. She brings with her, years of experience in customer service and store management from Mac Cosmetics. Shanika's attention to detail and passion for helping our customers find exactly what they're looking for makes her the perfect fit.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Tanner Sapaugh <br><span class="quinn-sm">Store Associate</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-tanner.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Tanner is a lifelong dancer and is looking forward to pairing her passion for dance with her love of people! Tanner is in her third year dancing with local semi-professional company, Friendswood Contemporary Ballet. She has 7 younger siblings and is wonderful with children and has years of experience finding the right fit for every dancer.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Christen Hellman <br><span class="quinn-sm">Director of Operations</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-christen.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Christen dances only for fun and in the privacy of her kitchen BUT has a strong passion for the local arts and has grown to know it well over the past 4 years. She has a degree in Journalism and has worked in Project Management and Communication throughout her entire career. Christen loves sharing about everything going on at the store. It's easy to talk about what you love and believe in!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Priscilla Wright <br><span class="quinn-sm">Store Associate</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-priscilla.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Priscilla joined our team in 2022 as an Associate and has proven to have a passion for people and our dance community. She is currently in school working towards a Bachelor's degree and works part time at the store.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Gaby Chacon <br><span class="quinn-sm">Seamstress</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-gaby.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Gaby is a third generation seamstress and has been a Dance Mom for over 10 years!  Gaby has a degree in graphic design, and a passion for the arts and crafts.  She has been sewing dance costumes since 2011, starting with her own dancer and later expanding to competitive groups and solo artists. Gaby is gifted at collaborating with dancers to ensure that their creativity and personality shines through in each design.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-1 p-4">--}}
{{--                <div class="row">--}}
{{--                    <div style="line-height: 0.8; position: relative; z-index: 4;">Melissa Juneau <br><span class="quinn-sm">Team/Group Sales</span></div>--}}
{{--                    <div class="col-sm" style="position: relative;"><img src="/images/team-melissa.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>--}}
{{--                    <div class="col-sm txt-team mt-2">--}}
{{--                        Melissa grew up dancing in the Friendswood area, starting at the age of three. After fifteen years of training, she went on to attend college at Sam Houston State University. After graduating in 2014, with a Bachelors of Fine Arts degree in Dance, she began dancing with the Psophonia Dance Company in Houston. Melissa is enthusiastic about retail and merchandising, having worked in the retail industry for years and is excited to be able to combine both of her passions at The Dance Boutique.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    @include('divider')

@endsection
