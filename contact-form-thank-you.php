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
        <title>Thank you!</title>
    </head>
  <body>
<?php
  require 'inc/header.php';
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Thank you!</h1>
      <p class="lead">Thank you for contacting me! I will respond as soon as possible!</p>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card text-white bg-dark mb-3 align-items-center">
        <div class="card-body">
          <div class="card-title">
            <h5>Return to Homepage</h5>
          </div>
            <a href="index.php" class="btn btn-light btn-lg">Return</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  require 'inc/footer.php';
 ?>
