<?php
	if(strcmp($section, 'cv') == 0){
		if(strcmp($subsection, "") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "education") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "experience") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else{
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_index_detail_content.php');
		}		
	}else if(strcmp($section, 'contact') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/contact/inc_contact.php');
	}else if(strcmp($section, 'blog') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/blog/inc_article_content.php');
	}else if(strcmp($section, 'about') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
	}else if(strcmp($section, 'publications') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/publications/inc_publications.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
	}
?>
