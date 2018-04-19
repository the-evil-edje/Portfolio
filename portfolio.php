<!doctype html>
<?php

  include 'inc/database-connection.php';
 ?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Portfolio">
		<meta name="keywords" content="HTML,CSS,php">
		<meta name="author" content="Eddie Beelen">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

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
        <h1 class="display-4">Projects</h1>
          <p class="lead">On this page i show the projects that I have made</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php
        $sql = "SELECT TITLE, DESCRIPTION, IMAGE, CATEGORY
          FROM projects
          WHERE CATEGORY = 1";

          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="col-md-4 mb-4">
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
              </div>
              ';
            }
          }
          else {echo "0 results";}
           ?>
        </div>
        <div class="row">
          <?php
          $sql = "SELECT TITLE, DESCRIPTION, IMAGE, CATEGORY
            FROM projects
            WHERE CATEGORY = 2";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-md-4 mb-4">
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
                </div>
                ';
              }
            }
            else {echo "0 results";}
             ?>
        </div>
        <div class="row">
          <?php
          $sql = "SELECT TITLE, DESCRIPTION, IMAGE, CATEGORY
            FROM projects
            WHERE CATEGORY = 3";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title">
                        <h4> '.$row["TITLE"].' </h4>
                      </div>
                      <p>
                        '.$row["DESCRIPTION"].'
                      </p>
                      <iframe width=100% height="250" src="'.$row["IMAGE"].'"frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                ';
              }
            }
            else {echo "0 results";}
             ?>
        </div>
      </div>
		<?php
		include("inc/footer.php")
		?>
  </body>
</html>
