<?php
include "connect.php";
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  </head>
    <title>Welcome page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg fixed-top">
	
	<a class="navbar-brand header-box" href="">Infinity Foundation Hospital</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	
	<ul class="navbar-nav ms-auto">
		<li class="nav-item">
			<a href="index.php" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
			<a href="services.php" class="nav-link">Services</a>
		</li>
		<li class="nav-item">
			<a href="login.php" class="nav-link">Log in</a>
		</li>
		<li class="nav-item">
		<a href="search.php" class="nav-link">Search</a>	
		</li>

	</ul>
	</div>
</nav>
<br>

    <h4 class="text-center mt-5">Thank you for booking with us</h4>
    <h1 class="text-center mt-4">Booking Details</h1>
	<table class="table table-success table-striped container mt-3 ">
<tr>
	<td>Fullname</td>
	<td><?php
		echo $_SESSION['fullname'];echo"<br>";
	?></td>
</tr>
<tr>
	<td>Gender</td>
	<td><?php
		echo $_SESSION['gender'];echo"<br>";
	?></td>
</tr>
<tr>
	<td class="">Department</td>
	<td><?php
		echo $_SESSION['department'];echo"<br>";
	?></td>
</tr>
<tr>
	<td class="">Date</td>
	<td><?php
		echo $_SESSION['date'];echo"<br>";
	?></td>
</tr>
<tr>
	<td class="">Symptoms</td>
	<td><?php
		echo $_SESSION['symptoms'];echo"<br>";
	?></td>
</tr>

</table>




	<!-- <div class="mt-5">
	<div class="row">
		<div class="col-5">
			<Label>FullName</Label>
		</div>
		<div class="col-4">
			<?php
		echo $_SESSION['fullname'];echo"<br>";
	?>
		</div>
	</div>
	<div class="row">
		<div class="col-5">
			<Label>Gender</Label>
		</div>
		<div class="col-4">
			<?php echo $_SESSION['gender'];echo"<br>";?>
		</div>
	</div>
	<div class="row">
		<div class="col-5">
			<Label>Department</Label>
		</div>
		<div class="col-4">
			<?php echo $_SESSION['department'];echo"<br>";?>
		</div>
	</div>
	<div class="row">
		<div class="col-5">
			<Label>Date</Label>
		</div>
		<div class="col-4">
			<?php echo $_SESSION['date'];echo"<br>";?>
		</div>
	</div>
	<div class="row">
		<div class="col-5">
			<Label>Symptoms</Label>
		</div>
		<div class="col-4">
			<?php echo $_SESSION['symptoms'];echo"<br>";?>
		</div>
	</div>
	</div> -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
  </body>
</html>
