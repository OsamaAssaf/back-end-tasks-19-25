<?php require_once('templates/head.php'); ?>
<body>
<div class="container-scroller">

    <?php require_once('templates/header.php');
    createHeader('Add User');
    ?>

    <div class="container-fluid page-body-wrapper">
        <?php require_once('templates/navbar.php'); ?>

        <!-- main-panel starts -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add new user</h4>

                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="payment">Payment</label>
                                    <select class="form-control" id="payment" name="payment">
                                        <option value="Cash">Cash</option>
                                        <option value="Visa">Visa</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button type="reset" class="btn btn-light">Clear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once('templates/footer.php'); ?>
        </div>

    </div>

</div>


<?php require_once('templates/foot.php'); ?>

