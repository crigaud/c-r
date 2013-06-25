
<!--*********************************************************************************************************************
	*														EDUCATION 													*
 	*********************************************************************************************************************-->
 	

<?php
if($subsection == "education" || $subsection==""){
?>



<?php

if( $section != 'cv'){
	$cmp = 2;
}else{
	$cmp = 15;
}

for( $i=8 ; $i >= 5 ; $i-- ){
	if( array_key_exists('RE_ED_0'.$i.'_TITLE', $txt) && $cmp > 0 ){
		echo '

			<section class="cv-element">
			<table class="ItemTable">
			<tr>
				<td class="ItemTitle">
					<h3><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] ) .'/" 
						title="'. $txt['RE_ED_0'.$i.'_TITLE'] .'" >'. $txt['RE_ED_0'.$i.'_TITLE'] .'</a></h3>
				</td>
			</tr>
			</table>
	
			<span class="ItemSubTitle">'. $txt['RE_ED_0'.$i.'_SUB_TITLE'] .'</span>


			<ul class="ItemDesc">
			';
				if( array_key_exists('RE_ED_0'.$i.'_DESC_01', $txt ) ){ echo '<li>' . $txt['RE_ED_0'.$i.'_DESC_01'] . '</li>';}
				if( array_key_exists('RE_ED_0'.$i.'_DESC_02', $txt ) ){ echo '<li>' . $txt['RE_ED_0'.$i.'_DESC_02'] . '</li>';}
				if( array_key_exists('RE_ED_0'.$i.'_DESC_03', $txt ) ){ echo '<li>' . $txt['RE_ED_0'.$i.'_DESC_03'] . '</li>';}
				if( array_key_exists('RE_ED_0'.$i.'_DESC_04', $txt ) ){ echo '<li>' . $txt['RE_ED_0'.$i.'_DESC_04'] . '</li>';}
				if( array_key_exists('RE_ED_0'.$i.'_DESC_05', $txt ) ){ echo '<li>' . $txt['RE_ED_0'.$i.'_DESC_05'] . '</li>';}
			echo '
			</ul>
		<span class="more"><a 	href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] ) .'/"
					>'. $txt['RE_MORE'] .'</a></span>

		</section>
		';	//END ECHO
		$cmp--;
	}//END IF
} //END FOR

?>



<?php
}//AND IF SUBSECTION = EXPERIENCE
?>	
