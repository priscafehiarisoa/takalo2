<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Se connecter</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo "http://localhost/TAKALO2/ci306/assets/img/core-img/favicon.ico"; ?> ">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo   base_url("assets/css/core-style.css"); ?>">
    <link rel="stylesheet" href="<?php  echo base_url("assets/css/style.css"); ?> ">

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
                            <h2>Se connecter</h2>
                        </div>

                        <form action="<?php echo site_url('welcome/checkutilisateur/');?>" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="ranto@gmail.com">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" value="11111">
                                </div>
                                <div class="amado-btn-group mt-32 mb-150 oui">
                                    <button class="btn amado-btn mb-15" type="submit">Se connecter</button>
                                </div>
                                <div class="col-12">
                                    <a class="maClasse" href="<?php echo  site_url("welcome/subscribe/"); ?> ">Créer un compte</a>
                                </div>
                                <?php if(isset($erreur)){ ?>
                                    <div class="alert alert-danger " role="alert"><?php echo $erreur; ?></div>
                                <?php } ?>
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
<?php $this->load->view('inc/footer')?>
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="<?php  echo base_url("js/jquery/jquery-2.2.4.min.js"); ?> "></script>
<!-- Popper js -->
<script src="<?php  echo base_url("assets/js/popper.min.js"); ?> "></script>
<!-- Bootstrap js -->
<script src="<?php  echo base_url("assets/js/bootstrap.min.js"); ?> "></script>
<!-- Plugins js -->
<script src="<?php  echo base_url("assets/js/plugins.js"); ?>"></script>
<!-- Active js -->
<script src=" <?php echo base_url("assets/js/active.js"); ?>"></script>

</body>

</html>