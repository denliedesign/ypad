@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-education"></div>
        <div class="gradient"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                Welcome to YPAD™ Education
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                YPAD&trade; believes education in safeguarding capacity-building should be available to everyone
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
                Welcome! A YPAD™ Education is a great place to start your learning journey!
            </p>
            <p>
                At YPAD™, we understand the crucial role adults play in shaping the lives of youth dancers. That’s why YPAD™ believes education in safeguarding capacity-building should be available to everyone, even if they are not seeking certification. Equipping yourself with a strong knowledge base means you can create a supportive and safe environment in which dancers can thrive without unnecessary risk.
                <br><br>
                YPAD™ Education options provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement in your role. While these options do not lead to certification, they do enhance your personal and professional development.
                <br><br>
                Whether you are a studio owner, parent, dance professional, leader of a dance organization, college director, or other industry contributor, use the materials here to jumpstart or expand your knowledge of health, safety, and wellness in dance.

            </p>
{{--            <p>--}}
{{--                At YPAD™, we understand the crucial role adults play in shaping the lives of youth dancers. That’s why YPAD™ believes education in safeguarding capacity-building should be available to everyone, even if they are not seeking certification.--}}
{{--                <br><br>--}}
{{--                Whether you are a studio owner, parent, dance professional, leader of a dance organization, college director, or other industry contributor, use the materials here to jumpstart or expand your knowledge of health, safety, and wellness in dance.--}}
{{--            </p>--}}
        </div>
    </div>

{{--    <div class="orange py-5 text-white">--}}
{{--        @include('_divider-top')--}}
{{--        @include('_divider-bottom')--}}
{{--        <div class="container pt-5">--}}
{{--            <div class="row py-5" id="about-checkmarks">--}}
{{--                <div class="col-sm">--}}
{{--                    <h2 class="text-center">Education empowers</h2>--}}
{{--                    <p class="text-center">--}}
{{--                        Why is safety and wellness education essential in the dance industry?--}}
{{--                        <br><br>--}}
{{--                        Adults hold the responsibility of safeguarding young dancers. Equipping yourself with a strong knowledge base means you can create a supportive and safe environment in which dancers can thrive without unnecessary risk. By prioritizing your students’ well-being, you'll empower them to excel in dance and lead balanced and fulfilling lives.--}}
{{--                        <br><br>--}}
{{--                        YPAD™ Education options provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement in your role. While these options do not lead to certification, they do enhance your personal and professional development.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-sm d-flex align-items-center justify-content-center">--}}
{{--                    <div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1">--}}
{{--                                <ion-icon name="checkmark-circle"></ion-icon>--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                Downloadable resources for parents and industry professionals--}}
{{--                            </div>--}}
{{--                            <hr class="my-3">--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1">--}}
{{--                                <ion-icon name="checkmark-circle"></ion-icon>--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                Microlearnings for parents and industry professionals--}}
{{--                            </div>--}}
{{--                            <hr class="my-3">--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1">--}}
{{--                                <ion-icon name="checkmark-circle"></ion-icon>--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                Seminars for dance events and organizations--}}
{{--                            </div>--}}
{{--                            <hr class="my-3">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container text-white pt-5">
            <div class="py-5">
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <h2 class="text-uppercase text-center">FREE RESOURCES</h2>
                <p class="text-center">
                    Get started on your YPAD™ Education journey here! These resources, developed from topical YPAD™ research and backed by subject matter experts, are designed to help you make more knowledgeable decisions about safety, health, and wellness in dance.
                    <br><br>
                    Check back often for newly added materials!
                </p>
                <div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
{{--                                <a href="/images/resource-costume.pdf" class="text-decoration-none">--}}
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Costuming for confidence</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
{{--                                <a href="/images/resource-hair.pdf" class="text-decoration-none">--}}
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Inclusive hairstyles importance</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Gross motor skill milestones</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Building mental strength</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Understanding age compression</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">A body positive environment</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Safe movement in dance</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/resources" class="text-decoration-none">
                                    <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Best practices for hiring</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <h2 class="text-uppercase text-center">Spotlight Conversations</h2>
                <p class="text-center">
                    These half-hour seminars feature a guest speaker industry professional and are facilitated by a YPAD™ Certified Coach. Each seminar includes relevant and topical education for dance parents, teachers, and studio owners.
                    <br><br>
                    Admission is $10. If you are YPAD™ Certified, attend for free!
                    <br><br>
{{--                    How to Choose Healthy Dance Programs for Your Child--}}
{{--                    <br>Wednesday, January 24, 2024 from 12:30-1:00PM CT--}}
{{--                    <br><a href="https://yv686.infusionsoft.com/app/orderForms/39cc080b-ca30-47c4-9424-eb6a728ed5da" target="_blank">Sign up here to attend!</a>--}}
                </p>
                <div class="row card-group">
                    <div class="col-sm card rounded p-3 mx-3" style="box-shadow: 0 0 6px 2px #767784;">
                        <div class="card-body">
                            <h3 class="text-center text-muted">
                                How to Choose Healthy Dance Programs for Your Child
                            </h3>
                            <p class="text-center text-muted">
                                <em>Recording available for purchase soon.</em>
                            </p>
                        </div>
                        <div class="d-flex justify-content-center card-footer" style="background: white; border-top: none;">
                            <a class="text-decoration-none disabled">
                                <button disabled class="rounded fw-bold px-3 py-2 shadow text-center text-white" style="background: #767784; width: 215px;">Completed!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm card rounded p-3 mx-3" style="box-shadow: 0 0 6px 2px #067997;">
                        <div class="card-body">
                            <h3 class="text-center">
                                How to Approach Your Studio Owner or Teacher with Questions
                            </h3>
                            <p class="text-center">
                                Wednesday, February 28, 2024 from 12:00-12:30PM CT
                            </p>
                        </div>
                        <div class="d-flex justify-content-center card-footer" style="background: white; border-top: none;">
                            <a href="https://yv686.infusionsoft.com/app/orderForms/14d98aa6-d4fe-4125-813c-59385812c4f4" target="_blank" class="text-decoration-none">
                                <button class="rounded fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white; width: 215px;">Sign up here to attend!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container text-white pt-5">
            <div class="py-5">
                <h2 class="text-uppercase text-center">Microlearnings</h2>
                <p class="text-center">
                    YPAD™ Microlearnings are short, interactive, affordable courses devoted to singular topics and designed to help you learn without a long commitment! Whether you are a parent, studio owner, teacher, or other industry professional, you will find that YPAD™ Microlearnings provide eye-opening insights into key areas of dancer health and well-being.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="https://yv686.infusionsoft.com/app/orderForms/2f9f0267-2ecb-4c27-af0b-da55c80e8002" target="_blank" class="text-decoration-none">
                        <button class="rounded fw-bold px-3 mx-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Counteract Age Compression</button>
                    </a>
                    <a href="https://yv686.infusionsoft.com/app/orderForms/2f9f0267-2ecb-4c27-af0b-da55c80e8002" target="_blank" class="text-decoration-none">
                        <button class="rounded fw-bold px-3 mx-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px;">Safe Movement in Dance</button>
                    </a>
                </div>
                <p class="text-center mt-3">
                    <em>Check back often for new releases!</em>
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <h2 class="text-uppercase text-center">YPAD™ Learner Course</h2>
                <p class="text-center">
                    If you are interested in learning deeper content about student health, safety, and wellness—but you’re not interested in certification—then this YPAD™ Learner Course is for you!
                    <br><br>
                    For just $199, gain access to eight modules and 24 lessons about best practices in hiring, staff training, facility safety, abuse protection, injury reduction, body image, mental strength, communications, artistic integrity, and more.
                    <br><br>
                    There are no document submissions or knowledge checks for this course. As such, this course does not lead to certification. If at any time during this course you would like to switch to certification, your purchase of this course can transfer. Email <a href="mailto:certification@ypadnow.com?subject=Learner%20Course%20Assistance">certification@ypadnow.com</a> for assistance.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="https://yv686.infusionsoft.com/app/orderForms/5dd6fad3-fea7-4af6-9145-50bdb1c02bf7" target="_blank" class="text-decoration-none">
                        <button class="rounded fw-bold px-2 mx-3 py-2 shadow text-center" style="background: #067997; color: white; width: 289px; font-size: 0.95em;">Purchase the YPAD™ Learner course</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <x-testimonial
            image="edu-tiffany-2.jpg"
            quote="As a studio owner and former professional dancer, I believe it's essential that everyone in the dance industry—from parents to professionals—have access to education and information to help support healthy dance experiences for kids. YPAD™ makes education accessible to everyone."
            person="Tiffany Prout-Leitao"
            place="Center Stage Dance Academy, MA"
        />
    </div>

    <div class="py-5 container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-3 py-3" style="background: #067997;">
                <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                    <h2 class="text-uppercase">YPAD™ ALSO SERVES THE DANCE COMMUNITY BY OFFERING FREE COLLEGE SEMINARS FOR DANCE MAJORS</h2>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #767784; color: white;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/edu-featured-1.jpeg" alt="" class="img-fluid" style="border: 6px solid #767784; height: 394px; width: 100%; object-fit: cover;"></div>
                    <div class="px-3 pt-3">
                        <h4 class="text-center py-0 my-0"><strong>Matthew Farmer</strong> <br> Department Chair <br> Hope College</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                "YPAD&trade;’s seminar for dancers is an essential conversation and educational session for all dance students in college. The information presented is pertinent and necessary for any dance student wishing to enter the performance industry. Conversations regarding power differentials, grooming, and sexual harassment are just some of the important topics covered, and the tools YPAD&trade; gives young dancers in order to address these issues are both concrete and applicable."
                            </em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #EF9A60; color: white;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/edu-featured-2.jpg" alt="" class="img-fluid" style="border: 6px solid #EF9A61; height: 394px; width: 100%; object-fit: cover;"></div>
                    <div class="px-3 pt-3">
                        <h4 class="text-center py-0 my-0"><strong>Aidan S. Nettles, MFA</strong> <br> Assistant Professor of Dance <br> The University of Alabama</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                “The team at YPAD&trade; facilitates an outstanding seminar to share information and resources with college students and future educators that are paramount for dancer safety. I find it imperative to equip my students to think critically, ask challenging questions, and to learn how to make positive contributions to the future of dance, and this experience afforded them the opportunity to exercise those skills. YPAD&trade;’s college seminar provides a space for young educators to engage with challenging topics in a supported environment. I encourage all collegiate educators to take advantage of providing this experience!”
                            </em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm my-3">
                <div style="background: #896C7B; color: white; font-size: 0.98em;" class="pb-4">
                    <div class="d-flex justify-content-center"><img src="/images/edu-featured-3.jpg" alt="" class="img-fluid" style="border: 6px solid #896C7B; height: 394px; width: 100%; object-fit: cover;"></div>
                    <div class="px-3 pt-3 pb-1">
                        <h4 class="text-center py-0 my-0"><strong>Richard Smith</strong> <br> Visiting Professor<br>East Carolina University</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                “I am completely impressed with the delivery of the presentation by the YPAD&trade; team. They make the information easily digestible, positive and inviting. The feedback from the students was genuinely eye opening. The YPAD&trade; team sheds new light on how we can be better as educators and leaders in the industry. Much praise was shared in the talkback after the workshop was completed. I am so pleased with the presentation and look forward to having the students participate in additional resources from YPAD&trade;.” <br><br>
                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange pt-5 text-white">
        @include('_divider-top')
        <x-testimonial
            image="sammi.jpg"
            quote="I am proud and grateful to be part of an organization that serves to educate, equip, and empower the dance industry to create safe environments and experiences for children."
            person="Sammi Rader"
            place="MSW and Dance Educator"
        />
    </div>

@endsection
