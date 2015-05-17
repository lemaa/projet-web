<?php
if(isset($_POST['envoyer']))
  {   extract($_POST,EXTR_OVERWRITE);
    $c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
    $db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
    $req =mysql_query( "UPDATE users SET password='$npassword' WHERE id=$id") or die ("Echec connexion Serveur: ".mysql_error());
    header("Location:index.php");
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
              <h3 class="post-title">Reset Password</h3>

              <form class="lost-password-form row-fluid" action="reset-security-answer.php" method="post">
                <input class="input-block-level span8" type="text" placeholder="Enter your new password" id="inputEmail" name="npassword" />
                 <input class="input-block-level span8" type="text" placeholder="Re-enter your new password" id="inputEmail" name="vierge" />
                <button class="btn span4 pull-right btn-medium btn-general input-block-level" type="submit" name="envoyer">Change To New Password</button>
              </form>
            </div><!-- /blog-second-item -->
          </div><!-- end span8 -->
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