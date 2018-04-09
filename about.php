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
		<title>About</title>
	</head>
  <body>
		<?php
				require 'inc/Header.php';
		?>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">About me</h1>
          <p class="lead">On this page I will tell something about me</p>
      </div>
    </div>
		<div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h4>About me!</h4>
              </div>
              <p class="lead">Sports</p>
              <p>At the moment I practising one sport. Ki-aikido. It is a defense sport</p>
              <a href="http://www.ki-aikidoschool-torii.nl" class="btn btn-primary"><button type="button" class="btn btn-primary">More info</button></a>
							<img src="img/Ki-aikido.jpg" class="img-fluid" alt="Responsive image">
            </div>
          </div>
        </div>
				<div class="col-md-8 mb-4">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4>Games</h4>
							</div>
							<p class="lead">I like games</p>
							<p>I play mostly of the time 2 games. Rocket league and Fortnite. I have a Youtube, twitch and a instagram account on the name The evil edje. On this accounts I show how i play this games.</p>
							<a href="https://www.rocketleague.com/" ><button type="button" id="button-game" class="btn btn-primary">More info</button></a>
							<a href="https://www.epicgames.com/fortnite/en-US/buy-now/battle-royale?utm_source=GoogleSearch&utm_medium=Search&utm_campaign=an*YH_pr*FNBR_ct*Search_pl*Brand_co*NL_cr*exact&utm_id=895843634&utm_content=&gclid=Cj0KCQjwnqzWBRC_ARIsABSMVTPOCMGt4C0GCe5xMVPXOf-sDQ3ft1lkNZAq-f0kABSj1R-KD0ZNtVMaAlwYEALw_wcB" ><button type="button" id="button-game" class="btn btn-primary">More info</button></a>
							<img src="img/rocketleague.jpg" id="foto-games" class="img-fluid" alt="Responsive image">
							<img src="img/fortnite.jpg" id="foto-games" class="img-fluid" alt="Responsive image">
							<a href="https://www.instagram.com/the_evil_edje"><img src="img/instagram.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
							<a href="https://www.twitch.tv/theeviledje"><img src="img/twitch.jpg" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
							<a href="https://www.youtube.com/channel/UC_1E3nbOpwtBAs6-sqNZbog"><img src="img/youtube.png" id="game-platforms" class="img-fluid" alt="Responsive image"></a>
						</div>
					</div>
				</div>
      </div>
    </div>
  </body>
</html>
