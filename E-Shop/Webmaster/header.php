<?php
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="index.php"><img src="logo.png" alt="" title="" width="180px" border="0"/></a></div>
    
    <div class="right_header">Bienvenue Mr/me <?php echo $_SESSION['username']; ?>        
 , <a href="//www.e-shop.net">Visiter le site</a><br /><br />
    <a href="messages.php" class="messages">Messages</a> | <a href="login.php" class="logout">Logout</a><br />
      
    </div>
    <div class="jclock"></div>
    </div>