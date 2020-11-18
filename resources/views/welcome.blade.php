@extends('layouts.frontend.app')

@section('content')
        {{-- slider 1080x360 --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Banner1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- /slider --}}

        {{-- menus --}}
        <section class="menus">
        <div class="container py-5 ">
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/counseling.png') }}">
                        <h5><b>BOOK A FREE</b></h5>
                        <span>Counseling Session</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/consultancy.png') }}">
                        <h5><b>CUSTOMIZED</b></h5>
                        <span>Customized Services and Packages</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/partners.png') }}">
                        <h5><b>OUR PARTNERS</b></h5>
                        <span>Apply now!</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/checklist.png') }}">
                        <h5><b>ADMISSION CIRCULARS</b></h5>
                        <span>Priority Admission Abroad</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/deadline.png') }}">
                        <h5><b>APPLICATION DEADLINES</b></h5>
                        <span>And Eligibility Requirements</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="border">
                        <img class="mb-2" src="{{ asset('img/icons/testimonial.png') }}">
                        <h5><b>TESTIMONIALS</b></h5>
                        <span>What student says!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
        {{-- /menus --}}

        {{-- testimonials --}}
        <section class="testimonials text-center pt-3 pb-5">
            <h2 class="m-0 py-3 text-white"> Our Happy Study Abroad <strong>Student Testimonials</strong></h2>
            <div class="row justify-content-center">
                <div class="container">
                    <div class="testimonial-item owl-carousel owl-theme">
                        <div class="item mx-3 p-4 text-center bg-white rounded">
                            <div class="row">
                                <div class="col-md-8 py-5">
                                    <blockquote class="testimonial-quote"><i class="fas fa-quote-left"></i> Very good experience as the advisor was just a call away. Once when I was nervous about my visa Mr. Sunit Survase personally called me to boost my moral and Tanaya did analyse my profile, so in a week I got 6 admits from 10 applications. Lastly Shrutika helped me with the most important thing that was visa interview and I got it approved. I would recommend Grad-Dreams to everyone who dreams to study abroad. Their teamwork is really amazing. You people think for the betterment of the individuals life. It was not possible for me to fill a single application if I was not associated with Grad-Dreams. Tanaya was very helpful and was always there just a call away even for the smallest thing she never got irritated. Once I asked her that should I get colour print or black and white prints which can be a dumb question but she guided me patiently. <i class="fas fa-quote-right"></i></blockquote>
                                    <div>
                                        <h4 class="text-primary mt-2 mb-0">Siddhant Somani</h4>
                                        <p class="text-primary">MS in Civil Engineering, FALL 2019. California State University Fullerton, USA.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 py-4">
                                    <img class="rounded" src="{{ asset('img/testimonial/Siddhant-Somani.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="item mx-3 p-4 text-center bg-white rounded">
                            <div class="row">
                                <div class="col-md-8 py-5">
                                    <blockquote class="testimonial-quote"><i class="fas fa-quote-left"></i> Very good experience as the advisor was just a call away. Once when I was nervous about my visa Mr. Sunit Survase personally called me to boost my moral and Tanaya did analyse my profile, so in a week I got 6 admits from 10 applications. Lastly Shrutika helped me with the most important thing that was visa interview and I got it approved. <i class="fas fa-quote-right"></i></blockquote>
                                    <div>
                                        <h4 class="text-primary mt-2 mb-0">Siddhant Somani</h4>
                                        <p class="color-black">MS in Civil Engineering, FALL 2019. California State University Fullerton, USA.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 py-4">
                                    <img class="rounded" src="{{ asset('img/testimonial/Siddhant-Somani.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- /testimonials --}}
        {{-- services --}}
        <section class="services my-4">
            <div class="container-fluid">
                <h2 class="py-4 text-center">Our Study Abroad <strong>Services</strong></h2>
                <div class="row">
                    <div class="col-md-6 text-right services-left" style="width: 100%">
                        <div class="animate__animated animate__backInLeft services-item">
                            <h3> Counseling Session <i class="fas fa-user-check"></i></h3>
                            <p>A personalized student & parent counseling sessions</p>
                        </div>
                        <div class="animate__animated animate__backInLeft services-item">
                            <h3> Assessment of the Test Scores <i class="fas fa-calculator"></i></h3>
                            <p>Assessment of the test scores (each section) & GPA (grade point average)</p>
                        </div>
                        <div class="animate__animated animate__backInLeft services-item">
                            <h3> Short Listing of Universities <i class="fas fa-list-ul"></i></h3>
                            <p>University Short listing based on your Academics, Scores, and Budget</p>
                        </div>
                        <div class="animate__animated animate__backInLeft services-item">
                            <h3> Scholarships / Aid / Applications <i class="fas fa-envelope-open-text"></i></h3>
                            <p>Guidance for Scholarships / Aid / Assistantship Applications</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-left services-right">
                        <div class="animate__animated animate__backInRight services-item">
                            <h3><i class="fas fa-user-friends"></i> Expert Coaching</h3>
                            <p>Expert coaching for SAT, GRE, TOEFL, IELTS & GMAT</p>
                        </div>
                        <div class="animate__animated animate__backInRight services-item">
                            <h3><i class="fas fa-star"></i> Assessment of Academics & Financial Background</h3>
                            <p>Thorough assessment of your academics & financial background</p>
                        </div>
                        <div class="animate__animated animate__backInRight services-item">
                            <h3><i class="fas fa-sticky-note"></i> Applications Processing</h3>
                            <p>Online Applications Processing & Documentation</p>
                        </div>
                        <div class="animate__animated animate__backInRight services-item">
                            <h3><i class="fas fa-clipboard-list"></i> Recommendation Letters, Essays, Customized SOP’s</h3>
                            <p>We help you in preparing Recommendation Letters, Essays, Customized SOP’s</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- /services --}}

        {{-- Universities --}}
        <section class="py-4 universities">
            <div class="container">
                <h2 class="text-center">We are recruiting for our Top Partners for 2020/21, Apply Now !</h2>
                <div class="universities-items owl-carousel owl-theme">
                    <div class="item mx-3 text-center">
                        <div class="row">
                            <div class="col-xs-12 m-4 university-item pb-3">
                                <img src="{{ asset('img/uni/birmingham-city-university.png') }}">
                            </div>
                            <div class="col-xs-12 m-4 university-item">
                                <img src="{{ asset('img/uni/GreenwichUniversity.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="item mx-3 text-center">
                        <div class="row">
                            <div class="col-xs-12 m-4 university-item pb-3">
                                <img src="{{ asset('img/uni/KingstonUniversityLondon.png') }}" >
                            </div>
                            <div class="col-xs-12 m-4 university-item">
                                <img src="{{ asset('img/uni/Nottingham_Trent_University.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="item mx-3 text-center">
                        <div class="row">
                            <div class="col-xs-12 m-4 university-item pb-3">
                                <img src="{{ asset('img/uni/SheffieldUniversity.png') }}">
                            </div>
                            <div class="col-xs-12 m-4 university-item">
                                <img src="{{ asset('img/uni/StrathclydeUniversity.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="item mx-3 text-center">
                        <div class="row">
                            <div class="col-xs-12 m-4 university-item pb-3">
                                <img src="{{ asset('img/uni/swansea-university.png') }}">
                            </div>
                            <div class="col-xs-12 m-4 university-item">
                                <img src="{{ asset('img/uni/university-of-liverpool.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="item mx-3 text-center">
                        <div class="row">
                            <div class="col-xs-12 m-4 university-item pb-3">
                                <img src="{{ asset('img/uni/uwe-bristol.png') }}">
                            </div>
                            <div class="col-xs-12 m-4 university-item">
                                <img src="{{ asset('img/uni/PortsmouthUniversity.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- /Universities --}}

        {{-- courses --}}
        <section class="py-4">
            <div class="container">
                <h2 class="text-center">Top Courses to <strong>Study Abroad</strong></h2>
                <div class="row courses-items">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/BBA.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/it.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/arts.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/biology.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/engr.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/hum.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/law.png') }}">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/medicine.png') }}">
                    </div>
                </div>
            </div>
        </section>
        {{-- /courses --}}

        {{-- countries --}}
        <section class="py-4">
            <div class="container">
                <h2 class="text-center">We can help you study in some of these <strong>Top Countries</strong></h2>
                <div class="owl-carousel owl-theme pt-5">
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/uk.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">United Kingdom</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/canada.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Canada</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/sweden.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Sweden</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/italy.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Italy</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/malta.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Malta</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/france.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">France</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/australia.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Australia</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/malaysia.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Malaysia</span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="{{ asset('img/country/russia.jpg') }}">
                        <div class="country-name text-center">
                            <span class="">Russia</span>
                        </div>
                    </div>
                  </div>
            </div>
        </section>
        {{-- /countries --}}

        {{-- offers --}}
        <section class="py-5">
            <div class="container">
                <div class="rotatingText-content">
                    <h2 class="">Route Alternative is the most
                        {{-- <h2 class="rotatingText-adjective">beautiful</h2>
                        <h2 class="rotatingText-adjective">maintainable</h2>
                        <h2 class="rotatingText-adjective">perfect 👌</h2> --}}
                        <span style="margin-right:100px;">
                            <strong class="rotatingText-adjective" > helpful</strong>
                            <strong class="rotatingText-adjective" > popular</strong>
                            <strong class="rotatingText-adjective" > trusted</strong>
                        </span>
                        International Education Consulting Company in Bangladesh.</h2>
                    </div>
                <p class="text-center">Route Alternative has a huge success rate <br> in sending almost 99% of students for study abroad</p>
                <div class="row pt-2">
                    <div class="col-md-3 col-xs-6 text-center animate__animated animate__bounceIn">
                        <i class="fa fa-users fa-3x" ></i>
                        <h2>3000+</h2>
                        <p >Happy Students</p>
                        <p >They can’t be wrong</p>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center animate__animated animate__bounceIn">
                        <i class="fas fa-university fa-3x" ></i>
                        <h2>10+</h2>
                        <p >Countries</p>
                        <p >Many more to come</p>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center animate__animated animate__bounceIn">
                        <i class="far fa-smile fa-3x" ></i>
                        <h2>16+</h2>
                        <p >Years of Experience</p>
                        <p >Consistent in serving quality</p>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center animate__animated animate__bounceIn">
                        <i class="fa fa-graduation-cap fa-3x" ></i>
                        <h2>750000</h2>
                        <p >USD worth Scholarships</p>
                        <p >In last 3 years</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- /offers --}}
        {{-- articles --}}
        <section class="py-4 universities">
            <div class="container">
                <h2>LATEST <strong>ARTICLES</strong></h2>
                <div class="row py-3">
                    <div class="col-md-2 col-xs-4 text-center">
                        <div class="calender">
                            <h3>12</h3>
                        </div>
                        <div class="month">
                            month
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-8 py-2 border">
                        <a class="" href="">
                            <h5>Top 8 Study Abroad Destinations For International Student </h5>
                            <p class="article-button">Click here to read more...</p>
                        </a>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-2 col-xs-4 text-center">
                        <div class="calender">
                            <h3>12</h3>
                        </div>
                        <div class="month">
                            month
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-8 py-2 border">
                        <a class="" href="">
                            <h5>Top 10 Universities For International Students</h5>
                            <p class="article-button">Click here to read more...</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- /articles --}}

@endsection
