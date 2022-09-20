<?php function createHeader($title)
{ ?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard V.1 | Nalika - Material Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/8c889e6980.js" crossorigin="anonymous"></script>
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- nalika Icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/nalika-icon.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.php"><img class="main-logo" src="img/logo.png" alt="" width="120px"
                                     style="margin-top: 16px"/></a>
            <strong><img src="img/logo-small.png" alt="" width="32px" height="32px" style="margin-top: 16px"/></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="img/tech.jpg" alt=""/></a>
                <h2>Tech <span class="min-dtn">Leaders</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="https://www.facebook.com/osama.assaf.5" target="_blank"><i
                                    class="icon nalika-facebook"></i></a></li>
                    <li><a href="https://twitter.com/OsamaAssaf2k" target="_blank"><i
                                    class="icon nalika-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/osama-assaf-392820216/" target="_blank"><i
                                    class="icon nalika-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="<?php echo $title === 'Home' ? 'active' : '' ?>">
                        <a class="has-arrow" href="">
                            <i class="fa-solid fa-house icon-wrap"></i>
                            <span class="mini-click-non">Home</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Slider Section" href="slider-section.php"><span
                                            class="mini-sub-pro">Slider Section</span></a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $title === 'Our Recipes' ? 'active' : '' ?>">
                        <a href="our-recipes.php" aria-expanded="false"><i
                                    class="fa-solid fa-burger icon-wrap"></i> <span
                                    class="mini-click-non">Our Recipes</span></a>
                    </li>
                    <li class="<?php echo $title === 'About Our Food' ? 'active' : '' ?>">
                        <a href="about-our-food.php" aria-expanded="false"><i
                                    class="fa-solid fa-circle-info icon-wrap"></i> <span
                                    class="mini-click-non">About Our Food</span></a>
                    </li>
                    <li class="<?php echo $title === 'Our Clients' ? 'active' : '' ?>">
                        <a href="our-clients.php" aria-expanded="false"><i
                                    class="fa-solid fa-people-robbery icon-wrap"></i> <span
                                    class="mini-click-non">Our Clients</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>

<?php } ?>