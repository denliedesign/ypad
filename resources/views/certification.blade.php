@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-certification"></div>
        <div class="gradient-dark"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                Welcome to YPAD™ Certification
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                Becoming YPAD™ Certified means that you are voluntarily raising your hand for a higher standard
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

    <div class="container py-5">
        <div>
            <h2 class="text-center">Welcome!</h2>
            <p class="text-center fw-bold">
                You've made a great decision to pursue YPAD™ Certification!
            </p>
            <p>
                The YPAD™ Certification process was created to help individuals, studio owners, event owners, and their staff gain the tools and practice the knowledge for safeguarding capacity-building.
                Pursuing YPAD™ Certification shows your commitment to safeguarding children and empowering confident adults.
                <br><br>Much like a dance education, a YPAD™ Certified Studio designation requires an investment of time, patience, hard work, and financial resources. Just like a dancer gets stronger over time, your studio safety practices can get better over time as well. There is a process to raising the standard of dancer well-being, and YPAD™ is here to help you achieve it. Those who choose to become certified agree to self-regulation and to follow YPAD’s 5-tier accountability model.
                <br><br>
                <strong>
                    YPAD&trade; Certified Studio Owner Courses are open now. YPAD&trade; Certified Individual Courses will be open in late Summer / early Fall 2023. Education courses will be available in the Fall of 2023.
                </strong>
            </p>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div>
                <h3 class="text-white text-center">
                    The mission of Youth Protection Association for Dance™ is to bring awareness to and provide guidance for one essential priority: <strong>the safety and health of dance students</strong>.
                </h3>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase">Steps to earn your YPAD™ Certified Studio designation</h2>
        <p class="fw-bold">It all starts here: with you, the studio owner, and these three steps.</p>
        <div class="row">
            <div class="col-lg">
                <span class="font-pop" style="font-size: 1.2em;">STEP ONE:</span> submit an application for your studio. The application is located at the bottom of this page. Once your application is approved (1-2 business days), you will receive an email with access to the order form.
                <br><br>
                <span class="font-pop" style="font-size: 1.2em;">STEP TWO:</span> complete the YPAD™ Certified Studio Course, submit the reflections, and pass the knowledge checks with 90% proficiency. The YPAD&trade; Certified Studio Course takes approximately 8-10 hours to complete. Your staff must also complete the appropriate courses for their role during step two (teacher or admin). They, too, will submit reflections and must pass knowledge checks with 90% proficiency. Depending on the role, staff courses take approximately 2-4 hours to complete.
                <br><br>
                <span class="font-pop" style="font-size: 1.2em;">STEP THREE:</span> complete the external training and documentation submission requirements listed below. Items with "*" indicate third-party provider and cost. Links to those programs are inside the course. Costs are outlined in the FAQ section below.
                <br><br>
                When your course(s) are complete and all documentation is submitted, your YPAD™ Certified Studio status will be confirmed and designated. Your status will remain active in our directory of YPAD™ Certified Studios as long as you remain in good standing and complete an annual renewal. Those who choose to become certified agree to self-regulation and to follow YPAD’s 5-tier accountability model.
            </div>
            <div class="col-lg d-flex justify-content-center">
                <img src="/images/certification-steps.png" alt="graph" class="img-fluid">
            </div>
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
                    quote="Youth Protection Association for Dance™ education is evidence to families that we are
                                committed to keeping kids happy, healthy, and safe in dance. It is comforting to know that
                                as challenging issues arise, YPAD™ is there to support and guide us to ensure we are doing
                                what's right for our students. Thank you to Youth Protection Association for Dance™
                                for leading the dance industry in this vital endeavor!"
                />
                <x-orange
                    image="kate.png"
                    name="Kate Moody"
                    title="Studio Owner, Wisconsin"
                    quote="If you haven't done YPAD™ training yet, do it. We had a loaded gun incident at the local high school this morning (everything is okay). But the thought that something could happen so close, is so scary. As hard as it was to imagine and read about all the 'what to do's' in YPAD™ training, I am proud that we did, because 'It's better to know and not need than to need and not know'. Thank you YPAD™ team for all the great knowledge in the YPAD™ course!"
                />
            </div>
            <div class="row my-2">
                <x-orange
                    image="amy.png"
                    name="AMY YARO"
                    title="Studio Owner, Iowa"
                    quote="I'm a studio owner, but I wanted to start with individual certification first. This allowed me to get to know the program through monthly Community Connection Calls and to implement best practices in my studio. This program has given me a community of like-minded dance professionals who choose to put the wellness and safety of their students as a top priority. I’m eager to get my entire studio certified next!"
                />
                <x-orange
                    image="neisha.jpeg"
                    name="NEISHA HERNANDEZ"
                    title="Studio Owner, California"
                    quote="Being a YPAD™ Certified Studio is essential to our studio’s culture. Our parents and families are confident that our studio is intentionally focused on keeping their kids healthy and safe. YPAD™'s extensive resources and monthly ongoing education opportunities have been integral in carrying out our mission of Encouraging Kids to Lead Inspired Lives!"
                />
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
            <div class="col-sm my-3">
                <div>
                    <h2 class="text-center">Documentation requirements for individual certification</h2>
                    <p class="text-center">
                        The following external actions and trainings must be completed and submitted. Items with an "*" indicate third-party provider and cost. Links to those programs are in the course. Costs are listed below in the FAQ section.
                    </p>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of background check*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of up-to-date CPR/AED and First Aid certification*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of completion of Darkness to Light's Stewards of Children® training*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Copy of signed Safeguarding Pledge
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Attendance at a live two-hour training regarding artistic integrity
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm my-3">
                <div>
                    <h2 class="text-center">Documentation requirements for studio or event certification</h2>
                    <p class="text-center">
                        Certifying a studio or an event has greater documentation requirements than certifying an individual.
                    </p>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of business liability insurance, including sex abuse coverage*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of background checks for yourself and all staff members*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of up-to-date CPR/AED and First Aid certifications for yourself and all staff members*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of completion of Darkness to Light's Stewards of Children® training for yourself and all staff members*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Proof of Youth Mental Health First Aid certification for yourself*
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Copy of up-to-date copy of your studio's EAP (Emergency Action Plan) for your facility and off-site events
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Copy of signed YPAD™ Certified Studio Agreement
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Copy of signed Safeguarding Pledge for yourself and all staff members
                        </div>
                        <div class="">
                            <hr class="my-3" style="width: 90%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Attendance at a live two-hour training regarding artistic integrity, plus three integration calls with a YPAD™ coach within the first three months of certification. Staff are encouraged to attend the live training.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="py-5 container text-white d-flex align-items-center">
            <div>
                <h2 class="text-uppercase text-center">FREE BONUS RESOURCES FOR YPAD&trade; CERTIFIED STUDIOS</h2>
                <p class="text-center">YPAD™ Certified Studios receive unlimited FREE access to short courses for the following important roles:</p>
                <div class="row mt-4">
                    <div class="col-sm">
                        <div class="mx-4">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="id-card"></ion-icon>
                            </div>
                            <p class="fw-bold text-center py-0 my-0">SUBSTITUTE COURSE</p>
                            <p class="text-center py-0 my-0">
                                Need to cover a class on short notice? Not able to find someone who is YPAD™ certified? Use this course to cover the essentials for substitutes on short notice.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="mx-4">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="accessibility"></ion-icon>
                            </div>
                            <p class="fw-bold text-center py-0 my-0">VOLUNTEER COURSE</p>
                            <p class="text-center py-0 my-0">
                                Do you use volunteers for your programs? Use this short course for volunteers to cover the basics of working safely with youth in classroom and performance settings.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="mx-4">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="star"></ion-icon>
                            </div>
                            <p class="fw-bold text-center py-0 my-0">GUEST TEACHER COURSE</p>
                            <p class="text-center py-0 my-0">
                                Do you hire guest and master teachers for special programs? Use this course to share the baseline expectations of teaching in a YPAD™ Certified environment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center">The Course Collection for YPAD&trade; Certified Studios</h2>
        <div class="row">
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #067997; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Owner</h3>
                            <p>
                                $499
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This 8-10 hour course provides foundations for studio owners for best practices in the areas of Hiring, Onboarding and Training, Studio Safety, Abuse Protection, Healthy Bodies, Healthy Minds, Social Media & Communications, and Artistic Integrity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #767784; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Teacher</h3>
                            <p>
                                $299
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This 3-4 hour course covers teacher-specific essentials regarding Student Safety, Healthy Bodies, Healthy Minds, and Artistic Integrity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #EF9A61; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Admin</h3>
                            <p>
                                $199
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This 1-2 hour course provides adminstrative eand learn all about: Safety Safetey, Protecting Students, Healthy Communication, and Professional Integrity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #896C7B; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Substitute</h3>
                            <p>
                                UNLIMITED FREE WITH CERTIFICATION
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This short 30 minute course covers the highlights for substitutes working on short notice. Includes the essentials for student safety and health, safe movement in class and onstage, and artistic integrity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #067997; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Volunteer</h3>
                            <p>
                                UNLIMITED FREE WITH CERTIFICATION
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This short 15 minute course covers the basics of student safety and health for studio volunteers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-3 flip-card col-sm d-flex align-items-center">
                <div class="rounded flip-card-inner" style="background: #767784; position: relative;">
                    <div class="flip-card-front d-flex align-items-center justify-content-center text-white text-center">
                        <div>
                            <h3>Studio Guest Teacher</h3>
                            <p>
                                UNLIMITED FREE WITH CERTIFICATION
                            </p>
                            <div style="position: absolute; bottom: 2px; right: 10px;">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back d-flex align-items-center justify-content-center text-white text-center">
                        <p class="mx-3">
                            This 30 minute course helps guest teachers understand the baseline expectations of teaching in a YPAD™ Certified environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center mt-3">
        YPAD™ endorses the concept of continuing education and continuous improvement.
            <br>Because of that, certification must be renewed annually.
            <br>Annual renewal: 50% discount.
        </p>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                        <div>
                            <div class="text-white text-center">
                                <h2 class="text-uppercase text-center mt-5">READY TO BECOME A YPAD™ CERTIFIED STUDIO?</h2>
                                <p class="text-center">Now accepting studio certification renewals and new studio certification applications!
                                    <br>YPAD&trade; Certified Individual courses will be open in late Summer 2023.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a href="https://2ejcn25fx1w.typeform.com/to/y6cHc1V7" class="text-decoration-none">
                                        <div class="fw-bold px-4 py-2 shadow text-center" style="background: #067997; color: white;">Get Started Now</div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-sm-8">--}}
{{--                    <div>--}}
{{--                        <div class="text-white">--}}
{{--                            <h2 class="text-uppercase mt-5">Not quite ready?</h2>--}}
{{--                            <p>--}}
{{--                                <strong>If you are a studio owner and you're not ready to take all of the required steps to earn the designation of YPAD™ Certified Studio, there are two other ways to become involved:</strong>--}}
{{--                                <br><br>--}}
{{--                                <span class="font-pop" style="font-size: 1.2em;">OPTION ONE:</span> A YPAD™ Certified—Individual can be any professional educator or leadership role in the industry. Individuals certify themselves only, not as part of an organization.--}}
{{--                                <br><br>--}}
{{--                                <span class="font-pop" style="font-size: 1.2em;">OPTION TWO:</span> Anyone who has a personal interest in the health of the dance industry (individuals, studio owners, dance educators, parents, dance organizations, and college students) can participate in YPAD™ Education. These learners are not certifying, but simply taking the courses for their own awareness and knowledge gain.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center">FAQ</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is the difference between education and certification?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Learner courses are audit-only courses for personal growth. Learner courses are open to the entire dance community. Learner courses do not require additional steps such as knowledge checks, or outside training and documentation, nor do they lead to certification. Learner courses are just as they sound: a place to learn.
                        <br><br>
                        Certification is offered in three ways: YPAD™ Certified Individual, Studio, or Event. Certification begins with an application and requires background checks, CPR/AED and First Aid certification, Darkness to Light's Stewards of Children® training, live artistic integrity Zoom seminar, a Safeguarding Pledge, and commitment to our 5-tier Accountability model. Additional requirements apply to YPAD™ Certified Studios and Events, such as proof of insurance, emergency action planning, Youth Mental Health First Aid, and three sessions with a YPAD™ integration coach.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How much do the additional requirements to become certified cost?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Background checks are $25-29 per person and are renewed every two years.
                        <br><br>
                        CPR/AED and First Aid certification ranges from $35-55 per person and is renewed every two years.
                        <br><br>
                        Darkness to Light's Stewards of Children® training is $10 per person and is renewed every two years.
                        <br><br>
                        Youth Mental Health First Aid certification is $50 and is only required for the studio owner.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Is the goal of YPAD&trade; to police or censor my artistic choices?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        YPAD™ is not interested in policing the dance industry. Instead, YPAD™ aims to encourage thoughtful discussions around developmentally appropriate and age-appropriate approaches to dance education and artistic integrity. The mission of YPAD™ is safeguarding capacity-building–helping dance educators to make better informed choices every day.
                    </div>
                </div>
            </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                            Can I just take the education and not become certified?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yes, YPAD™ believes education in safeguarding capacity-building should be available to everyone.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            If I become certified, do I have to re-certify?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">YPAD™ endorses the concept of continuing education and continuous improvement. Because of that, certification must be renewed annually. See the certification tab for details.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            What if I start education or certification and don't finish?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">YPAD™ education and certification courses are asynchronous, meaning you can start, take a break, and re-start anytime. Certification is only awarded, however, after all standards have been met.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                            If I choose to become certified, how does 5-tier accountability work?
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">YPAD™ believes in capacity-building. If you or your organization are certified and a concern is shared with us, we will assess the matter and contact you so that you can learn and improve your practices. Serious problems may result in suspension or removal of certification status. To learn more, visit the Support tab.</div>
                    </div>
                </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseThree">
                        When will certification become available for individuals?
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        YPAD&trade; Certified Individual Courses will be open late Summer 2023.
                    </div>
                </div>
            </div>


{{--            <div class="accordion-item">--}}
{{--                <h2 class="accordion-header" id="flush-headingFour">--}}
{{--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">--}}
{{--                        What is the pricing for certification for studios?--}}
{{--                    </button>--}}
{{--                </h2>--}}
{{--                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">--}}
{{--                    <div class="accordion-body">--}}
{{--                        &middot; Studio Owner - $499--}}
{{--                        <br>--}}
{{--                        &middot; Studio Teacher - $299--}}
{{--                        <br>--}}
{{--                        &middot; Studio Admin - $199--}}
{{--                        <br>--}}
{{--                        &middot; Studio Guest/Sub - UNLIMITED FREE WITH CERTIFICATION--}}
{{--                        <br>--}}
{{--                        &middot; Studio Volunteer - UNLIMITED FREE WITH CERTIFICATION--}}
{{--                        <br>--}}
{{--                        Annual renewal - 50% discount--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

{{--    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 800px;">--}}
{{--        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>--}}
{{--        <div class="container pt-5 d-flex align-items-center" style="height: 100%;">--}}
{{--            <div class="text-white">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="rounded-portrait">--}}
{{--                                    <img src="/images/cert-kelly.png" alt="portrait" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Kelly Peterson</h4>--}}
{{--                                <p class="text-center py-0 my-0"><strong>guiDANCE Experience</strong></p>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm d-flex align-items-center">--}}
{{--                                <p>--}}
{{--                                    “YPAD&trade; has brought so much value into the dance industry by helping kids stay safe, encouraging community, self-accountability, and awareness. YPAD&trade; gives anyone working in the dance industry clear priorities to develop this next generation of dancers. Through educational opportunities, YPAD&trade; is leading the way for the betterment of all involved in the dance industry.”--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="rounded-portrait">--}}
{{--                                    <img src="/images/cert-christian.jpg" alt="portrait" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Christian Clark</h4>--}}
{{--                                <p class="text-center py-0 my-0"><strong>REVEL</strong></p>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm d-flex align-items-center">--}}
{{--                                <p>--}}
{{--                                    “REVEL has been partnered with YPAD™ as a certified event for the past 2 years.  Throughout the relationship, YPAD™'s training, resources and support has become invaluable to our leadership team, administrative staff and dance educators.  YPAD™'s subject matter experts have helped shape our policies and procedures around child safety & wellness, promoted a culture of awareness & accountability, and made us a better organization overall.  Without hesitation, we recommend that other event organizers take the opportunity to explore YPAD™ training and certification."--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-3">--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="rounded-portrait">--}}
{{--                                    <img src="/images/cert-jeremy.jpeg" alt="portrait" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Jeremy Keeton</h4>--}}
{{--                                <p class="text-center py-0 my-0"><strong>Adrenaline & Revive</strong></p>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm d-flex align-items-center">--}}
{{--                                <p>--}}
{{--                                    "YPAD™ has been a gift to the dance industry. The information we receive through continual YPAD™ training is essential and integral to keeping youth dancers safe. This training goes far beyond our events and has given our team tools to navigate everyday situations involving children. We are honored to offer dance experiences to people around the country and are grateful that through YPAD™, studio directors and parents feel even more confident that dancers' health and safety are a priority at Adrenaline and Revive Dance Conventions."--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-4">--}}
{{--                            </div>--}}
{{--                            <div class="col-sm d-flex align-items-center">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="custom-shape-divider-top-1683835088">--}}
{{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="container py-5">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-3 py-5" style="background: #067997;">
                <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                    <h2 class="text-uppercase">
                        YPAD™ is proud to support the following YPAD™ Certified Events through ongoing education and resources
                    </h2>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #767784; color: white;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/cert-kelly.png" alt="" class="img-fluid" style="border: 6px solid #767784; height: 394px; width: 100%; object-fit: cover;"></div>
                    <div class="px-3 pt-3">
                        <h4 class="text-center py-0 my-0"><strong>Kelly Peterson</strong> <br> The guiDANCE Experience</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                “YPAD™ has brought so much value into the dance industry by helping kids stay safe, encouraging community, self-accountability, and awareness. YPAD™ gives anyone working in the dance industry clear priorities to develop this next generation of dancers. Through educational opportunities, YPAD™ is leading the way for the betterment of all involved in the dance industry.”
                            </em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #EF9A60; color: white;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/cert-christian.jpg" alt="" style="border: 6px solid #EF9A61; height: 394px; width: 100%; object-fit: cover; object-position: 50% 15%;"></div>
                    <div class="px-3 pt-3">
                        <h4 class="text-center py-0 my-0"><strong>Christian Clark</strong> <br> REVEL Dance Convention</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                “REVEL has been partnered with YPAD™ as a certified event for the past 2 years. YPAD™ has become an invaluable resource to our leadership team, administrative staff and dance educators. YPAD™'s subject matter experts have helped shape our policies and procedures around child safety & wellness, promoted a culture of awareness & accountability, and made us a better organization overall. Without hesitation, we recommend that other event organizers explore YPAD™ training and certification."                            </em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #896C7B; color: white;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/cert-jeremy.jpeg" alt="" class="img-fluid" style="border: 6px solid #896C7B; height: 394px; width: 100%; object-fit: cover;"></div>
                    <div class="px-3 pt-3">
                        <h4 class="text-center py-0 my-0"><strong>Jeremy Keeton</strong> <br> Adrenaline and Revive Dance Conventions</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                "YPAD™ has been a gift to the dance industry. The information we receive through continual YPAD™ training is essential and integral to keeping youth dancers safe. This training goes far beyond our events and has given our team tools to navigate everyday situations involving children. We are honored to offer dance experiences to people around the country and are grateful that through YPAD™, studio directors and parents feel even more confident that dancers' health and safety are a priority at Adrenaline and Revive Dance Conventions."
                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
