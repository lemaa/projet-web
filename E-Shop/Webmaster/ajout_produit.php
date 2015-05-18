<?php
if(isset($_POST['submit']))
    {extract($_POST,EXTR_OVERWRITE);		
        $c=mysql_connect("localhost","root","") or die("erreur de connexion");
        $base=mysql_select_db("projet_web") or die ("base non trouve");
        $r=mysql_query("INSERT INTO produit (libelle,quantite,description,prixvente,sale,image,refmagasin) VALUES ('$libelle','$quantite','$description','$prixvente','$sale','$photo','$refmagasin')");
    }     header("Location:index.php");
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

           <h2>Nouveau Produit : </h2>

           <div class="form">
               <form action="ajout_produit.php" method="post" class="niceform">

                <fieldset>
                    <dl>
                        <dt><label for="refb">Libelle:</label></dt>
                        <dd><input type="text" name="libelle" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Magasin :</label></dt>
                        <dd><select name="refmagasin">
                           <?php
                           $r=mysql_query("select * from catalogue");
                           while ($ligne=mysql_fetch_array($r))
                             echo" <option value=$ligne[0]> $ligne[1] </option>";
                         ?>
                     </select>
                 </dd>
             </dl>
             <dl>
             <dt><label >Prix de Vente:</label></dt>
                <dd><input type="text" name="prixvente" id="" size="54" /></dd>
            </dl>   
            <dt><label >Prix soldé ( 0 si non soldé ) :</label></dt>
                <dd><input type="text" name="sale" id="" size="54" /></dd>
            </dl>   
             <dt><label >Quantité :</label></dt>
                <dd><input type="text" name="quantite" id="" size="54" /></dd>
            </dl>	
            <dl>
                <dt><label for="upload">Upload photo :</label></dt>
                <dd><input type="file" name="photo" id="upload" /></dd>
            </dl>

            <dl>
                <dt><label for="comments">Description :</label></dt>
                <dd><textarea name="description" id="comments" rows="10" cols="36"></textarea></dd>
            </dl>
            <dl class="submit">
                <input type="submit" name="submit" id="submit" value="Submit" />
            </dl>



        </fieldset>

    </form>
</div>  


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