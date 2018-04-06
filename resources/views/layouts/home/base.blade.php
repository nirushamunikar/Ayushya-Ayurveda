<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/img-logo.png') }}" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }} "/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Ayushya Ayurveda | A Complete Home for Health Life</title>
    <style>
        .sideinfo {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 13px;
            background-color: #efefef;
            color: #333;
            padding: 15px;
        }
        .sub_services li a{
            color:#333;
        }
        .sub_services{
            padding: 3px 0px 8px 15px;
        }
        .siheading {
            background: #29507b;
            color: #fff;
            width: 100%;
            padding: 8px 20px;
            font-size: 15px;
            margin-top: -15px;
        }

        .sipara {
            padding: 10px 15px;
            margin-bottom: 30px;
            list-style-type:none;
            font-size: 0.95em;
        }
        .sipara li{
            padding:4px 3px;
        }
        .sipara li a:hover{
            background: #ffff00;
        }
        .note {
            background: #fff;
            color: #29507b;
            float: right;
            border-radius: 30px 0px 30px 0px;
            padding: 20px;
            margin-right: -16px;
            height: auto;
        }
        @media screen and (max-width: 992px){
            .sideinfo{
                display: none;
            }
        }

    </style>
</head>

<body>
<!--Header Starts Here-->
    @include('layouts/home/header')
<!--Header Finishes Here-->

<!--Main Body Starts Here-->
    <main>
    <!--team section-->
        @include('layouts/home/team')
    <!--team section ends-->
    <!--owner section starts-->
        @include('layouts/home/owner')
    <!--owner section ends-->
        <div class="row">
        <div class="col-md-12">
        <div class="col-md-9">
    <!--assurance treatment section-->
        @include('layouts/home/assurance')
    <!--services-->
        @include('layouts/home/treatment')
        </div>
            <div style="background: red">
                @include('layouts/main/base/sidebar')
            </div>
        </div>
        </div>
        @include('layouts/home/service')
    </main>
{{--end main section    --}}
    @include('layouts/main/base/footer')
</body>
    @include('layouts.main.base.link_js')
    <script src="{{asset('js/form.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.nav.js')}}"></script>
    <script src="{{asset('js/header-script.js')}}"></script>
    <script src="{{asset('js/service-script.js')}}"></script>
</html>
