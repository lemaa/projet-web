<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>ADMIN PANEL | Powered by Khammeri Nadhem</title>
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
<style type="text/css" media="screen">

caption{ margin:10px 0 0 5px; padding:10px; text-align:left; }
th{ background-color:#09F; color:#FFFFFF; padding:2px; border:1px solid #ccc ;}



/*====================================================
	- classes des filtres
	- éditer les classes ci-dessous pour changer le
	style des <input> et du bouton "go" <a>
=====================================================*/
a.btn{
	border:1px outset #ccc;
	margin:1px; padding:1px;
	text-decoration:none; color: #666;
	background-color:#CCCCCC;
}
.flt{ 
	background-color:#f4f4f4; border:1px inset #ccc; 
	margin:0; width:100%;
}
.flt_s{
	background-color:#f4f4f4; border:1px inset #ccc; 
	margin:0; width:90%;
}
</style>


<script language="javascript" type="text/javascript">
/*====================================================
	- HTML Table Filter Generator v1.1
	- développé par Max Guglielmi
	- mguglielmi.free.fr/scripts/TableFilter/?l=fr
	- Prière de conserver ce message
=====================================================*/



var TblId, StartRow, SearchFlt;
TblId = new Array, StartRow = new Array;

function setFilterGrid(id)
/*====================================================
	- vérifie que l'id passé en param existe bien et
	que c'est bein une table
	- vérifie la présence d'autres paramètres
	- appel de la fonction qui ajoute les inputs et
	le bouton
=====================================================*/
{
	var tbl = document.getElementById(id);
	var ref_row, fObj;
	if(tbl != null && tbl.nodeName.toLowerCase() == "table")
	{
		TblId.push(id);
		if(arguments.length>1)
		{
			for(var i=0; i<arguments.length; i++)
			{
				var argtype = typeof arguments[i];
				
				switch(argtype.toLowerCase()){
					case "number":
						ref_row = arguments[i];
					break;
					case "object":
						fObj = arguments[i];
					break;
				}//switch
							
			}//for
		}//if
		
		ref_row == undefined ? StartRow.push(2) : StartRow.push(ref_row+2);
		var ncells = getCellsNb(id,ref_row);
		AddRow(id,ncells,fObj);
	}
}

function AddRow(id,n,f)
/*====================================================
	- ajoute un filtre (input ou select) pour chaque 
	colonne
	- ajoute le bouton dans la dernière colonne
=====================================================*/
{
	var t = document.getElementById(id);
	var fltrow = t.insertRow(0);
	var inpclass;

	for(var i=0; i<n; i++)
	{
		var fltcell = fltrow.insertCell(i);
		i==n-1 ? inpclass = "flt_s" : inpclass = "flt";
		
		if(f==undefined || f["col_"+i]==undefined || f["col_"+i]=="none") 
		{
			var inp = document.createElement("input");		
			inp.setAttribute("id","flt"+i+"_"+id);
			if(f==undefined || f["col_"+i]==undefined) inp.setAttribute("type","text");
			else inp.setAttribute("type","hidden");
			//inp.setAttribute("class","flt"); //ne marche pas sur ie<=6		
			fltcell.appendChild(inp);
			document.getElementById("flt"+i+"_"+id).className = inpclass;
			document.getElementById("flt"+i+"_"+id).onkeypress = DetectKey;			
		}
		else if(f["col_"+i]=="select")
		{
			var slc = document.createElement("select");
			slc.setAttribute("id","flt"+i+"_"+id);
			fltcell.appendChild(slc);
			PopulateOptions(id,i,n);
			document.getElementById("flt"+i+"_"+id).className = inpclass;
			document.getElementById("flt"+i+"_"+id).onkeypress = DetectKey;
		}
		
		//////////// bouton go //////////
		
	}// for i
}

function PopulateOptions(id,cellIndex,ncells)
/*====================================================
	- ajoute les option au select
	- ne rajoute qu'une seule instance d'une valeur
=====================================================*/
{
	var t = document.getElementById(id);
	var start_row = getStartRow(id);
	var row = t.getElementsByTagName("tr");
	var OptArray = new Array;
	var optIndex = 0; // option index
	
	for(var k=start_row; k<row.length; k++)
	{
		var cell = getChildElms(row[k]).childNodes;
		var nchilds = cell.length;
		
		if(nchilds == ncells){// checks if row has exact cell #
			
			for(var j=0; j<nchilds; j++)// this loop retrieves cell data
			{
				if(cellIndex==j)
				{
					var cell_data = getCellText(cell[j]);
					if(OptArray.toString().search(cell_data) == -1)
					// checks if celldata is already in array
					{
						optIndex++;
						OptArray.push(cell_data);
						var currOpt = new Option(cell_data,cell_data,false,false);
						document.getElementById("flt"+cellIndex+"_"+id).options[optIndex] = currOpt;
					}
				}//if cellIndex==j
			}//for j
			
		}//if
		
	}//for k
}

function Filter(id)
/*====================================================
	- récupère les chaines recherchés dans le array 
	SearchFlt
	- récupère le contenu des td de chaque tr et 
	le compare à la chaine recherché dans la colonne
	courante
	- le tr est caché si toutes les chaines ne sont 
	pas trouvé
=====================================================*/
{	
	getFilters(id);
	var t = document.getElementById(id);
	var SearchArgs = new Array();
	var ncells = getCellsNb(id);
	
	for(i in SearchFlt) SearchArgs.push((document.getElementById(SearchFlt[i]).value).toLowerCase());
	
	var start_row = getStartRow(id);
	var row = t.getElementsByTagName("tr");
	
	for(var k=start_row; k<row.length; k++)
	{	
		/*** si la table a été déjà filtré certaines lignes ne sont pas visibles ***/
		if(row[k].style.display == "none") row[k].style.display = "";
		
		var cell = getChildElms(row[k]).childNodes;
		var nchilds = cell.length;

		if(nchilds == ncells){// vérife que la ligne a le nombre exact de cellules
			var cell_value = new Array();
			var occurence = new Array();
			var isRowValid = true;
				
			for(var j=0; j<nchilds; j++)// cette boucle récupère le contenu de la cellule
			{
				var cell_data = getCellText(cell[j]).toLowerCase();
				cell_value.push(cell_data);
				
				if(SearchArgs[j]!="")
				{
					occurence[j] = cell_data.split(SearchArgs[j]).length;
				}
			}//for j
			
			for(var t=0; t<ncells; t++)
			{
				if(SearchArgs[t]!="" && occurence[t]<2) 
				{
					isRowValid = false;					
				}
			}//for t
			
		}//if				
		
		if(isRowValid==false) row[k].style.display = "none";
		else row[k].style.display = "";
		
	}// for k
}

function getCellsNb(id,nrow)
/*====================================================
	- renvoie le nombre de cellules d'une ligne
	- si nrow est passé en paramètre, renvoie le 
	nombre de cellules de la ligne specifiée
=====================================================*/
{
  	var t = document.getElementById(id);
	var tr;
	if(nrow == undefined) tr = t.getElementsByTagName("tr")[0];
	else  tr = t.getElementsByTagName("tr")[nrow];
	var n = getChildElms(tr);
	return n.childNodes.length;
}

function getFilters(id)
/*====================================================
	- les id des filtres (input) sont gardés dans le
	array SearchFlt
=====================================================*/
{
	SearchFlt = new Array;
	var t = document.getElementById(id);
	var tr = t.getElementsByTagName("tr")[0];
	var enfants = tr.childNodes;
	
	for(var i=0; i<enfants.length; i++) SearchFlt.push(enfants[i].firstChild.getAttribute("id"));
}

function getStartRow(id)
/*====================================================
	- renvoie la ligne de réference d'un tableau
=====================================================*/
{
	var r;
	for(j in TblId)
	{
		if(TblId[j] == id) r = StartRow[j];
	}
	return r;
}

function getChildElms(n)
/*====================================================
	- vérifie que le noeud est bien un 
	(ELEMENT_NODE nodeType=1)
	- Enlève les éléments texte 
	(TEXT_NODE nodeType=3)
	- Expres pour firefox qui renvoi tous le childs
	d'un noeud (ELEMENT_NODE+TEXT_NODE+les autres)
=====================================================*/
{
	if(n.nodeType == 1)
	{
		var enfants = n.childNodes;
		for(var i=0; i<enfants.length; i++)
		{
			var child = enfants[i];
			if(child.nodeType == 3) n.removeChild(child);
		}
		return n;	
	}
}

function getCellText(n)
/*====================================================
	- renvoie le texte du noeud et de ses childs
	- au cas où on a des balises dans le td, on 
	récupère quand même leur contenu pour que la 
	recherche ne soit pas faussée
=====================================================*/
{
	var s = "";
	var enfants = n.childNodes;
	for(var i=0; i<enfants.length; i++)
	{
		var child = enfants[i];
		if(child.nodeType == 3) s+= child.data;
		else s+= getCellText(child);
	}
	return s;
}

function DetectKey(e)
{
/*====================================================
	- fonction de detection de la touche 'enter' 
	attaché	un élément défini (l'attribut onkeypress
	dans les inputs)
=====================================================*/
	var evt=(e)?e:(window.event)?window.event:null;
	if(evt){
		var key=(evt.charCode)?evt.charCode:
			((evt.keyCode)?evt.keyCode:((evt.which)?evt.which:0));
		if(key=="13")
		{
			var tblid = this.getAttribute("id").split("_")[1];
			Filter(tblid);
		}
	}	
}



</script>
</head>
<body>

<?php include("header.php"); ?>
  <div class="main_content">
    <div class="center_content">
      <div class="left_content">
        <?php include("todolist.php"); ?>
      </div>
      <div class="right_content">
      <?php  
		 extract($_POST,EXTR_OVERWRITE);
        $c=mysql_connect("localhost","root","") or die("erreur de connexion");
		$base=mysql_select_db("projet_web") or die ("base non trouve");
	
            echo"<h2> Les $topic </h2>"; ?>
                   
                    
<table  summary="2007 Major IT Companies' Profit" id="table1" cellpadding="1" >
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">Identifiant</th>
            <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Info.spec 1</th>
            <th scope="col" class="rounded">Info.spec 2</th>
            <th scope="col" class="rounded">Edition</th>
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
		$r=mysql_query("select * from $topic");
		while ($ligne=mysql_fetch_array($r))
		{echo"<tr> 
        	<td>$ligne[0]</td>
            <td>$ligne[1]</td>
            <td>$ligne[2]</td>
            <td>$ligne[3]</td>
            <td><a href=edition_$topic.php?id=$ligne[0]><img src=images/user_edit.png border='0' /></a></td>
            <td><a class=ask href=effacer_$topic.php?id=$ligne[0]><img src=images/trash.png border='0' /></a></td>
        </tr> ";}   
        ?>
    </tbody>
</table><br /> <br /><script language="javascript" type="text/javascript">
	//<![CDATA[
		var table1Filters = {
			col_0: "select"
		}
		setFilterGrid("table1",table1Filters);
	//]]>
	</script>
<?php echo"<a href=ajout_$topic.php>Ajout $topic  <img src=images/plus.gif width=15px/></a>";?>
      </div>
      <!-- end of right con=tent--> 
      
    </div>
    <!--end of center content -->
    
    <div class="clear"></div>
  </div>
  <!--end of main content-->
  
  <div class="footer">
    <div class="left_footer">ADMIN PANEL | Powered by Khammeri Nadhem</div>
    <div class="right_footer"></div>
  </div>
</div>
</body>
</html>