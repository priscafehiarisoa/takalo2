<?php
?>
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <h2 class="logo">M'ANAKALO</h2>
    </div>
    <nav class="amado-nav">
        <ul>
            <li><a href="<?php echo site_url('objet_controler/index/');?>">accueil</a></li>
            <li class="active"><a href="<?php echo site_url('welcome/echange/');?>">echanges </a></li>
            <li><a href="<?php echo site_url('welcome/produit/');?>">VOS PRODUITS</a></li>
        </ul>
    </nav>
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
    <div class="cart-fav-search mb-100">
        <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
    </div>
</header>
