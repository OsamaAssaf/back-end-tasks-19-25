<?php require_once('templates/head.php'); ?>
<body>
<div class="container-scroller">

    <?php require_once('templates/header.php');
    createHeader('Add Discounted Fruits');
    ?>

    <div class="container-fluid page-body-wrapper">
        <?php require_once('templates/navbar.php'); ?>

        <!-- main-panel starts -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add discounted fruit</h4>

                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="fruit_name">Fruit Name</label>
                                    <input type="text" class="form-control" id="fruit_name" name="fruit_name"
                                           placeholder="Fruit Name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control"
                                           placeholder="Upload Image">
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

