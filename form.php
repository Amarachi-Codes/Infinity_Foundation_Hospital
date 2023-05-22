<?php
$success=0;
$user=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	
	$sql="select * from `infinity` where 
	username='$username' or email='$email'";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		if($email==isset($row['email']))
		{
			echo "";
		}
	}
	if($result){
		$num=mysqli_num_rows($result);
		if($num>0){
			$user=1;
		}else{

			$sql="insert into `infinity`(firstname,lastname,username,email,password) 
			values('$firstname','$lastname','$username','$email','$password')";
			$result=mysqli_query($con,$sql);
			if($result){
				$success=1;
				header('location:login.php');
			}else{
				die(mysqli_error($con));
			}
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
<br><br>

<?php
if($user){
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Sorry</strong> User already exists
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

<?php
if($success){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success</strong> You are sucessfully signed up.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
<div class="">
    
    <div class="row rowSignup">
        <div class="colSignUp bgcolor1">
			
            <form action="form.php" method="POST">
				<input type="image" class="profile" name="profile" src="user.jpg">
                <input type="text" class="form-control" name="firstname" aria-label="firstname" placeholder="First Name" required="required"><br>
                <input type="text" class="form-control" name="lastname" aria-label="lastname" required placeholder="Last Name"><br>
                <input type="text" class="form-control" name="username" aria-label="username" required placeholder="User Name"><br>
                <input type="email" class="form-control" name="email" aria-label="email" required placeholder="Email"><br>
                <input type="password" class="form-control" name="password" aria-label="password" required placeholder="password" ><br><br>
                <input type="checkbox" name="terms" aria-label="terms" required> I agree to the terms<br>
                <button type="submit" class="register">Register</button>
            </form>
			
        </div>
        

        <div class="colSignUpB">
			
            <img class="imgClass2" src="hospitalimages/doctor-holds-life-buoy.jpg">
	
        </div>
        </div>
    </div>
</div>
<img class="formImage" src="">
            
</section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
