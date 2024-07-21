@extends('layouts.app-new')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-certification"></div>
        <div class="gradient-dark"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                YPAD™ Membership & Certification
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                Creating Safer Dance Communities
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
            <p class="text-center fw-bold" style="font-size: 1.5em;">
                We’re so glad you’re here!
            </p>
            <p class="text-center" style="font-size: 1.5em;">
                If you are a studio owner or dance educator interested in gaining deeper insights into student health, safety, and wellness, you are in the right place.
                <br><br>
                We offer both a YPAD™ Studio Membership Bundle and an Individual Membership. Additionally, studio owners or individuals who complete the course can choose to pursue the additional commitments to earn YPAD™ Certified designation.
                <br><br>
                If you are an event looking for membership or certification, please email us for more information.
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
{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">--}}
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 mt-5">
                <div>
                    <div class="d-flex align-items-center">
                        <img src="/images/studio-owner.jpg" alt="teacher with older dancers" class="img-fluid my-1">
                    </div>
                    <div>
                        <h2>YPAD™ Studio Member</h2>
                        <p class="fw-bold">Every Studio Membership includes a bundle of courses including the Studio Owner Certification Course, and unlimited Teacher and Admin Courses!</p>
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
                            <li>Strengthening the hiring process</li>
                            <li>Making smart hiring decisions</li>
                            <li>New hire categorization and documentation</li>
                            <li>Creating an onboarding process</li>
                            <li>Coaching and accountability</li>
                            <li>Professional development</li>
                            <li>Making secure decisions and managing risk</li>
                            <li>Creating an Emergency Action Plan</li>
                            <li>Safety preparedness for offsite events</li>
                            <li>Plus! Specific materials for administrators</li>
                        </ul>
                        <a href="https://yv686.infusionsoft.com/app/orderForms/YPAD-Membership" class="text-decoration-none rr-btn" target="_blank" style="width: 100%;">
                            <button class="rounded fw-bold px-2 py-2 shadow text-center" style="background: #067997; font-size: 0.9em; color: white; height: auto; width: 315px;">Become a YPAD™ Studio Member</button>
                        </a>
                        <small class="text-muted ms-2">$99/mo</small>
                    </div>
                    <small>
                        <br>
                        ​​*Terms and Conditions – By purchasing a membership you are committing to a 12-month membership term (“Initial Term”). You may not cancel your membership during the Initial Term. At the end of the 12-month Initial Term this membership will automatically be renewed and continue on a month-by-month basis unless terminated by us or in writing by you by sending an email to info@ypadnow.com in accordance with its terms. You consent to our charging your payment method on a recurring basis without requiring your prior approval for each recurring charge.
                        <a href="/images/terms-and-conditions-ypad.pdf" target="_blank">See full terms and conditions</a>
                    </small>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <img src="/images/educator.jpg" alt="teacher with older dancers" class="img-fluid my-1">
                    </div>
                    <div>
                        <h2>YPAD™ Individual Member</h2>
                        <p class="fw-bold">Become an Individual Member and gain access to our Educator Course and a variety of resources.</p>
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
                        <a href="https://yv686.infusionsoft.com/app/orderForms/Individual-Teacher-Certification" class="text-decoration-none rr-btn" target="_blank" style="width: 100%;">
                            <button class="rounded fw-bold px-2 py-2 shadow text-center" style="background: #067997; font-size: 0.9em; color: white; height: auto; width: 315px;">Become a YPAD™ Individual Member</button>
                        </a>
                        <small class="text-muted ms-2">$39/mo</small>
                    </div>
                    <small>
                        <br>
                        ​​*Terms and Conditions – By purchasing a membership you are committing to a 12-month membership term (“Initial Term”). You may not cancel your membership during the Initial Term. At the end of the 12-month Initial Term this membership will automatically be renewed and continue on a month-by-month basis unless terminated by us or in writing by you by sending an email to info@ypadnow.com in accordance with its terms. You consent to our charging your payment method on a recurring basis without requiring your prior approval for each recurring charge.
                        <a href="/images/terms-and-conditions-ypad.pdf" target="_blank">See full terms and conditions</a>
                    </small>
                </div>
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
                    firstName="Darcy"
                    lastName="Fagerwold"
                    title="Studio Owner, California"
                    quote="YPAD™ certification is evidence to families that we are committed to keeping kids healthy and safe in dance. It is comforting to know that as challenging issues arise, YPAD™ is there to support and guide us to ensure we are doing what's right for our students. Thank you to YPAD™ for leading the dance industry in this vital endeavor!"
                />
                <x-orange
                    image="kate.png"
                    firstName="Kate"
                    lastName="Moody"
                    title="Studio Owner, Wisconsin"
                    quote="If you haven't completed a YPAD™ course yet, do it! We had a loaded gun incident at the local high school this morning (everything is okay). But the thought that something could happen so close, is so scary. As hard as it was to learn what to do in a situation like this, I am proud that we had YPAD™ training to rely on. Thank you, YPAD™ team and experts, for all the great knowledge and resources in the YPAD™ course!"
                />
            </div>
            <div class="row my-2">
                <x-orange
                    image="amy.png"
                    firstName="AMI"
                    lastName="YARO"
                    title="Studio Owner, Iowa"
                    quote="I'm a studio owner, but I wanted to start with YPAD™ education first before choosing to certify my studio. This allowed me to get to know the coursework and to implement best practices in my studio. YPAD™ has given me a community of like-minded dance professionals who choose to put the wellness and safety of their students as a top priority."
                />
                <x-orange
                    image="neisha.jpeg"
                    firstName="NEISHA"
                    lastName="HERNANDEZ"
                    title="Studio Owner, California"
                    quote="Being a YPAD™ Certified Studio is essential to my business culture. Our parents and families are confident that my studio is intentionally focused on keeping their kids healthy and safe. YPAD™ has extensive resources and ongoing education opportunities have been integral in carrying out our mission of Encouraging Kids to Lead Inspired Lives!"
                />
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center">For Members Interested in Becoming YPAD™ Certified</h2>
        <p class="text-muted text-center">Details and instructions included in membership</p>
        <div class="row my-4">
            <div class="col-sm">
                <div class="m-4" style="font-size: 1.5em;">
                    <div class="d-flex justify-content-center">
                        <ion-icon name="checkbox-outline" style="font-size: 2.5em;"></ion-icon>
                    </div>
                    <p class="fw-bold text-center py-0 my-0">Studio Owner Certification Commitments</p>
                    <ul class="py-0 my-0" style="list-style-type: none;">
                        <li><ion-icon name="checkmark-outline"></ion-icon> Background checks</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> YPAD™ Certified courses</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> First Aid/CPR certifications</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> Stewards of Children® training by D2L</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> Youth Mental Health First Aid training</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> Emergency Action Plan (EAP)</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> Business liability insurance</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> YPAD™ Artistic Integrity training</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm">
                <div class="m-4" style="font-size: 1.5em;">
                    <div class="d-flex justify-content-center">
                        <ion-icon name="checkbox-outline" style="font-size: 2.5em;"></ion-icon>
                    </div>
                    <p class="fw-bold text-center py-0 my-0">Individual Certification Commitments</p>
                    <ul class="py-0 my-0" style="list-style-type: none;">
                        <li><ion-icon name="checkmark-outline"></ion-icon> Background checks</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> YPAD™ Certified courses</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> First Aid/CPR certifications</li>
                        <li><ion-icon name="checkmark-outline"></ion-icon> Stewards of Children® training by D2L</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="py-5 container text-white d-flex align-items-center">
            <div>
                <h2 class="text-uppercase text-center pt-4">FREE BONUS RESOURCES FOR YPAD&trade; CERTIFIED STUDIOS</h2>
                <div class="row row-cols-4 row-cols-sm-4 row-cols-md-4 row-cols-lg-4 mt-4">
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="school"></ion-icon>
                            </div>
                            <p class="text-center py-0 my-0">
                                Unlimited FREE courses for guest teachers, substitute teachers, and volunteers
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="people"></ion-icon>
                            </div>
                            <p class="text-center py-0 my-0">
                                Live Spotlight Conversations webinars with industry experts.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="mx-4 my-2">
                            <div class="d-flex justify-content-center">
                                <ion-icon style="font-size: 3em;" name="people-circle"></ion-icon>
                            </div>
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
                        The YPAD™ Educator and YPAD™ Studio Owner courses offer educational pathways that provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement. These courses are designed to enhance both personal and professional development.
                        <br><br>Becoming a YPAD™ Certified Studio goes a step beyond education. The certification process includes completing the YPAD™ Studio Owner course and submitting comprehensive documentation demonstrating the studio owner’s commitment to health, safety, and wellness.
                        <br><br>The studio owner membership costs $99 per month with a 12-month commitment, and it will automatically renew. Certified studios and individuals are required to complete a yearly check-in to maintain their certification.
                        <br><br>Individual membership is available for $39 per month with a 12-month commitment, and it will also automatically renew. Certified individuals must also complete a yearly check-in to ensure all requirements are met and up-to-date.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Does YPAD™ certify individuals?
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Yes, YPAD™ does certify individuals! Individuals are invited to complete the YPAD™ Educator Individual Course. This certification requires a one-year commitment to our membership, which will automatically renew. Additionally, there will be a yearly check-in to ensure all requirements are met and up-to-date.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Does YPAD™ regulate artistic choices?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        No, YPAD™ does not police the dance industry. Instead, YPAD™ aims to encourage thoughtful decision-making and discussions around developmentally appropriate and age-appropriate approaches to dance education and artistic integrity. YPAD™’s mission in safeguarding capacity-building helps everyone make better-informed choices for the well-being of dance students.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How much do the additional requirements to become a YPAD™ Certified Studio cost?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Background check costs depend on the background screening company you choose and the individual being checked. Expect costs to start around $25 per person. For YPAD™ Certified Studios, background checks must be renewed every two years at minimum.
                        <br><br>
                        CPR/First Aid certification typically starts around $35 per person and must be renewed every two years at minimum. YPAD™ accepts online completion certificates.
                        <br><br>
                        Darkness to Light’s Stewards of Children® training is $16 per person, as of July 2024, and is completed once.
                        <br><br>
                        The cost for Youth Mental Health First Aid certification typically starts around $85 per person. Though this training is recommended for everyone.
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        How long is the certification valid if my studio becomes YPAD™ Certified?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        YPAD™ promotes ongoing education and continuous improvement. Therefore, after an initial one-year commitment, your certification will automatically renew monthly. Additionally, there will be a yearly check-in to ensure all requirements are current and new staff have completed the necessary training, ensuring your studio remains certified.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        What if I start on my milestones to becoming a YPAD™ Certified Studio and don't finish?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        All YPAD™ coursework is asynchronous, meaning you can start, take a break, and restart anytime. The designation of YPAD™ Certified Studio is only awarded, however, after all coursework and documentation submissions have been approved.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                        If I choose to become a YPAD™ Certified Studio, what does it mean to commit to the 5-tier accountability model?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        The 5-tier accountability model is a system for collecting and addressing YPAD™-related concerns. When you become a YPAD™ Certified Studio, if a concern is shared with us about your organization, we will assess the matter and contact you so that you can learn and improve your practices. Serious problems may result in suspension or removal of certification status. To learn more, visit our
                        <a href="/support">Support</a> page.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is the process for becoming a YPAD™ Certified Event?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        The process for becoming a YPAD™ Certified Event is similar to becoming a YPAD™ Certified Studio but tailored specifically to the unique aspects of conventions and competitions. Stay tuned for when the next cohort becomes available.
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
