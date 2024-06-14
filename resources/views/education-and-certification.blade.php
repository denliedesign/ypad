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
                Choose from our <strong>4-module Educator Course</strong> or our <strong>8-module Studio Owner Course</strong> to enhance your knowledge. Additionally, studio owners who complete their course can choose to pursue <strong>YPAD™ Certification</strong> for their studio.
            </p>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div>
                <h3 class="text-white text-center pt-4">
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
{{--        <div>--}}
{{--            In addition to the above documentation provided by the studio owner, YPAD™ Certification for studios requires teachers and administrative staff to successfully complete YPAD™ Certification coursework. Studio owners can purchase as many or as few of these courses as needed.--}}
{{--            <br><br>--}}
{{--            YPAD™ Certification includes:--}}
{{--            <ul class="mt-2">--}}
{{--                <li>Unlimited FREE courses for guest teachers, substitute teachers, and volunteers</li>--}}
{{--                <li>Live Connection Chat webinars with YPAD™ Certified Coaches</li>--}}
{{--                <li>Live Spotlight Conversations webinars with guest subject matter experts</li>--}}
{{--                <li>Membership into a private Facebook group for questions and community support</li>--}}
{{--                <li>Personal 1:1 coaching calls and referrals as needed</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
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
                    quote="Youth Protection Association for Dance™ education is evidence to families that we are committed to keeping kids healthy and safe in dance. It is comforting to know that as challenging issues arise, YPAD™ is there to support and guide us to ensure we are doing what's right for our students. Thank you to Youth Protection Association for Dance™ for leading the dance industry in this vital endeavor!"
                />
                <x-orange
                    image="kate.png"
                    name="Kate Moody"
                    title="Studio Owner, Wisconsin"
quote="If you haven't completed a YPAD™ course yet, do it! We had a loaded gun incident at the local high school this morning (everything is okay). But the thought that something could happen so close, is so scary. As hard as it was to learn what to do in a situation like this, I am proud that we had YPAD™ training to rely on. Thank you, YPAD™ team and experts, for all the great knowledge and resources in the YPAD™ course!"
                />
            </div>
            <div class="row my-2">
                <x-orange
                    image="amy.png"
                    name="AMI YARO"
                    title="Studio Owner, Iowa"
quote="I'm a studio owner, but I wanted to start with YPAD™ education first before choosing to certify my studio. This allowed me to get to know the coursework and to implement best practices in my studio. YPAD™ has given me a community of like-minded dance professionals who choose to put the wellness and safety of their students as a top priority."
                />
                <x-orange
                    image="neisha.jpeg"
                    name="NEISHA HERNANDEZ"
                    title="Studio Owner, California"
quote="Being a YPAD™ Certified studio is essential to my business culture. Our parents and families are confident that my studio is intentionally focused on keeping their kids healthy and safe. YPAD™'s extensive resources and ongoing education opportunities have been integral in carrying out our mission of Encouraging Kids to Lead Inspired Lives!"
                />
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
{{--            <p class="text-center" style="color: #896C7B;">--}}
{{--                After your application is accepted and you complete the YPAD™ Certified Course, submit the reflections, and pass the knowledge checks with 90% proficiency, it is time to move on to STEP THREE: external training and documentation.--}}
{{--            </p>--}}
            <div class="col-sm my-3">
                <div>
                    <p class="text-center">
                        Studio owners who are interested in pursuing YPAD™ Studio Certification should complete the YPAD™ Studio Owner Course first and then submit the designated form at completion of the final lesson.
                        <br><br>
                        YPAD™ Studio Certification requires the successful completion of the YPAD™ Studio Owner Course followed by a Discovery Call with a YPAD™ Certified Coach. Upon agreement to move forward with the certification process, studio owners submit documentation of the following:
                    </p>
                </div>
                <div class="mt-5">
                    <x-checkmark item="Proof of background checks for the studio owner and all staff members" />
                    <x-checkmark item="Proof of current First Aid/CPR certifications for the studio owner and all staff members" />
                    <x-checkmark item="Proof of completion of Stewards of Children® training by Darkness to Light" />
                    <x-checkmark item="Proof of completion of Youth Mental Health First Aid training for the studio owner" />
                    <x-checkmark item="Current copy of the studio’s Emergency Action Plan (EAP)" />
                    <x-checkmark item="Current copy of the studio’s business liability insurance, including sex abuse coverage" />
                    <x-checkmark item="Attendance at a two-hour YPAD™ Artistic Integrity training live on Zoom" />
                </div>
            </div>
            <p class="text-center pt-4">In addition to the above documentation provided by the studio owner, YPAD™ Studio Certification requires teachers and administrative staff to successfully complete YPAD™ Studio Certification coursework. Studio owners can purchase as many or as few of these courses as needed according to the size of their staff. If as a studio owner you choose to become YPAD™ Certified Studio, you are agreeing to self-regulation and to following YPAD™’s 5-tier accountability model.</p>

        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="py-5 container text-white d-flex align-items-center">
            <div>
                <h2 class="text-uppercase text-center pt-4">FREE BONUS RESOURCES FOR YPAD&trade; CERTIFIED STUDIOS</h2>
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-5 row-cols-lg-5 mt-4">
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
                                <ion-icon style="font-size: 3em;" name="people"></ion-icon>
                            </div>
{{--                            <p class="fw-bold text-center py-0 my-0">GUEST TEACHER COURSE</p>--}}
                            <p class="text-center py-0 my-0">
                                Live Spotlight Conversations webinars with guest subject matter experts
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
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="call"></ion-icon>
                            </div>
                            {{--                            <p class="fw-bold text-center py-0 my-0">GUEST TEACHER COURSE</p>--}}
                            <p class="text-center py-0 my-0">
                                Personal 1:1 coaching calls and referrals as needed
                            </p>
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
                        The YPAD™ Educator and the YPAD™ Studio Owner courses are educational options that provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement. These options are designed to enhance personal and professional development.
                        <br><br>
                        YPAD™ Certification is a step beyond education! The certification process entails completion of YPAD™ Studio Owner course, followed by a Discovery Call with one of our Certified Coaches, and the submission of a robust series of documentation proving the studio owner’s commitment to health, safety, and wellness at the studio.
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
                        No, YPAD™ does not police the dance industry. Instead, YPAD™ aims to encourage thoughtful decision-making and discussions around developmentally appropriate and age-appropriate approaches to dance education and artistic integrity. YPAD™’s mission in safeguarding capacity-building helps everyone make better-informed choices for the well-being of dance students.
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
                    <div class="accordion-body">
                        All YPAD™ coursework is asynchronous, meaning you can start, take a break, and restart anytime. Certification is only awarded, however, after all coursework and documentation submissions have been approved.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                        If I become YPAD™ Certified, what does it mean to commit to the 5-tier accountability model?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        The 5-tier accountability model is a system for collecting and addressing YPAD™-related concerns. When you become YPAD™ Certified, if a concern is shared with us about your organization, we will assess the matter and contact you so that you can learn and improve your practices. Serious problems may result in suspension or removal of certification status. To learn more, visit our
                        <a href="/support">Support</a> page.
                    </div>
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
