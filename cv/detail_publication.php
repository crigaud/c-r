<?php
	foreach ($publications as $a) {
		if($a->id == $q){
			?>
<section class="article">

	<!-- TITLE -->
	<h1><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/publication/?q='.$q; ?>"  ><?php echo $a->title ?></a></h1>
				
	<div class="article-content">	
		<?php 
			$newURL = str_replace("/fr/", "/en/", $_SERVER['REQUEST_URI']);

			if($a->title){
				echo '<h3>' . $txt['PU_TITLE_PAPER'] . '</h3>';
				echo '<p>' . $a->title;
				if($lang == 'fr'){
					echo ' (<a href="' . $newURL . '">' . $txt['PU_VERSION'] . '</a>)';
				}
				echo '</p>';
			}	
			if($a->author){
				echo '<h3>' . $txt['PU_AUTHORS'] . '</h3>';
				echo '<p>' . $a->author . '</p>';
			}			
			if($a->abs){
				echo '<h3>' . $txt['PU_ABSTRACT'] . '</h3>';
				echo '<p>';
				echo $a->abs;if($lang == 'fr'){
					echo ' (<a href="' . $newURL . '">' . $txt['PU_VERSION'] . '</a>)';
				}
				echo '</p>';
			}						
			/*if($a->illustration){
				echo '<h3>' . $txt['PU_ILLUSTRATION'] . '</h3>';
			}*/			
			if($a->bibtex){
				echo '<h3>' . $txt['PU_BIBTEX'] . '</h3>';
				echo '<pre>' . $a->bibtex . '</pre>';
			}			

			echo '<h3>' . $txt['PU_RES'] . '</h3>';
			if($a->urlOnline){
				echo '<p><a href="' . $a->urlOnline . '" onclick="window.open(this.href); return false;">' . $txt['PU_RES_ONLINE'] . '</a></p>';
			}
			if($a->urlPdf){
				echo '<p><a href="' . $a->urlPdf . '" onclick="window.open(this.href); return false;">' . $txt['PU_RES_PDF'] . '</a></p>';
			}
			if($a->urlMaterial){
				echo '<p><a href="' . $a->urlMaterial . '" onclick="window.open(this.href); return false;">' . $txt['PU_RES_MATERIAL'] . '</a></p>';
			}
						
			if($a->urlPresentation){
				echo '<h3>' . $txt['PU_PRESENTATION'] . '</h3>';
				echo '<iframe src="'.$a->urlPresentation.'" width="600" height="485" style="border: none;"></iframe>';
				//echo '<iframe src="http://docs.google.com/viewer?url='.$a->urlPresentation.'&embedded=true" width="600" height="480" style="border: none;"></iframe>';
				/*echo '<embed src="presentation.pdf" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" allowfullscreen="allowfullscreen">';*/
			}
			
			if($a->urlPoster){
				echo '<h3>' . $txt['PU_POSTER'] . '</h3>';
				echo '<p><a href="' . $a->urlPoster . '" onclick="window.open(this.href); return false;"><img src="'.$a->urlPoster.'" alt="Poster" border="1px" width="50%" /></a></p>';
			}
			
			
		 ?>

		
					
	</div><!--end article-content-->
</section><!--end acticle-->

			<?php
		}
	}
		
