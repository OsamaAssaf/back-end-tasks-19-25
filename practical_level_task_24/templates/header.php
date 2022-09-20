<?php


    if(isset($_GET['overlay-search'])){
        $searchText = $_GET['overlay-search'];
        switch (strtolower($searchText)){
            case 'users list':
                header('Location: users-list.php');
                break;
            case 'add user':
                header('Location: add-user.php');
                break;
            case 'snacks list':
                header('Location: snacks-list.php');
                break;
            case 'add snack':
                header('Location: add-snack.php');
                break;
            case 'burger list':
            header('Location: burger-list.php');
            break;
            case 'add burger':
                header('Location: add-burger.php');
                break;
            case 'orders list':
                header('Location: orders-list.php');
                break;
            case 'add order':
                header('Location: add-order.php');
                break;
            case 'locations list':
                header('Location: locations-list.php');
                break;
            case 'add location':
                header('Location: add-locations.php');
                break;
            default:
                unset($_GET['overlay-search']);

        }
    }


function createHeader($title){ ?>

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
    <link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"
          type="text/css"/>

    <!-- Custom CSS -->
    <link href="src/scss/style.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
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

            <!-- Notification -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell top-nav-icon"></i><span
                            class="top-nav-icon-badge">5</span></a>
                <ul class="dropdown-menu alert-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <div class="streamline message-box message-nicescroll-bar">
                            <div class="sl-item">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy
                                        Doe</a>
                                    <span class="inline-block font-12  pull-right">12/10/16</span>
                                    <div class="clearfix"></div>
                                    <p>Neque porro quisquam est!</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="icon">
                                    <i class="fa fa-spotify"></i>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">
                                        2 voice mails</a>
                                    <span class="inline-block font-12  pull-right">2pm</span>
                                    <div class="clearfix"></div>
                                    <p>Neque porro quisquam est</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">8 voice
                                        messanger</a>
                                    <span class="inline-block font-12 pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>8 texts</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">2 new
                                        messages</a>
                                    <span class="inline-block font-12  pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>ashjs@gmail.com</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy
                                        Doe</a>
                                    <span class="inline-block font-12  pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/clever-logo.png"
                                                                                     alt="user_auth"
                                                                                     class="user-auth-img img-circle"/><span
                            class="user-online-status"></span></a>
                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>

        </ul>
        <div class="collapse navbar-search-overlap" id="site_navbar_search">
            <form role="search" >
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
                <a class="<?php echo ($title === 'UsersList' || $title === 'AddUser') ? 'active' : ''; ?>"
                   href="javascript:void(0);" data-toggle="collapse" data-target="#users-ul"><i
                            class="fa-solid fa-users mr-10"></i>Users <span class="pull-right"><span
                                class="label label-success mr-10"></span><i
                                class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="users-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'UsersList' ? 'active' : ''; ?>" href="users-list.php">Users
                            List</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'AddUser' ? 'active' : ''; ?>" href="add-user.php">Add New
                            User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo ($title === 'SnacksList' || $title === 'AddSnack') ? 'active' : ''; ?>"
                   href="javascript:void(0);" data-toggle="collapse" data-target="#snacks-ul"><i
                            class="fa-solid fa-cookie mr-10"></i>Snacks <span class="pull-right"><span
                                class="label label-success mr-10"></span><i
                                class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="snacks-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'SnacksList' ? 'active' : ''; ?>" href="snacks-list.php">Snacks
                            List</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'AddSnack' ? 'active' : ''; ?>" href="add-snack.php">Add New
                            Snack</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo ($title === 'BurgerList' || $title === 'AddBurger') ? 'active' : ''; ?>"
                   href="javascript:void(0);" data-toggle="collapse" data-target="#burger-ul"><i
                            class="fa-solid fa-burger mr-10"></i>Burger <span class="pull-right"><span
                                class="label label-success mr-10"></span><i
                                class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="burger-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'BurgerList' ? 'active' : ''; ?>" href="burger-list.php">Burger
                            List</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'AddBurger' ? 'active' : ''; ?>" href="add-burger.php">Add New
                            Burger</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo ($title === 'OrdersList' || $title === 'AddOrder') ? 'active' : ''; ?>"
                   href="javascript:void(0);" data-toggle="collapse" data-target="#orders-ul"><i
                            class="fas fa-shopping-cart mr-10"></i>Orders <span class="pull-right"><span
                                class="label label-success mr-10"></span><i
                                class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="orders-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'OrdersList' ? 'active' : ''; ?>" href="orders-list.php">Orders
                            List</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'AddOrder' ? 'active' : ''; ?>" href="add-order.php">Add New
                            Order</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php echo ($title === 'LocationsList' || $title === 'AddLocation') ? 'active' : ''; ?>"
                   href="javascript:void(0);" data-toggle="collapse" data-target="#locations-ul"><i
                            class="fa-solid fa-map-location-dot mr-10"></i>Locations <span class="pull-right"><span
                                class="label label-success mr-10"></span><i
                                class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="locations-ul" class="collapse collapse-level-1">
                    <li>
                        <a class="<?php echo $title === 'LocationsList' ? 'active' : ''; ?>" href="locations-list.php">Locations
                            List</a>
                    </li>
                    <li>
                        <a class="<?php echo $title === 'AddLocation' ? 'active' : ''; ?>" href="add-location.php">Add
                            New
                            Location</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->


    <?php } ?>
