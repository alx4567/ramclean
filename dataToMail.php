<?php
/*
Product Name: Aquaria contact form builder
Author: Devsullo
Author URI: https://codecanyon.net/user/devsullo
Description: A smart responsive contact form builder
Version: 5.4
License: GNU General Public License version 3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Tags: aquaria, aquaria contact form builder, aquaria contact form builder 5, contact form, contact form bulider, contact form constructor, easy form maker, form maker, forms, modern forms, responsive form, simple contact form
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

session_start();
$P = 'YToyODp7czoxNDoic2VuZGluZ19tZXRob2QiO3M6NDoibWFpbCI7czo5OiJzbXRwX2hvc3QiO3M6MDoiIjtzOjk6InNtdHBfcG9ydCI7czowOiIiO3M6OToic210cF91c2VyIjtzOjA6IiI7czoxMzoic210cF9wYXNzd29yZCI7czowOiIiO3M6MTU6InNtdHBfZW5jcnlwdGlvbiI7czowOiIiO3M6OToicmVjX2VtYWlsIjtzOjI0OiJmb3JlYWxleGFuZGVyNEBnbWFpbC5jb20iO3M6MTI6InNlbmRlcl9lbWFpbCI7czoxMDoiWW91ciBFbWFpbCI7czoxMToic2VuZGVyX25hbWUiO3M6OToiWW91ciBOYW1lIjtzOjk6ImNjX2VtYWlscyI7czowOiIiO3M6MTA6ImJjY19lbWFpbHMiO3M6MDoiIjtzOjExOiJyZWNfZW1haWxfcyI7czoxOToiTmV3IFNlcnZpY2UgUmVxdWVzdCI7czoxMToicmVjX2VtYWlsX3QiO3M6MjI6IlRoaXMgaXMgc3VibWl0dGVkIGRhdGEiO3M6MjM6ImFmdGVyX3N1Y2Nlc3NmdWxfc3VibWl0IjtzOjU6InBvcHVwIjtzOjE2OiJzZW50X2VtYWlsX3RpdGxlIjtzOjg6IlNVQ0NFU1MhIjtzOjE1OiJzZW50X2VtYWlsX2JvZHkiO3M6NzQ6IlRoYW5rIHlvdSEgWW91ciByZXF1ZXN0IGhhcyBiZWVuIHJlY2VpdmVkIGFuZCB3ZSB3aWxsIGJlIGluIHRvdWNoIHNob3J0bHkuIjtzOjEyOiJyZWRpcmVjdF91cmwiO3M6MDoiIjtzOjE0OiJlcnJfc29tdGhpbmdfdCI7czoyOToiRXJyb3I6IGVtYWlsIGhhc24mIzAzOTt0IHNlbnQiO3M6MTM6ImVycl9jYXB0Y2hhX3QiO3M6MzA6IkVycm9yOiBjYXB0Y2hhIGNvZGUgaXMgaW52YWxpZCI7czoxNToiZW1wdHlfY2FwdGNoYV90IjtzOjI4OiJFcnJvcjogY2FwdGNoYSBjb2RlIGlzIGVtcHR5IjtzOjE0OiJmaWxlX2V4dGVuc2lvbiI7czozOiJhbGwiO3M6OToiZmlsZV9zaXplIjtzOjE6IjEiO3M6MjA6ImZpbGVfZXh0ZW5zaW9uX2Vycm9yIjtzOjI5OiJFcnJvcjogaW52YWxpZCBmaWxlIGV4dGVuc2lvbiI7czoxNToiZmlsZV9zaXplX2Vycm9yIjtzOjIxOiJFcnJvcjogRmlsZSB0b28gbGFyZ2UiO3M6NDoic0V4cCI7czoxOiIxIjtzOjEyOiJzaG93U2V0dGluZ3MiO3M6MToiMCI7czoxMToiY2FwdGNoYVN0YXQiO3M6MToiMSI7czo1OiJkZWJ1ZyI7czoxOiIwIjt9';//Params 

$P = unserialize(base64_decode($P)); // Get save Format

// Function returns messages for frontend
function returnF($data) {
  global $P;

  if($P['debug'] == 1 && $data['error'] == 0) {
    $data['title'] = 'This is how your email look like';
    $data['message'] = $data['demoBody'];
  }
  
  header('Content-type: application/json');
  echo json_encode($data);
	exit;
}


// Validate captcha
if ($P['captchaStat'] != 0){
  $captcha = htmlspecialchars($_POST['aquaria_captcha-form'], ENT_QUOTES,"UTF-8");
  if (!empty($captcha)) {
    if (empty($_SESSION['captcha']) || trim(strtolower($captcha)) != $_SESSION['captcha']){
      returnF(array(
    		"error" => 1,
    		"message" => $P['err_captcha_t']
    	));
    }
  }
  // Captcha is empty
  else returnF(array(
  	"error" => 1,
  	"message" => $P['empty_captcha_t']
  ));
}

$posted_data = $_POST;
// Remove captcha from array
unset($posted_data['aquaria_captcha-form']);


$mail = new PHPMailer(true); 	// Passing `true` enables exceptions
try {

  //Server settings
	if($P['sending_method'] == 'smtp') {
		//$mail->SMTPDebug = 2; 	// Enable verbose debug output
		$mail->isSMTP();	// Set mailer to use SMTP
		$mail->Host = $P['smtp_host'];	// Specify main and backup SMTP servers
		                               
		if($P['smtp_user'] && $P['smtp_password']) {
			$mail->SMTPAuth = true;	// Enable SMTP authentication
		}

		$mail->Username = $P['smtp_user'] ? $P['smtp_user'] : '';                 
		$mail->Password = $P['smtp_password'] ? $P['smtp_password'] : '';

		if($P['smtp_encryption'] == 'ssl' || $P['smtp_encryption'] == 'tls'){
			$mail->SMTPSecure = $P['smtp_encryption'];	// Enable encryption
		}

		$mail->Port = $P['smtp_port'];	// TCP port to connect to

		// PHP 5.6 certificate verification failure
		// By Uncomenting this you allow insecure connections via the SMTPOptions
		 
		// $mail->SMTPOptions = array(
		//   'ssl' => array(
		//     'verify_peer' => false,
		//     'verify_peer_name' => false,
		//     'allow_self_signed' => true
		//   )
		// );

	}

	$mail->CharSet = 'UTF-8';
	// Add a recipient	
  $mail->addAddress($P['rec_email']);
  
	// If from email input name has been set
  if(isset($posted_data[$P['sender_email']])) {
  	$sender_email = htmlspecialchars($posted_data[$P['sender_email']], ENT_QUOTES,"UTF-8");

  	if(isset($posted_data[$P['sender_name']])) {
  		$sender_name = htmlspecialchars($posted_data[$P['sender_name']], ENT_QUOTES,"UTF-8");
  		$mail->setFrom($sender_email,$sender_name);
  		$mail->addReplyTo($sender_email,$sender_name);
  	} else {
  		$mail->setFrom($sender_email);
  		$mail->addReplyTo($sender_email);
  	}
  }else{
  	$mail->setFrom($P['rec_email']);
  	$mail->addReplyTo($P['rec_email']);
  }

 
  // Add CC
  if($P['cc_emails']) {
		$cc_explode = array_map('trim', explode(',', $P['cc_emails']));
		foreach($cc_explode as $cc_explode_value) {
			$mail->addCC($cc_explode_value);
		}
	}

	// Add BCC
	if($P['bcc_emails']) {
		$bcc_explode = array_map('trim', explode(',', $P['bcc_emails']));
		foreach($bcc_explode as $bcc_explode_value) {
			$mail->addBCC($bcc_explode_value);
		}
	}

	// Building list
	$list_data = '';
	foreach ($posted_data as $key => $value) {
	  $value = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
	  if($value ==! '') $list_data .= "<li><b>$key </b>: $value</li>";
	}

	// Base html to display message
	$emailBody = '<h4>'.$P['rec_email_t'].'</h4>
	             	<ul>'.$list_data.'</ul>';

	// Attachments
	if(!empty($_FILES)){
	  foreach ($_FILES as $name => $arr) {
	  	if($arr['name'] != '') {
  			$tmpName = $arr['tmp_name'];
  			$fileName = $arr['name'];
  			$fileSize = $arr['size'];
  			$ext = end((explode(".", $fileName)));
  			if($fileSize <= $P['file_size'] * 1048576){
  			  $propExt = explode(",", $P['file_extension']);
  			  if($P['file_extension'] == "all") $ext = "all";
  			  if(in_array($ext,$propExt)){
  			    $mail->addAttachment($tmpName, $fileName);
  			  }
  			  else returnF(array(
  		    	"error" => 1,
  		    	"message" => $P['file_extension_error']
  		    ));
  			}
  			else returnF(array(
  		  	"error" => 1,
  		  	"message" => $P['file_size_error']
  		  ));
	  	}
	  }
	}

  $mail->isHTML(true);                                  
  $mail->Subject = $P['rec_email_s'];
  $mail->Body    = $emailBody;
  $mail->send();

  returnF(array(
		"error"    			=> 0,
		"message"  			=> $P['sent_email_body'],
		"title"    			=> $P['sent_email_title'],
		"demoBody" 			=> $emailBody,
		"redirect_url"	=> $P['redirect_url'],
		"method"	 			=> $P['after_successful_submit']
	));

} catch (Exception $e) {

	// Admin error notification
	$admin_mail = new PHPMailer(true);
	$admin_mail->CharSet = 'UTF-8';
	$admin_mail->addAddress($P['rec_email']);
	$admin_mail->setFrom($P['rec_email']);
	$admin_mail->Subject = 'Error notification';
	$admin_mail->Body = 'Email has not sent because of following error: ' .$mail->ErrorInfo.'';
	if($P['sending_method'] == 'smtp') {
		$admin_mail->Body .= "\r\n".'Please check your SMTP credentials in the form settings and if it correct contact your server administrator for this issue.';
	}
	$admin_mail->send();

	returnF(array(
		"error" => 1,
		"message" => $P['err_somthing_t']
	));
  
}


?>