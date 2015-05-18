<?php
 if(isset($_POST['submit']))
{extract($_POST,EXTR_OVERWRITE);
$id=$_GET['id'];
$c=mysql_connect("localhost","root","") or die("erreur de connexion");
		$base=mysql_select_db("projet_web") or die ("base non trouve");
		$r=mysql_query("UPDATE produit SET libelle='$libelle',description='$description',image='$photo',prixvente='$prixvente',sale='$sale',refmagasin='$refmagasin',quantite='$quantite' WHERE refproduit=$id");
   }  
      header("Location:index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>ADMIN PANEL | Powered by Khammeri Nadhem </title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script>
        !window.jQuery && document.write('<script src="js/jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<?php include("header.php"); ?>
    <div class="main_content">
       
    <div class="center_content">  
    
    <div class="left_content">
    <?php include("todolist.php"); ?>
    </div>    
    
    <div class="right_content">           
     
</table>
<?php
$id=$_GET['id'];
$c=mysql_connect("localhost","root","") or die("erreur de connexion");
$base=mysql_select_db("projet_web") or die ("base non trouve");
$r=mysql_query("select * From produit Where refproduit=$id");
while($ligne=mysql_fetch_array($r)){
  echo " <h2>Modifier Produit : </h2>
   <div class=form>
         <form action=edition_produit.php?id=$ligne[refproduit] method=post class=niceform>
         
                <fieldset>
                    <dl>
                        <dt><label for=prix>Libelle :</label></dt>
                        <dd><input type=text name=libelle  size=54 value=$ligne[libelle] Onfocus=(value=''); onblur='value=$ligne[libelle]';></dd>
                    </dl>
                    <dl>
                        <dt><label for=refb>Ref Magasin:</label></dt>
                        <dd><input type=text name=refmagasin  size=54 value=$ligne[refmagasin]></dd>
                    </dl>
                    <dl>
                        <dt><label for=refb>Quantité:</label></dt>
                        <dd><input type=text name=quantite  size=54 value=$ligne[quantite]></dd>
                    </dl>
                     <dl>
                        <dt><label for=refb>Prix de vente:</label></dt>
                        <dd><input type=text name=prixvente  size=54 value=$ligne[prixvente]></dd>
                    </dl>
                     <dl>
                        <dt><label for=refb>Sale:</label></dt>
                        <dd><input type=text name=sale  size=54 value=$ligne[sale]></dd>
                    </dl>
                     <dl>
                        <dt><label for=upload>Upload photo :</label></dt>
                        <dd><input type=file name=photo id=upload value=$ligne[image]></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for=comments>Description :</label></dt>
                        <dd><textarea name=description id=comments rows=10 cols=36 >$ligne[description]</textarea></dd>
                    </dl>
                     <dl class=submit>
                    <input type=submit name=submit id=submit value=Submit />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
             </div> ";}
      ?>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
            
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">ADMIN PANEL | Powered by Khammeri Nadhem</div>
    	<div class="right_footer"></div>
    
    </div>

</div>		
</body>
</html>