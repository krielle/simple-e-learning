<?php
if(defined("IS_INDEX") == false)
{
    echo "<section class='py-5 text-center'>
    <div class='container'>
      <center><img src ='image/stop.png' class ='img-fluid' alt = 'stop' width ='300px'></center>
      <br><br><br>
      <h1><center>Please Follow the Tutorials, Commander!!</center></h1>
      <center><img src ='image/chibi1.jpg' class ='img-fluid' alt ='deve' width ='800px'></center>
      <br><br>
    </div>
  </section>";
  die();
}
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="image/filogo.png" alt="logo" width="50px;">
         
         </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            if(isset($_SESSION['username'])){
              echo
              "
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=home'>welcome,".$_SESSION['username'] . "</a>
              </li>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=logout'>Logout</a>
              </li>";
            }
            else{
              echo"
              <li class='nav-item active'>
              <a class='nav-link' href='index.php?page=home'>Home
              <span class='sr-only'>(current)</span>
              </a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=about'>About</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=contact'>Contact</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=login_form'>Login</a>
              </li>";
            }
          ?>
          
          
        </ul>
      </div>
    </div>
  </nav>
<!-- Header - set the background image for the header in the line below -->
<header class="py-5 bg-image-full" style="background-image: url('image/header.jpg');">
    <div style="height: 100px;"></div>
    <img class="img-fluid d-block mx-auto" src="image/filogo.png" alt="" style="width: 300px">
  </header>
<br><br><br><br>
<!-- Content section -->
<section class="py-5">
    <div class="container tex-center">
      <h1>Contact Us:</h1><br><br>
      <p>Available Contact:</p>
      <p>Febryan Surya S : +62 813-2944-6745<br>Ibnu Azam A : +62 856-4299-3300<br>Eva Waty T : +62 823-7061-8544</p>
    </div>
    <br><br><br><br><br><br>
  </section>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Team5 2019</p>
    </div>
    <!-- /.container -->
  </footer>