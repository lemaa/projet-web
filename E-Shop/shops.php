<?php
if(isset($_GET['idp']))
  {   $idp=$_GET['idp'];
    $c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
    $db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
    /*$r=mysql_query(" SELECT * from produit WHERE refproduit==$idp");
    $s=mysql_fetch_array($r);*/
    $req =mysql_query( "INSERT INTO cart (id_produit,id_user,quantity,expired)  VALUES ($idp,$_SESSION[userid],1,0)") or die ("Echec connexion Serveur: ".mysql_error());
    header("Location:shops.php");
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
                <div class="span12">
					<div class="blog-second-item single">
                    <h3 class="post-title">Shop</h3>
                    <div class="row-fluid">
                    	<div class="span9">
                        	<p class="woocommerce-result-count"> Showing 1–9 of 23 results</p>
                        </div>
                        
                        <div class="span3">
                        <form>
                            <select>
                            <option value="menu_order" >Default sorting</option>
                            <option value="popularity" >Sort by popularity</option>
                            <option value="rating" >Sort by average rating</option>
                            <option value="date" >Sort by newness</option>
                            <option value="price" >Sort by price: low to high</option>
                            <option value="price-desc" >Sort by price: high to low</option>	
                            </select>
                        </form>
                        </div>
                    </div>
					<ul class="products">
						
                        <?php

$c=mysql_connect("localhost","root","") or die("erreur de connexion");
$base=mysql_select_db("projet_web") or die ("base non trouve");
$r=mysql_query("select * from produit");

while ($ligne=mysql_fetch_array($r))
    {   if($ligne['sale']>0)
        {
            echo"<li class='product dmflip sale'>
            <span class='onsale'>Sale!</span>
            <a class='hov' href='single-shop.php?id=$ligne[refproduit]'>
                <img width='600' src=$ligne[image] class='' alt='' />
                <div class='zoom'></div>
            </a>

            <div class='details'>
                <h3>$ligne[libelle]</h3>
                <div class='star-rating' title=''>
                    <span style='width:90%'><strong class='rating'>4.50</strong> out of 5</span>
                </div>

                <span class='price'>
                    <del><span class='amount'>&pound;$ligne[prixvente]</span></del> 
                    <ins><span class='amount'>&pound;$ligne[sale]</span></ins>
                </span>
            </div><!-- /.details -->

            <a href='single-shop.php?idp=$ligne[refproduit]' rel='nofollow' class='button'>Add to cart</a>
        </li> ";
    }
    else
        echo"<li class='product dmflip'>
    <a class='hov' href='single-shop.php?id=$ligne[refproduit]'>
        <img width='600' src=$ligne[image] class='' alt='' />
        <div class='zoom'></div>
    </a>

    <div class='details'>
        <h3>$ligne[libelle]</h3>
        <div class='star-rating' title=''>
            <span style='width:90%'><strong class='rating'>4.50</strong> out of 5</span>
        </div>

        <span class='price'>
            <ins><span class='amount'>&pound;$ligne[prixvente]</span></ins>
        </span>
    </div><!-- /.details -->

    <a href='single-shop.php?idp=$ligne[refproduit]' rel='nofollow' class='button'>Add to cart</a>
</li>";
}

?>

					</ul>
				
                    <div class="clearfix"></div>
                
                    <div class="pagination text-center">
                      <ul>
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                      </ul>
                    </div>
                
					</div><!-- /blog-second-item -->
				</div><!-- end span12 -->
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