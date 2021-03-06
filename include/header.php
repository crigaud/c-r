	
	<!-- ENCODING -->	
	<meta charset="UTF-8">

	<!-- DESIGN -->	
	<?php 
		//$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
	?>	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
	<link rel="stylesheet" media="screen" type="text/css" title="css" href="/design.css" />
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/function.js"></script>

	<!-- GENERAL -->
	<?php 
	// Ceci est vrai, alors le texte est affiché
	if (isset($_GET["q"])) {
		$q = $_GET["q"]; 
		if( array_key_exists($q.'_TITLE', $meta) ){
		?>
		<title><?php echo $meta[$q.'_TITLE']; ?></title>
		<meta name="description" content="<?php echo $meta[$q.'_DESC']; ?>">
			<?php
		}else{
			$found = False;
			foreach ($publications as $a) {
				if($a->id == $q){
					$found = True;
					echo '<title>' . $a->metaTitle . $global['HO_SUFIX'] . '</title>';
					echo '<meta name="description" content="' . $a->metaDesc .'">';
				}
			}
			if(!$found){
				echo '<title>' . 'NOT FOUND' .'</title>';
			}
		
		}
	}else if($section == 'cv'){
		 if($subsection == 'publication'){
		 	echo '<title>' . $txt['PU_TITLE'] . $global['HO_SUFIX'] . '</title>';
		 	echo '<meta name="description" content="' . $txt['PU_DESC'] .'">';
		 }else{
			?>
			<title><?php echo $txt['RE_TITLE']; ?></title>
			<meta name="description" content="<?php echo $txt['RE_DESC']; ?>">
			<?php
		}
	}else{	
			?>
		<title><?php echo $global['HO_TITLE']; ?></title>
		<meta name="description" content="<?php echo $global['HO_DESC']; ?>">
		<?php
	}
	
	
	?>
	

	<!--<meta name="owner" content="Christophe Rigaud" />-->
	<meta name="author" content="Christophe Rigaud" />
	<meta name="designer" content="Christophe Rigaud">
	<!--<meta name="name" content="Christophe Rigaud official website" />-->
	
