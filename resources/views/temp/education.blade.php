@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-certification"></div>
        <div class="gradient-dark"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                YPAD™ Education
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                Safeguarding Students by Empowering Adults
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
            <h2 class="text-center" style="font-size: 3em;">Welcome!</h2>
            <p class="text-center fw-bold">
                We’re so glad you’re here!
            </p>
            <p class="text-center">
                If you are a dance educator or studio owner interested in learning deeper content about student health, safety, and wellness, you are in the right place!
                <br><br>
                Choose from our <strong>4-module Educator Course</strong> or <strong>8-module Studio Owner Course</strong> to enhance your knowledge!
            </p>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div>
                <h3 class="text-white text-center pt-4">
                    The mission of YPAD™ is to bring awareness to and provide guidance for one essential priority: <strong>the safety and health of dance students</strong>.
                </h3>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center" style="font-size: 45px;">buy one, give one</h2>
        <p class="text-center" style="font-size: 30px;">For every course that is purchased, a scholarship course is made available to another member of the dance community.</p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
            <div class="d-flex align-items-center">
                <img src="/images/educator.jpg" alt="teacher with older dancers" class="img-fluid my-1">
            </div>
            <div>
                <h2>In the YPAD™ Educator Course, you will learn about:</h2>
                <ul class="mt-3">
                    <li>Safety onsite and offsite</li>
                    <li>Protecting students from abuse</li>
                    <li>Social media culture</li>
                    <li>Student conflict resolution</li>
                    <li>Safe movement</li>
                    <li>Injury reduction and prevention</li>
                    <li>Promoting health body image, proper nutrition, and hydration</li>
                    <li>The basics of brain development</li>
                    <li>Healthy communications and building mental strength</li>
                    <li>Establishing a mentally healthy performance culture</li>
                    <li>Establishing standards of excellence</li>
                    <li>Age-appropriateness matters</li>
                    <li>Reaching all students</li>
                </ul>
                <a href="https://yv686.infusionsoft.com/app/orderForms/The-YPAD-Educator-Course" class="text-decoration-none rr-btn" target="_blank" style="width: 100%;">
                    <button class="rounded fw-bold px-2 py-2 shadow text-center" style="background: #067997; font-size: 0.9em; color: white; height: auto; width: 315px;">Purchase the YPAD™ Educator Course</button>
                </a>
                <small class="text-muted ms-2">$199</small>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 mt-5">
            <div class="d-flex align-items-center">
                <img src="/images/studio-owner.jpg" alt="teacher with older dancers" class="img-fluid my-1">
            </div>
            <div>
                <h2>In the YPAD™ Studio Owner Course, you will learn everything listed above, as well as:</h2>
                <ul class="mt-3">
                    <li>Strengthening the hiring process</li>
                    <li>Making smart hiring decisions</li>
                    <li>New hire categorization and documentation</li>
                    <li>Creating an onboarding process</li>
                    <li>Coaching and accountability</li>
                    <li>Professional development</li>
                    <li>Making secure decisions and managing risk</li>
                    <li>Creating an Emergency Action Plan</li>
                    <li>Safety preparedness for offsite events</li>
                </ul>
                <a href="https://yv686.infusionsoft.com/app/orderForms/YPAD-Studio-Owner-Course" class="text-decoration-none rr-btn" target="_blank" style="width: 100%;">
                    <button class="rounded fw-bold px-2 py-2 shadow text-center" style="background: #067997; font-size: 0.9em; color: white; height: auto; width: 315px;">Purchase the YPAD™ Studio Owner Course</button>
                </a>
                <small class="text-muted ms-2">$399</small>
            </div>
        </div>
    </div>


    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="py-5 container text-white d-flex align-items-center">
            <div>
                <h2 class="text-uppercase text-center pt-4">FREE BONUS COURSE RESOURCES</h2>
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 mt-4">
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="school"></ion-icon>
                            </div>
                            {{--                            <p class="fw-bold text-center py-0 my-0">SUBSTITUTE COURSE</p>--}}
                            <p class="text-center py-0 my-0">
                                Unlimited FREE courses for guest teachers, substitute teachers, and volunteers
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="chatbubbles"></ion-icon>
                            </div>
                            {{--                            <p class="fw-bold text-center py-0 my-0">VOLUNTEER COURSE</p>--}}
                            <p class="text-center py-0 my-0">
                                Live Connection Chat webinars with YPAD™ Certified Coaches
                            </p>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="people-circle"></ion-icon>
                            </div>
                            {{--                            <p class="fw-bold text-center py-0 my-0">GUEST TEACHER COURSE</p>--}}
                            <p class="text-center py-0 my-0">
                                Membership into a private Facebook group for questions and community support
                            </p>
                        </div>
                    </div>
                    {{--                    <div class="col-sm">--}}
                    {{--                        <div class="mx-4 my-2">--}}
                    {{--                            <div class="d-flex justify-content-center">--}}
                    {{--                                <ion-icon style="font-size: 3em;" name="call"></ion-icon>--}}
                    {{--                            </div>--}}
                    {{--                            --}}{{--                            <p class="fw-bold text-center py-0 my-0">GUEST TEACHER COURSE</p>--}}
                    {{--                            <p class="text-center py-0 my-0">--}}
                    {{--                                Personal 1:1 coaching calls and referrals as needed--}}
                    {{--                            </p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center">YPAD™ ALSO RECOMMENDS THE FOLLOWING BUILDING BLOCKS</h2>
        <div class="row" id="about-checkmarks">
            {{--            <p class="text-center" style="color: #896C7B;">--}}
            {{--                After your application is accepted and you complete the YPAD™ Certified Course, submit the reflections, and pass the knowledge checks with 90% proficiency, it is time to move on to STEP THREE: external training and documentation.--}}
            {{--            </p>--}}
            <div class="col-sm my-3">
                <div>
                    <p class="text-center">
                        In addition to the foundations of our educator or studio owner courses, YPAD™ also recommends the building blocks of a safety-focused environment:
                    </p>
                </div>
                <div class="mt-5">
                    <x-checkmark number="1:" item="Background checks" />
                    <x-checkmark number="2:" item="First Aid/CPR certifications" />
                    <x-checkmark number="3:" item="Stewards of Children® training by Darkness to Light" />
                    <x-checkmark number="4:" item="Youth Mental Health First Aid training" />
                    <x-checkmark number="5:" item="Emergency Action Plans (EAPs) for classrooms and performances" />
                </div>
            </div>
            <p class="text-center pt-4">Are you looking for more discussion about how to foster safer and healthier environments in dance? Register to attend a YPAD™ Artistic Integrity training live on Zoom. These seminars are free for those who have taken the educator or studio owner course.</p>

        </div>
    </div>

    <div class="orange py-5 text-white">
        @include("_divider-top")
        @include("_divider-bottom")
        <div class="container py-5">
            <div class="row my-2">
                <x-orange
                    image="darcy.png"
                    name="Darcy Fagerwold"
                    title="Studio Owner, California"
                    quote="YPAD™ education shows families that we are committed to keeping kids healthy and safe in dance. Thank you to YPAD™ for leading the dance industry in this vital endeavor!"
                />
                <x-orange
                    image="kate.png"
                    name="Kate Moody"
                    title="Studio Owner, Wisconsin"
                    quote="If you haven't completed a YPAD™ course yet, do it! We had an incident at the local high school this morning (everything is okay), and I am proud we had YPAD™ training to rely on. Thank you, YPAD™ team and experts, for all the great knowledge and resources in the YPAD™ course!"
                />
            </div>
            <div class="row my-2">
                <x-orange
                    image="amy.png"
                    name="AMI YARO"
                    title="Studio Owner, Iowa"
                    quote="YPAD™ education has helped me implement best practices in my studio. YPAD™ has also given me a community of like-minded dance professionals who choose to put the wellness and safety of their students as a top priority."
                />
                <x-orange
                    image="neisha.jpeg"
                    name="NEISHA HERNANDEZ"
                    title="Studio Owner, California"
                    quote="Being educated by YPAD™  is essential to my business culture. Our parents and families are confident that my studio is intentionally focused on keeping their kids healthy and safe. YPAD™ has extensive resources that have been integral to our mission of Encouraging Kids to Lead Inspired Lives!"
                />
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Does YPAD™ still offer certifications?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        YPAD no longer offers or supports a certification model. However, we remain committed to our mission of promoting dancer safety and well-being. We will continue to offer education and resources to help you implement best practices in your classrooms or studios. Individuals are invited to complete our Educator course, Studio Owner course, or take advantage of one of our many free resources, Microlearnings, or Spotlight Conversations.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Does YPAD™ regulate artistic choices?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        No, YPAD™ does not police the dance industry. Instead, YPAD™ aims to encourage thoughtful decision-making and discussions around developmentally appropriate and age-appropriate approaches to dance education and artistic integrity. YPAD™’s mission in safeguarding capacity-building helps everyone make better-informed choices for the well-being of dance students.
                    </div>
                </div>
            </div>


        </div>
    </div>


{{--    <div class="container py-5">--}}
{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--            <div class="col-sm my-3 py-5" style="background: #067997;">--}}
{{--                <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">--}}
{{--                    <h2 class="text-uppercase">--}}
{{--                        YPAD™ is proud to support the following YPAD™ Certified Events through ongoing education and resources--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3">--}}
{{--                <div style="background: #767784; color: white;" class="pb-4">--}}
{{--                    <div class="d-flex justify-content-center"><img src="/images/cert-kelly.png" alt="" class="img-fluid" style="border: 6px solid #767784; height: 394px; width: 100%; object-fit: cover;"></div>--}}
{{--                    <div class="px-3 pt-3">--}}
{{--                        <h4 class="text-center py-0 my-0"><strong>Kelly Peterson</strong> <br> The guiDANCE Experience</h4>--}}
{{--                        <p class="text-center pb-0 pt-2 my-0"><em>--}}
{{--                                “YPAD™ has brought so much value into the dance industry by helping kids stay safe, encouraging community, self-accountability, and awareness. YPAD™ gives anyone working in the dance industry clear priorities to develop this next generation of dancers. Through educational opportunities, YPAD™ is leading the way for the betterment of all involved in the dance industry.”--}}
{{--                            </em>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3">--}}
{{--                <div style="background: #EF9A60; color: white;" class="pb-4">--}}
{{--                    <div class="d-flex justify-content-center"><img src="/images/cert-christian.jpg" alt="" style="border: 6px solid #EF9A61; height: 394px; width: 100%; object-fit: cover; object-position: 50% 15%;"></div>--}}
{{--                    <div class="px-3 pt-3">--}}
{{--                        <h4 class="text-center py-0 my-0"><strong>Christian Clark</strong> <br> REVEL Dance Convention</h4>--}}
{{--                        <p class="text-center pb-0 pt-2 my-0"><em>--}}
{{--                                “REVEL has been partnered with YPAD™ as a certified event for the past 2 years. YPAD™ has become an invaluable resource to our leadership team, administrative staff and dance educators. YPAD™'s subject matter experts have helped shape our policies and procedures around child safety & wellness, promoted a culture of awareness & accountability, and made us a better organization overall. Without hesitation, we recommend that other event organizers explore YPAD™ training and certification."                            </em>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3">--}}
{{--                <div style="background: #896C7B; color: white;" class="pb-4">--}}
{{--                    <div class="d-flex justify-content-center"><img src="/images/cert-jeremy.jpeg" alt="" class="img-fluid" style="border: 6px solid #896C7B; height: 394px; width: 100%; object-fit: cover;"></div>--}}
{{--                    <div class="px-3 pt-3">--}}
{{--                        <h4 class="text-center py-0 my-0"><strong>Jeremy Keeton</strong> <br> Adrenaline and Revive Dance Conventions</h4>--}}
{{--                        <p class="text-center pb-0 pt-2 my-0"><em>--}}
{{--                                "YPAD™ has been a gift to the dance industry. The information we receive through continual YPAD™ training is essential and integral to keeping youth dancers safe. This training goes far beyond our events and has given our team tools to navigate everyday situations involving children. We are honored to offer dance experiences to people around the country and are grateful that through YPAD™, studio directors and parents feel even more confident that dancers' health and safety are a priority at Adrenaline and Revive Dance Conventions."--}}
{{--                            </em>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
