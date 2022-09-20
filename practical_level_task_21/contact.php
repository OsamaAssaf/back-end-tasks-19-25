<?php require_once('templates/header.php');

createHeader('Contact');


?>

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-red">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">Contact</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Contact</a></li>
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
                            <h6 class="panel-title txt-dark">Edit Contact</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="Clever Mind POB ICT">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="call">Call</label>
                                        <input type="text" class="form-control" name="call" id="call"
                                               value="+962-792-848-931 - Clever Care Team">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                               value="Clevermindpob@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="location">Location</label>
                                        <input type="text" class="form-control" name="location" id="location"
                                               value="Amman-Jordan -King Hussein Business Park ZINC -23">
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="submit" class="btn btn-success btn-anim"><i
                                                        class="icon-rocket"></i><span
                                                        class="btn-text">submit</span></button>
                                        </span>
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
    <?php require_once('templates/footer.php'); ?>
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
