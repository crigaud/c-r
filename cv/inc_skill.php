
<!--*********************************************************************************************************************
	*													SKILLS/NOTIONS													*
 	*********************************************************************************************************************-->

	<h2><?php echo $txt['RE_SK_TITLE'] ?></h2>
	<dl>	

	<?php

	for( $i=1 ; $i <= 10 ; $i++ ){
		if( array_key_exists('RE_SK'.$i.'_TITLE', $txt ) ){
			echo "<dt>". $txt['RE_SK'.$i.'_TITLE']." </dt>\n\t";
		}
		for( $j=1 ; $j <= 10 ; $j++ ){
			if( array_key_exists('RE_SK'.$i.'_0'.$j, $txt ) ){
				$tag = strtolower($txt['RE_SK'.$i.'_0'.$j]);
				$dir = "../tag/" . $tag;
				if (is_dir($dir)) {
					echo "<dd><a href='http://".$_SERVER['SERVER_NAME']."/". LANGUAGE ."/tag/".$tag."' title='". $txt['RE_SK'.$i.'_0'.$j] ."'  >" . $txt['RE_SK'.$i.'_0'.$j] . "</a></dd>\n\t";
				
				}else{
					echo "<dd>". $txt['RE_SK'.$i.'_0'.$j]." </dd>\n\t";
				}
			}	
		} //END FOR
	} //END FOR
	?>

	</dl>

