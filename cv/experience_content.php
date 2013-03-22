
<!--*********************************************************************************************************************
	*														EXPERIENCE 													*
 	*********************************************************************************************************************-->
 	
<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/experience/'.'" 
#				>'. $txt['RE_EX_TITLE']. '</a></h2>';?></div>



<?php

if($subsection == "experience" || $subsection==""){

?>
<nav><ul>
<?php

if( $section != 'cv'){
	$cmp = 2;
}else{
	$cmp = 15;
}

for( $i=10 ; $i >= 5 ; $i-- ){
	$ID = sprintf("%02d", $i);
	if( array_key_exists('RE_EX_'.$ID.'_TITLE', $txt) && $cmp > 0 ){

	 	$subFolderName = formatCompanyName( $txt['RE_EX_'.$ID.'_SUB_TITLE'] );
		echo '

		<li class="Item">
			<table class="ItemTable">
			<tr>
				<td class="ItemTitle">
					<h3><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. $subFolderName .'/" 
						title="'. $txt['RE_EX_'.$ID.'_TITLE'] .'" >'. $txt['RE_EX_'.$ID.'_TITLE'] .'</a></h3>
				</td>
				<td class="logo_institution">';
				if( array_key_exists('RE_EX_'.$ID.'_WEB', $txt) ){ echo '<a href="' . $txt['RE_EX_'.$ID.'_WEB'] . '" title="' . ucfirst($subFolderName) . '"  onclick="window.open(this.href); return false;" ><img src="http://' . $_SERVER['SERVER_NAME'] . '/cv/image/logo_' . $subFolderName . '.jpg"   alt="' . ucfirst($subFolderName) . '" /></a>' ;}
				echo '
				</td>
			</tr>

			</table>


					<h4 class="ItemSubTitle"><a 	href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. $subFolderName .'/"
					>'. $txt['RE_EX_'.$ID.'_SUB_TITLE'] .'</a></h4>

			<ul class="ItemDesc">
			';
				if( array_key_exists('RE_EX_'.$ID.'_DESC_01', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_01'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_02', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_02'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_03', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_03'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_04', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_04'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_05', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_05'] . '</li>';}
			echo '
			</ul>
		<span class="more"><a 	href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_EX_'.$ID.'_SUB_TITLE'] ) .'/"
					>'. $txt['RE_MORE'] .'</a></span>
		</li>
		';	//END ECHO
	
		$cmp--;
	
	} //END IF
} //END FOR

?>
</ul></nav>
<?php
}//AND IF SUBSECTION = EXPERIENCE

if( $subsection != "experience"){
	//echo '	<p class="see_all" align="right"><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/experience/" title="'. $txt['RE_ALL'] .'"></a></p>';
}

?>			


