<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Skill Technology</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="frontend/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="frontend/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="frontend/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="frontend/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="frontend/images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="{{URL::to('/home')}}">Home</a></li>
                                        <li> <a href="{{URL::to('/apropos')}}">Apropos</a></li>
                                        <li> <a href="{{URL::to('/categorie')}}">Categorie </a></li>
                                        <li> <a href="{{URL::to('/special')}}">Special  </a></li>
                                        <li> <a href="{{URL::to('/contact')}}"> Nous contacter</a></li>
                                        <li class="last">
                                            <a href="#"><img src="frontend/images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="frontend/icon/call.png" />(+237)657-099-175</li>
                                <li><img src="frontend/icon/email.png" />ulrichfedjo@gmail.com</li>
                                <li><img src="frontend/icon/loc.png" />Localisationn</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
          <!-- end header -->





                        @yield('contenu')





           <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Addresse</h3>
                                <span>Douala-Cameroun</span>
                                <p>(+237) 657-099-175
                                    <br>ulrichfedjo@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="{{URL::to('/home')}}">Home</a></li>
                                    <li> <a href="{{URL::to('/apropos')}}">Apropos</a></li>
                                    <li> <a href="{{URL::to('/categorie')}}">Categorie </a></li>
                                    <li> <a href="{{URL::to('/special')}}">Special  </a></li>
                                    <li> <a href="{{URL::to('/contact')}}"> Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2023 By Ulrich Fedjo</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/popper.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/jquery-3.0.0.min.js"></script>
    <script src="frontend/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="frontend/js/custom.js"></script>
    <!-- javascript -->
    <script src="frontend/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
