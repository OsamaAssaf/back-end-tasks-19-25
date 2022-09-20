
<?php function createHeader($title){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Kenny I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework."/>
    <meta name="keywords"
          content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application"/>
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8c889e6980.js" crossorigin="anonymous"></script>
    <!-- Morris Charts CSS -->
    <link href="vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

    <!-- Data table CSS -->
    <link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet"
          type="text/css">


    <!-- Jasny-bootstrap CSS -->
    <link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i
                class="fa fa-bars"></i></a>
        <a href="index.php"><img class="brand-img pull-left" src="dist/img/logo.png" alt="brand" width="120px"/></a>
        <ul class="nav navbar-right top-nav pull-right">
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
                    <i class="fa fa-search top-nav-icon"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th top-nav-icon"></i></a>
                <ul class="dropdown-menu app-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <ul class="app-icon-wrap">
                            <li>
                                <a href="index.php" class="connection-item">
                                    <i class="fa-solid fa-circle-play txt-info"></i>
                                    <span class="block">Video View</span>
                                </a>
                            </li>
                            <li>
                                <a href="our-classes.php" class="connection-item">
                                    <i class="fa-solid fa-display txt-success"></i>
                                    <span class="block">Our Classes</span>
                                </a>
                            </li>
                            <li>
                                <a href="classes-schedule.php" class="connection-item">
                                    <i class="fa-solid fa-calendar-day txt-primary"></i>
                                    <span class="block">Classes Schedule</span>
                                </a>
                            </li>
                            <li>
                                <a href="about.php" class="connection-item">
                                    <i class="fa-solid fa-circle-info txt-danger"></i>
                                    <span class="block">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php" class="connection-item">
                                    <i class="fa-solid fa-address-book txt-warning"></i>
                                    <span class="block">Contact</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-search-overlap" id="site_navbar_search">
            <form role="search">
                <div class="form-group mb-0">
                    <div class="input-search">
                        <div class="input-group">
                            <input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30"
                                   placeholder="Search">
                            <span class="input-group-addon pr-30">
									<a href="javascript:void(0)" class="close-input-overlay"
                                       data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close"
                                       aria-expanded="true"><i class="fa fa-times"></i></a>
									</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li>
                <a class="<?php echo $title === 'Video View'? 'active':''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#home-ul"><i
                        class="fa-solid fa-house mr-10"></i>Home <span class="pull-right"><span
                            class="label label-success mr-10">1</span><i class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="home-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'Video View'? 'active':''; ?>" href="index.php">Video View</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo (($title === 'Our Classes') || ($title === 'Classes Schedule'))? 'active':''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#classes-ul"><i
                        class="fa-solid fa-display mr-10"></i>Classes <span class="pull-right"><span
                            class="label label-success mr-10">2</span><i class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="classes-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'Our Classes'?'active' : '';?>" href="our-classes.php">Our Classes</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'Classes Schedule'?'active' : '';?>" href="classes-schedule.php">Classes Schedule</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo $title === 'About'? 'active':''; ?>" href="about.php" data-toggle="collapse" data-target="#ecom_dr"><i
                        class="fa-solid fa-circle-info mr-10"></i>About</a>
            </li>
            <li>
                <a class="<?php echo $title === 'Contact'? 'active':''; ?>" href="contact.php" data-toggle="collapse" data-target="#ecom_dr"><i
                        class="fa-solid fa-address-book mr-10"></i>Contact</a>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->


    <?php } ?>
