

<?php function createHeaderAdvance($title,$icon){  ?>


<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse"
                                            class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="icon nalika-menu-task"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="slider-section.php">Slider Section</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="our-recipes.php">Our Recipes <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#others" href="about-our-food.php">About Our Food <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="our-clients.php">Our Clients <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="<?php echo $icon;?>"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2><?php echo $title?> Edit</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php }  ?>