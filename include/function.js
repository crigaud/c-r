

function setStyle1(num) {
	if (num == 1){
		var color = "#f8AA33";
	}else if(num == 2){
		var color = "#33BB33";
	}else if(num == 3){
		var color = "#BB33BB";
	}else{
		var color = "#000000";
	}
	
	if(	document.getElementById("menu_top")	){	document.getElementById("menu_top").style.borderColor=color	;	}
	if(	document.getElementById("content") 	){	document.getElementById("content").style.borderColor=color	;	}
	if(	document.getElementById("vcard")	){	document.getElementById("vcard").style.borderColor=color	;	}
	if(	document.getElementById("skill")	){	document.getElementById("skill").style.borderColor=color	;	}	 
}

function toggle(id)
{
   div_el = document.getElementById(id);
   img_el = document.getElementById('img'+id);
   if (div_el.style.display != 'none')
   {			
      div_el.style.display='none';
      img_el.src = 'mindmap/show.png';
   }
   else
   {
      div_el.style.display='block';
      img_el.src = 'mindmap/hide.png';
   }
}
