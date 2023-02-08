<?php $this->load->view('inc/head');
if(!isset($liste)) $liste=array();

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
                        <button type="submit"><img src="<?php echo base_url("assets/img/core-img/search.png"); ?> " alt=""></button>
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
            <a href="accueil.html"><img src="<?php echo base_url("assets/img/core-img/logo.png"); ?>" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <?php $this->load->view('inc/header')?>
    <!-- Header Area End -->

    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="#">Chairs</a></li>
                    <li><a href="#">Beds</a></li>
                    <li><a href="#">Accesories</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Home Deco</a></li>
                    <li><a href="#">Dressings</a></li>
                    <li><a href="#">Tables</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Sort by</p>
                                <form action="#" method="get">
                                    <select name="select" id="sortBydate">
                                        <option value="value">Date</option>
                                        <option value="value">Newest</option>
                                        <option value="value">Popular</option>
                                    </select>
                                </form>
                            </div>
                            <div class="view-product d-flex align-items-center">
                                <p>View</p>
                                <form action="#" method="get">
                                    <select name="select" id="viewProduct">
                                        <option value="value">12</option>
                                        <option value="value">24</option>
                                        <option value="value">48</option>
                                        <option value="value">96</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo count($liste) ; for($i=0; $i<count($liste); $i++)
            { ?>
                <div class="row">

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <?php $url="/assets/img/bg-img/".$liste[$i]->image ?>
                                <img src="<?php echo base_url($url)?>" alt="">
                                <p><?php echo $liste[$i]->objet; ?></p>
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?php echo site_url($url)?>" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$180</p>
                                    <a href="product-details.html">
                                        <h6>Proprietaire : <?php echo $liste[$i]->nom; ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="../assets/img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            <?php } ?>
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