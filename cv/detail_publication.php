<?php
	foreach ($publications as $a) {
		if($a->id == $q){
			?>
<section class="article">

	<!-- TITLE -->
	<h1><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/publication/?q='.$q; ?>"  ><?php echo $a->title ?></a></h1>
				
	<div class="article-content">		
	
					
	</div><!--end article-content-->
</section><!--end acticle-->

			<?php
		}
	}
		