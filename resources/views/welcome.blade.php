@extends('layouts.app')
@section('content')

    <div style="background: #767784;" class="py-3 text-white d-flex justify-content-center align-items-center">
        <p class="my-0 py-0 text-capitalize">
            buy one course, give one free!
        </p>
    </div>

    <div id="header">
        <div class="gradient-fade"></div>
        <div id="header-heading">
            <h1 class="text-center px-5">Helping dance industry leaders create safeguarding capacity-building</h1>
            <div class="d-flex justify-content-center">
{{--                <div class="fw-bold px-4 py-2 shadow" style="background: #EF9A60; color: white;">Try A Free Course</div>--}}
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col-sm my-3">
                    <div class="d-flex justify-content-center align-items-center text-center mx-5" style="height: 100%;">
                        <h2 class="text-uppercase">Personal Growth & Professional Development Opportunities for:</h2>
                    </div>
                </div>
                <div class="col-sm my-3"><img src="/images/ypad-individuals.png" alt="" class="img-fluid"></div>
                <div class="col-sm my-3"><img src="/images/ypad-studios.png" alt="" class="img-fluid"></div>
                <div class="col-sm my-3"><img src="/images/ypad-events.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 400px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
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
        <div class="custom-shape-divider-top-1683835088">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="py-5 welcome-icons">
        <div class="container">

            <div class="py-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col-sm my-3">
                            <div class="d-flex justify-content-center align-items-center text-center mx-5" style="height: 100%;">
                                <h2 class="text-uppercase">Professionals Agree, Safeguarding Is Important</h2>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #767784; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/sheyi.png" alt="" class="img-fluid" style="height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <p class="text-center py-0 my-0"><strong>Dr. Sheyi Ojofeitimi, DPT, CFMT, CIDN</strong> <br> Director of Therapy Services - Alvin Ailey Dance Foundation</p>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “It will take an army to change the narrative. We know we can have the biggest impact through teachers because they are in the trenches of daily class, rehearsal, and performance with young dancers.”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #EF9A60; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/tricia-gomez.jpg" alt="" class="img-fluid" style="height: 394px; width: 100%; object-fit: cover; object-position: top;"></div>
                                <div class="px-3 pt-3">
                                    <p class="text-center py-0 my-0"><strong>Tricia Gomez</strong> <br> Rhythm Works Integrative Dance - The Intellidance Method</p>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “If every teacher had this education, we would be well on our way to setting self-guided, industry standards that are on par with schools and other child-centered activities. ”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #896C7B; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/addie.png" alt="" class="img-fluid" style="height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <p class="text-center py-0 my-0"><strong>Dr. Addie Briggs, M.D.</strong> <br> Founder - Fitness DAWGS</p>
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
                    <div class="mx-4">
                        <div class="d-flex justify-content-center">
                            <ion-icon name="checkbox-outline"></ion-icon>
                        </div>
                        <p class="fw-bold text-center py-0 my-0">WHAT YPAD™ IS</p>
                        <p class="text-center py-0 my-0">
                            YPAD™ helps dance industry leaders learn the foundations of core health and safety topics to create an optimum environment for students. It is a repository of information and vetted resources. YPAD™ is your reference guide to leading experts in best practices for dance education with youth well-being at the forefront.
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mx-4">
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
                    <div class="mx-4">
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

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 475px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
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
        <div class="custom-shape-divider-top-1683835088">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
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
                        Education courses are audit-only courses for personal growth. Education courses are open to the entire dance community. Education courses do not require additional steps such as knowledge checks or outside training and documentation, nor do they lead to certification. Education courses are just as they sound: a place to learn.
                        <br><br>
                        Certification is offered in three ways: YPAD™ Certified Individual, Studio, or Event. Certification begins with an application and requires background checks, CPR/AED and First Aid certification, Darkness to Light's Stewards of Children® training, live artistic integrity Zoom seminar, a Safeguarding Pledge, and commitment to our 5-tier Accountability model.
                        <br><br>
                        Additional requirements apply to YPAD™ Certified Studios and Events, such as proof of insurance, emergency action planning, Youth Mental Health First Aid, and three sessions with a YPAD™ integration coach.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="">
                    <img src="/images/ypad-erika-crop.png" alt="erika headshot" class="img-fluid py-0 my-0">
                </div>
                <p class="py-0 my-0"><strong>Erika Hogan, YPAD Certified Individual</strong></p>
                <p class="py-0 my-0 pe-5 me-4"><em>"I started with YPAD Education, but quickly wanted to become YPAD Certified. I now work with the association as a coach to help others to bring best practices to their classrooms. Next up ... Certifying my studio!"</em></p>
            </div>
        </div>
        <h2 class="text-uppercase text-center mt-5">NOT READY TO GET CERTIFIED?</h2>
        <p class="text-center">Start your YPAD™ journey with a Learner Course!</p>
        <div class="d-flex justify-content-center">
            <div class="fw-bold px-4 py-2 shadow text-center" style="background: #EF9A60; color: white;">Start Learning Today</div>
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

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 400px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
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
        <div class="custom-shape-divider-top-1683835088">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="py-5 container">
        <div class="mb-5">
            <div>
                <div class="d-flex justify-content-center"><img src="/images/guarantee.png" alt="guarantee badge" class="img-fluid"></div>
                <h2 class="text-uppercase text-center mb-0 pb-0">Our Guarantee</h2>
                <p class="text-center mt-0 pt-0">You'll love your experience or we'll work with you to make it right!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/mark.png" alt="mark" class="img-fluid">
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Mark Yonally</h4>
                        <p class="text-center py-0 my-0"><strong>Chicago Tap Theatre</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            Chicago Tap Theatre believes that dance students deserve well-trained teachers with an understanding that dance education is way more than knowing a few steps. YPAD is doing something about it, by offering online courses that educate dance studios and communities worldwide on the core elements in constructing an environment focused on the well-being of kids and a sustainable, safe future for dance. Chicago Tap Theatre is proud to stand with them in believing that the dance field is ready to take the next step and that a common set of standards is a great place to start!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/kate.png" alt="mark" class="img-fluid">
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Kate Moody</h4>
                        <p class="text-center py-0 my-0"><strong>Studio Owner</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            If you haven't done YPAD training yet, do it. We had a loaded gun incident at the local high school this morning (everything is okay). But the thought that something could happen so close, is so scary. As hard as it was to imagine and read about all the "what to do's" in YPAD training, I am proud that we did, because "It's better to know and not need than to need and not know". Thank you YPAD team for all the great knowledge in the YPAD course!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/jill.png" alt="mark" class="img-fluid">
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Jill Williams</h4>
                        <p class="text-center py-0 my-0"><strong>Studio Owner</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            Youth Protection Association for Dance&trade; is the leading industry education that all studio owners need to invest in. While we may hold a variety of views on how and what to teach to make “a good dancer”, we need to come together as a community of practice to honor the facts that make us “great classrooms”. One of the greatest sources of pride I have as a studio owner is hearing my studio families talk about their pride in the distinction of our YPAD ethos, as it shows that it absolutely matters and forever will.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/darcy.png" alt="mark" class="img-fluid">
                        <h4 class="text-center text-uppercase pb-0 mb-0 mt-2">Darcy Fagerwold</h4>
                        <p class="text-center py-0 my-0"><strong>Studio Owner</strong></p>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <p>
                            Youth Protection Association for Dance&trade; education is evidence to families that we are committed to keeping kids happy, healthy, and safe in dance. It is comforting to know that as challenging issues arise, YPAD is there to support and guide us to ensure we are doing what's right for our students. Thank you to Youth Protection Association for Dance&trade; for leading the dance industry in this vital endeavor!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 550px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div class="py-5 container text-white d-flex align-items-center" style="height: 100%;">
            <div>
                <h2 class="text-uppercase text-center">BONUS RESOURCES WITH CERTIFICATION</h2>
                <p class="text-center">YPAD™ Certification comes with unlimited FREE access to short courses for the following important roles:</p>
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
                            <p class="fw-bold text-center py-0 my-0">MASTER TEACHER COURSE</p>
                            <p class="text-center py-0 my-0">
                                Do you hire guest and master teachers for special programs? Use this course to share the baseline expectations of teaching in a YPAD™ Certified environment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-top-1683835088">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1683835445">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <h2 class="text-uppercase text-center">Professional Development & Research</h2>
            <p class="text-center">YPAD is proud to work with the following organizations</p>
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/toronto-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/alabama-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/hope-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/trine-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/dance-teacher-web-removebg-preview.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
                <div class="col-sm d-flex align-items-center justify-content-center"><img src="/images/logo-ecu.png" alt="partner logo" class="img-fluid p-0 m-0" style="filter: grayscale(100%);"></div>
            </div>
        </div>
    </div>

@endsection
