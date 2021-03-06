
<div id="publications">
<?php
	$q = $_GET["q"];

	if(strlen($q) > 0){
		include($_SERVER['DOCUMENT_ROOT'].'/cv/detail_publication.php');
	}else{

?>

<?php
	foreach ($publications as $a) {
		?>
	<section class="cv-element" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline">
			<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/publication/?q=' . $a->id; ?>" ><?php echo $a->title ?></a>
		</span>
		<br />
		<span itemprop="author">
			<?php echo $a->author ?>
		</span>
		<br />
		<span class="publisher" itemprop="publisher">
			<?php echo $a->publisher ?>
		</span>
		<ul class="download">
			<?php if (strlen($a->urlOnline) > 0 ) {	?>
			<li><a href="<?php echo $a->urlOnline ?>" onclick="window.open(this.href); return false;">Online</a></li>
			<?php }	?>
			<?php if (strlen($a->urlPdf) > 0 ) {	?>
			<li><a href="<?php echo $a->urlPdf ?>" onclick="window.open(this.href); return false;">PDF</a></li>
			<?php }	?>
			<?php if (strlen($a->urlPresentation) > 0 ) {	?>
			<li><a href="<?php echo $a->urlPresentation ?>" onclick="window.open(this.href); return false;">Presentation</a></li>
			<?php }	?>
			<?php if (strlen($a->urlPoster) > 0 ) {	?>
			<li><a href="<?php echo $a->urlPoster ?>" onclick="window.open(this.href); return false;">Poster</a></li>
			<?php }	?>
			<?php if (strlen($a->urlDemo) > 0 ) {	?>
			<li><a href="<?php echo $a->urlDemo ?>" onclick="window.open(this.href); return false;">Demo</a></li>
			<?php }	?>
			<?php if (strlen($a->urlMaterial) > 0 ) {	?>
			<li><a href="<?php echo $a->urlMaterial ?>" onclick="window.open(this.href); return false;">Material</a></li>
			<?php }	?>
		</ul>
	</section>	
	<?php
	} 
	?>
		
	



	<!--
	<section class="cv-element" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline"><a href="https://github.com/crigaud/publication/tree/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics" onclick="window.open(this.href); return false;" >An active contour model for speech balloon detection in comics</a></span><br />
		<span itemprop="author">Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier</span><br />
		<span class="publisher" itemprop="publisher">Pending acceptance...</span>
		<ul class="download">
		   	<li><a href="https://github.com/crigaud/publication/tree/master/2013/ICDAR/an_active_contour_model_for_speech_balloon_detection_in_comics" onclick="window.open(this.href); return false;">Material</a></li>
		</ul>
	</section>	
	<section class="cv-element" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline"><a href="http://ebdtheque.univ-lr.fr/" onclick="window.open(this.href); return false;" >eBDtheque: a representative database of comics</a></span><br />
		<span itemprop="author">Clément Guérin, Christophe Rigaud, Antoine Mercier</span><br />
		<span class="publisher"  itemprop="publisher">Pending acceptance...</span>
	</section>	
	<section class="cv-element" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline"><a href="https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books" onclick="window.open(this.href); return false;" >Automatic text localisation in scanned comic books</a></span><br />
		<span itemprop="author">Christophe Rigaud, Dimosthenis Karatzas, Joost Van de Weijer, Jean-Christophe Burie, Jean-Marc Ogier</span><br />
		<span class="publisher" itemprop="publisher">International Conference on Computer Vision Theory and Applications (VISAPP’13)</span>
		<ul class="download">
		   	<li><a href="https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/paper/2013_Rigaud_Automatic_text_localisation_in_scanned_comic_books.pdf?raw=true" onclick="window.open(this.href); return false;" >PDF</a></li>
			<li><a href="https://github.com/crigaud/publication/blob/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/poster/2013_Rigaud_Automatic_Text_Localisation_in_Scanned_Comic_Books.pdf?raw=true" onclick="window.open(this.href); return false;" >Poster</a></li>
			<li><a href="https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/demo/text_extractor_for_comics" onclick="window.open(this.href); return false;" >Demo</a></li>
			<li><a href="https://github.com/crigaud/publication/tree/master/2013/VISAPP/automatic_text_localisation_in_scanned_comic_books/" onclick="window.open(this.href); return false;" >Material</a></li>
		</ul>

	</section>	
	<section class="cv-element" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline"><a href="https://github.com/crigaud/publication/tree/master/2013/LNCS/robust_frame_and_text_extraction_from_comic_books" onclick="window.open(this.href); return false;" >Robust frame and text extraction from comic books</a></span><br />
		<span itemprop="author">Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier</span><br />
		<span class="publisher" itemprop="publisher">Graphics Recognition. New Trends and Challenges (LNCS), vol. 7423, pp. 129-138</span><br />
		<ul class="download">
		   	<li><a href="http://link.springer.com/chapter/10.1007/978-3-642-36824-0_13" onclick="window.open(this.href); return false;" >Online</a></li>
		</ul>
	</section>	
	
	<h4>2012</h4>
	
	<section class="article-content" itemprop="scholarlyArticle" itemscope itemtype="http://schema.org/ScholarlyArticle">
		<span class="headline" itemprop="headline"><a href="https://github.com/crigaud/publication/tree/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees" onclick="window.open(this.href); return false;" >Extraction robuste des cases et du texte de bandes dessinées</a></span><br />
		<span itemprop="author">Christophe Rigaud, Norbert Tsopze, Jean-Christophe Burie, Jean-Marc Ogier</span><br />
		<span class="publisher"  itemprop="publisher">Colloque International Francophone sur l'Ecrit et le Document (CIFED'12)</span><br />
		<ul class="download">
		   	<li><a href="http://hal.archives-ouvertes.fr/hal-00701987" onclick="window.open(this.href); return false;" >Online</a></li>
		   	<li><a href="https://github.com/crigaud/publication/blob/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees/paper/2011_Rigaud_Extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees.pdf?raw=true" onclick="window.open(this.href); return false;" >PDF</a></li>
		   	<li><a href="https://github.com/crigaud/publication/blob/master/2012/CIFED/extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees/presentation/2012_Rigaud_Extraction_robuste_des_cases_et_du_texte_de_bandes_dessinees.pdf?raw=true" onclick="window.open(this.href); return false;" >Presentation</a></li>
		</ul>
	</section>	-->

<?php
	//}//AND IF SUBSECTION = EXPERIENCE
}//END print list or one publication detail
?>		

</div>

