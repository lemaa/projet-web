<?php
if(isset($_POST['repondre']))
{$mail=$_GET['id'];
header("Location:envoiemail.php?id=$mail");

}
 else if(isset($_POST['retour']))
{	
header("Location:messages.php");
   }     
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
$test=$_GET['id'];
$c=mysql_connect("localhost","root","") or die("erreur de connexion");
$base=mysql_select_db("projet_web") or die ("base non trouve");
$r=mysql_query("select * From contact Where id=$test");
while($l=mysql_fetch_array($r)){
  echo " <h2>Affichage du message : </h2>
   <div class=form>
         <form action=ouvrir_msg.php?id=$l[mail] method=post class=niceform>
         
                <fieldset>
                    <dl>
                        <dt><label >Nom :</label></dt>
                        <dd><input readonly=readonly type=text name=nom  size=54 value=$l[nom] Onfocus=(value=''); onblur='value=$l[nom]';></dd>
                    </dl>
                    <dl>
                        <dt><label>Organisme:</label></dt>
                        <dd><input readonly=readonly type=text name=organisme size=54 value=$l[organisme]></dd>
                    </dl><dl>
                        <dt><label>Telephone:</label></dt>
                        <dd><input readonly=readonly type=text name=tel  size=54 value=$l[tel]></dd>
                    </dl>
                    <dl>
                        <dt><label>Adresse Mail:</label></dt>
                        <dd><input readonly=readonly type=text name=mail  size=54 value=$l[mail]></dd>
                    </dl>
					
                     <dl>
                        <dt><label>Sujet:</label></dt>
                        <dd><input readonly=readonly type=text name=sujet  size=54 value=$l[sujet]></dd>
                    </dl>
					
                    <dl>
                        <dt><label for=comments>Description :</label></dt>
                        <dd><textarea readonly=readonly name=message id=comments rows=10 cols=36 >$l[msg]</textarea></dd>
                    </dl>
                     <dl class=submit>
					 <input type=submit name=repondre id=submit value=Répondre />
                    <input type=submit name=retour id=submit value=Retour />
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