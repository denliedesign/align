<div class="container" id="footer">
    <div class="my-5">
        <h2 class="text-center my-3 quinn">Stay Social</h2>
        <div class="d-flex d-inline justify-content-center" id="stay-social">
            <div class="d-inline">
                <a class="nav-link" href="https://www.facebook.com/alignboutiquefwd" target="_blank">
                    <ion-icon class="txt-violet" name="logo-facebook"></ion-icon>
                </a>
            </div>
            <div class="d-inline">
                <a class="nav-link mx-4" href="https://www.instagram.com/alignboutiquefwd/" target="_blank">
                    <ion-icon class="txt-violet" name="logo-instagram"></ion-icon>
                </a>
            </div>
            <div class="d-inline">
                <a class="nav-link" href="mailto: info@alignboutiquefriendswood.com" target="_blank">
                    <ion-icon class="txt-violet" name="mail"></ion-icon>
                </a>
            </div>
        </div>


        <!-- PHOTO CONTROL -->
        @can('update', \App\Photo::class)
            <div id="section-5-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">Section 5 Photo</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                        onClick="AddPhotoTag('section-5-photo');">
                    Add New
                </button>
                @include('/photos/form')
            </div>
        @endcan
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 d-flex justify-content-center my-3">
            @foreach($photos as $photo)
                @if($photo->tag == 'section-5-photo')
                <div class="m-0 p-0">
                    <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="{{ asset('/storage/' . $photo->image) }}" alt="dancer" class="img-fluid"></a>
                    @include('/photos/admin')
                </div>
                @endif
            @endforeach
        </div>
        <!-- END PHOTO CONTROL -->

{{--        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 d-flex justify-content-center my-3">--}}
{{--            <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="/images/insta1.png" alt="dancer" class="img-fluid"></a>--}}
{{--            <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="/images/insta2.png" alt="dancer" class="img-fluid"></a>--}}
{{--            <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="/images/insta3.png" alt="dancer" class="img-fluid"></a>--}}
{{--            <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="/images/insta4.png" alt="dancer" class="img-fluid"></a>--}}
{{--            <a href="https://www.instagram.com/alignboutiquefwd/" target="_blank" class="mx-0 px-0 py-4 col d-flex justify-content-center"><img src="/images/insta5.png" alt="dancer" class="img-fluid"></a>--}}
{{--        </div>--}}

        {{--        <p class="text-center txt-sm">--}}
        {{--            Join our mailing list for exclusive offers, discounts, and for a glimpse at the latest in store.--}}
        {{--        </p>--}}
        {{--        <div class="d-flex justify-content-center">--}}
        {{--            <form class="d-flex form-inline">--}}
        {{--                --}}{{--                    <label for="email" class="txt-sm">Email</label>--}}
        {{--                <input type="email" name="email" id="email" class="form-control mx-3" placeholder="e-mail address">--}}
        {{--                <a href="#"><div class="btn btn-violet text-white px-4 shadow rounded">JOIN</div></a>--}}
        {{--            </form>--}}
        {{--        </div>--}}

        @include('mailerlite')
        {{--        <div class="text-center my-1" style="font-size: 0.75em;">--}}
        {{--            <p class="mb-0 pb-0">--}}
        {{--                Want to join our rockstar team at Align Boutique?--}}
        {{--            </p>--}}
        {{--            <a href="https://forms.gle/fFJtBKArgx8VqVqt9" target="_blank" class="txt-purple">Apply Now</a>--}}
        {{--        </div>--}}

    </div>
</div>

<div style="position: relative;" class="mt-5 pt-5">
    <div class="custom-shape-divider-bottom-1656906330">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<div class="bg-purple-gradient text-white" style="transform: translateY(-1px);">
    <div class="d-flex justify-content-center">
        <div class="mb-0 mt-4 mx-3 py-3 px-4 text-center bg-purple rounded shadow row" style="font-size: 0.75em; width: max-content;">
            <div class="col">Want to join our rockstar team at Align Boutique?</div>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="btn btn-violet text-white px-4 shadow rounded">
                    <a href="https://forms.gle/BdvzA8de33gAJfBG8" target="_blank" class="text-white" style="text-decoration: none;">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row txt-sm d-flex align-items-center">
            <div class="col-sm my-1">
                <img src="/images/logo-align-white.png" alt="align boutique logo" class="img-fluid" style="transform: scale(0.825);">
            </div>
            <div class="col-sm my-1">
                <strong>LOCATION</strong>
                <br>122 S. Friendswood Dr.
                <br>Friendswood TX, 77546
            </div>
            <div class="col-sm my-1">
                <strong>STORE HOURS</strong>
                <br>Monday - Friday - 11:00am - 7:00pm
                <br>Saturday - 10:00am - 4:00pm
                <br>Sunday - Closed
            </div>
            <div class="col-sm my-1">
                <strong>CONTACT</strong>
                <br>Call | 281-992-2166
                <br>email | info@alignboutiquefriendswood.com
            </div>
        </div>
    </div>
    <div>
        <p class="text-center pb-2 mb-0" style="opacity: 55%; font-size: 0.7em;">
            © 2022 Align Boutique
            &nbsp; &middot; &nbsp; <a href="https://denliedesign.com" target="_blank" style="text-decoration: none; color: white;">Dance Website Design by Denlie Design</a>
            &nbsp; &middot; &nbsp; <a href="/dashboard" target="_blank" style="text-decoration: none; color: white;">Admin</a>
        </p>
    </div>
</div>
