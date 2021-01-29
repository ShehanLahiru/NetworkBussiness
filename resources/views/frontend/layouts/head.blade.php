<!doctype html>
<html lang="en">

<head>
    <title>Remote Permission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
     <meta name="title" content="Remote Permission">
     <meta name="description" content="Remote Permission">
     <meta name="keywords" content="Remote Permission">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="site-navbar-wrap ">
            <div class="site-navbar-top">
                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">

                        </div>

                    </div>
                </div>
            </div>
            <div id = "site-navbar" class="site-navbar">
                <div class="container fluid">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <div class="image-logo">
                                <img width="70px" height="70px" src="images/logo.jpeg" alt="Image">
                            </div>
                        </div>
                        
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-black"><span
                                                class="icon-menu h3"></span></a></div>
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li><a active href={{ route('home') }}>Home</>
                                        </li>
                                        <li><a href={{ route('about-us') }}>About Us</a></li>
                                        <li><a href={{ route('contact-us') }}>Contact Us</a></li>
                                        <li><a href="{{ route('marketing') }}">Marketings</a></li>
                                        @if (Auth::check())

                                        <li><a href="{{ route('profile') }}">Profile</a></li>

                                        <li><a href="{{ route('backend.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                            Logout
                                        </a></li>

                                        <form id="frm-logout" action="{{ route('backend.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                           @if(Auth::user()->is_admin == 1)
                                           <li><a href={{ route('backend.dashboard') }}>Dashboard</a></li>
                                           @endif
                                        @endif

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/main.js"></script>

        <script>
            jQuery(function($) {
                var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                $('ul a').each(function() {
                if (this.href === path) {
                $(this).addClass('active');
                }
                });
             });

            //  if ($(window).width() > 992) {
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 40) {
                        $('#site-navbar').addClass("fixed-top");
                        // add padding top to show content behind navbar
                        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
                }else{
                    $('#site-navbar').removeClass("fixed-top");
                        // remove padding top from body
                    $('body').css('padding-top', '0');
      }
  });
// }
        </script>

</body>
</html>

