@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-users"></div>
        <div class="gradient"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                Ready Resources
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
            </p>
        </div>
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container py-5">
        <div>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-costume.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Costuming for confidence</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-hair.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Importance of inclusive hairstyles</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-motor-skills.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Gross motor skill milestones</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-mental-strength.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Building mental strength</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-age-compression.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Understanding age compression</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-body-positive.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">A body positive environment</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-safe-movement.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Safe movement in dance</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm my-2">
                    <div class="d-flex justify-content-center mx-2">
                        <a href="/images/resource-hiring.pdf" class="text-decoration-none">
                            <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Best practices for hiring</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
