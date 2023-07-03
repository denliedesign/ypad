@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-about"></div>
        <div class="gradient"></div>
        <div id="header-about">
            <h1 class="text-center p-0 m-0">
                Welcome to YPAD™
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                Safeguarding dancers, empowering confident adults
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
        <div class="row" id="about-checkmarks">
            <div class="col-sm">
                <h2 class="text-center">YPAD™ is an Association</h2>
                <p class="text-center">as·so·ci·a·tion <br> <small class="text-muted">noun</small></p>
                <p class="text-center">
                    1. a group of people organized for a joint purpose.
                    <br><br>
                    2. a connection or cooperative link between people or organizations.
                    <br><br>
                    As an association, YPAD™ is built on four building blocks as represented in our logo: training opportunities, certification standards, research development, and positive industry connections.
                </p>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        YPAD™ believes an education in safeguarding capacity-building should be available to everyone.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        YPAD™ engages in research to develop best practices in dancer health and safety.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        YPAD™ certifies dance educators and industry leaders by offering an earned designation that requires specific standards.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        YPAD™ connects like-minded individuals who want to prioritize safeguarding students in dance.
                    </div>
                </div>
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
                            <h3>YPAD™ works with individual educators, studio owners, events, colleges, researchers, experts, and industry professionals for brighter future in dance.</h3>
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
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="d-flex align-items-center justify-content-center col-sm my-2"  style="background: #067997;">
                <h2 class="text-uppercase text-white">
                    The YPAD™ Story
                </h2>
            </div>
            <div class="col-sm my-2">
                <img src="/images/about-block-1.jpeg" alt="teacher and dance students" class="img-fluid">
            </div>
            <div class="col-sm my-2">
                <img src="/images/about-block-2.jpeg" alt="teacher and dance students" class="img-fluid">
            </div>
            <div class="col-sm my-2 d-flex align-items-center justify-content-center">
                <p class="m-0 p-0" style="font-size: 0.95em;">
                    YPAD™ was initially created as an instructional and certification program, as part of a non-profit called EDIFY Movement, and its acronym stood for Youth Protection Advocates in Dance®. The program was founded by professional dancer, Leslie Scott Zanovitch, and a group of passionate advocates, in 2012. In 2018, the founder and board asked longtime supporter and original YPAD™ Certified Studio owner Misty Lown to acquire the program as it was not sustainable in the non-profit model. Misty acquired and updated the course in 2019 to create more accessible access to education and certification options.
                    <br><br>
                    By 2022, the needs of the industry had changed. It was time for a stronger standard and fresh direction for YPAD™. With the help of seasoned dance, health, and safety professionals, the existing business and original courses were retired. A brand new YPAD™ was created. Instructional designers, writers, and researchers were engaged, and a new company was formed along with a new identity: Youth Protection Association for Dance™. This new name was chosen to reflect that YPAD™ is a group organized with a common purpose–safeguarding dancers and empowering confident adults.
                </p>
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
                            <h2>
                                YOU are the difference maker. YOU are YPAD™.
                            </h2>
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
        <div class="row">
            <div class="col-sm">
                <h2 class="text-uppercase">Contributors</h2>
                <p class="fw-bold">
                    Our deep appreciation goes to the following contributors:
                </p>
                <p>
                    Dr. Addie Briggs, MD, co-founder of Fitness DAWGS
                    <br><br>
                    Emily Bufferd, founder of The Young Choreographer's Festival
                    <br><br>
                    Jessica Michaels, founder of 3JOANNES SAFR
                    <br><br>
                    Erika Hogan, MS and founder New Attitude Performing Arts Center
                    <br><br>
                    Karen White, Senior Editor at INsight Magazine
                    <br><br>
                    Brett Titus, founder of LifeSpot
                    <br><br>
                    Holly Nieman, PT at Andrews Health Children's Institute
                    <br><br>
                    Dr. Kim Evans, EdD, retired superintendent, and co-founder of Fitness DAWGS
                    <br><br>
                    Dr. Andrew Jagim, PhD researcher at Mayo Health System
                    <br><br>
                    Denise Meyer, licensed educator and project manager for YPAD™
                    <br><br>
                    Stephen M. Potts, JD and member of The Texas Center for Legal Ethics
                    <br><br>
                    Dr. Sheyi Ojofeitimi, PT, DPT, OCS, CFMT, director of therapy services at Alvin Ailey American Dance Theater, and co-founder of Dance Ready Project
                    <br><br>
                    Jenny Clark, MSW, LCSW, CSOTP, CFI, Stein Counseling and Consulting Services, Ltd
                    <br><br>
                    Emily Harrison, RD and founder of Dancer Nutrition
                </p>
            </div>
            <div class="col-sm">
                <p>
                    Joan Parke, JD, COO of the Boys and Girls Club–La Crosse
                    <br><br>
                    Dr. Jeff Russell, PhD researcher at Ohio State
                    <br><br>
                    Mathew Farmer, MFA, professor at Hope College
                    <br><br>
                    Katie Gatlin, MS, LPC, CCTP, CSTS, private practice
                    <br><br>
                    Dr. Danelle Dickson, PhD, owner of Performance Plus Physical Therapy, and co-founder of Dance Ready Project
                    <br><br>
                    Dr. Chelsea Pierotti, PhD, University of Colorado-Boulder
                    <br><br>
                    Tiffany Prout-Leitao, YPAD™ certified coach and founder Center Stage Dance Academy
                    <br><br>
                    Richard Smith, adjunct faculty at East Carolina University
                    <br><br>
                    Misty Lown, ME-PD and owner of YPAD™
                    <br><br>
                    Vanessa Terrell, YPAD™ certified coach and owner of The Pointe School of Dance
                    <br><br>
                    Julie Holt Lucia, YPAD™ content creator and former studio owner
                    <br><br>
                    Jill Williams, YPAD™ certified coach and president of Leap Studios
                    <br><br>
                    Cassie Scheevel, YPAD™ education coordinator
                    <br><br>
                    Tracey Wozny, founder STAR Leadership program
                    <br><br>
                    Carolyn Colleen, MBA, founder of Acton Academy Midwest
                    <br><br>
                    Cynthia Newland, MFA, former professor at Belhaven University
                </p>
            </div>
        </div>
    </div>

    <div>
        <img src="/images/about-portraits-1.png" alt="contributor portraits" style="width: 100%; height: auto;">
        <img src="/images/about-portraits-2.png" alt="contributor portraits" style="width: 100%; height: auto;">
        <img src="/images/about-portraits-3.png" alt="contributor portraits" style="width: 100%; height: auto;">
    </div>

    <div class="py-5 container">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col-sm my-3" style="background: #067997;">
                            <div class="d-flex justify-content-center align-items-center text-center text-white mx-5" style="height: 100%;">
                                <h2 class="text-uppercase">Hear from these and other contributors in our education and certification courses</h2>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #767784; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/about-featured-1.jpeg" alt="" class="img-fluid" style="border: 6px solid #767784; height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Emily Bufferd</strong> <br> Founder, Young Choreographer's Festival</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “We must prioritize our students’ well-being and progress them only when they are ready to safely approach new ideas in mind, body, and spirit.”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #EF9A60; color: white;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/about-featured-2.jpg" alt="" class="img-fluid" style="border: 6px solid #EF9A61; height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Stephen Potts, J.D.</strong> <br> Member, Texas Center for Legal Ethics</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “Studio owners, like all small business owners, don't need to "do it all" on their own. Organizations like YPAD™ can help.”
                                        </em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm my-3">
                            <div style="background: #896C7B; color: white; font-size: 0.98em;" class="pb-4">
                                <div class="d-flex justify-content-center"><img src="/images/about-featured-3.png" alt="" class="img-fluid" style="border: 6px solid #896C7B; height: 394px; width: 100%; object-fit: cover;"></div>
                                <div class="px-3 pt-3">
                                    <h4 class="text-center py-0 my-0"><strong>Carolyn Colleen, MBA</strong> <br> Founder, Acton Academy Midwest</h4>
                                    <p class="text-center pb-0 pt-2 my-0"><em>
                                            “A culture of continuous improvement and a community of motivated, empowered educators committed to providing the best possible education to their students.”
                                        </em>
                                    </p>
                                </div>
                            </div>
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
                            <h2 class="text-uppercase text-center mt-5">READY TO BECOME A YPAD™ CERTIFIED STUDIO?</h2>
                            <p class="text-center">Now accepting studio certification renewals and new studio certification applications!</p>
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
        <h2 class="text-uppercase text-center">FAQ</h2>

    </div>

{{--    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 400px;">--}}
{{--        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>--}}
{{--        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">--}}
{{--            <div class="row mt-3">--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                        <div class="text-white text-center">--}}
{{--                            <h2 class="text-uppercase text-center mt-5">Not interested in or ready for certification?</h2>--}}
{{--                            <div class="d-flex justify-content-center">--}}
{{--                                <a href="/education" class="text-decoration-none">--}}
{{--                                    <div class="fw-bold px-4 py-2 shadow text-center" style="background: #067997; color: white;">Check Out Our Educational Resources</div>--}}
{{--                                </a>--}}
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

@endsection
