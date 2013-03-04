<?php
ini_set("display_errors", "1");
include_once('./db.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CPS Seat Picker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php include('./table.php');?>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>