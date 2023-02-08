<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('inc/head');
if(!isset($all)) $all=array();
?>

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

        <div class="cart-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Liste d'utilisateurs</h2>
                        </div>

                        <div class="cart-table ">
                            <table class="table table-responsive">
                                <thead>
                                <tr class="attr">
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>Nombre d'echanges</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 0; $i<count($all);$i++){?>
                                    <tr class="nb">
                                        <td><?php echo $all[$i]['idUtilisateur'] ;?></td>
                                        <td><?php echo $all[$i]['nom'] ;?></td>
                                        <td><?php echo $all[$i]['nombreEchange'] ;?></td>
                                    </tr>
                                <?php } ?>
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