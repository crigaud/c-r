
<!--*********************************************************************************************************************
	*														CV 														*
 	*********************************************************************************************************************-->

		<?php if(strlen($subsection) == 0){
		/*************************
			DOUBLE COLONNE LAYER
		**************************/?>
		
<div class="layout-row">
	<div class="right-column">
			<section class="article">
				<h2>
					<?php echo $global["VC_TITLE"];?>
				</h2>
				<div class="article-content">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/business_card.php'); ?>
				</div><!--end article-content-->
			</section><!--end acticle-->
		<section id="skill" class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/publication/'.'" 
#				>Publications</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/publication_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<section class="article">
			<h2>
				<?php echo $txt['RE_SK_TITLE'] ?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_skill_h.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/varied/'.'" 
#				>'. $txt['RE_VA_TITLE']. '</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/varied.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
	</div><!--end right-column-->
	
	<div class="left-column">
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/experience/'.'" 
#				>'. $txt['RE_EX_TITLE']. '</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/experience_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/education/'.'" 
				>'. $txt['RE_ED_TITLE'] .'</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/education_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
	</div><!--end left-column-->
</div><!--end layout-row-->	

<?php }else{ 
/*************************
	SINGLE COLONNE LAYER
**************************/?>

		<?php if($subsection == "business_card"){?>
		<section class="article">
			<h2>
				<?php echo $global["VC_TITLE"];?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/business_card.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
			
		<?php if($subsection == "skill"){?>
		<section id="skill" class="article">
			<h2>
				<?php echo $txt['RE_SK_TITLE'] ?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/inc_skill_h.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
		
		<?php if($subsection == "varied"){?>
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/varied/'.'" 
#				>'. $txt['RE_VA_TITLE']. '</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/varied.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
		
		<?php if($subsection == "publication"){?>
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/publication/" >Publications</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/publication_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
		
		<?php if($subsection == "experience"){?>
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/experience/'.'" 
#				>'. $txt['RE_EX_TITLE']. '</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/experience_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
		
		
		<?php if($subsection == "education"){?>
		<section class="article">
			<h2>
				<?php echo '<a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/education/'.'" 
				>'. $txt['RE_ED_TITLE'] .'</a>';?>
			</h2>
			<div class="article-content">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/education_content.php'); ?>
			</div><!--end article-content-->
		</section><!--end acticle-->
		<?php } ?>
	
<?php } ?>



