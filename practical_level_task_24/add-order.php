

<?php require_once('templates/header.php');


createHeader('AddOrder');


?>

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-red">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">Add New Order</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Orders</a></li>
                    <li class="active" href="#"><span>Add New Order</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Add Order</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="phone-number">Phone Number</label>
                                            <input type="email" id="phone-number" name="phone-number" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="location">Location</label>
                                            <input type="password" class="form-control" id="location" name="location" placeholder="Location">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="order-name">Order Name</label>
                                            <input type="text" class="form-control" id="order-name" name="order-name" placeholder="Order Name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="type">Meal Or Sandwich</label>
                                            <input type="email" id="type" name="type" class="form-control" placeholder="Meal Or Sandwich">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="total-price">Total Price</label>
                                            <input type="password" class="form-control" id="total-price" name="total-price" placeholder="10.0">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-2">
                                            <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->


    </div>


    <!-- Footer -->
    <?php require_once ('templates/footer.php');?>
    <!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- simpleWeather JavaScript -->
<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="dist/js/simpleweather-data.js"></script>

<!-- Progressbar Animation JavaScript -->
<script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="vendors/bower_components/Counter-Up/jquery.counterup.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Sparkline JavaScript -->
<script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- ChartJS JavaScript -->
<script src="vendors/chart.js/Chart.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendors/bower_components/raphael/raphael.min.js"></script>
<script src="vendors/bower_components/morris.js/morris.min.js"></script>
<script src="dist/js/morris-data.js"></script>

<script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/dashboard-data.js"></script>

</body>

</html>
