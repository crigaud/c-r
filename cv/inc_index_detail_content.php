<!DOCTYPE HTML>
<html>
<head>
	<?php
		include_once("../../../include/header.php");


/********************************************************************************************************************
*										GET CONSTANTS DEPENDING ON URL 												*
*********************************************************************************************************************/		

		$url = explode('/', $_SERVER['PHP_SELF']);
		$cat = 0;

/********************************************************
*						EXPERIENCE 						*
*********************************************************/

		if( strcmp($url[3], 'l3i') == 0 ){
			$ID = 'RE_EX_10_';
		}elseif( strcmp($url[3], 'lisa') == 0 ){
			$ID = 'RE_EX_09_';
		}elseif( strcmp($url[3], 'traveltura') == 0 ){
			$ID = 'RE_EX_08_';
		}elseif( strcmp($url[3], 'bontour') == 0 ){
			$ID = 'RE_EX_07_';
		}elseif( strcmp($url[3], 'erm-automatismes') == 0 ){
			$ID = 'RE_EX_06_';
		}elseif( strcmp($url[3], 'campbell-s-soup') == 0 ){
			$ID = 'RE_EX_05_';

/********************************************************
*						EDUCATION 						*
*********************************************************/

		}elseif( strcmp($url[3], 'istia-lisa') == 0 ){
			$ID = 'RE_ED_07_';
			$cat = 1;
		}elseif( strcmp($url[3], 'istia') == 0 ){
			$ID = 'RE_ED_06_';
			$cat = 1;
		}elseif( strcmp($url[3], 'iut-salon-de-provence') == 0 ){
			$ID = 'RE_ED_05_';
			$cat = 1;
		}


/********************************************************************************************************************
*														MAIN PAGE	 												*
*********************************************************************************************************************/		
?>

	<title><?php  echo $txt['RE_TITLE_EX'] . $url[3] ?></title>
	<meta name="description" content="<?php echo $txt['RE_DESC_EX'] . $url[3] ?>" />
	<!--<meta property="og:title" content="<?php echo $txt['RE_TITLE_EX'] ?>"/>-->
	<!--<meta property="og:description" content="<?php echo $txt['RE_DESC_EX'] ?>" />-->
	<meta name="keywords" content="<?php echo $txt['RE_KEY_EX']; $e = explode( '-', $url[3]); echo ',' . $e[0]; ?>" />
</head>
<body onload="setStyle1(2);">	
	<div id="vcard">
		<?php
			include("../../../vcard.php");
		?>
	</div>			   
	<div id="wrapper">
<?php
			include("../../../include/menu_top.php");
?>
		<div id="content">
		
			<!-- TITLE -->
			<?php if ($cat == 0){ ?>
			<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/cv/experience.php'.'" 
				>'. $txt['RE_EX_TITLE'] .'</a></h2>';?></div>
			<?php }else{ ?>			
			<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/cv/education.php'.'" 
				>'. $txt['RE_ED_TITLE'] .'</a></h2>';?></div>
			<?php } ?>				
							
			<!-- EXPERIENCE TITLE -->				
				<?php 	if( array_key_exists($ID.'TITLE', $txt ) && array_key_exists($ID.'SUB_TITLE', $txt ) ){	?>
					<table class="ItemTable">
						<tr>
							<td class="ItemTitle">
								<h3><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/cv/'. formatCompanyName( $txt[$ID.'SUB_TITLE'] ) .'/'; ?>" title="<?php echo $txt[$ID.'TITLE'] ?>" ><?php echo $txt[$ID.'TITLE'] ?></a></h3>
				<?php }	else{ 
							echo $txt[$ID.'TITLE']; } ?>	
							</td>
							<td class="logo_institution">		
																	
			<!-- EXPERIENCE LOGO -->				
						<?php if( array_key_exists($ID.'WEB', $txt ) ){ echo "<a class='' href=' " . $txt[$ID.'WEB']  . " ' title='". ucfirst($url[3]) ."'  onclick='window.open(this.href); return false;' ><img class='Logo' src='http://" . $_SERVER['SERVER_NAME'].'/cv/image/logo_' . $url[3] . ".jpg' alt='" . ucfirst($url[3]) . "' /></a>";}?>
							</td>
						</tr>
					</table>
					
			<!-- EXPERIENCE SUBTITLE -->				
				<?php 	if( array_key_exists($ID.'TITLE', $txt ) && array_key_exists($ID.'SUB_TITLE', $txt ) ){	?>
							<h4 class="ItemSubTitle"><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/cv/'. formatCompanyName( $txt[$ID.'SUB_TITLE'] ) .'/'; ?>"><?php echo $txt[$ID.'SUB_TITLE'] ?></a></h4>
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
					//echo "../../../cv/detail/inc_" . LANGUAGE . "_" . $url[3] . ".php";
					include_once("../../../cv/detail/inc_" . LANGUAGE . "_" . $url[3] . ".php");
				}
			?>			
						
		</div><!-- END CONTENT -->			
		<?php
			include("../../../include/footer.php");
		?>	
	</div>
	
</body>
</html>
