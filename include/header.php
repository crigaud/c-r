	
	<!-- ENCODING -->	
	<meta charset="UTF-8">

	<!-- DESIGN -->	
	<link rel="shortcut icon" type="image/x-icon" href="http://<?php echo $_SERVER['SERVER_NAME']?>/favicon.png" />
	<link rel="stylesheet" media="screen" type="text/css" title="css" href="http://<?php echo $_SERVER['SERVER_NAME']?>/design.css" />
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/function.js"></script>

	<!-- GENERAL -->
	<!--<meta name="owner" content="Christophe Rigaud" />-->
	<meta name="author" content="Christophe Rigaud" />
	<meta name="designer" content="Christophe Rigaud">
	<!--<meta name="name" content="Christophe Rigaud official website" />-->
	
	<!-- DINAMIC CONTENT -->
	<?php
	$q = $_GET["q"];
	//print 'DEBUG:'.sizeof($q).', section:';
	
	
	if( $q != null ){
		//Article from blog
		$title = $meta[$q.'_TITLE'];
		$desc = $meta[$q.'_DESC'];
		$key = "blog,article,news,actualité,christophe rigaud,rigaud christophe";
	}else if(strlen($lang) == 2){
		//Section level (e.g. home, cv, blog)
		if($section == "cv"){
			$title = $txt["RE_TITLE"];
			$desc = $txt["RE_DESC"];
			$key = $txt["RE_KEY"];
			//Subsection level of cv
			if($subsection == "publication"){
				$title = $txt["PU_TITLE"];
				$desc = $txt["PU_DESC"];
				$key = $txt["PU_KEY"];
			}else if($subsection == "experience"){
				$title = $txt["RE_EX_TITLE_ALL"];
				$desc = $txt["RE_EX_DESC_ALL"];
			}else if($subsection == "education"){
				$title = $txt["RE_ED_TITLE_ALL"];
				$desc = $txt["RE_ED_DESC_ALL"];
			}else if(strlen($subsection) > 0){
				for( $i=10 ; $i >= 0 ; $i-- ){
					if( array_key_exists('RE_ED_0'.$i.'_TITLE', $txt) ){ 
						if ( formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] ) == $subsection ){
							$title = $txt['RE_ED_0'.$i.'_TITLE'].' | Christophe Rigaud';
							//echo formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] );
							//echo $title;
						}else if( formatCompanyName( $txt['RE_EX_0'.$i.'_SUB_TITLE'] ) == $subsection ){
							$title = $txt['RE_EX_0'.$i.'_TITLE'].' | Christophe Rigaud';
							echo formatCompanyName( $txt['RE_EX_0'.$i.'_SUB_TITLE'] );
						}else{
							echo formatCompanyName( $txt['RE_ED_0'.$i.'_SUB_TITLE'] );
						}
					}				
				}
			}
		}else if($section == "contact"){
			$title = $global["CO_TITLE"];
			$desc = $global["CO_DESC"];
			$key = $global["CO_KEY"];
		}else if($section == "blog"){
			$title = $art["AR_TITLE"];
			$desc = $global["CO_DESC"];
			$key = $global["CO_KEY"];
		}else{
			$title = $global['HO_TITLE'];
			$desc = $global['HO_DESC'];
			$key = $global['HO_KEY'];
		}
	}
	
	//Fill anyway
	if(strlen($title) == 0){$title = $global['HO_TITLE'];}
	if(strlen($desc) == 0){$desc = $global['HO_DESC'];}
	if(strlen($key) == 0){$key = $global['HO_KEY'];}
		
	?>
	
	<title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $desc ?>" />
	<meta name="keywords" content="<?php echo $key ?>" />
		
	
