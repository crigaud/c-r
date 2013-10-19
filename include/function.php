<?php

	/****************************************************
	*	This class define the stucture of the articles	*
	*****************************************************/
	class Article{
		public $id;

	  	public $title;
	  	public $subTitle;
	  	public $date;
	  	public $author;

		/* SEO metadata */
	  	public $metaTitle;
	  	public $metaDesc;
	  	public $metaKeywords;

	  	/* Content location */
	  	//public $urlLink;
		public $urlContent;

	  	/* Specific to publications */
	  	public $publisher;
	  	
	  	public $urlOnline;
	  	public $urlPdf;
	  	public $urlPoster;
	  	public $urlPresentation;
	  	public $urlDemo;
	  	public $urlMaterial;

	  	/* Extra */ 
		public $category;
		public $tags;    		  	

		public function __construct($id){
			$this->id = $id;
		}

		public function __toString(){
			return "Test [id=$this->id, title=$this->title]";
		}
	}//END Article class
	
	function random_hex_color(){
		return sprintf("%02X%02X%02X", mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	}
	
	function formatCompanyName($s){
		//Format name
		$dir = explode( '-', $s);
		$dir = strtolower( trim( $dir[0] ) );
		
		//Replace special characters by dash
		$order   = array(" ", "'", ",", "(", ")", "\"", "/");
		$dir = str_replace($order, '-', $dir);
		
		//$dir = str_replace(" ", "-", $dir);
		//$dir = str_replace("'", "-", $dir);
		//$dir = str_replace(",", "-", $dir);
		
		//Create dir if not exist
		$filename = $dir . '/' . 'index.php';
		

		//If we are NOT in the sub directory of the experience (no match)> exist? > create
		/*if( preg_match("/". $dir ."/i", $_SERVER['PHP_SELF']) == 0 ){
			//If directory DO NOT exists
			if (!is_dir($dir)) {
				try {
					//Maybe need to remove old one manually (clean.php)
					mkdir($dir);
					copy('../../cv/inc_index_detail.php',$dir.'/index.php');
				} catch (Exception $e) {
					echo 'Caught exception (NOT CREATED): ',  $e->getMessage(), "\n";
				}
			}
		}*/		
			
		return $dir ;
	}

		
	function getPageNameFromTitle($title){
		//Format name
		$pageName = strtolower( $title );
		
		//Replace special characters by dash
		$order   = array(" ", "'", ",", "(", ")", "\"", "/");
		$pageName = str_replace($order, '-', $pageName);
		
		$search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
		$replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
		$pageName = str_replace($search, $replace, $pageName);
		$pageName = $pageName.'.php';
		
		return $pageName ;
	}
	
	/**
	* Create article page
	* !!! To call only from /blog/
	*/
	function createArticlePage($date, $pageName){
		//If directory DOES NOT exists create
		if ( !is_dir($date[2]) ) {
			if( !mkdir($date[2]) ){
				echo 'ERROR: couldn create '.$date[2]."\n";
				return;
			}
		}
		if ( !is_dir( $date[2] . '/' . $date[1] ) ){
			if( !mkdir( $date[2].'/'.$date[1] ) ){
				echo 'ERROR: couldn create '.$date[2].'/'.$date[1]."\n";
				return;
			}			
		}
		
		if( !copy('../../blog/inc_article.php', $date[2].'/'.$date[1] . '/'.$pageName) ){
			echo "\n<!-- PHP ERROR: couldn't copy inc_article.php in \"".'/blog/'.$date[2].'/'.$date[1]."/\" -->\n\n";
		}
	}
	
   
?>
