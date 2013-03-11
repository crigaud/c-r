	

<div id="vcard">
	<!--<h2>Presentation</h2>-->
	<?php //echo $global["HO_INTRO"];?>
	
	<h2><?php echo $global["LT_TITLE"];?></h2>
	<?php 
	
	// TO MOVE TO fr_global.php
	/*$news = array();//new array for the article type=news TO REPLACE BY if($art->category == 'news')

	$art = new Article();// class Article is defined in ~/include/function.php
	$art->category = 'news';
	$art->title = '<a href=\"https://github.com/crigaud/publication/blob/master/2013/TALK/intelligent_media_processing_group/segmentation_and_indexation_of_comic_books.pdf?raw=true\" >Présentation à Osaka</a>';
	$art->date = '1 Mars 2013';
	array_push($news, $art);
	
	$art = new Article();
	$art->category = 'news';
	$art->title = 'title01';
	$art->date = 'date01';
	array_push($news, $art);*/
		
	//echo $news[1]->title; //print_r($stack);

	for( $i=10 ; $i >= 1 ; $i-- ){
		if( array_key_exists('LT_0'.$i.'_HEAD', $global) ){
			echo '<div class="news_head">'.$global['LT_0'.$i.'_HEAD']."<br />".'</div>';
			//$date = explode( "-", $global["LT_01_DATE"]);
			//$monthName = date("F", mktime(0, 0, 0, $date[1]))	;
			//echo '<div class="news_date">'.$date[0].' '.$monthName.' '.$date[2].'</div>';
			echo '<div class="news_date">'.$global['LT_0'.$i.'_DATE'].'</div>';
		}// END IF
	} //END FOR
	
	
	
	?>

</div>



