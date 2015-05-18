<?php
if(isset($_POST['envoyer']))
{		extract($_POST,EXTR_OVERWRITE);
        require "phpmailer/class.phpmailer.php"; 
        $mail = new PHPmailer(); 
        $mail->SetLanguage('en','phpmailer/language/');
		$mail->IsSMTP(true); 
		$mail->SMTPAuth= true;
		$mail->SMTPSecure = "ssl";
        $mail->Host='smtp.sabrafm.com'; 
		$mail->Port= 465;
		$mail->Username= "webmaster@ishop.net";
		$mail->Password= "*****************";
        $mail->From='$tech'; 
        $mail->AddAddress('$adrs'); 
        $mail->AddReplyTo('$tech');      
        $mail->Subject='$sujet'; 
        $mail->Body='$msg'; 
        if(!$mail->Send()){ 
          echo $mail->ErrorInfo; 
		  header("Location:messages.php");

        } 
        else{      
          echo 'Mail envoyé avec succès'; 
		  header("Location:messages.php");

        } 
        $mail->SmtpClose(); 
        unset($mail); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maintenance Facility</title>
<link rel="stylesheet" type="text/css" href="css/form.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script type="text/javascript" src="js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$('.ask').jConfirmAction();

	});
</script>
</head>
<?php $maild=$_GET['id'];  ?>
<body class="login_body">
<div class="topnav"></div>
<div id="main_container1">
  <div class="login_form"> <br />
    <form action="envoiemail.php" method="POST" class="niceform" name="form1">
      <table  align="center">
        <tr>
          <td><label>Destinateur :</label></td>
          <td><input type="text" name="tech" size="30" onfocus='opacity:.5'/></td>
        </tr>
        <tr>
          <td><label>Sujet  :</label></td>
          <td><input type="text" size="30" name="sujet"/></td>
        </tr>
        <tr>
          <td><label>Message </label></td>
          <td><textarea cols="25" rows="10" name="msg"></textarea></td>
        </tr>
        <tr>
          <td><label>adresse du destinataire :</label></td>
          <td><input type="text" size="30" name="adrs" value=<?php echo $maild;?> ></td>
        </tr>
        <tr>
          <td colspan="2" class="submit" align="center" dir="ltr" ><input type="submit" name="envoyer" id="submit" value="Envoyer" />
            <input type="reset" name="Annuler" id="reset" value="Annuler" align='right'/></td>
        </tr>
      </table>
    </form>
  </div>
</div>
</body>
</html>