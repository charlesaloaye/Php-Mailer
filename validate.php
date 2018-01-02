
<?php
error_reporting(0);
if(isset($_POST["send_email"]))
{
	/* Receiver email validations*/
	$r_email = filter_var($_POST["rec_email"],FILTER_SANITIZE_EMAIL);
	$r_email = filter_var($_POST["rec_email"],FILTER_VALIDATE_EMAIL);
/*end Receiver email validations*/

/* sender email validations*/
	$s_email = filter_var($_POST["sender_email"],FILTER_SANITIZE_EMAIL);
	$s_email = filter_var($_POST["sender_email"],FILTER_VALIDATE_EMAIL);
	/* end of sender email validations*/
	
	if(!$r_email  && !$s_email  || empty($r_email) || empty($s_email))
	{

	echo"<div class='alert alert-danger'>Invalid Email <i class='fa fa-times'></i></div>";	
	}

if(!empty($_POST["email"]) && !empty($_POST["sender_email"]) && $_POST["rec_email"]!="" && $_POST["email_sub"]!="" )
{

mail($_POST["rec_email"],$_POST["email_sub"], $_POST["email"]);
	echo"<div class='alert alert-success'>Email Sent To " . $_POST["rec_email"] . "</div>";
}
else{

	echo"<div class='alert alert-danger'>Unable To Send " . $_POST["rec_email"] . " Email Because all Fields were not Filled <i class='fa fa-times'></i></div>";
}

}
?>

