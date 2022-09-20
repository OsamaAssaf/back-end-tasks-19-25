

<?php require_once('templates/header.php');


createHeader('UsersList');


?>
<dialog id="edit-modal">
    <div class="content">
        <h2 class="title">Edit User</h2>
    </div>
    <span class="close"><i class="fa-solid fa-xmark"></i></span>
</dialog>
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-red">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">Users List</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Users</a></li>
                    <li class="active" href="#"><span>Users List</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">

            <!-- Bordered Table -->
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Users list table</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <p class="text-muted">All the users that have sign-up to the app</p>
                            <div class="table-wrap mt-40">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Phone Number</th>
                                            <th>Location</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="users-table">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Bordered Table -->

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
<style>
    #edit-modal {
        position: relative;
        min-width: 280px;
        min-height: 200px;

    }

    #edit-modal .close {
        position: absolute;
        top: 8px;
        right: 8px;

    }

</style>
<!-- JavaScript -->

<script>
    const tableBody = $('#users-table');
    const URL = "http://localhost/practical_level_task_24/apis/users/get-users.php";
    let request = $.ajax({
        url: URL,
        method: "POST",
        data: {},
        dataType: "json"
    });
    request.done(function(data) {
        if(parseInt(data['flag']) === 1){
            for(let i = 0 ; i < data['users'].length ; i++){

                tableBody.append(createTableRow(data['users'][i]));
            }
        }else{
            tableBody.append(data['msg']);
        }

    });

    request.fail(function() {
        tableBody.append('Something went wrong, refresh the page.');

    });
    function createTableRow(data){
        const tr = $('<tr></tr>');
        tr.append('<td>' + data['id'] + '</td>');
        tr.append('<td>' + data['full_name'] + '</td>');
        tr.append('<td>' + data['email'] + '</td>');
        tr.append('<td>' + data['username'] + '</td>');
        tr.append('<td>' + data['phone_number'] + '</td>');
        tr.append('<td>' + data['location'] + '</td>');

        const actionsRow = $('<td></td>');
        actionsRow.addClass('text-nowrap');

        const editBtn = $('<button></button>');
        editBtn.addClass('mr-25');
        editBtn.attr('data-toggle','tooltip');
        editBtn.attr('data-original-title','Edit');
        editBtn.css({
            'background':'none',
            'border': 'none'
        });
        editBtn.click(function (){
            // document.getElementById('edit-modal').showModal();
        });

        const editIcon = $('<i></i>');
        editIcon.addClass('fa fa-pencil text-primary m-r-10');
        editBtn.append(editIcon);

        const deleteBtn = $('<button></button>');
        deleteBtn.attr('data-toggle','tooltip');
        deleteBtn.attr('data-original-title','Close');
        deleteBtn.css({
            'background':'none',
            'border': 'none'
        });
        deleteBtn.click(function (){
            const URL = "http://localhost/practical_level_task_24/apis/users/delete-user.php";
            let request = $.ajax({
                url: URL,
                method: "POST",
                data: {
                    'id':data['id'],
                },
                dataType: "json"
            });
            request.done(function(data) {
                if(parseInt(data['flag']) === 1){
                    tr.remove();
                }else{
                    window.alert(data['msg']);

                }

            });
        });

        const deleteIcon = $('<i></i>');
        deleteIcon.addClass('fa fa-close text-danger');
        deleteBtn.append(deleteIcon);

        actionsRow.append(editBtn);
        actionsRow.append(deleteBtn);

        tr.append(actionsRow);

        return tr;
    }
</script>



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
