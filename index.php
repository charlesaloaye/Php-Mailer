<?php include"header.php";?>

<body style="margin:35px;">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<form action="" method="POST" class="form-horizontal" name="birthday">
	<h1 class="form-signin">
<?php echo $appname; ?>
	</h1>
	<?php include"validate.php"; ?>
	<div class="form-group">
		<label for="r_email">Receiver's Email</label>
		<input type="text" name="rec_email" id="r_email"  class="form-control" placeholder="Please enter Receiver's Email" >
	</div>
	<div class="form-group">
		<label for="s_email">Sender's Email</label>
		<input type="text" name="sender_email"  id="s_email"  class="form-control" placeholder="Please enter Sender's Email" >
	</div>

	<div class="form-group">
		<label for="message_title">Message Title</label>
		<input type="text" name="email_sub" id="message_title"  class="form-control" placeholder="Please enter Message Title" >
	</div>

	<div class="form-group">
		<label for="Message">Message</label>
		<textarea name="email"  id="Message" required class="form-control" placeholder="Please Input Message to send" >
	</textarea>
	</div>
	<button  type="submit" class="btn btn-outline-primary" name="send_email">Send Email</button>
		</div>
</form>
</div>
	</div>
</body>
<?php include"footer.php";?>
</html>