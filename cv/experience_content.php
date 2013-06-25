
<!--*********************************************************************************************************************
	*														EXPERIENCE 													*
 	*********************************************************************************************************************-->



<?php

if($subsection == "experience" || $subsection==""){

?>

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

			<section class="cv-element">
				<span class="logo_institution">';
				if( array_key_exists('RE_EX_'.$ID.'_WEB', $txt) ){ echo '<a href="' . $txt['RE_EX_'.$ID.'_WEB'] . '" title="' . ucfirst($subFolderName) . '"  onclick="window.open(this.href); return false;" ><img src="http://' . $_SERVER['SERVER_NAME'] . '/cv/image/logo_' . $subFolderName . '.jpg"   alt="' . ucfirst($subFolderName) . '" /></a>' ;}
				echo '
				</span>
				<span class="ItemTitle">
					<h3><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. $subFolderName .'/" 
						title="'. $txt['RE_EX_'.$ID.'_TITLE'] .'" >'. $txt['RE_EX_'.$ID.'_TITLE'] .'</a></h3>
				</span>
				
			
					<span class="ItemSubTitle">'. $txt['RE_EX_'.$ID.'_SUB_TITLE'] .'</span>

			<ul class="ItemDesc">
			';
				if( array_key_exists('RE_EX_'.$ID.'_DESC_01', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_01'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_02', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_02'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_03', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_03'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_04', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_04'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_05', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_05'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_06', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_06'] . '</li>';}
				if( array_key_exists('RE_EX_'.$ID.'_DESC_07', $txt ) ){ echo '<li>' . $txt['RE_EX_'.$ID.'_DESC_07'] . '</li>';}
			echo '
			</ul>
		<span class="more"><a 	href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_EX_'.$ID.'_SUB_TITLE'] ) .'/"
					>'. $txt['RE_MORE'] .'</a></span>
		</section>

		';	//END ECHO
	
		$cmp--;
	
	} //END IF
} //END FOR

?>

<?php
}//AND IF SUBSECTION = EXPERIENCE
?>			


