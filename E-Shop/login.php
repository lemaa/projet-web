<?php
if(isset($_POST['envoyer2'])) // validation du formulaire d'inscription + UPDATE DB
{
 extract($_POST,EXTR_OVERWRITE);
    $c=mysql_connect("localhost","root","") or die ("Echec connexion Serveur: ".mysql_error());
    $db=mysql_select_db("projet_web") or die ("Echec BD : ".mysql_error());
    $req =mysql_query( "INSERT INTO users (nom,prenom,tel,email,password,username,address,city,zipcode,country) VALUES ('$nom','$prenom','$tel','$email','$password','$username','$address','$city','$zipcode','$country') ") or die ("Echec connexion Serveur: ".mysql_error());
    header("Location:account.php");

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
        <?php          /* Partie de sesssion PHP / HTML Verfication de cnx et sécurisation */ 
//Si lutilisateur est connecte, on le deconecte
        if(isset($_SESSION['username']))
        {
    //On le deconecte en supprimant simplement les sessions username et userid
            unset($_SESSION['username'], $_SESSION['userid'], $_SESSION['tot_prix'], $_SESSION['nb_produit']);
            ?>
            <center><b> Vous avez bien été déconnecté.</b></center>
            <SCRIPT LANGUAGE="JavaScript">

                var obj="document.location.href=('index.php');";
                setTimeout(obj,0);
            </SCRIPT>
            <?php
        }
        else
        {
            $ousername = '';
    //On verifie si le formulaire a ete envoye
            if(isset($_POST['username'], $_POST['password']))
            {
        //On echappe les variables pour pouvoir les mettre dans des requetes SQL
                if(get_magic_quotes_gpc())
                {
                    $ousername = stripslashes($_POST['username']);
                    $username = mysql_real_escape_string(stripslashes($_POST['username']));
                    $password = stripslashes($_POST['password']);
                    
                }
                else
                {
                    $username = mysql_real_escape_string($_POST['username']);
                    $password = $_POST['password'];

                }
        //On recupere le mot de passe de lutilisateur
                $req = mysql_query('select password,id from users where username="'.$username.'"');
                $dn = mysql_fetch_array($req);
        //On le compare a celui quil a entre et on verifie si le membre existe
                if($dn['password']==$password and mysql_num_rows($req)>0)
                {

            //Si le mot de passe est bon, on ne vas pas afficher le formulaire
                    $form = false;
            //On enregistre son pseudo dans la session username et son identifiant dans la session userid
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['userid'] = $dn['id'];
                    ?>
                    <!--Redirection vers la page index / etat : connecté --> 
                    <SCRIPT LANGUAGE="JavaScript">

                        var obj="document.location.href=('catalogue.php');";
                        setTimeout(obj,0); 
                    </SCRIPT>
                    <?php
                }
                else
                {
            //Sinon, on indique que la combinaison nest pas bonne
                    $form = true;
                    $message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
                }
            }
            else
            {
                $form = true;
            }
            if($form)
            {
        //On affiche un message sil y a lieu
                if(isset($message))
                {
                    echo '<div class="message">'.$message.'</div>';
                }
    //On affiche le formulaire
                ?>
                <div class="container">
                  <section id="blogwrap">
                   <div class="row-fluid">
                    <div class="span8">
                       <div class="blog-second-item single">
                         <h3 class="post-title">Login / Register</h3>

                         <p>This is an example service page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>

                         <div class="row-fluid">
                            <div class="span5">
                                <h2>Have An Account?</h2>
                                <p>If you need any help please contact us via <a href="contact.php">ticket system</a> in your dashboard.</p>
                                <form class="signin-form" method="POST">
                                  <input class="input-block-level" type="text" placeholder="Enter your email address" id="inputEmail" name="username" />
                                  <input class="input-block-level" placeholder="Enter your password" type="password" id="inputPassword" name="password"/>
                                  <label class="link"><i class="icon-frown"></i> <u><a href="lost-password.php"> Lost Password </a> </u></label>
                                  <button class="btn btn-medium btn-general input-block-level" type="submit" id="submit">Sign in your account</button>
                              </form>
                          </div>
                          <?php include("include/register.php"); ?> 
                      </div>

                  </div><!-- /blog-second-item -->
              </div><!-- end span8 -->

              <div id="sidebar" class="span4">

                  <div class="widget">
                    <div id="white">
                        <form method="get" action="http://designingmedia.com/search" id="search">
                          <input name="q" type="text" size="40" placeholder="Search..." />
                      </form>
                      <?php
                  }
              }
              ?>  
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

</html>