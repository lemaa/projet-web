<?php
include('config.php');
?>
<div id="topbar">
  <div class="container">
   <div class="row">
     <div class="span6">
         <div class="pull-left">
            <ul class="language">
                <li><a href="#"><i class="icon-ok"></i> ENG</a></li>
                <li><a href="#">FR</a></li>
            </ul>
        </div><!-- /language -->
    </div>

    <div class="span6">
        <div class="pull-right">
            <ul class="top-menu">
                <li>
                 <?php         
                 if(isset($_SESSION['username']))
                 {
                     echo"<a href='account.php' ><i class='icon-user'></i> Welcome MR. ".$_SESSION['username']."</a>";
                 }  
                 else 
                    echo"<a href='login.php'> Login </a>";
                ?>
            </li>
            <li>
                <?php    if(isset($_SESSION['username']))
                echo"<a href='cart.php'><i class='icon-shopping-cart'></i> $_SESSION[nb_produit] items - $ $_SESSION[tot_prix]    </a></li>";
                ?> 
                <li>  
                    <?php    if(isset($_SESSION['username']))

                    echo"<a href='login.php'><i class='icon-key'></i> Log Out </a>";
                    ?>
                </li>
            </ul> 
        </div><!-- /rightmenu -->
    </div>
</div>
</div>
</div>

<header id="dmheader">
  <div class="container">
    <div id="dmtop">
        <a class="cssLogo" href="index.php">Flayz</a>
        <nav id="cp-nav">
            <ul class="flexnav" data-breakpoint="800">
                <li class="current"><a href="index.php">Home</a>

                </li> 
                <li><a href="#">Pages</a>
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="team-members.php">Team Members</a></li>
                        <li><a href="faq.php">FAQS</a></li>
                        <li><a href="under-construction.php">Under Construction</a></li>
                        <li><a href="landing-page.php">Landing Page</a></li>
                        <li><a href="sitemap.php">Sitemap</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="404.php">404 Not Found</a></li>
                        <li><a href="fullwidth.php">Full Width</a></li>
                        <li><a href="left-page.php">Left Page</a></li>
                        <li><a href="right-page.php">Right Page</a></li>
                    </ul>
                </li>
                <li><a href="#">Virtual Visit</a>
                    <ul>
                        <li><a href="portfolio-single-1.php">Portfolio Single #1</a></li>
                        <li><a href="portfolio-single-2.php">Portfolio Single #2</a></li>
                    </ul>
                </li>
                <li>
                    <li><a href="#">Shops</a>
                        <ul>
                            <li><a href="catalogue.php">Catalogue</a></li>
                            <li><a href="shops.php">Shop</a></li>
                            <li><a href="single-shop.php">Single Product</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="cart.php">Shopping Cart</a></li>
                            <li><a href="login.php">Register Page</a></li>
                            <li><a href="account.php">My Account</a></li>
                            <li><a href="lost-password.php">Lost Password</a></li>
                        </ul>
                    </li>

                    <li><a href="blog.php">Blog</a>
                        <ul>
                            <li><a href="single.php">Single Blog</a></li>
                            <li><a href="blog-3.php">Blog Variation #3</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav><!-- end #cp-nav -->	
        </div><!-- /dmtop -->
    </div><!-- /container -->
	</header><!-- /dmheader -->