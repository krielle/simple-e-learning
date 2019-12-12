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
<br><br><br>
<div class="container">
        <div class="row d-flex align-items-center justfy-content-center">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) {
                            if ($_GET['error'] == 1) { ?>
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
    </div>
<br><br><br>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Team5 2019</p>
    </div>
    <!-- /.container -->
  </footer>