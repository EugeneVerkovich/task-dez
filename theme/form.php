<?php 
global $wpdb;
include "../../../wp-load.php";
$amin_email = get_option('admin_email');
$blog = get_option('blogname');
$subject = $_POST['subject'];
$name = $_POST['user_name'];
$mail = $_POST['user_email'];
$number = $_POST['user_phone'];
$text = $_POST['message'];
$platform = $_POST['platform'];
$message = '
	<html>
	    <head>
	        <title>'.$subject.'</title>
	    </head>
	    <body>';
if($name!=''){
$message.='<p>Name: '.$name.'</p>';
}if($mail!=''){
$message.='<p>Email: '.$mail.'</p>';
}if($number!=''){
$message.='<p>Number: '.$number.'</p>';
}if($platform!=''){
$message.='<p>Platform: '.$platform.'</p>';
}if($text!=''){
$message.='<p>Message: '.$text.'</p>';
}
$message.='	    </body>
	</html>';

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: ".$blog."\r\n";
	mail($amin_email, $subject, $message, $headers); 
?>