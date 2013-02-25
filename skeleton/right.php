<?php
	if(strcmp($section, 'cv') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_skill.php');
	}else if(strcmp($section, 'contact') == 0){
		//include($_SERVER['DOCUMENT_ROOT'].'/contact/inc_contact.php');
	}else{
		//include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
	}
?>
