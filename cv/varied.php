
<!--*********************************************************************************************************************
	*														 VARIED 													*
 	*********************************************************************************************************************-->
 
<?php
if($subsection == "varied" || $subsection==""){
?>

<table class="ItemTable2">
<?php
for( $i=1 ; $i <= 4 ; $i++ ){
	echo '
		<tr>
			<td class="ItemEnumTitle">'. $txt['RE_VA_0'.$i.'_TITLE'] .'</td>
			<td class="ItemEnumDesc">'.   $txt['RE_VA_0'.$i.'_DESC_01']. '</td>
		</tr>	
	';
} //END FOR
?>
</table>


<?php
}//AND IF SUBSECTION = EXPERIENCE

