<?php

$isEdit = false;
$editId = null;
if (isset($_GET['edit'])) {
    $isEdit = true;
    $editId = $_GET['id'];
}

require_once('templates/header.php');


createHeader('AddUser');


?>

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-red">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light"><?php echo $isEdit === true ? 'Edit User' : 'Add New User' ?></h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Users</a></li>
                    <li class="active" href="#"><span>Add New User</span></li>
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
                            <h6 class="panel-title txt-dark">Add User</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form id="add-user-form">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="full_name">Full
                                                Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                   placeholder="Full Name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                   placeholder="Username">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="phone_number">Phone
                                                Number</label>
                                            <input type="text" class="form-control" id="phone_number"
                                                   name="phone_number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label mb-10 text-left" for="location">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                   placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-2">
                                            <input type="submit" class="form-control btn btn-primary" name="submit"
                                                   value="Submit">
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
    <?php require_once('templates/footer.php'); ?>
    <!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<script>
    const addUserForm = $('#add-user-form');
    addUserForm.submit(function () {
        console.log();
        const URL = "http://localhost/practical_level_task_24/apis/users/add-user.php";
        let request = $.ajax({
            url: URL,
            method: "POST",
            data: {
                'full_name': addUserForm.serializeArray()[0]['value'],
                'email': addUserForm.serializeArray()[1]['value'],
                'username': addUserForm.serializeArray()[2]['value'],
                'phone_number': addUserForm.serializeArray()[3]['value'],
                'location': addUserForm.serializeArray()[4]['value'],
            },
            dataType: "json"
        });
        request.done(function (data) {
            if (parseInt(data['flag']) === 1) {
                addUserForm[0].reset();
                window.alert('User Added');
            } else {
                window.alert(data['msg']);
            }

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
