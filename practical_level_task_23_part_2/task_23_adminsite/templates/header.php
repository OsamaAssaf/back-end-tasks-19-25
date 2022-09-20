<?php function createHeader($title){ ?>

<!doctype html>
<html lang="en">

<head>
    <title>Tech Leaders</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Material Kit CSS -->
    <!--    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>-->
    <script src="https://kit.fontawesome.com/8c889e6980.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/scss/material-dashboard.css">


</head>

<body class="dark-edition">
<div id="custom-toast"></div>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
        <div class="logo">
            <a href="index.php" class="simple-text logo-normal">
                Tech Leaders
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item <?php echo $title === 'Users' ? 'active' : '' ?>">
                    <a class="nav-link" href="#users-collapse" data-bs-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="users-collapse">
                        <i class="fa-solid fa-users"></i>
                        <p>Users</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'Users' ? 'show' : '' ?> list-group" id="users-collapse"
                        aria-expanded="true">
                        <li><a class="nav-link" href="users-list.php">View Users List</a></li>
                        <li><a class="nav-link" href="add-new-user.php">Add New User</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'News' ? 'active' : '' ?>">
                    <a class="nav-link" href="#news-collapse" data-bs-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="news-collapse">
                        <i class="fa-solid fa-radio"></i>
                        <p>Latest News</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'News' ? 'show' : '' ?> list-group" id="news-collapse">
                        <li><a class="nav-link" href="latest-news-list.php">View Latest News</a></li>
                        <li><a class="nav-link" href="add-news.php">Add News</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'Training' ? 'active' : '' ?>">
                    <a class="nav-link" href="#training-collapse" data-bs-toggle="collapse"
                       role="button"
                       aria-expanded="true" aria-controls="training-collapse">
                        <i class="fa-solid fa-laptop-code"></i>
                        <p>Training Courses</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'Training' ? 'show' : '' ?> list-group"
                        id="training-collapse">
                        <li><a class="nav-link" href="training-courses-list.php">View Training Courses</a></li>
                        <li><a class="nav-link" href="add-new-training-course.php">Add Training Course</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'Events' ? 'active' : '' ?>">
                    <a class="nav-link" href="#events-collapse" data-bs-toggle="collapse"
                       role="button"
                       aria-expanded="true" aria-controls="events-collapse">
                        <i class="fa-solid fa-calendar-day"></i>
                        <p>Latest Events</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'Events' ? 'show' : '' ?> list-group"
                        id="events-collapse">
                        <li><a class="nav-link" href="latest-events-list.php">View Latest Events</a></li>
                        <li><a class="nav-link" href="add-new-event.php">Add Event</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'Attended' ? 'active' : '' ?>">
                    <a class="nav-link" href="#attended-collapse" data-bs-toggle="collapse"
                       role="button"
                       aria-expanded="true" aria-controls="attended-collapse">
                        <i class="fa-solid fa-table"></i>
                        <p>Attended</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'Attended' ? 'show' : '' ?> list-group"
                        id="attended-collapse">
                        <li><a class="nav-link" href="attended-courses.php">Courses</a></li>
                        <li><a class="nav-link" href="attended-events.php">Events</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'Jobs' ? 'active' : '' ?>">
                    <a class="nav-link" href="#jobs-collapse" data-bs-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="jobs-collapse">
                        <i class="fa-solid fa-briefcase"></i>
                        <p>Jobs</p>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="collapse <?php echo $title === 'Jobs' ? 'show' : '' ?> list-group" id="jobs-collapse">
                        <li><a class="nav-link" href="jobs-list.php">View Jobs List</a></li>
                        <li><a class="nav-link" href="add-new-job.php">Add New Job</a></li>
                        <li><a class="nav-link" href="cvs-list.php">CVs</a></li>
                    </ul>

                </li>
                <li class="nav-item <?php echo $title === 'Feedback' ? 'active' : '' ?>">
                    <a class="nav-link" href="feedback-list.php">
                        <i class="material-icons">feedback</i>
                        <p>Feedback</p>
                    </a>
                </li>
                <li class="nav-item <?php echo $title === 'Policy' ? 'active' : '' ?>">
                    <a class="nav-link" href="policy-and-privacy.php">
                        <i class="fas fa-lock"></i>
                        <p>Policy And Privacy</p>
                    </a>
                </li>
                <li class="nav-item <?php echo $title === 'Notifications' ? 'active' : '' ?>">
                    <a class="nav-link" href="notifications.php">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <?php } ?>
