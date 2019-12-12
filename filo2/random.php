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

p, td, th {
    font: 12 Arial, Helvetica, sans-serif;
}
.datatable {
    border: 1px solid #D6DDE6;
    border-collapse: collapse;
    width: 60%;
}
.datatable td {
    border: 1px solid #D6DDE6;
    padding: 4px;
}
.datatable th {
    border: 1px solid #828282;
    background-color: #BCBCBC;
    font-weight: bold;
    text-align: left;
    padding-left: 4px;
	padding-right: 0px;
	text-align:center;
}
.datatable caption {
    font: bold 12px Arial, Helvetica, sans-serif;
    color: #33517A;
    text-align: left;
    padding-top: 3px;
    padding-bottom: 8px;
}
.datatable tr.altrow {
    background-color: #DFE7F2;
    color: #000000;
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
        <h1>Sel</h1><br>
        <?php

//buat koneksi dulu boz
$link = mysqli_connect("localhost","root","","filo2");

   //kirim query nya
   $conn = connect_to_db();
   $sql  = "SELECT * FROM kuis ORDER BY Rand() LIMIT 5";
   $query = mysqli_query($conn,$sql);
   $c = "0";
    
    //tampilin hasilnya
   ?>
	<table width="29%" border="1" class="datatable" align="center">
		<tr>
		<th>No</th>
		<th>Soal Essay</th>
	</tr>
	<?php
   	while ($row = mysqli_fetch_array($query)) {
   	?>
	<tr>
		<td width="24"><?php echo $c=$c+1; ?></td>
		<td width="1191"><?php echo $row['tanya']; ?></td>
	</tr>
<?php
  
   }
   ?>
	<tr>
		<td colspan="2" align="center">
		<form action="jawab.php" method="post">
		<textarea rows="7" cols="50" name="jawaban"></textarea><br><br>
		<input type="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')" >
		<input type="reset" value="Batal">
		<input type="button" value="Refresh Soal" onClick="javascript:window.location.reload()">
		</form>
		</td>
	</tr>
	</table>
   <?php{
   }
 else {
    echo "Sory, gagal koneksi nech!";
}

?> 
<br><br>