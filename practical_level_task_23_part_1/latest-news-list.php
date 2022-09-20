<?php require_once('templates/header.php');

createHeader('News');


?>

<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="users-list.php">Latest News</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <i class="material-icons">notifications</i>
                            <p class="d-lg-none d-md-block">
                                Notifications
                            </p>
                        </a>
                    </li>
                    <!-- your navbar here -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"> Latest News List</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <img src="assets/img/sidebar-1.jpg" width="100%">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-description">
                                                Description</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <img src="assets/img/sidebar-1.jpg" width="100%">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-description">
                                                Description</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <img src="assets/img/sidebar-1.jpg" width="100%">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-description">
                                                Description</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
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

    <?php require_once('templates/footer.php'); ?>
