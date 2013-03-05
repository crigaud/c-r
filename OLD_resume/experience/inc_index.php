<!DOCTYPE HTML>
<html>
<head>
	<?php
		include_once("../../../include/header.php");
		
		//GET CONSTANTS DEPENDING ON URL
		$section = explode('/', $_SERVER['PHP_SELF']);

/********************************************************************************************************************
*														EXPERIENCE 													*
*********************************************************************************************************************/

		if( strcmp($section[3], 'lisa') == 0 ){
			$RE_TITLE 										= RE_EX_09_TITLE		;
			$RE_SUB_TITLE 									= RE_EX_09_SUB_TITLE	;
			if( defined( 'RE_EX_09_DESC_01' ) ){ $RE_DESC_01 = RE_EX_09_DESC_01		;}
			if( defined( 'RE_EX_09_DESC_02' ) ){ $RE_DESC_02 = RE_EX_09_DESC_02		;}
			if( defined( 'RE_EX_09_DESC_03' ) ){ $RE_DESC_03 = RE_EX_09_DESC_03 		;}
			if( defined( 'RE_EX_09_DESC_04' ) ){ $RE_DESC_04 = RE_EX_09_DESC_04 		;}
		}elseif( strcmp($section[3], 'traveltura') == 0 ){
			$RE_TITLE = RE_EX_08_TITLE;
			$RE_SUB_TITLE = RE_EX_08_SUB_TITLE;
			$RE_DESC_01 = RE_EX_08_DESC_01;
			$RE_DESC_02 = RE_EX_08_DESC_02;
		}elseif( strcmp($section[3], 'bontour') == 0 ){
			$RE_TITLE = RE_EX_07_TITLE;
			$RE_SUB_TITLE = RE_EX_07_SUB_TITLE;
			$RE_DESC_01 = RE_EX_07_DESC_01;
			$RE_DESC_02 = RE_EX_07_DESC_02;
		}elseif( strcmp($section[3], 'erm-automatismes') == 0 ){
			$RE_TITLE = RE_EX_06_TITLE;
			$RE_SUB_TITLE = RE_EX_06_SUB_TITLE;
			$RE_DESC_01 = RE_EX_06_DESC_01;
			$RE_DESC_02 = RE_EX_06_DESC_02;
		}elseif( strcmp($section[3], 'campbell-s-soup') == 0 ){
			$RE_TITLE = RE_EX_05_TITLE;
			$RE_SUB_TITLE = RE_EX_05_SUB_TITLE;
			$RE_DESC_01 = RE_EX_05_DESC_01;
			$RE_DESC_02 = RE_EX_05_DESC_02;

/********************************************************************************************************************
*														EDUCATION 													*
*********************************************************************************************************************/

		}elseif( strcmp($section[3], 'istia-lisa') == 0 ){
		$RE_TITLE = RE_ED_07_TITLE;
		$RE_SUB_TITLE = RE_ED_07_SUB_TITLE;
		$RE_DESC_01 = RE_ED_07_DESC_01;
		$RE_DESC_02 = RE_ED_07_DESC_02;
		}elseif( strcmp($section[3], 'istia') == 0 ){
			$RE_TITLE = RE_ED_06_TITLE;
			$RE_SUB_TITLE = RE_ED_06_SUB_TITLE;
			$RE_DESC_01 = RE_ED_06_DESC_01;
			$RE_DESC_02 = RE_ED_06_DESC_02;
		}elseif( strcmp($section[3], 'iut-salon-de-provence') == 0 ){
			$RE_TITLE = RE_ED_05_TITLE;
			$RE_SUB_TITLE = RE_ED_05_SUB_TITLE;
			if( defined( 'RE_ED_05_DESC_01' ) ){ $RE_DESC_01 = RE_ED_05_DESC_01		;}
			if( defined( 'RE_ED_05_DESC_02' ) ){ $RE_DESC_02 = RE_ED_05_DESC_02		;}
			if( defined( 'RE_ED_05_DESC_03' ) ){ $RE_DESC_03 = RE_ED_05_DESC_03 		;}
			if( defined( 'RE_ED_05_DESC_04' ) ){ $RE_DESC_04 = RE_ED_05_DESC_04 		;}
		}
?>

	<title><?php echo RE_TITLE_EX.$section[3] ?></title>
	<meta name="description" content="<?php echo RE_DESC_EX . $section[3] ?>" />
	<meta name="keywords" content="<?php echo RE_KEY ?>" />
</head>
<body onload="setStyle1(2);">			   
	<div id="wrapper">
<?php
			include("../../../include/menu_top.php");
?>
		
		<div id="content">

			<table class="ItemTable">
				<tr>
					<td class="ItemLeft">
					
				<?php if(isset($RE_TITLE) && isset($RE_SUB_TITLE)  ){	?>
						<a
						href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/cv/'. formatCompanyName( $RE_SUB_TITLE ) .'/'; ?>"
						title="<?php echo $RE_TITLE ?>" ><?php echo $RE_TITLE ?></a>
				<?php }else{ 
						echo $RE_TITLE; } ?>
						
					</td>
				</tr>
				<tr>
					<td class="TitleLeft"><?php echo $RE_SUB_TITLE ?></td>
				</tr>
			</table>
			<ul class="ItemDesc">
				<?php if(isset($RE_DESC_01)){ echo "<li>" . $RE_DESC_01 . "</li>";}	?>
				<?php if(isset($RE_DESC_02)){ echo "<li>" . $RE_DESC_02 . "</li>";}  	?>
				<?php if(isset($RE_DESC_03)){ echo "<li>" . $RE_DESC_03 . "</li>";}  	?>
				<?php if(isset($RE_DESC_04)){ echo "<li>" . $RE_DESC_04 . "</li>";}  	?>
			</ul>
		
			
		</div>				
	</div>
<?php
	include("../../../include/footer.php");
?>		
</body>
</html>
