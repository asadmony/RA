@extends('layouts.frontend.app')
@section('content')

{{-- about us --}}

{{-- breadcumbs --}}
<div class="container-fluid breadcrumb-bg" style="background-image: url('./img/bg-img/aboutus.png');top right no-repeat; background-attachment:fixed;">
    <div class="container">
        <nav aria-label="breadcrumb" >
            <h2 class="mb-3">About Us</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
{{-- /breadcumbs --}}

<div class="container mt-4" >
    <div class="row">
        <div class="col-md-12 py-4">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
                <ul class="nav nav-tabs justify-content-between about-nav px-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-toggle="tab" aria-expanded="true">
                            <p class="mb-none pb-none font-weight-bold">Company Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons2" data-toggle="tab" aria-expanded="false">
                            <p class="mb-none pb-none font-weight-bold">Mission</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons3" data-toggle="tab" aria-expanded="false">
                            <p class="mb-none pb-none font-weight-bold">Executive Board</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons4" data-toggle="tab" aria-expanded="false">
                            <p class="mb-none pb-none font-weight-bold">Fast Facts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons5" data-toggle="tab" aria-expanded="false">
                            <p class="mb-none pb-none font-weight-bold">Achievements</p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content pt-4">
                    <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                        <div class="row mt-lg">
                            <div class="col-md-12 mb-3 text-center">
                                <h2 class="word-rotator-title">
                                    A dream doesn't become reality through magic; it takes
                                    <strong>
                                        <span class="word-rotate active" data-plugin-options="{'delay': 2000}">
                                            <span class="word-rotate-items" style="width: 0px; top: 0px;">
                                                <span>Incessant efforts.</span>
                                                {{-- <span>Right assistance.</span>
                                                    <span>Determination.</span>
                                                    <span>Incessant efforts.</span> --}}
                                                </span>
                                            </span>
                                        </strong>
                                    </h2>
                                </div>
                            </div>

                            <div class="row text-justify">
                                <div class="col-md-8">
                                    <p class="lead">
                                        Grad-Dreams Education Consulting Pvt. Ltd. is one of the finest Global Education &amp; Career Services Company based in Mumbai &amp; Pune in India. For past more than <span class="alternative-font">18 years</span> we have assisted students in pursuing overseas education.
                                    </p>
                                </div>
                                <div class="col-md-4 center">
                                    <a href="/OurServices/" class="btn btn-lg btn-primary mt-xl">Check Our Services!</a>
                                </div>
                            </div>

                            <div class="row text-justify">
                                <div class="col-md-8">
                                    <p>We offer a personalized counseling to take 'right' decisions to choose a 'right' program, university &amp; country. Our 18 years of experience ranges from working extensively with the prestigious Ivy leagues colleges &amp; top public universities in the United States of America, top quality colleges from Canada, United Kingdom &amp; Singapore, where there is a value for money and few select schools from European Union, i.e. Germany, France, Sweden &amp; Netherlands where the cost of education is very less or zero!</p>
                                    <p>With the diminishing intercontinental boundaries and rising career prospects, the students and parents are bound to get confused with the enormously increasing options for education abroad and the complicated application process. This is where Grad-Dreams plays an important role by bridging the gap between the education seekers and providers while sticking to our organizational values of ethical counseling and student satisfaction. </p>
                                    <p>We have a highly customized and flexible service model and a vast database of education opportunities that we constantly update. Our counseling process is controlled by the yardstick of providing the best possible academic choice that abides by the clients credentials, interests, future scope, cost constraints and several other factors. We believe in providing an optimal solution to our ‘student’ that is feasible economically, satiates their educational quest, and above all holds a promise for a bright future!</p>
                                    <p>In our 18 years of service we have created and maintained an excellent rapport with our students and their parents. Our style of working and resolve for our students benefit has resulted in a healthy mutual relationship with the families.</p>
                                    <p>On whole, Grad-Dreams is a value driven organization working towards our mission of helping our students to tap the right educational opportunity that will carve an excellent academic career and a bright future thereon.</p>
                                </div>
                                <div class="col-md-4">
                                    {{-- <div class="featured-box featured-box-primary">
                                        <div class="box-content">
                                            <h4 class="text-uppercase">Behind the scenes</h4>
                                            <ul class="thumbnail-gallery" data-plugin-lightbox="" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <a title="" href="">
                                                            <span class="thumbnail mb-none">
                                                                <img src="" alt="" height="75" width="75">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="tall">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="heading-primary mt-xl">Our <strong>History</strong></h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="history">
                                        <li class="animate__animated animate__rotateInUpLeft">
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2003</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>We started this organisation keeping students benefit to the core while sticking to our organizational values of ethical counselling and student satisfaction.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2003-2004</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>We assisted our first 12 students in realising their study abroad dreams. We are till date in touch with our very first students and their parents. They have helped us embark this journey and still remain a proud part of the Grad-Dreams family.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2007</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>We got incorporated as a Private Limited Company – Grad-Dreams Education Consulting Pvt. Ltd. and expanded our operations by serving an increasing number of students.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2011</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>We started our Pune Office expanding our horizons serving a new region and new student community.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2013</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>We became an ETS Certified Test Administration Site for administering GRE and TOEFL tests with an initial humble testing capacity of 12 at our Pune office.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2014</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>Our Mumbai office also became an ETS Certified Test Administration Site for administering GRE and TOEFL tests assisting several hundreds of students. We collaborated with 100+ top institutions around the world.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="animate__animated animate__rotateInUpLeft" >
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2017</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p><strong>We became an <a href="http://www.airc-education.org/">AIRC (American International Recruitment Council), USA</a> certified organisation. </strong> <small><a href="http://www.airc-education.org/call-comments">We welcome comments about Grad-Dreams for the American International Recruitment Council</a></small></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate__animated animate__rotateInUpLeft" data-appear-animation="animate__rotateInUpLeft">
                                            <div class="thumb">

                                                <h3 style="margin: 55px; margin-top: 65px; color: #0088cc !important; font-weight: bold;">2019</h3>
                                            </div>
                                            <div class="featured-box">
                                                <div class="box-content">

                                                    <p>Grad-Dreams was awarded <strong>"PARTNER OF THE YEAR"</strong> award by the British Council for IELTS Registration. We also earned a Silver Partnership for the same.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                            <div class="row mt-lg">
                                <div class="col-md-12">
                                    <p class="lead center">
                                        "To provide superior quality consulting services to the international student community &amp; global academics looking for higher learning opportunities by providing the best to our students &amp; parents."
                                    </p>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12  text-justify">
                                    <h4>Our Mission:</h4>
                                    <p>Grad-Dreams' mission is to serve the international student community by guiding them in scaling the right academic career graph that matches the international standards among all the enormous education opportunities globally. Also to give the best possible education opportunities considering the students qualifications, interests, ambition, potential, that is not only cost efficient but also holds a promise for a bright and sound future.</p>
                                    <ul class="list list-icons list-primary text-justify">
                                        <li><i class="fa fa-check"></i> <strong>Assessment:</strong> Understand students’ interests/alignments/inclinations.</li>
                                        <li><i class="fa fa-check"></i> <strong>Think ahead-futuristic:</strong> Make aware of the vast options available in the international education field.</li>
                                        <li><i class="fa fa-check"></i> <strong>Industry aware career selection:</strong> Assist in selecting the best possible option with regards to the industry trends.</li>
                                        <li><i class="fa fa-check"></i> <strong>Catalyst in growth:</strong> Make every attempt to help student in becoming successful in his chosen career.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-lg">
                                <div class="col-md-12 text-justify">
                                    <h4>Our Values:</h4>
                                    <p>We believe that apart from being a service provider as an education consulting organization we have to also play a social role in building the future of our students and in turn our society. We take immense pride in this fact that we are a catalyst in this process and with that, comes a great responsibility which we always understand humbly. Following are the core values we hold as an organization:</p>
                                    <ul class="list list-icons list-primary">
                                        <li><i class="fa fa-check"></i> <strong>Ethical Counseling:</strong> An enriching career for every student is our prime focus and priority. Backed by our expertise in the education field we provide the right advice to our students as per their requirements, credentials and future viability.</li>
                                        <li><i class="fa fa-check"></i> <strong>Trust and satisfaction:</strong> Assist in resolving every single query that the student or the parents have, explain the pros and cons thus enabling in timely completion of the admission process.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tabsNavigationSimpleIcons3">

                            <div class="row mt-lg">
                                <div class="col-md-12 text-justify">
                                    <h4>Mr. Sunit Survase, <span class="text-sm">Founder Director</span></h4>
                                    <p>Mr. Sunit Survase is the Founder - Director of Grad-Dreams Consulting, one of the foremost international education consulting companies in India. True to his vision, he has founded and built the organization around the pillars of 'think-ahead' futuristic approach, trust and satisfaction.</p>
                                    <p>An accomplished and result-oriented professional, Sunit is having 14 years of versatile experience of business development, planning &amp; commercial management of an education consulting firm with comprehensive technical knowledge. His wide experience in understanding the structure &amp; policies of universities, schools &amp; colleges around the world has enabled him to provide customized solutions required by these institutions for student recruitments. Till date he has mentored a number of students &amp; professionals interested in pursuing further education in USA &amp; Europe, especially at the Master’s &amp; PhD level. A North America education expert, Sunit has dealt with the most exhaustive recruitment processes of several top American &amp; European universities. He also has the expertise to analyze and project the profile of the prospective student in the best way that guarantees best possible academic career.</p>
                                    <p>Till today Sunit has conducted &amp; participated in a number of technical symposiums &amp; conferences around the world in the field of international education. He keeps trotting the globe &amp; has visited more than 25 countries so far. Sunit holds a Bachelor’s degree in Electronics Engineering from University of Pune in India.</p>
                                    <p>Mr. Sunit V. Survase was warmly felicitated by the H.E United States Consulate General Mr. Thomas Vajda in Mumbai, on 17th June 2015.  He can be reached at sunit@gdx.in</p>

                                </div>
                            </div>

                            <div class="row mt-lg">
                                <div class="col-md-12 text-justify">
                                    <h4>Mrs. Karuna Survase, <span class="text-sm">Director</span></h4>
                                    <p>Karuna holds a Master’s Degree in Computer Science from the University of Pune and has worked as a software engineer with software companies like IBM, Nevis Networks, and TCS. As a manager with a technological background she has served in different departments at Grad-Dreams for more than a decade planning, building, optimising business and organisational processes.</p>
                                    <p>Karuna brings to the table, her expertise working on different domains, which works best in analyzing the industry dynamics, student’s requirements and an optimum academic option. She makes important contribution in organizational development and team building activities at Grad-Dreams. She has an innate flair for writing and has written several articles for Grad-Dreams Consulting. Thus contributing to the formation and growth stage of Grad-Dreams and WhizStorm on a strategic, business and technical level. </p>
                                    <p>She was also involved with the establishment of Pune and Mumbai test centre right from its inception since 2013 wherein she optimally utilised her computer science education background and managerial skills to lead the project on technical and managerial front.</p>
                                    <p>Karuna Survase can be reached at karuna@gdx.in</p>

                                </div>
                            </div>

                            <div class="row mt-lg">
                                <div class="col-md-12 text-justify">
                                    <h4>Dr. S. Ramachandran</h4>
                                    <p>Dr. Ramachandran is currently holding the position of Director of the PTVA’s Business School in Mumbai. He holds a PhD in Human Resource Management from the XLRI. He is a professional with more than 35 years of experience in Management &amp; Administration. In last few years he has held key positions like Executive Director (India China Chamber of Commerce &amp; Industry) , Joint Secretary (FICCI) and Chief of Administrative Services (Indira Gandhi Institute of Development and Research). Dr. Ramachandran has varied experience in Administration, Personnel, and trade promotion in premier training and research institutions across in India. He is associated with a number of management institutions and IGNOU as a visiting faculty imparting education in Management.</p>
                                    <p>Dr. Ramachandran is committed to take the company to newer levels of corporate governance. He can be reached at sram@gdx.in</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                            <div class="row mt-lg">
                                <div class="col-md-12">
                                    <p class="lead center">
                                        It’s your Dream, Our commitment!
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-lg">
                                <div class="col-md-12">
                                    <h4>Fast Facts:</h4>
                                    <ul class="list list-icons list-primary text-justify">
                                        <li><i class="fa fa-check"></i> An ETS® Certified Test Administration Site for the GRE® test. (Mumbai &amp; Pune)</li>
                                        <li><i class="fa fa-check"></i> An ETS Authorized TOEFL iBT® Test Center. (Mumbai &amp; Pune)</li>
                                        <li><i class="fa fa-check"></i> Member of the British Council IELTS Partnership Programme. IELTS registration Centre for the British Council in India.</li>
                                        <li><i class="fa fa-check"></i> An ISO 9001:8000 certified premier education abroad company in India.</li>
                                        <li><i class="fa fa-check"></i> Official representatives of a number of top universities &amp; colleges around the world.</li>
                                        <li><i class="fa fa-check"></i> Expertise in education in North America especially for the Bachelors, Masters / MBA &amp; doctoral programs.</li>
                                        <li><i class="fa fa-check"></i> Extensively worked with Ivy leagues &amp; top public universities in USA &amp; Canada, UK, Europe &amp; other countries.</li>
                                        <li><i class="fa fa-check"></i> Official campus visits to a number of universities &amp; colleges in the world.</li>
                                        <li><i class="fa fa-check"></i> A strong alumni network worldwide.</li>
                                        <li><i class="fa fa-check"></i> Providing the superior quality services to international students for past 18 years!</li>
                                        <li><i class="fa fa-check"></i> One stop solution for all of your education abroad needs.</li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tabsNavigationSimpleIcons5">
                            <div class="row mt-lg">
                                <div class="col-md-12">
                                    <p class="lead center">
                                        Thank You for your continued Support &amp; Cooperation. We are honoured to have our students &amp; parents as a part of our family.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-lg">
                                <div class="col-md-12">
                                    <h4>Fast Facts:</h4>
                                    <ul class="list list-icons list-primary text-justify">
                                        <li><i class="fa fa-check"></i> Grad-Dreams’ participated in a summit at Washington DC organized by the Department of Commerce, USA Government, inaugurated by the US President Barack Obama, in March 2015. We were one of the 20 participants from India &amp; the only education consulting company from Asia.</li>
                                        <li><i class="fa fa-check"></i> Grad-Dreams' was invited twice by the Government of Spain (Office of Foreign Trade) &amp; the Consulate General of Spain in India to visit some of the premier universities &amp; institutions in Spain for the purpose of international collaborations.</li>
                                        <li><i class="fa fa-check"></i> We are happy to receive an appreciation award at the hands of the H.E Consulate General of United States June 2015.</li>

                                        <li><i class="fa fa-check"></i> Some of the top Universities in the United States have chosen Grad-Dreams’ to start the classroom sessions in India (up to 6 credits), where the credits earned can be later transferred to the fulltime Masters / PhD programs in the United States.</li>
                                        <li><i class="fa fa-check"></i> As a tradition, like every year, our student visa success rate for FALL 2020-21 is 100%!</li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- /about us --}}

    @endsection

