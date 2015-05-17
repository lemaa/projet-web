<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
   <div class="sidebar_box">
                  <div class="sidebar_box_top"></div>
                  <div class="sidebar_box_content">
      <h3>Pan. de gestion</h3>
      <img src="images/info.png" alt="" title="" class="sidebar_icon_right" />
      <p>
      <form action=gestion2.php method=post>
        <select name="topic">
          <option value="equipe">Equipe</option>
          <option value="emissions">Emissions</option>
           <option value="administrateur">Comptes Admin</option>
           <option value="webmaster">Comptes webmaster</option>
            <option value="todolist">To Do List</option>

        </select>
        <input  type="submit" value="Valider" name="valider" />
      </form>
      </p>
    </div>
    <div class="sidebar_box_bottom"></div>
  </div>
  <div class="sidebar_box">
  <div class="sidebar_box_top"></div>
  <div class="sidebar_box_content">
    <h3>To do List</h3>
    <img src="images/info.png" alt="" title="" class="sidebar_icon_right" />
    <?php  
        $c=mysql_connect("localhost","root","") or die("erreur de connexion");
		$base=mysql_select_db("sabra-fm") or die ("base non trouve");
		$q=mysql_query("select * from todolist where (fait LIKE 'false')");
            
		while ($l=mysql_fetch_array($q))
		{echo"<tr> 
        <ul><li><td><h2>$l[technicien]</h2></td></li>
           <li> <td>$l[sujet]</td></li>
           <li> <td>$l[message]</td></li>
			<li><td><a href=edition_todo.php?id=$l[id]><img src=images/user_edit.png border='0' /></a></td>
            </li></ul>
        </tr> ";}   
        ?>
  </div>
  <div class="sidebar_box_bottom"></div>
</div>
<div class="sidebar_box">
  <div class="sidebar_box_top"></div>
  <div class="sidebar_box_content">
    <h4>Notice importante</h4>
    <img src="images/notice.png" alt="" title="" class="sidebar_icon_right" />
    <p> Vous ne pouvez effacer aucun article sans la confirmation du directeur du directeur de la production . </p>
  </div>
  <div class="sidebar_box_bottom"></div>
</div>
<div class="sidebar_box">
  <div class="sidebar_box_top"></div>
  <div class="sidebar_box_content">
    <h5>Upload photos</h5>
    <img src="images/photo.png" alt="" title="" class="sidebar_icon_right" />
    <p> Veuillez uploader des photo de taille 1028*1055 et de taille inf&eacute;rieure &agrave; 2 Mo . </p>
  </div>
  <div class="sidebar_box_bottom"></div>
</div>
