<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>S'inscrire</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo site_url("assets/img/core-img/favicon.ico"); ?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/core-style.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/style.css"); ?>">

</head>

<body>
<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-6 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>S'inscrire</h2>
                        </div>

                        <form action="<?php echo base_url('welcome/inscription/');?>" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" name="nom" placeholder="Votre nom" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Votre adresse Email" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe" value="">
                                </div>
                                <div class="amado-btn-group mt-32 mb-150 oui">
                                    <button class="btn amado-btn mb-15" type="submit">S'inscrire</button>
                                </div>
                                <div class="col-12">
                                    <a class="maClasse" href="<?php echo base_url('welcome/index/');?>">Se connecter</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="#"><img src="<?php echo site_url("assets/img/core-img/logo2.png"); ?>" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="<?php echo site_url("assets/js/jquery/jquery-2.2.4.min.js"); ?>"></script>
<!-- Popper js -->
<script src="<?php echo site_url("assets/js/popper.min.js"); ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo site_url("assets/js/bootstrap.min.js"); ?>"></script>
<!-- Plugins js -->
<script src="<?php echo site_url("assets/js/plugins.js"); ?>"></script>
<!-- Active js -->
<script src="<?php echo site_url("assets/js/active.js"); ?>"></script>

</body>

</html>