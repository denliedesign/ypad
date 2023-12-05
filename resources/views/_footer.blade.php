<div class="pt-5 pb-2 text-white" style="background: #767784;">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="/images/ypad-logo.png" alt="ypad logo" class="img-fluid" style="filter: brightness(200%) grayscale(100%);">
                <p class="mt-3">
                    <small>
                        YPAD™ is based in the United States. Though the education presented here is built upon U.S. standards, YPAD™ recognizes that there may be different standards in other cultures and countries across the globe. It is important to refer to the governance of your home country, state, province, or city to ensure consistent, legal compliance with the appropriate local regulations.
                    </small>
                </p>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div>
                    <h5><u>Navigation</u></h5>
                    <ul class="text-uppercase mx-0 px-0" style="list-style-type: none;">
                        <li class="my-3"><a class="text-decoration-none text-white" href="/">home</a></li>
                        <li class="my-3"><a class="text-decoration-none text-white" href="/about">about ypad</a></li>
                        <li class="my-3"><a class="text-decoration-none text-white" href="/education">education</a></li>
                        <li class="my-3"><a class="text-decoration-none text-white" href="/certification">certification</a></li>
                        <li class="my-3"><a class="text-decoration-none text-white" href="/support">support</a></li>
                        <li class="my-3"><a class="text-decoration-none text-white" href="https://ypad.thinkific.com/users/sign_in" target="_blank">login</a></li>
                        <li class="my-3" style="font-size: 1.25em;">
                            <ion-icon class="me-1" name="logo-facebook"></ion-icon>
                            <ion-icon class="mx-1" name="logo-instagram"></ion-icon>
                            <ion-icon class="mx-1" name="logo-youtube"></ion-icon>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm">
                <h5>Are you looking for positive, practical resources to support your role as a dance educator, studio owner, or event leader?</h5>
                <p>
                    Add your email to the mailing list to get the latest YPAD™ updates.
                </p>
                <div class="d-flex justify-content-start">
                    <a href="/subscribe" class="text-decoration-none"><div class="fw-bold px-4 py-2 shadow text-center" style="background: #EF9A60; color: white;">Subscribe</div></a>
{{--                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScmFcYgp9eyaZLmNYJYzx9vjdxZ6RzPmcuUYkKUiDej-6D7KA/viewform" class="text-decoration-none" target="_blank"></a>--}}
                </div>
{{--                <form>--}}
{{--                    <div class="mb-3">--}}
{{--                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">--}}
{{--                    </div>--}}
{{--                    <div type="submit" class="fw-bold px-4 py-2 shadow text-center" style="background: #EF9A60; color: white;">Submit</div>--}}
{{--                </form>--}}
            </div>
        </div>
        <div class="text-center" style="opacity: 70%;"><small>Copyright Youth Protection Association for Dance&trade; 2023
                <br>Youth Protection Association for Dance&trade; is a division of Educational Standards LLC
                <ul>
                    @guest
                        <li class="list-group-item px-0 border-0">
                            <a class="text-decoration-none text-white" href="{{ route('login') }}">{{ __('Admin') }}</a>
                        </li>
                    @else
                        <li class="list-group-item px-0 border-0 dropdown">
                            <a class="text-decoration-none text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </small></div>
    </div>
</div>
