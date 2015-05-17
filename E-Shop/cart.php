<?php
if(isset($_GET['idp']))
  {   $idp=$_GET['idp'];
    $c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
    $db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
    $req =mysql_query( "UPDATE cart SET expired=1 WHERE id_produit=$idp") or die ("Echec connexion Serveur: ".mysql_error());
    header("Location:cart.php");
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


     <div class="container">
      <section id="blogwrap">
        <div class="row-fluid">
          <div class="span8">
            <div class="blog-second-item single">
              <h3 class="post-title">Cart</h3>

              <table class="table wishlist table-hover table-bordered">
                <thead>
                 <tr>
                  <th class="span2">Image</th>
                  <th class="span3">Product Name</th>
                  <th class="span1">Quantity</th>
                  <th class="span3">Price</th>
                  <th class="span2">Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $_SESSION['tot_prix']=0;
                $_SESSION['nb_produit']=0;
                $c=mysql_connect("localhost","root","") or die("erreur de connexion");
                $base=mysql_select_db("projet_web") or die ("base non trouve");
                $r=mysql_query("select * from cart where id_user=$_SESSION[userid]") or die ("Querry error_log(message)");
                $_SESSION['nb_produit']=mysql_num_rows($r);

                while ($ligne=mysql_fetch_array($r))
                  {   if($ligne['expired']==0)
                {
                 $s=mysql_query("select * from produit where refproduit=$ligne[id_produit]");
                 $l=mysql_fetch_array($s);

                 echo" <tr>
                 <td class='image'><a href='single-shop.php?$ligne[id_produit]'>
                   <img title='product' alt='product' src=$l[image] width='100'></a></td>
                   <td class='product'>
                     <a href='single-shop.php?$ligne[id_produit]' title=$l[libelle]>$l[libelle]</a><br> 
                    <a class='btn btn-danger' href='cart.php?idp=$ligne[id_produit]'>Remove This Product</a>
                   </td>";
                   $tot=$l['sale']*$ligne['quantity'];
                   $_SESSION['tot_prix']=$_SESSION['tot_prix']+$tot;
                   echo"<td class='stock'>$ligne[quantity]</td>
                   <td class='price'><s>$l[prixvente]</s> <b>$l[sale]</b></td>
                   <td class='price'><b>$tot</b></td></tr>";
                 }}
                 ?>

               </tbody>
             </table>

             <div class="clearfix"></div>
             <div class="accordion" id="checkout">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseOne">
                    Use a Discount / Coupon Code
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Sed varius, ut nulla in massa.</p>              
                    <form class="form-inline">
                      <input class="input-block span4" placeholder="Enter your coupon code here" type="text" id="couponcode" />
                      <button type="submit" class="btn btn-general">Apply Coupon</button>
                    </form>
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseTwo">
                    Estimate Shipping & Taxes
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis.</p>
                    <form class="register-form">
                     <label><span class="required">*</span> Country / Region / Post Code</label>
                     <select class="span4">
                      <option>--- Select Country ---</option>
                      <option>Country #1</option>
                      <option>Country #2</option>
                      <option>Country #3</option>
                      <option>Country #4</option>
                      <option>Country #5</option>
                      <option>Country #6</option>
                      <option>Country #7</option>
                      <option>Country #8</option>
                      <option>Country #9</option>
                      <option>Country #10</option>
                    </select>

                    <select class="span4">
                      <option>--- Select Region ---</option>
                      <option>Region #1</option>
                      <option>Region #2</option>
                      <option>Region #3</option>
                      <option>Region #4</option>
                      <option>Region #5</option>
                      <option>Region #6</option>
                      <option>Region #7</option>
                      <option>Region #8</option>
                      <option>Region #9</option>
                      <option>Region #10</option>
                    </select>
                    <input class="input-block-level span4" placeholder="* Enter your post code" type="text" id="inputpostcode" />
                  </form>
                  <p></p>
                </div>
              </div>
            </div>
          </div>

          <div class="pull-right">
            <a href="checkout.html" class="btn btn-general">Checkout</a>
            <a href="catalogue.php" class="btn btn-general">Continue Shopping</a>
          </div>


        </div><!-- /blog-second-item -->
      </div><!-- end span8 -->

      <div id="sidebar" class="span4">

        <div class="widget">
          <div id="white">
            <form method="get" action="http://designingmedia.com/search" id="search">
              <input name="q" type="text" size="40" placeholder="Search..." />
            </form>
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