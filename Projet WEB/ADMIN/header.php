<?php
session_start(); 
?>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="index.php"><img src="logo.png" alt="" title="" width="180px" border="0"/></a></div>
    
    <div class="right_header">Bienvenue Mr/me <?php echo $_SESSION['username']; ?>, <a href="//www.radiosabrafm.net">Visiter le site <img src="images/info.png" width=15px/></a> <a href="login.php" class="logout">Logout</a>
    </div>
    <div class="jclock"></div>
    </div>