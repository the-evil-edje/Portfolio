<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Portfolio">
		<meta name="keywords" content="HTML,CSS,php">
		<meta name="author" content="Eddie Beelen">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
		<title>Contact</title>
	</head>
  <body class="contact">
    <?php
        require 'inc/Header.php';
    ?>
		<div class="container">
			<div class="col-md-5" id="formstyle">
				 <div class="form-area bg-dark">
						<form role="form" method="post" name="contact_form" action="contact-form-handler.php">
								<br style="clear:both">
								 <h3 style="margin-bottom: 25px; text-align: center;">Contact</h3>
									<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
									</div>
									<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-group">
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
									</div>
									<div class="form-group">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
									</div>
									<div class="form-group">
									<textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
									 <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
									 </div>

									<button type="submit" id="submit" name="submit" class="btn btn-light pull-right">Submit</button>
							</form>
						</div>
					</div>
				</div>

				<script>
													$(document).ready(function(){
				    $('#characterLeft').text('140 characters left');
				    $('#message').keydown(function () {
				        var max = 140;
				        var len = $(this).val().length;
				        if (len >= max) {
				            $('#characterLeft').text('You have reached the limit');
				            $('#characterLeft').addClass('red');
				            $('#btnSubmit').addClass('disabled');
				        }
				        else {
				            var ch = max - len;
				            $('#characterLeft').text(ch + ' characters left');
				            $('#btnSubmit').removeClass('disabled');
				            $('#characterLeft').removeClass('red');
				        }
				    });
				});
				</script>
		<?php
		include("inc/footer.php")
		?>
  </body>

</html>
