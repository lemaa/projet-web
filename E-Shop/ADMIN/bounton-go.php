if(i==n-1) // ajout du bouton
		{
			var btn = document.createElement("a");
			
			btn.setAttribute("id","btn"+i+"_"+id);
			btn.setAttribute("href","javascript:Filter('"+id+"');");
			btn.setAttribute("class","go");
			fltcell.appendChild(btn);
			btn.appendChild(document.createTextNode("go"));
			
			document.getElementById("btn"+i+"_"+id).className = "btn";
		}//if		