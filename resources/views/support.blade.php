@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-support"></div>
        <div class="gradient"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                Welcome to YPAD™ Support
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                We are here to help
            </p>
        </div>
        {{--        <div class="custom-shape-divider-top-1683835088">--}}
        {{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>--}}
        {{--            </svg>--}}
        {{--        </div>--}}
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container pt-5">
        <div>
            <h2 class="text-center">Welcome!</h2>
            <p class="text-center fw-bold">
                If you are looking for support, you are in the right place.
            </p>
            <p class="text-center">
                YPAD™ offers many resources and training opportunities for the pursuit of safety and wellness in dance education. Together, we can be equipped with the tools needed to safeguard youth dancers.
                <br><br>
                <strong>This YPAD™ Support page serves three vital purposes:</strong>
            </p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row my-4 welcome-icons">
            <div class="col-sm">
                <div class="mx-4">
                    <div class="d-flex justify-content-center">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <p class="fw-bold text-center text-uppercase py-0 my-0">Hotline Listings</p>
                    <p class="text-center py-0 my-0">
                        YPAD™ provides a list (seen below) of the most essential hotlines for immediate and/or emergency support. YPAD™ itself is not a hotline or replacement for emergency care.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="mx-4">
                    <div class="d-flex justify-content-center">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                    <p class="fw-bold text-center text-uppercase py-0 my-0">Certified Support</p>
                    <p class="text-center py-0 my-0">
                        YPAD™ Certified Studios, Individuals, and Events can request additional support from a YPAD™ Certified Coach or a YPAD™ subject matter expert. This referral service is included as part of your certification investment.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="mx-4">
                    <div class="d-flex justify-content-center">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                    <p class="fw-bold text-center text-uppercase py-0 my-0">Sharing Concerns</p>
                    <p class="text-center py-0 my-0">
                        YPAD™ has implemented a system for sharing concerns related to YPAD™ Certified Studios, Individuals, or Events. Concerns are evaluated and handled according to YPAD™’s 5-tier accountability model.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <div class="d-flex justify-content-center my-4"><ion-icon name="call-outline" class="text-center" style="font-size: 4em;"></ion-icon></div>
                    <h2 class="text-center">Hotline Listings</h2>
                    {{--                <p class="text-center">as·so·ci·a·tion <br> <small class="text-muted">noun</small></p>--}}
                    <p class="text-center">
                        YPAD™ does not operate a hotline or take the place of emergency services.
                        <br><br>
                        If you are in crisis, in imminent danger to yourself or others, or in need of immediate support, contact one of the national hotlines or call 911 for your local emergency service.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Emergency: 911
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        National Suicide & Crisis Hotline: Call or text 988
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        National Sexual Assault Hotline: 1-800-656-4673
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        National Eating Disorder Hotline: 1-800 931-2237
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Childhelp National Child Abuse Hotline: 1-800-4-A-CHILD
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Darkness to Light: 1-866-FOR-LIGHT
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Dance Education Equity Association: 213-667-0125 (text)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5 text-white">
        @include('_divider-top')
        @include('_divider-bottom')
        <x-testimonial
            image="test-monique.jpg"
            quote="As a studio owner, you never want to get an emergency call from the studio, but thanks to our YPAD™ training and certification, my teachers knew how to handle an emergency when I wasn’t there. I am grateful to report that everyone is okay. Thank you YPAD™ for preparing our teachers so well!"
            person="Monique Rodriguez"
            place="Studio Owner, Michigan"
        />
    </div>

    <div class="container py-5">
        <h2 class="text-center">YPAD™ Certified Support</h2>
        <p>
            Are you YPAD™ Certified and have a question or concern about something you’ve observed or heard that is concerning? Do you need support navigating an issue regarding artistic integrity or conflict resolution? Request additional support here for a referral to a YPAD™ Certified Coach or subject matter expert. This service is included as part of your certification investment.
            <br><br>
            Please note that this email is monitored 9AM to 3PM Central time, Monday through Friday. It is not a crisis hotline. Immediate or emergency concerns should always be directed to 911, a crisis hotline, or child welfare providers.
        </p>
        <div class="d-flex justify-content-center">
            <a style="text-decoration: none;" href="mailto:info@ypadnow.com?subject=YPAD Support">
                <div class="fw-bold px-4 py-2 shadow text-center btn-hover" style="background: #067997; color: white;">EMAIL</div>
            </a>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="text-white text-center">
                            <h3><strong>Do you have a concern?</strong></h3>
                            <h4>
                                YPAD™ brings awareness to and provides guidance for one essential priority: <strong>the safety of dance students</strong>. If you have a concern with a YPAD™ Certified Studio, Individual, or Event as it relates to the safety and well-being of students, please continue to the information below.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
            <div class="col-sm">
                <h2 class="text-center">YPAD™’s 5-Tier Approach To Accountability</h2>
                {{--                <p class="text-center">as·so·ci·a·tion <br> <small class="text-muted">noun</small></p>--}}
                <p class="text-center">
                    YPAD™ has established certain standards related to certification, which includes a system for addressing concerns. Please carefully consider your concern before submitting, and be advised it takes more than disagreement to justify a review. Understand that any concern must include documentation, evidence, and/or other supporting information.
                    <br><br>
                    The <em>Share a Concern</em> button below provides a way to submit an anonymous concern which is then reviewed internally. If deemed appropriate, YPAD™ will request communication with the subject of the concern. Additional steps may be taken in accordance with YPAD™’s 5-tier accountability model.
                    <br><br>
                    Internal reviews are confidential, and as such, YPAD™ does not provide any subsequent information about the review process—including actions YPAD™ may or may not take—to the person who shared their concern.

                </p>
            </div>
            <div class="col-sm">
                <ol>
                    <li>
                        <strong>Iterative Improvement:</strong>
                        This may require a small change; for example, perhaps a photo is shared or a song is played that raises artistic integrity concerns. YPAD™ will provide feedback to the Certified Studio, Individual, or Event about how to make a better choice next time.
                    </li>
                    <li>
                        <strong>Focused Fix:</strong>
                        This may require deeper attention to the concerns raised. If there are repetitive concerns shared of the same nature, for example, YPAD™ will ask for a demonstration or documentation from the Certified Studio, Individual, or Event that the concern has been addressed at a practice, policy, or personnel level.                    </li>
                    <li>
                        <strong>Review & Renewal:</strong>
                        This takes place for a more serious concern of a repetitive or "mid-stakes" issue. This action may require the support of a YPAD™ Certified Coach or a YPAD™ subject matter expert, or a review of YPAD™ Certification materials and information to understand why the reported concern requires change.                     </li>
                    <li>
                        <strong>Suspension & Probation:</strong>
                        This may result from a high-stakes issue, such as abuse allegations. Concerns of this nature would initiate immediate certification suspension pending an internal review, followed by a probationary reinstatement period or termination.                    </li>
                    <li>
                        <strong>Termination of Certification:</strong>
                        Depending on the nature of a high stakes issue, other repeated issues, an unwillingness to address concerns, or an unsatisfactory result of an internal review, YPAD™ reserves the right to terminate YPAD™ Certification.
                    </li>
                </ol>
                <div class="d-flex justify-content-center">
                        <a style="text-decoration: none;" href="https://docs.google.com/forms/d/e/1FAIpQLSeejHz5Q2MSGcAnqbgWtxS6RvPiCqOR9D-H_OtsOHQiuFg4Tg/viewform?usp=share_link" target="_blank">
                            <div class="fw-bold px-4 py-2 shadow text-center btn-hover" style="background: #067997; color: white;">
                                SHARE A CONCERN
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5 text-white">
        @include('_divider-top')
        <x-testimonial
            image="test-lori.jpg"
            quote="When I noticed a student was struggling with body image, I reached out to YPAD™ for guidance. Thanks to my YPAD™ Certification, I knew when to reach out and thanks to their support service, I was able to get same day help and appropriate next steps. Thank you, YPAD™!"
            person="Lori Gardner"
            place="Studio Owner, Illinois"
        />
    </div>

@endsection
