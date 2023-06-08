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
                The mission of Youth Protection Association for Dance™ is to bring awareness to and provide guidance for one essential priority: the safety and health of dance students. The YPAD™ Certification process was created to help individuals, studio owners, event owners, and their staff gain the tools and practice the knowledge for safeguarding capacity-building.

                Pursuing YPAD™ Certification shows your commitment to safeguarding children and empowering confident adults.

                Much like a dance education, a YPAD™ Certified Studio designation requires an investment of time, patience, hard work, and financial resources. Just like a dancer gets stronger over time, your studio safety practices can get better over time as well. There is a process to raising the standard of dancer well-being, and YPAD™ is here to help you achieve it.
            </p>
        </div>
    </div>

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 400px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="row mt-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <div class="rounded-portrait">
                        <img src="/images/cert-amy.png" alt="testimonial portrait">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="text-white text-center">
                            <h4>
                                “I'm a studio owner, but I wanted to start with individual certification first. This allowed me to get to know the program through monthly Community Connection Calls and to implement best practices in my studio. This program has given me a community of like-minded dance professionals who choose to put the wellness and safety of their students as a top priority. I’m eager to get my entire studio certified next!”
                            </h4>
                            <p class="m-0 p-0"><span class="fw-bold">Amy Yaro</span> &middot; Iowa Ballet Academy</p>
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
        <h2 class="text-uppercase">Steps to earn your YPAD™ Certified designation</h2>
        <p class="fw-bold">It all starts here: with you and these three steps.</p>
        <div class="row">
            <div class="col-sm">
                <span class="font-pop" style="font-size: 1.2em;">STEP ONE:</span> submit your application. The application is located at the bottom of this page. Once your application is approved (48-72 hours), you will move on to step two.
                <br><br>
                <span class="font-pop" style="font-size: 1.2em;">STEP TWO:</span> complete the appropriate course for the certification you seek (individual, studio, or event), submit the reflections, and pass the knowledge checks with 90% proficiency. This course takes approximately 8-10 hours to complete. If you are seeking to become a certified studio or event, your staff must also complete the appropriate courses for their role during step two. They, too, will submit reflections and must pass knowledge checks with 90% proficiency. Depending on the role, staff courses take approximately 2-4 hours to complete.
                <br><br>
                <span class="font-pop" style="font-size: 1.2em;">STEP THREE:</span> complete the external training and documentation submission requirements.
                <br><br>
                When your course(s) are complete and all documentation is submitted, your YPAD™ Certified Studio status will be confirmed and designated. Your status will remain active in our directory of YPAD™ Certified Studios as long as you complete an annual renewal. Items with "*" indicate third-party provider and cost. Links to those programs are inside the course. Costs are listed below in the FAQ section.
            </div>
            <div class="col-sm d-flex justify-content-center">
                <img src="/images/certification-steps.png" alt="graph" class="img-fluid">
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 400px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="row mt-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <div class="rounded-portrait">
                        <img src="/images/cert-neisha.jpeg" alt="testimonial portrait">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="text-white text-center">
                            <h4>
                                “Being a YPAD™ Certified Studio is essential to our studio’s culture. Our parents and families are confident that our studio is intentionally focused on keeping their kids healthy and safe. YPAD™'s extensive resources and monthly ongoing education opportunities have been integral in carrying out our mission of Encouraging Kids to Lead Inspired Lives!”
                            </h4>
                            <p class="m-0 p-0"><span class="fw-bold">Neisha Hernandez</span> &middot; Neisha's Dance & Music Academy</p>
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
        <div class="row" id="about-checkmarks">
            <div class="col-sm">
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
                            Proof of up-to-date CPR/AED and First Aid certification
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
                            Proof of completion of Darkness to Light's Stewards of Children® training
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

            <div class="col-sm">
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
        </div>
    </div>

    <div style="background: linear-gradient(to right, #EF9A60, #FE954D); position: relative; height: 500px;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        {{--        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>--}}
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                        <div>
                            <div class="text-white text-center">
                                <h2 class="text-uppercase text-center mt-5">Ready to apply?</h2>
                                <div class="d-flex justify-content-center">
                                    <div class="fw-bold px-4 py-2 shadow text-center" style="background: #067997; color: white;">Get Started Now!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div>
                        <div class="text-white">
                            <h2 class="text-uppercase mt-5">Not quite ready?</h2>
                            <p>
                                <strong>If you are a studio owner and you're not ready to take all of the required steps to earn the designation of YPAD™ Certified Studio, there are two other ways to become involved:</strong>
                                <br><br>
                                <span class="font-pop" style="font-size: 1.2em;">OPTION ONE:</span> A YPAD™ Certified—Individual can be any professional educator or leadership role in the industry. Individuals certify themselves only, not as part of an organization.
                                <br><br>
                                <span class="font-pop" style="font-size: 1.2em;">OPTION TWO:</span> Anyone who has a personal interest in the health of the dance industry (individuals, studio owners, dance educators, parents, dance organizations, and college students) can participate in YPAD™ Education. These learners are not certifying, but simply taking the courses for their own awareness and knowledge gain.
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
        {{--        <div class="custom-shape-divider-bottom-1683835445">--}}
        {{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>--}}
        {{--            </svg>--}}
        {{--        </div>--}}
    </div>

@endsection
