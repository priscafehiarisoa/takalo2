<?php $this->load->view('inc/head');
if(!isset($recu)) $recu=array();
if(!isset($envoye)) $envoye=array();
if(!isset($refus)) $refus=array();
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
    <title>Amado - Furniture Ecommerce Template | Cart</title>

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
        <?php $this->load->view('inc/header')?>
        <!-- Header Area End -->

        <div class="cart-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>    Echange en attente</h2>
                        </div>

                        <div class="cart-table ">
                            <table class="table table-responsive">
                                <thead>
                                <tr class="attr">
                                    <th>Objet échangé</th>
                                    <th>Vos Objet </th>
                                    <th>Bouton 1</th>
                                    <th>Bouton 2</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i =0;$i<count($recu);$i++){?>
                                <tr>
                                    <td class="cart_product_img">
                                        <?php $url1 = "/assets/img/bg-img/".$recu[$i]->image1; ?>
                                        <a href="#"><img src="<?php echo base_url($url1 ); ?>" alt="Product"></a>
                                        <?php echo $recu[$i]->objet1; ?>
                                        <p><?php echo $recu[$i]->nom1; ?></p>
                                    </td>
<!--                                    <td</td>-->
                                    <td class="cart_product_img">
                                        <?php $url2 = "/assets/img/bg-img/".$recu[$i]->image2; ?>
                                        <a href="#"><img src="<?php echo base_url($url2 ); ?>" alt="Product"></a>
                                        <?php echo $recu[$i]->objet2; ?>
                                        <p> </p>
                                        <br>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url("welcome/accept/?idH=".$recu[$i]->idHistorique."&&ido1=".$recu[$i]->idObjet1."&&ido2=".$recu[$i]->idObjet2."&&idu1=".$recu[$i]->idUtilisateur1."&&idu2=".$recu[$i]->idUtilisateur2); ?>"><button class="btn amado-btn mb-15" type="submit">Accepter</button></a>
                                    </td>
                                    <td>
                                        <button class="btn non mb-15" type="submit">Refuser</button>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<!--Envoye-->
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Echange deja envoye</h2>
                    </div>

                    <div class="cart-table ">
                        <table class="table table-responsive">
                            <thead>
                            <tr class="attr">
                                <th>Vos Objet </th>
                                <th>Objet a échangé</th>
                                <th><center>Etat</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i =0;$i<count($envoye);$i++){?>
                                <tr>
                                    <td class="cart_product_img">
                                        <?php $url1 = "/assets/img/bg-img/".$envoye[$i]->image1; ?>
                                        <a href="#"><img src="<?php echo base_url($url1 ); ?>" alt="Product"></a>
                                        <?php echo $envoye[$i]->objet1; ?>
                                        <p> </p>
                                        <br>
                                    </td>
                                    <td class="cart_product_img">
                                        <?php $url2 = "/assets/img/bg-img/".$envoye[$i]->image2; ?>
                                        <?php $url2 = "/assets/img/bg-img/".$envoye[$i]->image2; ?>
                                        <a href="#"><img src="<?php echo base_url($url2 ); ?>" alt="Product"></a>
                                        <?php echo $envoye[$i]->objet2; ?>
                                        <p><?php echo $envoye[$i]->nom2; ?></p>
                                    </td>
                                    <td>
                                        <h5><center>en attente d'acceptation</center></h5>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
<!--Refuse-->
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>    Echange Refuse</h2>
                    </div>

                    <div class="cart-table ">
                        <table class="table table-responsive">
                            <thead>
                            <tr class="attr">
                                <th>Objet expediteur</th>
                                <th>Vos objet</th>
                                <th><center>Etat</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i =0;$i<count($refus);$i++){?>
                                <tr>
                                    <td class="cart_product_img">
                                        <?php $url1 = "/assets/img/bg-img/".$refus[$i]->image1; ?>
                                        <a href="#"><img src="<?php echo base_url($url1 ); ?>" alt="Product"></a>
                                        <?php echo $refus[$i]->objet1; ?>
                                        <p><?php echo $refus[$i]->nom1; ?></p>
                                    </td>
                                    <td class="cart_product_img">
                                        <?php $url2 = "/assets/img/bg-img/".$refus[$i]->image2; ?>
                                        <a href="#"><img src="<?php echo base_url($url2 ); ?>" alt="Product"></a>
                                        <?php echo $refus[$i]->objet2; ?>
                                        <p> </p>
                                        <br>
                                    </td>
                                    <td>
                                        <h5><center>deja Refuse</center></h5>
                                    </td>
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