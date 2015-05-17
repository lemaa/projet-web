<?php
if(isset($_POST['envoyer']))
{   extract($_POST,EXTR_OVERWRITE);
$c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
$db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
$req =mysql_query( "INSERT INTO `contact` (`nom`, `organisme`, `tel`,`mail`,`sujet`, `msg`) VALUES ('$nom','$org','$tel','$email','$sujet','$msg')");
    header("Location:page-merci.php");
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
                          		<iframe class="google-map" src="http://maps.google.com/?ie=UTF8&amp;ll=40.748151,-73.985131&amp;spn=0.012355,0.021007&amp;t=m&amp;z=16&amp;output=embed"></iframe>
                            
							<h3 class="post-title">Contact Us</h3>

							<p>This is an example service page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>

							<h4>Contact Form</h4>

							<p>Most people start with an About page that introduces them to potential site visitors. It might say something like this</p>
							
                    <form id="contact" method="POST" action="contact.php">
                        <label for="name">Name</label>
                        <input id="name" name="nom" class="span4" type="text">
                        <label for="name">Organisation</label>
                        <input id="name" name="org" class="span4" type="text">
                        <label for="name">Phone</label>
                        <input id="name" name="tel" class="span4" type="text">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="span4" type="text">
                        <label for="website">Subject</label>
                        <input id="website" name="sujet" class="span4" type="text">
                        <label for="comment">Message</label>
                        <textarea id="comment" name="msg" class="span9" cols="45" rows="8"></textarea>
                      <p>
                        <button class="btn btn-general" type="submit" name="envoyer">Send Message</button>
                        <button class="btn btn-general" type="reset">Cancel</button>
                      </p>
                    </form> 
                            
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
              
                    <div class="widget">
                        <div class="dm-title">
                            <h2>About Flayz</h2>
                            <span></span>
                        </div>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied. Donec id elit non mi porta gravida at eget metus.</p>
                        <a class="btn btn-general" href="#">Learn more</a>
                    </div><!-- /end widget -->
         
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