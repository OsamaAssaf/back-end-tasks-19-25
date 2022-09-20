
<?php require_once ('assets/templates/header.php');?>

<div class="wrapper ">

    <?php require_once ('assets/templates/sidebar.php');
    buildSideBar('Footer');
    ?>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand">Footer</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                Edit Contact Us Information
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="IClever Mind POB ICT" name="title" id="title"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="call">Call</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Call" name="call" id="call"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="email" value="Email" name="email" id="email"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-8">
                                        <button class="btn btn-primary">Save</button>
                                        <button class="btn btn-danger">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                Edit Location Information
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="location-text">Text</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Location Text" name="location-text" id="location-text"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="map-html">Map HTML</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Map HTML" name="map-html" id="map-html"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-8">
                                        <button class="btn btn-primary">Save</button>
                                        <button class="btn btn-danger">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                Edit Social Media Information
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="facebook-url">Facebook</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Facebook URL" name="facebook-url" id="facebook-url"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="twitter-url">Twitter URL</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Twitter URL" name="twitter-url" id="twitter-url"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-2">
                                        <label for="instagram-url">Instagram URL</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Instagram URL" name="instagram-url" id="instagram-url"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-8">
                                        <button class="btn btn-primary">Save</button>
                                        <button class="btn btn-danger">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer footer-black footer-white mt-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="credits m-auto">
                        <span class="copyright">
                Copyright © <script>
                  document.write(new Date().getFullYear().toString())
                </script>, Osama Assaf
              </span>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>

<?php require_once ('assets/templates/footer.php');?>
