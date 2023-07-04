@extends('layouts.app')
@section('content')

    <div style="background: #767784;" class="py-3 text-white d-flex justify-content-center align-items-center">
        <div class="container">
            <p class="my-0 py-0 text-center">
                Now accepting studio certification renewals and new studio certification applications!
            </p>
        </div>
    </div>

    <div id="header">
        <div class="gradient-fade"></div>
        <div id="header-heading">
            <h1 class="text-center px-5 d-none d-md-block">Helping dance industry leaders create safeguarding capacity-building</h1>
            <h2 class="text-center px-5 d-md-none">Helping dance industry leaders create safeguarding capacity-building</h2>
            <div class="d-flex justify-content-center">
{{--                <div class="fw-bold px-4 py-2 shadow" style="background: #EF9A60; color: white;">Try A Free Course</div>--}}
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col my-3 py-3" style="background: #067997;">
                    <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                        <h2 class="text-uppercase">Personal Growth & Professional Development Opportunities for:</h2>
                    </div>
                </div>
                <div class="col my-3"><img src="/images/ypad-individuals.png" alt="" class="img-fluid" style="border: 6px solid #767784;"></div>
                <div class="col my-3"><img src="/images/ypad-studios.png" alt="" class="img-fluid" style="border: 6px solid #EF9A61;"></div>
                <div class="col my-3"><img src="/images/ypad-events.png" alt="" class="img-fluid" style="border: 6px solid #896C7B;"></div>
            </div>
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
                            <h3>The mission of YPAD™ is to bring awareness to and provide guidance for one essential priority: <strong>the safety and health of dance students.</strong> We believe dancer well-being is the cornerstone of the industry, and we exist to serve those who have influence on its classrooms.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 welcome-icons">
        <div class="container">

            <div class="py-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col my-3 py-3" style="background: #067997;">
                            <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                                <h2 class="text-uppercase">Professionals Agree, Safeguarding Is Important</h2>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div style="background: #767784; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/sheyi.png" alt="" class="img-fluid" style="border: 6px solid #767784; height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Dr. Sheyi Ojofeitimi, DPT, CFMT, CIDN</strong> <br> Director of Therapy Services <br> Alvin Ailey Dance Foundation</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “It will take an army to change the narrative. We know we can have the biggest impact through teachers because they are in the trenches of daily class, rehearsal, and performance with young dancers.”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div style="background: #EF9A60; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/gomez-23.jpeg" alt="" style="border: 6px solid #EF9A61; height: 394px; width: 100%; object-fit: cover; object-position: 50% 15%;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Tricia Gomez</strong> <br> Rhythm Works Integrative Dance <br> The Intellidance Method</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “If every teacher had this education, we would be well on our way to setting self-guided, industry standards that are on par with schools and other child-centered activities. ”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div style="background: #896C7B; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/addie.png" alt="" class="img-fluid" style="border: 6px solid #896C7B; height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Dr. Addie Briggs, M.D.</strong> <br> Founder <br> Fitness DAWGS</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “As a pediatrician, I have long advocated for healthy kids. Safe movement is so important to their growing bodies and they need teachers who can show them the way forward patiently. ”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-sm">
                    <div class="m-4">
                        <div class="d-flex justify-content-center">
                            <ion-icon name="checkbox-outline"></ion-icon>
                        </div>
                        <p class="fw-bold text-center py-0 my-0">WHAT YPAD™ IS</p>
                        <p class="text-center py-0 my-0">
                            YPAD™ exists to help create optimal environments in dance for all participants by bringing the foundations of core health and safety topics to the dance community. Our extensive resources support implementing best practices and guidance in dance education. YPAD™ is supported by educators, subject matter experts, professionals, and collaborators who share their expertise through our education and certification models and ongoing coaching to benefit the dance community.
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="m-4">
                        <div class="d-flex justify-content-center">
                            <ion-icon name="square-outline"></ion-icon>
                        </div>
                        <p class="fw-bold text-center py-0 my-0">WHAT YPAD™ IS NOT</p>
                        <p class="text-center py-0 my-0">
                            YPAD™ is not a regulatory body, nor is it a master-level training. YPAD™ is not a crisis or support group, nor does it offer its own emergency hotline or services. YPAD™ does not police certified individuals, studios, or events, nor is it in the scope of our practice to provide legal, medical, or therapeutic services.
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="m-4">
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-outline"></ion-icon>
                        </div>
                        <p class="fw-bold text-center py-0 my-0">IS YPAD™ RIGHT FOR YOU?</p>
                        <p class="text-center py-0 my-0">
                            YPAD™ is right for you if you are a part of the dance industry and want to increase your safeguarding capacity-building, including best practices for training, classroom safety, emergency readiness, abuse prevention, injury reduction, dancer mental strength, communication, conflict resolution, and artistic integrity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="text-white text-center">
                            <h2>
                                YPAD™'s position as an educational association is intended to help leaders create safeguarding capacity-building. According to the U.N., capacity-building is defined as developing and strengthening the skills, instincts, abilities, processes, and resources organizations need to thrive in a fast-changing world.
                            </h2>
                            <p>
                                In other words, we want to help you make room for learning and growth when it comes to developing a safer and healthier dance environment that protects kids from harm and empowers them with confidence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row mb-5" style="height: 100%;">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">Choose Your Path</h2>
                    <p class="fw-bold">
                        EDUCATION or CERTIFICATION
                    </p>
                    <p>
                        Education courses are audit-only courses for personal growth. Education courses are open to the entire dance community. Education courses do not require additional steps such as knowledge checks or outside training and documentation, nor do they lead to certification. Education courses are just as they sound: a place to learn. Education courses will be available in the Fall of 2023.
                        <br><br>
                        Certification is offered in three ways: YPAD™ Certified Individual, Studio, or Event. Certification begins with an application and requires background checks, CPR/AED and First Aid certification, Darkness to Light's Stewards of Children® training, live artistic integrity Zoom seminar, a Safeguarding Pledge, and commitment to our 5-tier Accountability model. YPAD&trade; Certified Studio courses are open now. YPAD&trade; Certified Individual courses will be open in late Summer 2023.
                        <br><br>
                        Additional requirements apply to YPAD™ Certified Studios and Events, such as proof of insurance, emergency action planning, Youth Mental Health First Aid, and three sessions with a YPAD™ integration coach.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="">
                    <img src="/images/ypad-erika-crop.png" alt="erika headshot" class="img-fluid py-0 my-0">
                </div>
                <p class="py-0 my-0"><strong>Erika Hogan, YPAD&trade; Certified Individual</strong></p>
                <p class="py-0 my-0 pe-5 me-4"><em>"I started with YPAD&trade; Education, but quickly wanted to become YPAD&trade; Certified. I now work with the association as a coach to help others to bring best practices to their classrooms. Next up ... Certifying my studio!"</em></p>
            </div>
        </div>
        <h2 class="text-uppercase text-center mt-5">READY TO BECOME A YPAD&trade; CERTIFIED STUDIO?</h2>
        <p class="text-center">Now accepting studio certification renewals and new studio certification applications!
            <br>YPAD&trade; Certified Individual courses will be open in late Summer 2023.
        </p>
        <div class="d-flex justify-content-center">
            <a href="https://2ejcn25fx1w.typeform.com/to/y6cHc1V7" class="text-decoration-none" target="_blank">
                <div class="fw-bold px-4 py-2 shadow text-center" style="background: #EF9A60; color: white;">Apply Today</div>
            </a>
        </div>



{{--        <div class="row">--}}
{{--            <div class="col-sm">--}}
{{--                <div>--}}
{{--                    <img src="/images/course-free-risk-management.png" alt="" class="img-fluid" style="height: 197px; width: 100%; object-fit: cover;">--}}
{{--                    <h4 class="mt-1">Free Youth Protection Association For Dance Course: Risk Management<br><br></h4>--}}
{{--                    <p class="my-0 py-0 fw-bold">Free</p>--}}
{{--                    <hr style="color: #067997;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <div>--}}
{{--                    <img src="/images/course-free-resource-library.png" alt="" class="img-fluid" style="height: 197px; width: 100%; object-fit: cover;">--}}
{{--                    <h4 class="mt-1">Free Youth Protection Association For Dance Downloadable Resources<br><br></h4>--}}
{{--                    <p class="my-0 py-0 fw-bold">Free</p>--}}
{{--                    <hr style="color: #767784;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <div>--}}
{{--                    <img src="/images/course-free-conflict-resolution.png" alt="" class="img-fluid" style="height: 197px; width: 100%; object-fit: cover;">--}}
{{--                    <h4 class="mt-1">Free Youth Protection Association For Dance Course: Bullying & Conflict Resolution--}}
{{--                        <br><br></h4>--}}
{{--                    <p class="my-0 py-0 fw-bold">Free</p>--}}
{{--                    <hr style="color: #EF9A60;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="text-white text-center">
                            <h3>
                                The health and safety of dance students require a bold commitment to voluntarily raise your hand and say, "Yes, this is a priority." No one else can do it for you, and no one will make you do it. It is a choice.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 container" id="section-circle-testimonials">
{{--        <div class="mb-5">--}}
{{--            <div>--}}
{{--                <div class="d-flex justify-content-center"><img src="/images/guarantee.png" alt="guarantee badge" class="img-fluid"></div>--}}
{{--                <h2 class="text-uppercase text-center mb-0 pb-0">Our Guarantee</h2>--}}
{{--                <p class="text-center mt-0 pt-0">You'll love your experience or we'll work with you to make it right!</p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-center">
                            <img src="/images/mark.png" alt="mark" class="img-fluid">
                        </div>
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Mark Yonally</h4>
                        <p class="text-center py-0 my-0"><strong>Chicago Tap Theatre</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            "Chicago Tap Theatre believes that dance students deserve well-trained teachers who understand dance education is more than steps. YPAD™ is focused on the well-being of kids and a sustainable, safe future for dance. Chicago Tap Theatre is proud to stand with them in believing that the dance field is ready to take the next step and that a common set of standards is a great place to start!"
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-center">
                            <img src="/images/bri.jpeg" alt="headshot" class="img-fluid rounded-portrait">
                        </div>
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Brianna Chin Brown</h4>
                        <p class="text-center py-0 my-0"><strong>Dance Teacher, NJ</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            “As a dancer and dance teacher, I’ve taken a lot of training over the years for my role at the studio. Out of everything I've learned, I have to say that the information I have received from YPAD™ Certification has been the most important. Because of what I've learned through YPAD™, I am confident I am making the best choices for my students."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-center">
                            <img src="/images/jill.png" alt="mark" class="img-fluid">
                        </div>
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Jill Williams</h4>
                        <p class="text-center py-0 my-0"><strong>Studio Owner, Calgary</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            "Youth Protection Association for Dance™ is the leading industry education that all studio owners need to invest in. One of my greatest sources of pride as a studio owner is hearing my studio families talk about their pride in the distinction of our YPAD™ ethos, as it shows that it absolutely matters and forever will."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="d-flex justify-content-center">
                                            <div class="rounded-portrait">
                                                <img src="/images/cert-kelly.png" alt="headshot" class="img-fluid">
                                            </div>
                                        </div>
                                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Kelly Peterson</h4>
                                        <p class="text-center py-0 my-0"><strong>guiDANCE Experience</strong></p>
                                    </div>
                                    <div class="col-sm d-flex align-items-center">
                                        <p>
                                            “YPAD&trade; has brought so much value into the dance industry by helping kids stay safe, encouraging community, self-accountability, and awareness. YPAD&trade; gives anyone working in the dance industry clear priorities to develop this next generation of dancers. Through educational opportunities, YPAD&trade; is leading the way for the betterment of all involved in the dance industry. ”
                                        </p>
                                    </div>
                                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-sm-4">--}}
{{--                        <img src="/images/darcy.png" alt="mark" class="img-fluid">--}}
{{--                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Darcy Fagerwold</h4>--}}
{{--                        <p class="text-center py-0 my-0"><strong>Studio Owner</strong></p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm d-flex align-items-center">--}}
{{--                        <p>--}}
{{--                            Youth Protection Association for Dance&trade; education is evidence to families that we are committed to keeping kids happy, healthy, and safe in dance. It is comforting to know that as challenging issues arise, YPAD is there to support and guide us to ensure we are doing what's right for our students. Thank you to Youth Protection Association for Dance&trade; for leading the dance industry in this vital endeavor!--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="orange py-5 text-white">
        @include('_divider-top')
        @include('_divider-bottom')
        <x-testimonial
            image="test-gus.jpg"
            quote="My research team has collaborated with Youth Protection Association for Dance™ on a number of research projects examining factors that contribute to injury among dancers. We’ve been lucky to partner with a group that’s so committed to generating new knowledge that will improve the health and safety of young dancers, not only now, but also in the future. As an organization, YPAD™ sets such a great example for what it means to be “purpose-driven."
            person="Thomas Gus Almonroeder, PT, DPT, PhD"
            place="Trine University"
        />
    </div>

    <div class="py-5">
        <div class="container">
            <h2 class="text-uppercase text-center">Professional Development & Research</h2>
            <p class="text-center">YPAD&trade; is proud to work with the following organizations</p>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 mb-4">
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-alabama.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/hope-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/trine-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-ecu.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-bridge.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-udma.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-iacdp-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-ndca.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
{{--                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>--}}
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/toronto-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/dance-teacher-web-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm my-2 d-flex align-items-center justify-content-center"><img src="/images/logo-unity.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
            </div>
            <div>
                <p class="text-center">
                    YPAD™ educator Misty Lown is a co-author of a pilot study on ballet safety published in the Journal of Dance Medicine & Science.
                    <br>YPAD™ has two more research projects in progress for 2023-24: one with a researcher from Mayo Health and one with Trine University.                 </p>

                <div class="d-flex justify-content-center mb-4">
                    <a href="https://journals.sagepub.com/doi/10.1177/1089313X231177174?fbclid=IwAR3knkW3dJIOxT7Ly76kkoBTZ-wo5RretqtTH-HNuWtxH7pI48LIRD0888Y" target="_blank" class="text-decoration-none text-white">
                        <div class="fw-bold px-4 py-2 shadow text-center btn-orange-hover" style="background: #EF9A60; color: white;">
                            Read the article in the Journal of Dance Medicine & Science
                        </div>
                    </a>
                </div>

{{--                <div class="d-flex justify-content-center">--}}
{{--                    <form>--}}
{{--                        <div class="row g-3 align-items-center">--}}
{{--                            <div class="col-auto">--}}
{{--                                <label for="inputEmail" class="col-form-label">Sign up for our mailing list to stay informed</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <input type="email" id="inputEmail" placeholder="Email address" class="form-control" aria-describedby="emailHelpInline">--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

@endsection
