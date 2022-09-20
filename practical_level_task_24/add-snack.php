

<?php require_once('templates/header.php');


createHeader('AddSnack');


?>

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-red">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">Add New Snack</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Snacks</a></li>
                    <li class="active" href="#"><span>Add New Snack</span></li>
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
                            <h6 class="panel-title txt-dark">Add Snack</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form id="add-snack-form">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="snack_name">Snack Name</label>
                                            <input type="text" class="form-control" id="snack_name" name="snack_name" placeholder="Snack Name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="meal_price">Snack Meal Price</label>
                                            <input type="text" id="meal_price" name="meal_price" class="form-control" placeholder="0.0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="sandwich_price">Snack Sandwich Price</label>
                                            <input type="text" class="form-control" id="sandwich_price" name="sandwich_price" placeholder="0.0">
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
<script>
    const addSnackForm = $('#add-snack-form');
    addSnackForm.submit(function () {
        console.log(addSnackForm.serializeArray()[0]['value']);
        console.log(addSnackForm.serializeArray()[1]['value']);
        console.log(addSnackForm.serializeArray()[2]['value']);
        const URL = "http://localhost/practical_level_task_24/apis/snacks/add-snack.php";
        let request = $.ajax({
            url: URL,
            method: "POST",
            data: {
                'snack_name': addSnackForm.serializeArray()[0]['value'],
                'meal_price': addSnackForm.serializeArray()[1]['value'],
                'sandwich_price': addSnackForm.serializeArray()[2]['value'],
            },
            dataType: "json"
        });
        request.done(function (data) {
            if (parseInt(data['flag']) === 1) {
                addSnackForm[0].reset();
                window.alert('Snack Added');
            } else {
                window.alert(data['msg']);
            }

        });
        request.fail(function() {
            alert( "Request failed , try again.");
        });
        return false;
    })
</script>
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
