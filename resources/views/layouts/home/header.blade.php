<body>
<!-- Start Header Section -->
<header class="header" id="header">
    <div class="webnav">
        <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>
                    <!-- logo here -->
                    <a href="#" class="navbar-brand navbar-brand-edit">
                        <img src="{{ asset('assets/img-logo-white.png') }}" class="navbar-header-logo" alt="LOGO">
                        <h1 class="navbar-header-logo-text navbar-header-logo-text-update">Ayushya <span class="header-change">Ayurveda</span></h1>
                    </a>
                </div>

                <!-- Start Navigation Menu -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal">
                            <a target="_blank">Book appointment</a></button>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="main_navigation_menu11">
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#section_team">Team</a></li>
                        <li><a href="#assureTreatment">Treatment Spectrum</a></li>
                        <li><a href="#section_service">Services</a></li>
                        <li><a href="#footer">Contact</a></li>
                        <li><a href="{{ url('tariff') }}">Tariff</a></li>


                    </ul>
                </div>
                <!-- End Navigation Menu -->
            </div>
        </nav>
    </div>


    <div class="mobilenav">
        <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>
                    <!-- logo here -->
                    <a href="#" class="navbar-brand navbar-brand-edit">
                        <img src="{{ asset('assets/img-logo-white.png') }}" class="navbar-header-logo" alt="LOGO">
                        <h1 class="navbar-header-logo-text navbar-header-logo-text-update">Ayushya <span class="header-change">Ayurveda</span></h1>
                    </a>
                </div>

                <!-- Start Navigation Menu -->
                <div class="collapse navbar-collapse navbar_collapse">
                    <ul class="nav navbar-nav navbar-right button">
                        <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                            <a target="_blank">Book appointment</a></button>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#header">Home</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#section_team">Team</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#assureTreatment">Treatment Spectrum</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" class="nav" href="#section_service">Services</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#footer">Contact Us</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse"  href="{{ url('tariff') }}">Tariff</a></li>
                    </ul>
                </div>
                <!-- End Navigation Menu -->
            </div>
        </nav>
    </div>
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
@include('layouts/main/base/form')