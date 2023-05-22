<?php
include "connect.php";
include "infinitysignup.php";
?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Infinity Foundation Hospital</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
			<a href="index.html" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
			<a href="services.html" class="nav-link">Services</a>
		</li>
		<li class="nav-item">
			<a href="logIn.html" class="nav-link">Log in</a>
		</li>
		<li class="nav-item">
		<a href="search.html" class="nav-link">Search</a>	
		</li>

	</ul>
	</div>
</nav>
<br><br>

<div class="row">
    <div class="col-md-3 col-md-offset-9">
        <div class="block-title">
            <p style="float:right; color: white;">
        <?php
        if(isset($_SESSION['firstname']))
        {
            echo "Welcome: ";
            echo $_SESSION['firstname'];
        }
        ?>
        </p>
    </div>
</div>

<br>
<br>
<br>
<br>