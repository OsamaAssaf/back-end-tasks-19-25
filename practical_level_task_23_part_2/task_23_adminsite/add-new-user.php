<?php require_once('templates/header.php');

createHeader('Users');


?>


<?php



if(isset($_GET['edit'])){



} ?>


<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="users-list.php">Users</a>
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
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Add New User</h4>
                                </div>
                                <div class="card-body">
                                    <form id="add-new-user-form" name="add-new-user-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Full Name</label>
                                                    <input type="text" class="form-control" name="full-name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input type="text" class="form-control" name="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email address</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone-number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-static">Date Of Birth</label>
                                                    <input type="date" class="form-control" name="date-of-birth">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary pull-right">Add New
                                            User
                                        </button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once('functions/toast.php'); ?>
    <script>
        $(document).ready(function () {
            $("#add-new-user-form").submit(function (e) {
                const form = e.target;
                const URL = 'http://localhost/task_23_part_2_api/users/add-user.php';
                $.ajax({
                    type: "POST",
                    url: URL,
                    data: {
                        full_name: form['full-name'].value,
                        email: form['email'].value,
                        username: form['username'].value,
                        phone_number: form['phone-number'].value,
                        date_of_birth: form['date-of-birth'].value,
                    },
                    success: function (data) {
                        if (parseInt(data['flag']) === 1) {
                            showToast('User Added');
                            form['full-name'].value = '';
                            form['email'].value = '';
                            form['username'].value = '';
                            form['phone-number'].value = '';
                            form['date-of-birth'].value = '';
                        } else {
                            showToast(data['msg']);
                        }

                    },
                    dataType: 'json'
                });

                return false;
            });

        });
    </script>

    <?php require_once('templates/footer.php'); ?>
