<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $(".main-navigation").css("background" , "#fff");
                $(".main-navigation").css("border-bottom" , "2px solid #29507b");
                $(".main-navigation li a").css("color" , "#29507b");
                $(".main-navigation li a").css("letter-spacing" , "3px");
            }

            else{
                $(".main-navigation").css("background" , "transparent");
                $(".main-navigation").css("border-bottom" , "none");
                $(".main-navigation li a").css("letter-spacing" , "3px");
            }
        })
    });
</script>
<style>
    .main-navigation ul li:hover a {
        background:#efefef;
    }
    .main-navigation .active a{
        background-color: transparent; color: #5cbdbf !important;
    }
    .main-navigation a {color: #fff;}
    .main-navigation a:link {color: cyan;}
    .main-navigation a:focus {border-radius: 2px solid #29507b;}

    .button{
        margin-top:10px;
        border:1px solid #29507b;
        background:#fff;
        border-radius:20px;
        color:red; border-color:#29507b; transition:all .2s ease;
    }
    button:focus, btn:active{ outline:2 !important; }
    .button a{
        color:#000;
        letter-spacing:3px;
    }
    .button:hover{ background-color:#29507b; color:#ffffff; }
    .button:hover a{
        color:#fff;
    }
    .button:active{ background-color:#2e363b; border-color:#29507b; color:#fff; }
</style>
</head>

<body>
<header id="header">
    <div class="webnav">
        <nav class="main-navigation navbar-fixed-top navbar_top" role="navigation" data-spy="affix" data-offset-top="200">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>
                    <!-- logo here -->
                    <a href="#" class="navbar-brand"><img src="LOGO" alt="LOGO"></a>
                </div>

                <!-- Start Navigation Menu -->
                <div class="collapse navbar-collapse navbar_collapse">
                    <ul class="nav navbar-nav navbar-right appointment">
                        <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><a target="_blank">Book appointment</a></button>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="main_navigation_menu2">
                        <li><a id="home" class="nav" href="#">Home</a></li>
                        <li><a href="#section_team">Team</a></li>
                        <li><a href="#">Treatment Spectrum</a></li>
                        <li><a class="nav" href="#section_service">Services</a></li>
                        <li><a id="contact" class="nav" href="#footer">Contact Us</a></li>
                        <li><a id="contact" class="nav" href="{{ url('tariff') }}">Tariff</a></li>
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
                    <a href="#" class="navbar-brand"><img src="LOGO" alt="LOGO"></a>
                </div>

                <!-- Start Navigation Menu -->
                <div class="collapse navbar-collapse navbar_collapse">
                    <ul class="nav navbar-nav navbar-right appointment">
                        <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><a target="_blank">Book
                                appointment</a></button>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" id="home" class="nav" href="#">Home</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#section_team">Team</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#">Treatment Spectrum</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" class="nav" href="#section_service">Services</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" id="contact" class="nav" href="#footer">Contact Us</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" id="contact" class="nav" href="{{ url('tariff') }}">Tariff</a></li>
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