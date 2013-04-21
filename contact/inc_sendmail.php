<?php
//session_start();

// if (!isset($_SESSION['error'])) {
// 		//$_SESSION['error'] = 30;
// 	} else {
// 		//$_SESSION['error'] = 40;
// 	}
	
	$lang = explode('/', $_SERVER['PHP_SELF']);
		
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
			header("Location: http://".$_SERVER['SERVER_NAME']."/".$lang[1]."/contact/?t1=1");
			die;
		}else if($test1 == 0 && $test2 == 1){
			header("Location: http://".$_SERVER['SERVER_NAME']."/".$lang[1]."/contact/?t2=1");
			die;
		}else {
			header("Location: http://".$_SERVER['SERVER_NAME']."/".$lang[1]."/contact/?t1=1&t2=1");
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
	
	$todayis = date('l jS \of F Y h:i:s A');
	
	$attn = $attn ;
	$subject = $attn;
	$first = "contact";
	$second = "@christophe";
	$third = "-rigaud.com";
	$to = $first + $second + $third;
	$notes = stripcslashes($notes);
	
	/*$message = " $todayis [EST] \n
	Attention: $attn \n
	Message: $notes \n
	From: $visitor ($visitormail)\n
	Additional Info : IP = $ip \n
	Browser Info: $httpagent \n
	Referral : $httpref \n
	";*/
	
	//$from = "From: $visitormail\r\n";


	$message = '
	<html>
	<head>
	  	<title>Email</title>
	</head>
	<body>
		<p>' .
			$notes 	 	.

			'<br /><br />Additional Info : IP = ' . $ip					.
			'<br />Browser Info: ' 			. $httpagent 				.
			'<br />Referral : '				. $httpref 					.
		  	'<br /><br />' 	.			
			$todayis 	.
		'</p>

	</body>
	</html>
	';
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	// Additional headers
	$headers .= 'To: ' . $to . "\r\n";
	$headers .= 'From:' . $visitormail . "\r\n";
	
	
	mail($to, $subject, $message, $headers);
	//mail("chris.bike@gmx.com", $subject, $message, $from);
	
	//$_SESSION['sent'] = 1;
	//header("Location: ?sent=1");
	header("Location: http://".$_SERVER['SERVER_NAME']."/".$lang[1]."/contact/?sent=1");

	
	

?>
	
	<br /><br />
	<a href="/contact/"> Retour au site </a>
