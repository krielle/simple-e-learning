<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="image/filogo.png">
  <title>Filo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/bg_style.css" rel="stylesheet">

</head>

<body>

  <!--restriction code -->
  <?php
        define("IS_INDEX",true);

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = "home";
        }
        require_once("aplikasi.php");
        require_once($page.".php");
    ?>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
</body>

</html>