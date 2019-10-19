<?php
      
	//  require_once "class.phpmailer-lite.php";
	
	// $mail = new PHPMailerLite();
		
session_start();
	
if($_POST["captcha"]==$_SESSION["captcha_code"]){


	$fname			=	$_POST["fname"];
	$flname			=	$_POST["flname"];
	$femail			=	$_POST["femail"];
	$fphone			=	$_POST["fphone"];
	$fmessage		=	$_POST["fmessage"];
	
	$message         = '<table >';

	$message        .= '<tr><td>';
	$message        .= '<b>Hi,</b>';
	$message        .= '</td></tr>';

	$message        .= '<tr><td>';
	$message        .= '<b>Contact us form submitted online.</b>' ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>FIRST NAME 			:</b> '.$fname ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>LAST NAME 			:</b> '.$flname ;
	$message        .= '</td></tr>';
		
	$message        .= '<tr><td>';
	$message        .= '<b>PHONE NUMBER 		:</b> '.$fphone;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>E-MAIL ID 			:</b> '.$femail ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>MESSAGE 				:</b> '.$fmessage ;
	$message        .= '</td></tr>';
	
	$message        .= '</table>';
	

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Subject
$subject = 'Online Contact form';

// To Address 
$to = "izzyshams@gmail.com";

// Additional headers
$headers	.= 'From: '.$fname.' ' . "\r\n";
//$headers	.= 'Cc: <email id here>' . "\r\n";
//$headers	.= 'Bcc: <email id here>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

	echo 'Thank you for your submission!';

}

else{
	
	echo 'Enter Correct Captcha Code.';	
	
}
?>
