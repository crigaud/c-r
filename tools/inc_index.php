	<?php
	$q = $_GET["q"];
	if($q == 'text-localization-in-comics'){
		
	}else if($q == 'letter-transcription'){
		?>
		<section class="article">
			<h1><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang ;?>/tools/?q=letter-transcription" ><?php echo $global['TO_TRANS_TITLE']; ?></a></h1>
			<section class="article-content">
				<?php include('inc_letter-transcription.php');?>
			</section><!-- END ARTICLE CONTENT -->		
        </section><!-- END ARTICLE -->
        <?php
	}else{
	
	?>
		<section class="article">
			<h2><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang ;?>/tools/" >Tools</a></h2>
			<section class="article-content">
				<!--<a href="?q=text-localization-in-comics" ><?php echo $global['TO_TEXT_LOCA_TITLE'] ?></a>
				<br />
				<br />-->
				<a href="?q=letter-transcription" ><?php echo $global['TO_TRANS_TITLE'] ?></a>
			 </section><!-- END ARTICLE CONTENT -->		
        </section><!-- END ARTICLE -->
      
      <?php
      }
      ?>
