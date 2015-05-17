<?php
if(isset($_GET['idp']))
  {   $idp=$_GET['idp'];
    //$user=$_SESSION['userid'];
    $c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
    $db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
    /*$r=mysql_query(" SELECT * from produit WHERE refproduit==$idp");
    $s=mysql_fetch_array($r);*/
    $req =mysql_query( "INSERT INTO cart (id_produit,id_user,quantity,expired)  VALUES ($idp,'1','1','0')") or die ("Echec connexion Serveur: ".mysql_error());
    header("Location:single-shop.php");
  }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta charset="utf-8">

  <title>iShop | Virtual solution for all people</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->
  <script>
    document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
  </script>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico"> 
  <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.custom.js"></script>

  </head>
  <body id="layout">
    <div id="wrapper">

     <?php include("include/textwidget.php"); ?> <!-- Slideout of Text Widget  --> 

     <?php include("include/header.php"); ?> <!-- Commun Header of pages   --> 

 <?php

$c=mysql_connect("localhost","root","") or die("erreur de connexion");
$base=mysql_select_db("projet_web") or die ("base non trouve");
$r=mysql_query("select * from produit where refproduit=1 ");
$ligne=mysql_fetch_array($r);
?>

     <div class="container">
      <section id="blogwrap">
        <div class="row-fluid">
          <div class="span8">
            <div class="blog-second-item single">
              <div class="row-fluid">
                <div class="span5 product-images">
                <?php
echo" <a data-gal='prettyPhoto[gallery]' href=$ligne[image] title=''>
                  <img width='350' class='img-polaroid' src=$ligne[image] alt='' />
                </a>
                <ul class='thumbnail'>
                  <li> <a data-gal='prettyPhoto[gallery]' href=$ligne[image] title=''><img width='80' class='img-polaroid' src=$ligne[image] alt='' /></a></li>
                  <li> <a data-gal='prettyPhoto[gallery]' href=$ligne[image] title=''><img width='80' class='img-polaroid' src=$ligne[image] alt='' /></a></li>
                  <li> <a data-gal='prettyPhoto[gallery]' href=$ligne[image] title=''><img width='80' class='img-polaroid' src=$ligne[image] alt='' /></a></li>
                </ul>";

?>

              </div>
              <div class="span7 product-content">
               <?php
$rp=$ligne['prixvente']/3;
echo "<h2 class='product-title'>$ligne[libelle] <span>£12</span></h2>
                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.  Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>

                <div class='price'>
                  <span class='price-old'>£ $ligne[prixvente]</span> <span class='price-new'>£ $ligne[sale]</span>
                  <br>
                  <span class='reward'><small>Price in reward points: $rp </small></span> <br> ";
?>
                </div>

                <p>
                  <a href="single-shop.php?idp=1" rel="nofollow" class="button"><i class="icon-shopping-cart"></i> Add to cart</a>  
                </p>
                <div class="row-fluid">
                  <div class="span2">
                    <span class="required">*</span>
                    <b>Qty:</b>
                    <br>
                    <input class="span12" type="text" name="quantity" size="2" value="1">
                  </div>
                  <div class="span5">
                    <span class="required">*</span>
                    <b>Size:</b>
                    <br>
                    <select>
                      <option value=""> -- Select -- </option>
                      <option value="">Small</option>
                      <option value="">Medium</option>
                      <option value="">Large</option>
                    </select>
                  </div>
                  <div class="span5">
                    <span class="required">*</span>
                    <b>Color:</b>
                    <br>
                    <select>
                      <option value=""> -- Select -- </option>
                      <option value="">Blue</option>
                      <option value="">Red</option>
                      <option value="">Orange</option>
                      <option value="">Purple</option>
                      <option value="">Pink</option>
                      <option value="">Black</option>
                      <option value="">White</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>          
          </div><!-- /blog-second-item -->



          <div class="reviews-tabs blog-second-item ">
            <ul id="widgetTab2" class="nav nav-tabs">
              <li class="active"><a href="#informations" data-toggle="tab">Informations</a></li>
              <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
            </ul>
            <div id="widgetTabcontent2" class="tab-content">
              <div class="tab-pane fade in active" id="informations">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
              </div>

              <div class="tab-pane fade" id="reviews">
                <div class="row-fluid">
                  <div class="span6">
                    <div class="single-review clearfix">
                      <div class="review-header">
                        <div class="star-rating" title="">
                          <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                        </div>
                        <h4>John Doe</h4>
                        <small>11/09/2013</small>
                      </div><!--end review-header-->

                      <div class="review-body">
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                      </div><!--end review-body-->
                    </div><!--end single-review-->

                    <div class="single-review clearfix">
                      <div class="review-header">
                        <div class="star-rating" title="">
                          <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                        </div>
                        <h4>John Doe</h4>
                        <small>03/11/2013</small>
                      </div><!--end review-header-->

                      <div class="review-body">
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                      </div><!--end review-body-->
                    </div><!--end single-review-->    

                  </div>
                  <div class="span6">
                    <section class="single-review">
                      <h3>Leave a Review</h3>

                      <form>
                        <label for="name">Name</label>
                        <input id="name" name="name" class="span9" type="text">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="span9" type="email">
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" class="span9" cols="45" rows="5"></textarea>
                        <button class="btn btn-general" type="submit">Post a Review</button>
                      </form>
                      <div class="review-header" style="margin-top:20px;">
                        <div class="star-rating" title="">
                          <span style="width:0%"><strong class="rating">4.50</strong> out of 5</span>
                        </div>
                        <p>What is your rating for this product?</p>
                      </div><!--end review-header-->
                    </section>
                  </div>
                </div><!-- /end review row-fluid -->  
              </div> 
            </div>       
          </div><!-- /end review -->  
        </div><!-- end span8 -->   

        <div id="sidebar" class="span4">
          
          <div class="widget">
            <div id="white">
              <form method="get" action="http://designingmedia.com/search" id="search">
                <input name="q" type="text" size="40" placeholder="Search..." />
              </form>
            </div>
          </div> 
           <div class="widget shopping-cart-widget">
            <h3>Shopping Cart</h3>
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    <li>
                                        <a href="#"><img width="123" height="140" alt="" src="demos/12_store.jpg">T90 Nike Cortes</a>
                                        <span class="quantity">3 ×
                                        <span class="amount">£12</span>
                                        </span>
                                    </li>
                                </ul>
                                <p class="total">
                                <strong>Subtotal:</strong>
                                <span class="amount">£48</span>
                                </p>
                                <p class="buttons">
                                <a href="shopping-cart.html" rel="nofollow" class="button">View Cart →</a>  
                                <a href="checkout.html" rel="nofollow" class="button">Checkout →</a>  
                                </p>
                            </div>
                    </div> 
        </div><!-- /span4 sidebar -->

      </div><!-- /row-fluid -->
    </section><!-- /container -->
</div><!-- /box -->


    <?php include("include/nfooter.php"); ?> <!-- Commun Footer of pages   --> 


    <div class="dmtop">Scroll to Top</div>
  </div><!-- /wrapper -->
  
  <!-- ALL PLUGINS -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/pulloutpanel.min.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/jquery.fs.naver.min.js"></script>
  <script src="js/jquery.flexslider.min.js"></script>
  <script src="js/jquery.inview.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom.js"></script>

</body>

<!-- RabinsXP.com HTML5 Templates -->
</html>