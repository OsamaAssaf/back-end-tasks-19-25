

<?php require_once ('templates/header.php');

createHeader('Our Recipes');


?>

<div class="all-content-wrapper">

    <?php

    require_once('templates/logo-pro.php');
    require_once ('templates/header-advance-area.php');
    createHeaderAdvance('Our Recipes','fa-solid fa-burger');
    ?>
    <!-- Single pro tab start-->
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#add-recipe"><i class="fa-solid fa-circle-plus"></i> Add Recipe</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="add-recipe">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa-solid fa-pen"></i></span>
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa-solid fa-dollar-sign"></i></span>
                                                        <input type="text" class="form-control" placeholder="price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa-solid fa-image"></i></span>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Add
                                                    </button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once ('templates/copyright-area.php');?>

</div>

<?php require_once ('templates/footer.php');?>