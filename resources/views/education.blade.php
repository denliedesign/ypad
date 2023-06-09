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
                Education is a great place to start your YPAD™ journey!
            </p>
            <p>
                At YPAD™, we understand the crucial role adults play in shaping the lives of youth dancers. That’s why YPAD™ believes education in safeguarding capacity-building should be available to everyone, even if they are not seeking certification.
                <br><br>
                Whether you are an individual, studio owner, parent, dance professional, leader of a dance organization, or college director, we encourage you to engage with the various materials, links, and courses on our Education page.
                <br><br>
                Education courses are just as they sound: a place to learn. Education courses will be available in the Fall of 2023.
            </p>
        </div>
    </div>

    <div class="orange py-5 text-white">
        @include('_divider-top')
        @include('_divider-bottom')
        <x-testimonial
            image="edu-tiffany-2.jpg"
            quote="As a studio owner and former professional dancer, I believe it's essential that everyone in the dance industry–from parents to professionals– have access to education and information to help support healthy dance experiences for kids. YPAD™ makes education accessible to everyone."
            person="Tiffany Prout-Leitao"
            place="Center Stage Dance Academy, MA"
        />
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
            <div class="col-sm">
                <h2 class="text-center">Education empowers</h2>
                <p class="text-center">
                    Why is safety and wellness education vital?
                    <br><br>
                    Adults hold the responsibility of safeguarding the well-being of young dancers under your guidance. By equipping yourself with more knowledge on dance-related health and safety practices, you can create a secure space where dancers can thrive and explore their passion without unnecessary risks. By prioritizing the overall well-being of young dancers, you'll empower them to excel in dance and lead balanced and fulfilling lives.
                    <br><br>
                    Our team of experienced instructors, well-versed in dance science, injury prevention, and youth well-being, delivers engaging workshops, seminars, and online courses. These programs provide practical insights, evidence-based knowledge, and innovative teaching methodologies that you can immediately implement in your role.
                    <br><br>
                    YPAD™Educational courses and seminars do not lead to YPAD™ Certification but enhance professional and personal development!
                </p>
            </div>
            <div class="col-sm d-flex align-items-center justify-content-center">
                <div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Student Seminars
                        </div>
                        <hr class="my-3">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Parent Seminars
                        </div>
                        <hr class="my-3">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            College Seminars for Emerging Professionals
                        </div>
                        <hr class="my-3">
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-1">--}}
{{--                            <ion-icon name="checkmark-circle"></ion-icon>--}}
{{--                        </div>--}}
{{--                        <div class="col-11">--}}
{{--                            Topical Online Courses for Dance Professionals--}}
{{--                        </div>--}}
{{--                        <hr class="my-3">--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-1">
                            <ion-icon name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="col-11">
                            Seminars for Dance Organizations
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div>
                <h2 class="text-uppercase text-center text-white">FREE RESOURCES</h2>
                <p class="text-center text-white">
                    Not ready to take a course or become YPAD™ yet? That's okay, we are still here to help you get started on your journey. The following downloads are free so you can begin taking tangible steps toward healthier businesses and safer classrooms today! Please share with your friends and colleagues. As the saying goes, "A rising tide floats all boats." Every extra measure of safeguarding capacity-building in the dance community helps make the future better for our students.
                    Revisit this page throughout the school year to find updated and new resources.
                </p>
                <div>
{{--                    <ol class="text-white">--}}
{{--                        <li class="my-2">--}}
{{--                            <a style="color: #067997;" href="/images/resource-employee-checklist.pdf" target="_blank">--}}
{{--                                <h4>Checklist for onboarding a new employee</h4>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="my-2">--}}
{{--                            <a style="color: #067997;" href="/images/resource-social-checklist.pdf" target="_blank">--}}
{{--                                <h4>Checklists for social media policies</h4>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="my-2">--}}
{{--                            <a style="color: #067997;" href="/images/resource-bully.pdf" target="_blank">--}}
{{--                                <h4>Is it bullying?</h4>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="my-2">--}}
{{--                            <a style="color: #067997;" href="/images/resource-costume.pdf" target="_blank">--}}
{{--                                <h4>Costuming for confidence</h4>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="my-2">--}}
{{--                            <a style="color: #067997;" href="/images/resource-hair.pdf" target="_blank">--}}
{{--                                <h4>The importance of inclusive hairstyles</h4>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ol>--}}
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/images/resource-costume.pdf" class="text-decoration-none">
                                    <div class="fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Costuming for confidence</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm my-2">
                            <div class="d-flex justify-content-center mx-2">
                                <a href="/images/resource-hair.pdf" class="text-decoration-none">
                                    <div class="fw-bold px-3 py-2 shadow text-center" style="background: #067997; color: white;">Importance of inclusive hairstyles</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm"></div>
                    </div>
                </div>
            </div>
{{--            <div class="row mt-3">--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                        <div class="text-white text-center">--}}
{{--                            <h2 class="text-uppercase">Start your learning journey today!</h2>--}}
{{--                            <div class="d-flex justify-content-center">--}}
{{--                                <div class="fw-bold px-4 py-2 shadow text-center" style="background: #067997; color: white;">Get Started Now</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="py-5 container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-3 py-3" style="background: #067997;">
                <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                    <h2 class="text-uppercase">YPAD™ ALSO SERVES THE DANCE COMMUNITY IS BY OFFERING FREE COLLEGE SEMINARS FOR DANCE MAJORS</h2>
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
                        <h4 class="text-center py-0 my-0"><strong>Mr. Richard Smith</strong> <br> Visiting Professor at East Carolina University <br> School of Theatre and Dance</h4>
                        <p class="text-center pb-0 pt-2 my-0"><em>
                                “I am completely impressed with the delivery of the presentation by the YPAD&trade; team. They make the information easily digestible, positive and inviting. The feedback from the students was genuinely eye opening. The YPAD&trade; team sheds new light on how we can be better as educators and leaders in the industry. Much praise was shared in the talkback after the workshop was completed. I am so pleased with the presentation and look forward to having the students participate in additional resources from YPAD&trade;.” <br><br>
                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5 text-white">
        @include('_divider-top')
        <x-testimonial
            image="sammi.jpg"
            quote="I am proud and grateful to be part of an organization that serves to educate, equip, and empower the dance industry to create safe environments and experiences for children."
            person="Sammi Rader"
            place="MSW and Dance Educator"
        />
    </div>

@endsection
