<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font.css') }} "/>
    <script src="{{URL::asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Ayushya Panchakarma</title>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $(".main-navigation").css("background", "blue");
                }

                else {
                    $(".main-navigation").css("background", "transparent");
                }
            })
        })
    </script>
    <style>
        .main-navigation .active a {
            background-color: transparent;
            color: #69fd03;
        }

        a:focus {
            background-color: transparent;
        }

        .main-navigation a:hover {
            background-color: transparent;
            color: #29507b;
            border-radius: 20px;
        }

        .main-navigation a {
            background-color: transparent;
            color: #bebebe;
            font-size: 13pt;
            letter-spacing: 3px;
            color: #fff;
        }

        .button {
            margin-top: 8px;
            border: 1px solid #29507b;
            background: #fff;
            border-radius: 20px;

        }

        button:focus, btn:active {
            outline: 2 !important;
        }

        .button a {
            color: #000;
        }

        .button {
            background-color: #ffffff;
            color: red;
            border-color: #69fd03;
            transition: all .2s ease;
        }

        .button:hover {
            background-color: #29507b;
            color: #ffffff;
        }

        .button:hover a {
            color: #fff;
        }

        .button:active {
            background-color: #2e363b;
            border-color: #2e363b;
            color: #fff;
        }


    </style>
</head>

<body>

<!--Header Starts Here
<header class="header" id="header">
    <div class="header__box">
        <div class="header__box--logo">
            Aayushya Ayurveda
        </div>
        <div class="header__box--navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#section_team">Team</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
<header>
-->
<!-- Start Header Section -->
<header id="header">
    <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars fa-lg"></i>
                </button>
                <!-- logo here -->
                <a href="#" class="navbar-brand"><img src="LOGO" alt="LOGO"></a>
            </div>

            <!-- Start Navigation Menu -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><a
                                target="_blank">Book
                            appointment</a></button>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
                    <li><a id="home" class="nav" href="#">Home</a></li>
                    <li><a href="#section_team">Team</a></li>
                    <li><a href="#section_team">Treatment Spectrum</a></li>
                    <li><a class="nav" href="#section_service">Services</a></li>
                    <li><a id="contact" class="nav" href="#">Contact Us</a></li>
                    <li><a id="contact" class="nav" href="#">Tariff</a></li>
                </ul>

            </div>
            <!-- End Navigation Menu -->
        </div>
    </nav>

    <!-- End Header Section -->
    <div class="header__message">
        <div class="header__message--heading">
            "Yoga is a light, which once lit, will never dim. The better your practice, the brighter the flame."
        </div>
        <div class="header__message--person">
            -B.K.S lyengar
        </div>
    </div>
</header>
<!--Header Finishes Here-->

<!--Main Body Starts Here-->
<main>
    <!--team section-->
    <section class="team" id="section_team">
        <div class="team__title">
            <h2>Ayushya Team</h2>
        </div>
        <div class="team__body">
            <div class="team__body--1">
                <div class="team__body--1__icon">
                    <i class="icon-founder"></i>
                </div>
                <div class="team__body--1__head">
                    <h1>Founders</h1>
                </div>
                <div class="team__body--1__message ts_justify default-font-size">
                    <p> The home was established in 2012 by Dr Suresh Maharjan, Mr Asta Bir Maharjan, Mrs Nirmala
                        Maharjan
                        and Dr Namrata Shakya with an aim to provide the quality Health service and Health training and
                        promote Health Tourism.</p>
                </div>
            </div>
            <div class="team__body--1">
                <div class="team__body--1__icon">
                    <i class="icon-management"></i>
                </div>
                <div class="team__body--1__head">
                    <h1>Management Team</h1>
                </div>
                <div class="team__body--1__message ts_justify default-font-size">
                    <p>The management team is headed by Mrs Chadani Malakar an MBS from Tribhuvan University.She has
                        keen
                        interest in Ayurveda and Yoga and leading the Home in the Path of Quality service.</p>
                </div>
            </div>
            <div class="team__body--1">
                <div class="team__body--1__icon">
                    <i class="icon-medical"></i>
                </div>
                <div class="team__body--1__head">
                    <h1>Medical Team</h1>
                </div>
                <div class="team__body--1__message ts_justify default-font-size">
                    <p> Our medical team is led by Dr Suresh Maharjan and assisted by a team of Dr Sabina Maharjan
                        (Ayurvedic Physician), Mrs Dipika Poudel (Nursing head), Mrs Sabina Maharjan (ANM and senior
                        therapist).</p>
                </div>
            </div>
        </div>
    </section>

    <!--team section ends-->
    <!--owner section starts-->

    <section class="owner">
        <div class="owner__image">
            <img src="{{asset('assets/owner.jpg')}}" alt="picture" class="owner__image--1">
        </div>
        <div class="owner__about">
            <div class="owner__about--name">
                <h2>Dr Suresh Maharjan</h2>
            </div>
            <div class="owner__about--detail">
                <p class="justify-content"> Dr Maharjan is an Eminent Consultant Ayurveda Physician who has been
                    practicing and teaching
                    Ayurveda from last 12 years in different national and international Ayurvedic institute. Currently
                    he is working as a Senior Consultant in National Ayurveda Research and Training Centre (NARTC),
                    Ministry of Health and Population and as an Executive member of Nepal Ayurvedic Medical Council
                    (NAMC), Ministry of Health and Population. He had worked as Guest Lecturer at Ayurveda
                    Mahavidhyalaya and University of Patanjali, Haridwar, India and as a Researcher at Divya Yoga Mandir
                    (Trust), Haridwar, India. He was an ex-lecturer at Patanjali Ayurveda Medical College and Research
                    Center, Kavre, Nepal and worked as Chief Research Officer at Dekha Herbals, Lalitpur, Nepal.</p>
            </div>
        </div>
    </section>
    <!--owner section ends-->

    <!--assurance treatment section-->
    <section class="assureTreatment">
        <div class="assureTreatment__heading">
            <h2>Quality Assurance</h2>
        </div>
        <div class="assureTreatment__box">
            <div class="assureTreatment__box--1">
                <h2 class="headingStyle">ASSURANCE OF QUALITY</h2>
                <hr/>
                <p class="margin-top-medium default-font-size">Ayushya Health Home assures you the quality of its
                    services. The Home is
                    run by highly qualified,
                    experienced
                    and internationally renowned Ayurveda physicians (MD Ayurveda), Graduate Ayurveda Doctors (BAMS),
                    highly
                    trained Ayurveda therapists and high quality managers. This is the only Authentic Ayurveda,
                    Panchakarma
                    and
                    Yogic healing centre in Nepal with all specialties and amenities.</p>

                <p class="font default-font-size">Our promise of quality services:</p>
                <ul class="margin-top-medium default-font-size padding-left-small">
                    <li class="margin-top-small"> We follow ancient authentic guidelines of Ayurveda with moderninsights
                        by high qualityparametersandtraining rules
                    </li>
                    <li class="margin-top-small">Competent, experienced and highly qualified team of Ayurveda
                        Physicians
                    </li>
                    <li class="margin-top-small">Well trained, qualified and experienced therapists based on Ayurveda
                        principles
                    </li>
                    <li class="margin-top-small">Treatment design, follow ups, daily monitoring and results assessment
                    </li>
                    <li class="margin-top-small">Following high quality hygienic standards </li>
                    <li class="margin-top-small">Warm hospitality and Love full environment for the guests</li>
                    <li class="margin-top-small">Delicious Ayurveda vegetarian diet recipes, experienced cook team and
                        served with love and
                        honour.
                    </li>
                    <li class="margin-top-small">Daily routine guidance and life style teaching.</li>
                </ul>
            </div>

            <div class="assureTreatment__box--2">
                <h2 class="headingStyle">TREATMENT SPECTRUM</h2>
                <hr/>
                <p class="margin-top-medium default-font-size">Ayurveda is a fine blend of science and philosophy. It
                    defines health as an
                    equilibrium state of
                    dosha,
                    dushya and mala along with the blissful state of senses, mind and soul. Any aberration in these
                    health
                    factors result into a disease. </p>
                <p class="margin-top-small default-font-size">Ayurveda and Yoga is a way of living that helps to lead a
                    happy and healthy
                    holistic
                    view
                    of life. It focuses on the promotion of health and prevention of disease rather than curing the
                    diseases.
                    Ayurveda uses only natural ingredients for the purpose and thus provides a totally harmless affect.
                    Panchakarma is a unique healing procedure that cleanses and detoxifies body, senses, mind and
                    consciousness.
                    It harmonizes the entire subtle body-mind phenomenon and helps to strengthen the immune system and
                    restore
                    wellbeing. Yoga helps to bring an equilibrium state between body and mind. It works on all the level
                    of
                    consciousness to establish the health and wellbeing. The Health service at the Ayushya Health Home
                    is
                    based
                    on the Classical Ayurveda, Panchakarma and Yoga with its unique life style guidelines, dietetic
                    regimens,
                    Rasayana, Sadvritta and Himalayan herbs.</p>
            </div>
        </div>
    </section>
    <!--services-->
    <section class="service" id="section_service">
        <div class="service__heading">
            <h2>Services</h2>
        </div>
        <div class="service__box">
            <div class="service__box--1">
                <p class="headingStyle">Panchakarma Services</p>
                <hr/>
                <ul class="unorderList">
                    <li><a href="{{ url('panchakarma/classic') }}">Classical Panchakarma</a></li>
                    <li><a href="{{ url('panchakarma/wellness') }}">Wellness Panchakarma</a></li>
                    <li><a href="{{ url('panchakarma/blissful') }}">Blissful Panchakarma</a></li>
                </ul>
            </div>

            <div class="service__box--2">
                <p class="headingStyle">Yoga Program</p>
                <hr/>
                <ul class="unorderList">
                    <li><a href="#">General Yoga</a></li>
                    <li><a href="#">Yogic Detoxification</a></li>
                </ul>
            </div>

            <div class="service__box--3">
                <p class="headingStyle">Special Treatment</p>
                <hr/>
                <ul class="unorderList">
                    <li><a href="#">Marma Therapy</a></li>
                    <li><a href="#">Ksharsutra</a></li>
                    <li><a href="#">Personalized Treatment Program</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--location section-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.89023786258!2d85.37795451469759!3d27.59693238283779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb111156b3881b%3A0xbdda3889293e4b74!2sGodawari+Botanical+Garden!5e0!3m2!1sen!2snp!4v1519282557042"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</main>

@include('layouts/main/base/footer')
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/jquery.nav.js')}}"></script>
</body>
</html>
