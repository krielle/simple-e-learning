<style>
  body{
    background-image: url("image/web.jpg");
    background-size: cover;
  }
  .sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: url("image/sidebar.jpg");
  background-color: #2F4F4F;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #FFF;
  display: block;
}

.sidenav a:hover {
  color: #FF0000;
}

.sidenav p {
  padding: 6px 8px 6px 60px;
  text-decoration: none;
  font-size: 25px;
  color: #FFF;
  display: block;
}

nav .foto-profil {
  margin: 50px 50px 10px 40px;
  background-color: white;
  border-radius: 50%;
  height: 200px;
  width: 200px;
}

nav .foto-profil img {
  margin: 0px 0px 0px 0px;
  background-color: white;
  border-radius: 50%;
  height: 200px;
  width: 200px;
}

.main {
  margin-left: 310px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.img-fluid{
    width:200px;
    height:200px;
}
</style>
<nav class="sidenav">
		<div class="foto-profil">
			<img src="image/febry.jpg" alt="">

        </div>
        <?php
        echo"<p>Hi, ".$_SESSION['username'] ."</p>";
        ?>
		<ul>
			<a href="index.php?page=dashboard">
				<li>Dashboard</li>
			</a>
			<a href="index.php?page=course">
				<li>Courses</li>
			</a>
			<a href="index.php?page=assignment">
				<li>Assignment</li>
			</a>
			<a href="index.php?page=raport">
				<li>Grade Book</li>
            </a>
            <a href="index.php?page=logout">
				<li>Logout</li>
			</a>
		</ul>
    </nav>
    <div class="main">
        <h1>Sel</h1>
        <br>
    </div>
    <div class="container">
        <embed src="materi/Sel.pdf#toolbar=0" type="application/pdf" width="100%" height="700px"/>
    </div>