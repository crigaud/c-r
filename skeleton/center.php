<?php
	if(strcmp($section, 'cv') == 0){
		if(strcmp($subsection, "") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "education") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "experience") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "publication") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else if(strcmp($subsection, "varied") == 0){
			include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_cv.php');
		}else{
			include($_SERVER['DOCUMENT_ROOT'].'/cv/detail_content.php');
		}		
	}else if(strcmp($section, 'contact') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/contact/inc_contact.php');
	}else if(strcmp($section, 'blog') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/blog/inc_article_content.php');
	}else if(strcmp($section, 'about') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
	}else if(strcmp($section, 'publications') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/publications/inc_index.php');
	}else if(strcmp($section, 'tag') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/tag/inc_index.php');
	}else if(strcmp($section, 'tools') == 0){
		include($_SERVER['DOCUMENT_ROOT'].'/tools/inc_index.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'].'/content/'.$lang.'_center_home.php');

		//include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
	}
?>
