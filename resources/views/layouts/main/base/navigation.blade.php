<style>
    .dropdown-menu {
        width: 25rem;
    }
</style>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">


    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand navbar-brand-edit">
                <img src="{{ asset('assets/img-logo.png') }}" class="navbar-header-logo" alt="LOGO">
                <h1 class="navbar-header-logo-text navbar-header-logo-text-update">Ayushya <span class="header-change">Ayurveda</span></h1>
            </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <a target="_blank">Book appointment</a></button>
            </ul>

            <ul class="nav navbar-nav navbar-right navv">
                <li class="active">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Panchakarma Services</a>
                            <ul class="dropdown-menu dropdown-menu-update">
                                <li><a href="{{ url('panchakarma/classic') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Classical
                                        Panchakarma</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('panchakarma/blissful') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Blissful
                                        Panchakarma</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('panchakarma/wellness') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Wellness
                                        Panchakarma</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Yoga Program</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;General
                                        Yoga</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Yogic
                                        Detoxification</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="{{ url ('training/') }}" class="dropdown-toggle" data-toggle="dropdown">Training
                                Program</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url ('training/basicIntro') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Basic Introduction of
                                        Ayurveda</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/basicPancha') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span> Basic Panchakarma</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/advancePancha') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Advance Panchakarma</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/Cooking') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Ayurvedic Cooking</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/herbs') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Ayurvedic Herbs and Pharmacology</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/AyurvedicMedicine') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Ayurvedic Pharmacy</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('training/Diagnosis') }}"><span
                                                class="glyphicon glyphicon-chevron-right"></span>&nbsp;Concept of Diagnosis and Treatment</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Special Treatment<b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Marma Therapy</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Ksharsutra</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Personalized Treatment Program</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Consultation and Counselling</a>
                </li>

                <li>
                    <a href="{{ url('tariff') }}">Tariff</a>
                </li>

            </ul>
        </div>

    </div>


</div>
@include('layouts/main/base/form')
