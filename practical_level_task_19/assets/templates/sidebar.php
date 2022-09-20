
<?php function buildSideBar($currentNav){ ?>

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="assets/img/logo-small.png">
            </div>
        </a>
        <a href="index.php" class="simple-text logo-normal">
            Task 19
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php echo $currentNav === 'Image View'? 'active' :''?>">
                <a href="image-view.php">
                    <i class="nc-icon nc-image"></i>
                    <p>Image View</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'About Us'? 'active' :''?>">
                <a href="about-us.php">
                    <i class="nc-icon nc-alert-circle-i"></i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Our Services'? 'active' :''?>">
                <a href="our-services.php">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Our Services</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Our Works'? 'active' :''?>">
                <a href="our-works.php">
                    <i class="nc-icon nc-settings"></i>
                    <p>Our Works</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Feedback'? 'active' :''?>">
                <a href="feedback.php">
                    <i class="nc-icon nc-chat-33"></i>
                    <p>Feedback</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Our Team'? 'active' :''?>">
                <a href="our-team.php">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>Our Team</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Header'? 'active' :''?>">
                <a href="header.php">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Header</p>
                </a>
            </li>
            <li class="<?php echo $currentNav === 'Footer'? 'active' :''?>">
                <a href="footer.php">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Footer</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<?php } ?>