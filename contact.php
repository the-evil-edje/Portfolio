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
  <body>
    <?php
        require 'inc/Header.php';
    ?>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Contact</h1>
          <p class="lead">here you can find some information how to contact me.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h4>Personal contact</h4>
              </div>
              <p>
                Name: Eddie Beelen<br>
                Phone number: +31 6 38752857<br>
                Email adress: Eddie.Beelen@gmail.com
              </p>
              <a href="https://www.instagram.com/eddiebeelen"><img src="img/instagram.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
              <a href="https://www.facebook.com/eddie.beelen"><img src="img/facebook.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h4>Streamer contact</h4>
              </div>
              <p>
                Name: The Evil Edje<br>
                Phone number: +31 6 38752857<br>
                Email adress: The.evil.edje@gmail.com
              </p>
              <a href="https://www.instagram.com/the_evil_edje"><img src="img/instagram.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
              <a href="https://www.twitch.tv/theeviledje"><img src="img/twitch.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
              <a href="https://www.youtube.com/channel/UC_1E3nbOpwtBAs6-sqNZbog"><img src="img/youtube.png" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
            </div>
          </div>
        </div>
				<div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/MsXA2IhnFUU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
		<?php
		include("inc/footer.php")
		?>
  </body>

</html>
