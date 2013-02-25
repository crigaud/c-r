
	<?php
		//include_once($_SERVER['DOCUMENT_ROOT']."/include/header.php");


/********************************************************************************************************************
*										GET CONSTANTS DEPENDING ON url_temp 												*
*********************************************************************************************************************/		

		$url_temp = explode('/', $_SERVER['PHP_SELF']);
		$cat = 0;

/********************************************************
*						EXPERIENCE 						*
*********************************************************/

		if( strcmp($url_temp[3], 'l3i') == 0 ){
			$ID = 'RE_EX_10_';
		}elseif( strcmp($url_temp[3], 'lisa') == 0 ){
			$ID = 'RE_EX_09_';
		}elseif( strcmp($url_temp[3], 'traveltura') == 0 ){
			$ID = 'RE_EX_08_';
		}elseif( strcmp($url_temp[3], 'bontour') == 0 ){
			$ID = 'RE_EX_07_';
		}elseif( strcmp($url_temp[3], 'erm-automatismes') == 0 ){
			$ID = 'RE_EX_06_';
		}elseif( strcmp($url_temp[3], 'campbell-s-soup') == 0 ){
			$ID = 'RE_EX_05_';

/********************************************************
*						EDUCATION 						*
*********************************************************/

		}elseif( strcmp($url_temp[3], 'istia-lisa') == 0 ){
			$ID = 'RE_ED_07_';
			$cat = 1;
		}elseif( strcmp($url_temp[3], 'istia') == 0 ){
			$ID = 'RE_ED_06_';
			$cat = 1;
		}elseif( strcmp($url_temp[3], 'iut-salon-de-provence') == 0 ){
			$ID = 'RE_ED_05_';
			$cat = 1;
		}


/********************************************************************************************************************
*														MAIN PAGE	 												*
*********************************************************************************************************************/		
?>

			<!-- TITLE -->
			<?php if ($cat == 0){ ?>
			<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/experience.php'.'" 
				>'. $txt['RE_EX_TITLE'] .'</a></h2>';?></div>
			<?php }else{ ?>			
			<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/education.php'.'" 
				>'. $txt['RE_ED_TITLE'] .'</a></h2>';?></div>
			<?php } ?>				
							
			<!-- EXPERIENCE TITLE -->				
				<?php 	if( array_key_exists($ID.'TITLE', $txt ) && array_key_exists($ID.'SUB_TITLE', $txt ) ){	?>
					<table class="ItemTable">
						<tr>
							<td class="ItemTitle">
								<h3><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt[$ID.'SUB_TITLE'] ) .'/'; ?>" title="<?php echo $txt[$ID.'TITLE'] ?>" ><?php echo $txt[$ID.'TITLE'] ?></a></h3>
				<?php }	else{ 
							echo $txt[$ID.'TITLE']; } ?>	
							</td>
							<td class="logo_institution">		
																	
			<!-- EXPERIENCE LOGO -->				
						<?php if( array_key_exists($ID.'WEB', $txt ) ){ echo "<a class='' href=' " . $txt[$ID.'WEB']  . " ' title='". ucfirst($url_temp[3]) ."'  onclick='window.open(this.href); return false;' ><img class='Logo' src='http://" . $_SERVER['SERVER_NAME'].'/cv/image/logo_' . $url_temp[3] . ".jpg' alt='" . ucfirst($url_temp[3]) . "' /></a>";}?>
							</td>
						</tr>
					</table>
					
			<!-- EXPERIENCE SUBTITLE -->				
				<?php 	if( array_key_exists($ID.'TITLE', $txt ) && array_key_exists($ID.'SUB_TITLE', $txt ) ){	?>
							<h4 class="ItemSubTitle"><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt[$ID.'SUB_TITLE'] ) .'/'; ?>"><?php echo $txt[$ID.'SUB_TITLE'] ?></a></h4>
				<?php }else{ 
							echo $txt[$ID.'SUB_TITLE']; } ?>						

			<!-- EXPERIENCE MISSION -->							
			<?php if( array_key_exists('RE_EX_TITLE_MI', $txt ) ){ echo "<h4>" . $txt['RE_EX_TITLE_MI']  . "</h4>";}?>
			<ul class="ItemDesc">
				<?php if( array_key_exists($ID.'DESC_01', $txt ) ){ echo "<li>" . $txt[$ID.'DESC_01']  . "</li>";}		?>
				<?php if( array_key_exists($ID.'DESC_02', $txt ) ){ echo "<li>" . $txt[$ID.'DESC_02']  . "</li>";}  	?>
				<?php if( array_key_exists($ID.'DESC_03', $txt ) ){ echo "<li>" . $txt[$ID.'DESC_03']  . "</li>";}  	?>
				<?php if( array_key_exists($ID.'DESC_04', $txt ) ){ echo "<li>" . $txt[$ID.'DESC_04']  . "</li>";}  	?>
				<?php if( array_key_exists($ID.'DESC_05', $txt ) ){ echo "<li>" . $txt[$ID.'DESC_05']  . "</li>";}  	?>
			</ul>
			
			<!-- EXPERIENCE WEB -->										
			<?php 
				if( array_key_exists($ID.'WEB', $txt ) ){ 
					echo "<h4>" . $txt['RE_EX_TITLE_WE']  . "</h4>";
					echo "<a class='CompanyLink' href=' " . $txt[$ID.'WEB']  . "'    onclick='window.open(this.href); return false;' >" . $txt[$ID.'WEB']  . "</a>";
					
			//-- EXPERIENCE DOC -->															
				}if( array_key_exists($ID.'DOC', $txt ) ){
					echo "<h4>" . $txt['RE_EX_TITLE_DOC']  . "</h4>";
					echo "<a class='LinkPdf' href=' " . $txt[$ID.'DOC']  . "'    onclick='window.open(this.href); return false;' ><img class='img_no_decoration' title='" . $txt[$ID.'DOC'] . "' alt='" . $txt['RE_EX_TITLE_DOC'] . "' src='http://" . $_SERVER['SERVER_NAME'] . "/icon/pdf.png' /></a>";
					
				}if( array_key_exists($ID.'DETAIL', $txt ) ){
					//echo "<p class='category'>" . $txt['RE_EX_TITLE_DE']  . "</p>";
					//echo "../../../cv/detail/inc_" . $lang . "_" . $url_temp[3] . ".php";
					include_once($_SERVER['DOCUMENT_ROOT']."/cv/detail/inc_" . $lang . "_" . $url_temp[3] . ".php");
				}
			?>			
						

