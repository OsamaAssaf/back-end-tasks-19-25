
<?php require_once ('assets/templates/header.php');?>

<div class="wrapper ">

    <?php require_once ('assets/templates/sidebar.php');
    buildSideBar('About Us');
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
                    <a class="navbar-brand">About Us</a>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                Edit About Us Information
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row custom-row">
                                    <div class="col-1">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Description" name="description" id="description"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-1">
                                        <label for="item1">Item 1</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Item 1" name="item1" id="item1"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-1">
                                        <label for="item2">Item 2</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Item 2" name="item2" id="item2"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-1">
                                        <label for="item3">Item 3</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Item 3" name="item3" id="item3"  class="form-control form-control-sm"">
                                    </div>
                                </div>
                                <div class="row custom-row">
                                    <div class="col-1">
                                        <label for="image-url">Image URL</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" value="Image URL" name="image-url" id="image-url"  class="form-control form-control-sm"">
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
