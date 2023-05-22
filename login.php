
<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$sql="select * from `infinity` where 
	username='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	if($result){
		$num=mysqli_num_rows($result);
		if($num>0){
			$login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
		}else{
				$invalid=1;
		}
			
	}

}


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
<div class="nav-2">
  

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	
<ul class="navbar-nav mx-auto">
		<li class="nav-item">
			<a href="" class="nav-link px-5">Find care</a>
		</li>
		<li class="nav-item">
			<a href="" class="nav-link px-5">Your visit</a>
		</li>
		<li class="nav-item">
			<a href="" class="nav-link px-5">Patient information</a>
		</li>
		<li class="nav-item">
		<a href="" class="nav-link px-5">Get involved</a>	
		</li>
		<li class="nav-item">
		<a href="" class="nav-link px-5">Billing</a>	
		</li>
	</ul>
</nav>
</div>
	<img class="wrapperImg" src="shiny-textured-background-min.jpg">




<!-- <div class="wrapper"></div> -->
	
<div class="loginContainer">
		<div class="col2-1login">
			<h1 class="signin">Log In</h1>
            <?php
if($login){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success</strong> You are sucessfully Logged In.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
<?php
            if($invalid){
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error</strong> Invalid username or password.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>		

	
	<div class="colLog">
		<form action="login.php" method="POST">
		<label class="user">Username</label>
		<input type="text" class="form-control" name="username" aria-label="username" required><br>
		<label class="user">Password</label>
		<input type="password" class="form-control" name="password" aria-label="password" required><br>
		<input type="checkbox" id="login" value="logged In" name="login" aria-label="keep me logged in">
		<label for="login" class="la">Keep me logged in</label>
		<span><a class="labellogin" href="forgotpassword.php">forgot password?</a></span>
		<br>
        
		<div class="submitwrapper"><button type="submit" class="submit" aria-label="Log In">Log In</button></div>
		<div class="icon">
		<a href=""><img src="fbk1.jpg" class="mainIcon"></a>
		<a href=""><img src="gmail.jpg" class="mainIcon"></a>
	</div>
		<hr>
		<div class="account">
		<span class="">Don't have an account?</span>&nbsp;<a href="form.php" class="lalog">Sign up here</a>
	</div>
	<br>
		<!-- <input type="button" value="Sign In with Email" class="submit marginSub" name="submit" aria-label="submit"><br>
		<input type="button" value="Sign In with Facebook" class="submit" name="submit" aria-label="submit"><br> -->
		</form>
	</div>

		</div>
	</div>

</div>
</div>

<div class="subscribe">
	<br>
	<div class="content">
	<h2>Subscribe to Newsletter</h2>
	
<p>Get healthy news and solutions to your problems from our experts!</p><input type="button" class="input-btn input-btn2" name="button" value="Subscribe Here"><br><br>
</div>
</div>

<footer>
	<div class=" section f-padding1">
		<div class="container-section f-container">
			<div class=" f-col-1">
				<h3 class="h2mail">INFINITY FOUNDATION HOSPITAL</h3>
				<p>Infinity Foundation Hospital is working for a world where premium healthcare is readily accessible. </p>
				<h4>
					<a href="" class="webadd">infinityfoundationhospital.org</a>
				</h4>
		
			</div>
			
			<div class=" f-col">
				<h4>CONTACT INFORMATION</h4>
				<p><strong>Address:</strong> No 14 Osborne way Ikoyi Lagos</p> 
				<p><strong>web address:</strong> infinityfoundationhospital.org</p>
				<p><strong>Phone:</strong> +23409079756660</p> 
				<p><strong>Email:</strong> infinityfoundation@gmail.com</p>
			</div>
			<div class="f-col-2 ">
				<h4>QUICK LINKS</h4>
				<div><p><a href="">Pay Your Bills</a></p></div>
				<div><p><a href="">News & Events</a></p></div>
				<div><p><a href="">Gallery</a></p></div>
				<div><p><a href="">FAQs</a></p></div>
			</div>
			
		</div>
		
		
	</div>
	<div class="follow">
		<h4>Follow us</h4>
		<div class="icon">
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-instagram"></i>
	
			<div class="copyright">
				<p>&copy, Technophile 2023</p>
			</div>
		</div>
		
	</div>
	
	</footer>
	





</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
