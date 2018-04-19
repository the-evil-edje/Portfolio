<!doctype html>
<?php
		require 'inc/database-connection.php';
	?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Portfolio">
		<meta name="keywords" content="HTML,CSS,php">
		<meta name="author" content="Eddie Beelen">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
		<title>Portfolio</title>
	</head>
  <body>
		<?php
				require 'inc/Header.php';
		?>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-4">Welcome</h1>
					<p class="lead">On this website i show some projects that I have made. If you are interested you can contact me. On this page I show my best projects that </p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-4">
				<?php
				$sql = "SELECT TITLE, DESCRIPTION, IMAGE, CATEGORY
					FROM projects
					WHERE TITLE = 'Mystery Number'";

					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo '
								<div class="card">
									<div class="card-body">
										<div class="card-title">
											<h4> '.$row["TITLE"].' </h4>
										</div>
										<p>
											'.$row["DESCRIPTION"].'
										</p>
										<img src="img/'.$row["IMAGE"].'"  class="img-fluid" id="Project-image" alt="Responsive image">
									</div>
								</div>

							';
						}
					}
					else {echo "0 results";}
					 ?>
					</div>
					<div class="col-md-6 mb-4">
					<?php
					$sql = "SELECT TITLE, DESCRIPTION, IMAGE, CATEGORY
						FROM projects
						WHERE TITLE = 'Vault'";

						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo '
									<div class="card">
										<div class="card-body">
											<div class="card-title">
												<h4> '.$row["TITLE"].' </h4>
											</div>
											<p>
												'.$row["DESCRIPTION"].'
											</p>
											<img src="img/'.$row["IMAGE"].'"  class="img-fluid" id="Project-image" alt="Responsive image">
										</div>
									</div>

								';
							}
						}
						else {echo "0 results";}
						 ?>
					</div>
					<div class="row">
						<div class="col-md-12 mb-4">
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner" id="slide">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="img/DCheroes.png" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="img/Dragrace.png" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="img/GameWorld.png" alt="Third slide">
							    </div>
							  </div>
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
