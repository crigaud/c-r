<?php
//session_start();

// if (!isset($_SESSION['error'])) {
// 		//$_SESSION['error'] = 30;
// 	} else {
// 		//$_SESSION['error'] = 40;
// 	}
	
	$path = explode("/", $_SERVER['REQUEST_URI']);	

	//echo "Session = ".$_SESSION['error'];
	$test1 = 0;
	$test2 = 0;
	$sent  = 0;
	
	$ip = $_POST['ip'];
	$httpref = $_POST['httpref'];
	$httpagent = $_POST['httpagent'];
	$visitor = $_POST['visitor'];
	$visitormail = $_POST['visitormail'];
	$notes = $_POST['notes'];
	$attn = $_POST['attn'];
	
	
	
	if(empty($visitor) ) {
		//$_SESSION['error2'] = 1;
		$test1 = 1;
		//header("Location: http://".$_SERVER['SERVER_NAME']."/contact/?f0=1");
		//if($_SESSION['error'] == 2) echo "Veillez à bien remplir les trois champs ci-dessus.";
		
	}
	
	if( !preg_match( "/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $visitormail ) )
	{
// 		echo "<h2>Enter valid e-mail</h2>\n";
		$test2 = 1;
		//$_SESSION['error1'] = 1;
		//if($_SESSION['error'] == 1) echo "Email invalide";
 		//header("Location: http://".$_SERVER['SERVER_NAME']."/contact/?f1=1");
// 		die;
	}
	
	
	
	// Check error
	if( $test1 == 1 || $test2 == 1){
		if($test1 == 1 && $test2 == 0){
			header("Location: http://".$_SERVER['SERVER_NAME']."/en/contact/?t1=1");
			die;
		}else if($test1 == 0 && $test2 == 1){
			header("Location: http://".$_SERVER['SERVER_NAME']."/en/contact/?t2=1");
			die;
		}else {
			header("Location: http://".$_SERVER['SERVER_NAME']."/en/contact/?t1=1&t2=1");
			die;
		}
// 		header("Location: http://".$_SERVER['SERVER_NAME']."/contact/");
// 		die;
	}else{
		//$sent = 1;
	}
// 	if( $_SESSION['error1'] == 1 || $_SESSION['error2'] == 1){
// 		header("Location: http://".$_SERVER['SERVER_NAME']."/contact/");
// 		die;
// 	}
	
	$todayis = date("l, F j, Y, g:i a") ;
	
	$attn = $attn ;
	$subject = $attn;
	
	$notes = stripcslashes($notes);
	
	$message = " $todayis [EST] \n
	Attention: $attn \n
	Message: $notes \n
	From: $visitor ($visitormail)\n
	Additional Info : IP = $ip \n
	Browser Info: $httpagent \n
	Referral : $httpref \n
	";
	
	$from = "From: $visitormail\r\n";
	
	
	mail("chris.bike@gmx.com", $subject, $message, $from);
	
	//$_SESSION['sent'] = 1;
	//header("Location: ?sent=1");
	header("Location: http://".$_SERVER['SERVER_NAME']."/en/contact/?sent=1");

	
	

?>
	
	<br /><br />
	<a href="/contact/"> Retour au site </a>
