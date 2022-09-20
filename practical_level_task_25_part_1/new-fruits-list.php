<?php require_once('templates/head.php'); ?>
<body>
<div class="container-scroller">

    <?php require_once('templates/header.php');
    createHeader('New Fruits List');
    ?>

    <div class="container-fluid page-body-wrapper">
        <?php require_once('templates/navbar.php'); ?>

        <!-- main-panel starts -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">New Fruits Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Apple</td>
                                        <td>25</td>
                                        <td>
                                            <button class="btn btn-primary">View</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-inverse-success"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-inverse-danger"><i class="fa-solid fa-trash-can"></i></button>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once('templates/footer.php'); ?>
        </div>

    </div>

</div>


<?php require_once('templates/foot.php'); ?>

