<?php

	if( strcmp($lang, 'fr') == 0 ){
		include($_SERVER['DOCUMENT_ROOT'].'/include/message/'.$lang.'_global.php');	
		if( strcmp($section, 'cv') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/'.$lang.'_resume.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/'.$lang.'_article.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/'.$lang.'_tag.php');
		}
	}else{
		include($_SERVER['DOCUMENT_ROOT']."/include/message/en_global.php");	
		if( strcmp($section, 'cv') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_resume.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_article.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_tag.php');
		}
	}
	
?>
