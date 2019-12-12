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

<!-- Content section -->
<section class="py-5">
    <div class="container text-center">
      <h1>Welcome to Filo!</h1>
      <p class="lead">-Let This Fill Out Your Education-</p>
      <p>Filo adalah sebuah website e-learning sederhana yang berfokus mengedukasi tentang biologi. standar yang digunakan adalah standar kurikulum 2013
      dengan tingkatan pendidikan untuk jenjang SMA mulai dari kelas X hingga kelas XII.</p>
      <br><br>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('image/elen1.jpg');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 500px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container text-center">
      <h1>Join Now!!</h1>
      <p>Tidak dipungut biaya! cukup dengan login dan anda dapat menggunakan fitur penuh dari Filo!</p>
      <br><br>
    </div>
    <?php
            if(isset($_SESSION['username'])){
              echo
              "<div class='container text-center font-weight-bold'>
              <p>[anda sudah login sebagai ".$_SESSION['username'] ."]<p>
              </div>
              ";
            }
            else{
              echo'<div class="container">
              <div class="row d-flex align-items-center justfy-content-center">
                  <div class="col-md-12">
                      <div class="card p-3">
                          <div class="card-header">
                              <h4>Login</h4>
                          </div>
                          <div class="card-body">
                              <?php if (isset($_GET["error"])) {
                                  if ($_GET["error"] == 1) { ?>
                                      <h4 class="text-danger">Username atau password salah.</h4>
                              <?php }
                              } ?>
                              <form action="index.php?page=proses_login" method="post">
                                  <div class="form-group">
                                      <input type="text" name="username" id="username" class="form-control" placeholder="username">
                                  </div>
                                  <b></b>
                                  <div class="form-group">
                                      <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-success">Login</button>
                                  </div>
                              </form>
                          </div>
      
                      </div>
                  </div>
              </div>
          </div>';
            }
          ?>
    
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('image/elen2.jpg');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 500px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container text-center">
      <h1>About Us</h1>
      <br>
      <p>Team5 terdiri dari 3 orang mahasiswa semester 5 yang sedang dalam tahap final penugasan mata kuliah e-learning.
      Kami sendiri mencoba tidak menggunakan framework alias native dalam proses pengerjaan dengan ilmu kami yang masih sangat terbatas
      sehingga kami meminta maaf apabila terdapat banyak kesalahan atau tampilan yang tidak berkenan</p>
      <br><br>
      <h1>Contact Us</h1>
      <a class="alert-link" href="index.php?page=contact">Contact >></a>
      <br><br>
    </div>
  </section>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Team5 2019</p>
    </div>
    <!-- /.container -->
  </footer>