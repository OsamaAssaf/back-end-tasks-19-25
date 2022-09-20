<?php require_once('templates/head.php'); ?>
<body>
<div class="container-scroller">

    <?php require_once('templates/header.php');
    createHeader('Add Summer Fruits');
    ?>

    <div class="container-fluid page-body-wrapper">
        <?php require_once('templates/navbar.php'); ?>

        <!-- main-panel starts -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add summer fruit</h4>

                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                           placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <label for="order_name">Order Name</label>
                                    <input type="text" class="form-control" id="order_name" name="order_name" placeholder="Order Name">
                                </div>
                                <div class="form-group">
                                    <label for="payment">Payment</label>
                                    <select class="form-control" id="payment" name="payment">
                                        <option value="Cash">Cash</option>
                                        <option value="Visa">Visa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="total_price<">Total Price</label>
                                    <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total Price">
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

