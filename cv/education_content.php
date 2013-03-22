
<!--*********************************************************************************************************************
	*														EDUCATION 													*
 	*********************************************************************************************************************-->
 	
<div class="SectionTitle"><?php echo '<h2><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/education/'.'" 
				>'. $txt['RE_ED_TITLE'] .'</a></h2>';?></div>



<?php
if($subsection == "education" || $subsection==""){
?>

<nav><ul>

<?php

if( $section != 'cv'){
	$cmp = 2;
}else{
	$cmp = 15;
}

for( $i=8 ; $i >= 5 ; $i-- ){
	if( array_key_exists('RE_ED_0'.$i.'_TITLE', $txt) && $cmp > 0 ){
		echo '

		<li class="Item">
			<table class="ItemTable">
			<tr>
				<td class="ItemTitle">
					<h3><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] ) .'/" 
						title="'. $txt['RE_ED_0'.$i.'_TITLE'] .'" >'. $txt['RE_ED_0'.$i.'_TITLE'] .'</a></h3>
				</td>
			</tr>
			</table>
	
			<h4 class="ItemSubTitle"><a 	href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/'. formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] ) .'/"
					>'. $txt['RE_ED_0'.$i.'_SUB_TITLE'] .'</a></h4>


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
		</li>

		';	//END ECHO
		$cmp--;
	}//END IF
} //END FOR

?>

</ul></nav>

<?php
}//AND IF SUBSECTION = EXPERIENCE

if( $subsection != "education"){
	//echo '	<p class="see_all" align="right"><a href="http://'. $_SERVER['SERVER_NAME'].'/'.$lang.'/cv/education/" title="'. $txt['RE_ALL'] .'"></a> </p>';
}
?>	
