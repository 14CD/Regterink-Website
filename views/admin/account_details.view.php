<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
    <div id="wrapper">
        <?php require "partials/sidebar.php" ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Dashboard
                    </li>
                    <li class="breadcrumb-item active">Account</li>
                </ol>
                <div class="card mb-3">
                    <div class="card-header">
                        Uw gegevens
                    </div>
                    <form action="change_details" method="post">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Voor- en achternaam:
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="lname" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Email:
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Mobiele nummer:
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="mobile" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Actief
                                </div>
                                <div class="col-md-8">
                                    <select name="active" id="" class="form-control">
                                        <option value="1">Actief</option>
                                        <option value="0">Inactief</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="align" align="right">
                                        <input type="submit" value="Klik" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php require "partials/foot.php" ?>