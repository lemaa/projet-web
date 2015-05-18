<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
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
        
    <h2>Les messages reçus : </h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">Nom</th>
            <th scope="col" class="rounded">Telephone</th>
            <th scope="col" class="rounded">Sujet</th>
            <th scope="col" class="rounded">Message</th>
            <th scope="col" class="rounded">Ouvrir</th>
            <th scope="col" class="rounded-q4">Supression</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    	 <?php  
        $c=mysql_connect("localhost","root","") or die("erreur de connexion");
		$base=mysql_select_db("projet_web") or die ("base non trouve");
		$r=mysql_query("select * from contact");
            
		while ($ligne=mysql_fetch_array($r))
		{echo"<tr> 
            <td>$ligne[nom] $ligne[organisme]</td>
            <td>$ligne[tel]</td>
            <td>$ligne[sujet]</td>
            <td>$ligne[msg]</td>
            <td><a href=ouvrir_msg.php?id=$ligne[id]><img src=images/user_edit.png border='0' /></a></td>
            <td><a href=effacer_msg.php?id=$ligne[id] class=ask><img src=images/trash.png border='0' /></a></td>
        </tr> ";}   
        ?>
	
    </tbody>
</table>

	       
     
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