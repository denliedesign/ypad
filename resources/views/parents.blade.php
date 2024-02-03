@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative;">
        <div style="height: 1px; position: absolute; background: #FDFAF5; top: 0; width: 100%;"></div>
        <div style="height: 1px; position: absolute; background: #FDFAF5; bottom: 0; width: 100%;"></div>
        <div class="banner banner-parents"></div>
        <div class="gradient"></div>
        <div id="header-about" style="width: 100%;">
            <h1 class="text-center p-0 m-0">
                Welcome, Dance Parents
            </h1>
            <p class="text-center" style="font-size: 1.5em;">
                The YPAD™ Difference
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
            <p class="text-center">
                YPAD™ exists to help create optimal environments in dance—from studio classrooms to event ballrooms—promoting the safety, health, and well-being of students. Our purpose is to offer educational resources and training opportunities for studio owners, event owners, teachers, choreographers, and parents.
                <br><br>
                Why does this matter to you?
                <br><br>
                <em><strong>Because nothing is more important than your child’s health and safety.</strong></em>
            </p>
        </div>
    </div>


    <div class="orange py-5">
        @include('_divider-top')
        @include('_divider-bottom')
        <div class="container text-white pt-5">
            <div class="py-5">
                <h2 class="text-uppercase text-center">YPAD™: Ensuring Your Child's Safety in Dance</h2>
                <p class="text-center">
                    The dance world is a wonderful place to see children experiencing the joy of music and movement, becoming artists, striving for goals, and living their dreams. It is also an unregulated industry, which means its leaders and teachers must self-educate in order to set and uphold high standards.
                    <br><br>
                    Dance industry professionals who uphold YPAD™ standards ensure that health and safety are top priorities in the classroom and on the stage. Further, YPAD™Certified Studios, Events, and Individuals formally demonstrate their commitment to every angle of student health and safety.
                    <br><br>
                    YPAD™ resources offer a quality approach to self-education that lifts up the entire industry, helping youth dancers become safer and healthier. Dance industry professionals who participate in YPAD™ opportunities want the best for their students; parents who participate in YPAD™ opportunities do too.
                    <br><br>
                    <em><strong>Together, we can all insist that safeguarding students in dance be the norm, not the exception. </strong></em>
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row" id="about-checkmarks">
            <h2 class="text-center">
                What can you do to optimize your child’s dance experience?
            </h2>
            <div id="parent-check" class="my-5">
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Enhance your education about dancer health and safety. <a href="/education">Click here to access YPAD™’s resources</a>, including free downloads, live seminars, and microlearnings.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Seek YPAD™ educated studios and events for your child. YPAD™ Directory coming soon! Ask your child’s teachers or studio owner if they are familiar with YPAD™’s resources and trainings.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        Ask your child’s studio to consider <a href="/certification">YPAD™ Certification</a>. YPAD™ Certified Studios take additional measures to safeguard their students; however, certification is a long-term investment and may not be right for every business model.
                    </div>
                    <hr class="my-3">
                </div>
                <div class="row">
                    <div class="col-1">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="col-11">
                        <a href="/subscribe">Join our mailing list to stay up to date</a> on the latest YPAD™ news and opportunities, and follow us on
                        <a href="https://www.facebook.com/YPADNOW" target="_blank">Facebook</a> and <a href="https://www.instagram.com/ypadnow/" target="_blank">Instagram</a>.
                    </div>
                </div>
            </div>
            <p class="text-center">
                We appreciate your commitment to YPAD™’s mission, promoting health and wellness throughout your child’s dance journey. Thank you for making a joyful and safe dance experience possible!
            </p>
        </div>
    </div>




@endsection
