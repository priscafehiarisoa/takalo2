<?php
if(!isset($isa)) $isa = 0 ;
if(!isset($echange)) $echange = 0 ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Checkout</title>

    <!-- Favicon  -->
    <!-- Favicon  -->
    <link rel="icon" href="<?php echo "http://localhost/TAKALO2/ci306/assets/img/core-img/favicon.ico"; ?> ">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo   base_url("assets/css/core-style.css"); ?>">
    <link rel="stylesheet" href="<?php  echo base_url("assets/css/style.css"); ?> ">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="../assets/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="accueil.html"><img src="../assets/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="accueil.html"><img src="../assets/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="<?php echo site_url('welcome/dashboardAdmin/');?>">Home</a></li>
                    <li><a href="<?php echo site_url('welcome/listeUtilisateur/');?>">INFO user</a></li>
                    <li><a href="<?php echo site_url('welcome/deconnect/');?>">DECONNEXION</a></li>
                </ul>
            </nav>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="../assets/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Formulaire d'ajout de catégorie</h2>
                            </div>

                            <form action="<?php echo site_url('welcome/ajoutCateg/');?>" method="post">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="categorie" placeholder="Nom de catégorie">
                                    </div>
                                    <div class="amado-btn-group mt-32 mb-150 oui">
                                        <button class="btn amado-btn mb-15" type="submit">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Statistique</h2>
                        </div>

                        <div class="cart-table ">
                            <table class="table table-responsive">
                                <thead>
                                <tr class="attr">
                                    <th>Utilisateur inscrit</th>
                                    <th>Echange effectué</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="nb">
                                    <td><?php echo $isa; ?></td>
                                    <td><?php echo $echange; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php $this->load->view('inc/footer')?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php  echo base_url("assets/js/jquery/jquery-2.2.4.min.js"); ?> "></script>
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