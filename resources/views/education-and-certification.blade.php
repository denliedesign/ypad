@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-certification"></div>
        <div class="gradient-dark"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                YPAD™ Education & Certification
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
            <h2 class="text-center">Welcome!</h2>
            <p class="text-center fw-bold">
                We’re so glad you’re here!
            </p>
            <p class="text-center">
                If you are a dance educator or studio owner interested in learning deeper content about student health, safety, and wellness, you are in the right place.
                <br><br>
                Choose from our <strong>4-module Educator Course</strong> or our <strong>8-module Studio Owner Course</strong> to enhance your knowledge.
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

    <div class="container py-5">
{{--        <h2 class="text-uppercase">Studio owners, these are the steps to earn your YPAD™ Certified designation:</h2>--}}
{{--        <p class="fw-bold">It all starts here: with you, the studio owner, and these three steps.</p>--}}
        <div>
            Studio owners who are interested in YPAD™ Certification should complete The YPAD™ Studio Owner Course and submit the designated form at completion of the final lesson.
            <br><br>
            YPAD™ Certification requires the successful completion of The YPAD™ Studio Owner Course followed by a Discovery Call with a YPAD™ Certified Coach. Upon agreement to move forward with the certification process, studio owners submit documentation of the following:
            <ul class="mt-2 mb-0 pb-0">
                <li>Proof of background checks for the studio owner and all staff members</li>
                <li>Proof of current First Aid/CPR certifications for the studio owner and all staff members</li>
                <li>Proof of completion of Stewards of Children® training by Darkness to Light</li>
                <li>Proof of completion of Youth Mental Health First Aid training for the studio owner</li>
                <li>Current copy of the studio’s Emergency Action Plan (EAP)</li>
                <li>Current copy of the studio’s business liability insurance, including sex abuse coverage</li>
                <li>Attendance at a two-hour YPAD™ Artistic Integrity training live on Zoom</li>
            </ul>
            <br><br>
            In addition to the above documentation provided by the studio owner, YPAD™ Certification for studios requires teachers and administrative staff to successfully complete YPAD™ Certification coursework. Studio owners can purchase as many or as few of these courses as needed.
            <br><br>
            YPAD™ Certification includes:
            <ul class="mt-2">
                <li>Unlimited FREE courses for guest teachers, substitute teachers, and volunteers</li>
                <li>Live Connection Chat webinars with YPAD™ Certified Coaches</li>
                <li>Live Spotlight Conversations webinars with guest subject matter experts</li>
                <li>Membership into a private Facebook group for questions and community support</li>
                <li>Personal 1:1 coaching calls and referrals as needed</li>
            </ul>
        </div>
    </div>

{{--    <div class="container py-5">--}}
{{--        <h2 class="text-uppercase">Studio owners, these are the steps to earn your YPAD™ Certified designation:</h2>--}}
{{--        <p class="fw-bold">It all starts here: with you, the studio owner, and these three steps.</p>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg">--}}
{{--                <span class="font-pop" style="font-size: 1.2em;">STEP ONE:</span> submit an application for your studio. The application is located at the bottom of this page. Once your application is approved (5-7 business days), you will receive an email with access to the order form.--}}
{{--                <br><br>--}}
{{--                <span class="font-pop" style="font-size: 1.2em;">STEP TWO:</span> complete the YPAD™ Certified Studio course, submit the reflections, and pass the knowledge checks with 90% proficiency. The YPAD&trade; Certified Studio course takes approximately 8-10 hours to complete. Your staff must also complete the appropriate courses for their role during step two (teacher or admin). They, too, will submit reflections and must pass knowledge checks with 90% proficiency. Depending on the role, staff courses take approximately 2-4 hours to complete.--}}
{{--                <br><br>--}}
{{--                <span class="font-pop" style="font-size: 1.2em;">STEP THREE:</span> complete the external training and documentation submission requirements listed below. Items with "*" indicate third-party provider and cost. Links to those programs are inside the course. Costs are outlined in the FAQ section below.--}}
{{--                <br><br>--}}
{{--                When your course(s) are complete and all documentation is submitted, your YPAD™ Certified Studio status will be confirmed and designated. Your status will remain active in our directory of YPAD™ Certified Studios as long as you remain in good standing and complete an annual renewal. If you choose to become certified, you are agreeing to self-regulation and to following YPAD’s 5-tier accountability model.--}}
{{--            </div>--}}
{{--            <div class="col-lg d-flex justify-content-center">--}}
{{--                <img src="/images/certification-steps.png" alt="graph" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


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
                    name="AMI YARO"
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
            <p class="text-center" style="color: #896C7B;">
                After your application is accepted and you complete the YPAD™ Certified Course, submit the reflections, and pass the knowledge checks with 90% proficiency, it is time to move on to STEP THREE: external training and documentation.
            </p>
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
                            Attendance at a live two-hour training via zoom regarding artistic integrity, plus three integration calls with your YPAD™ coach within the first year of earning your certification designation. Staff are also encouraged to attend the live training.
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
                                Need to hire a sub on short notice? This short course covers the essentials of what it means to teach at a YPAD™ Certified Studio.
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
                                Do you engage with volunteers? Use this brief course to educate them on the basics of classroom and performance safety.
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
                                Hiring guest or master teachers? Offer this simple course to share baseline expectations for teaching in a YPAD™ Certified environment.
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
                                <p class="text-center">
                                    Applications for the 2023-24 season close December 31, 2023. Applications for the 2024-25 season open July 1, 2024.
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
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-uppercase text-center">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is the difference between a YPAD™ education and certification?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        YPAD™ Education options provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement in your role. These options are designed to enhance personal and professional development, but do not lead to certification.
                        <br><br>
                        YPAD™ Certification is offered for three distinct groups: Studios, Individuals, and Events. Certification begins with an application and requires background checks, CPR/First Aid certification, Darkness to Light’s Stewards of Children® training, a Safeguarding Pledge, attendance at a live virtual artistic integrity seminar, and a commitment to YPAD™’s 5-tier accountability model. Additional requirements for studio owners and event owners include proof of insurance, emergency action planning, and Youth Mental Health First Aid certification.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        If I am becoming YPAD™ Certified, how much do the additional requirements cost?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Background check costs depend on the background screening company you choose and the individual being checked. Expect costs to start around $25 per person. For YPAD™ Certification purposes, background checks must be renewed every two years at minimum.
                        <br><br>
                        CPR/First Aid certification typically starts around $35 per person and must be renewed every two years at minimum. YPAD™ accepts online completion certificates.
                        <br><br>
                        Darkness to Light’s Stewards of Children® training is $16 per person, as of December 2023.
                        <br><br>
                        The cost for Youth Mental Health First Aid certification typically starts around $85 per person. Though this training is recommended for all who are certifying, YPAD™ only requires it for studio owners and event owners.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Does YPAD™ censor or regulate artistic choices?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        No. YPAD™ does not police the dance industry. Instead, YPAD™ aims to encourage thoughtful decision-making and discussions around developmentally appropriate and age-appropriate approaches to dance education and artistic integrity. YPAD™’s mission in safeguarding capacity-building helps everyone make better-informed choices for the well-being of dance students.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                        Can I be YPAD™ educated and not seek certification?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes. YPAD™ offers education options for everyone!</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        If I become YPAD™ Certified, how long is my certification valid?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">YPAD™ endorses continuing education and continuous improvement. Because of that, certification is valid from the date of your initial enrollment and must be renewed annually based on that date.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        What if I start YPAD™ certification and don’t finish?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">All YPAD™ coursework is asynchronous, meaning you can start, take a break, and restart anytime (though you will want to keep in mind your initial enrollment date; see previous question). Certification is only awarded, however, after all standards have been met.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                        If I become YPAD™ Certified, what does it mean to commit to the 5-tier accountability model?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The 5-tier accountability model is a system for collecting and addressing YPAD™-related concerns. When you become YPAD™ Certified, if a concern is shared with us about your organization, we will assess the matter and contact you so that you can learn and improve your practices. Serious problems may result in suspension or removal of certification status. To learn more, visit the Support page.</div>
                </div>
            </div>

        </div>
    </div>


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
