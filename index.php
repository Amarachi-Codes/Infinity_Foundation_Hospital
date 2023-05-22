<?php
$success=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $fullname=$_POST['fullname'];
    $department=$_POST['department'];
    $age=$_POST['age'];
    $state=$_POST['state'];
    $phonenumber=$_POST['phonenumber'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $time=$_POST['time'];
    $symptoms=$_POST['symptoms'];
    $date=$_POST['date'];

$sql= "insert into `appointment` (fullname,department,age,state,phonenumber,gender,email,time,symptoms,date)
values('$fullname','$department','$age','$state','$phonenumber','$gender','$email','$time','$symptoms','$date')";
$result=mysqli_query($con,$sql);
if($result){
    $success=1;
	session_start();
	$_SESSION['fullname']=$fullname;
	$_SESSION['department']=$department;
	$_SESSION['gender']=$gender;
	$_SESSION['time']=$time;
	$_SESSION['symptoms']=$symptoms;
	$_SESSION['date']=$date;
	header('location:booked.php');
}else{
    die(mysqli_error($con));
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
<div style="margin-top: 50px;">
  

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

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

  <div class="carousel-indicators">
  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  
<div class="carousel-inner">
    <div class="carousel-item bg active">
      <img src="hospitalimages/header.png" class="d-block w-100 carousel-img" alt="..." >
	</div>
    <div class="carousel-item bg">
      <img src="hospitalimages/doc-group-2.png" class="d-block w-100 carousel-img" alt="...">
    </div>
	<div class="carousel-item bg">
		
      <img src="hospitalimages/doc-3.png" class="d-block w-100 carousel-img" alt="..."> 
	</div>

    
    <div class="carousel-item bg">
      <img src="hospitalimages/about-img.png" class="d-block w-100 carousel-img" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>




<section>
	<div class="">
	
		<h1 class="font">Our Area of Expertise</h1>

		<div class="row ">
		<div class="col feature-box featureBoxColor">
			<a href="">Heart rate</a>
			<p>We are redefiniing cardiac care through ground breaking treatments and novel research</p>
		</div>

		<div class="col feature-box featureBoxColor">
			<a href="">Neurosurgery</a>
			<p>Our world-renowned neurosurgeons offer exceptional care for brain, spine and cerebrovascular system conditions.</p>
		</div>

<div class="col feature-box featureBoxColor">
			<a href="">Obstetrics</a>
			<p>Infinity Women's Hospital is a world-class facility providing superior care for women's unique health care needs</p>
		</div>
		</div>
	</div>

	</section>

	
	<div class="">
		<div class="font">
			<h2>We are raising health for what matters getting you home</h2>
		</div>
		<div class="row">
			<div class="col2">
				<p>Infinity Foundation Hospital is one of the best hospitals in the nation, according to U.S. News & World Report. It’s why patients from across the U.S. choose us and what inspires the most visionary doctors to come here to practice life-changing medicine. From performing first-in-the-world brain surgeries and the first liver transplant on Long Island to treating the most hearts in Nassau and Queens* at our Sandra Atlas Bass Heart Hospital campus, our experts are leading the way in health care.</p>

				<p>We also offer a wide range of specialty and subspecialty residency programs, postgraduate training programs and clinical fellowships for research and education because training the next generation of health care leaders matters.
					Our team will continue to raise the bar so we can find more ways to get you back where you belong: home.
					Infinity Foundation Hospital notifies patients who were potentially impacted by unauthorized access of electronic medical records.
				</p>
				</div>
			

			<div class="col2 imageBg">
				<img class="imgClass" src="hospitalimages/post-2.jpg">

			</div>
			</div>
		</div>
	</div>

			<br>
		<section class=""><br>
			<div class="row" >
				<div class="col3">
					<p class="num" data-val="100">0%</p>
					<p>Quality</p>	
				</div>
	
				<div class="col3">
					<p class="num" data-val="700">0+</p>
					<p>People working</p>
				</div>
				<div class="col3">
					<p class="num" data-val="5000">0+</p>
					<p>Lives saved</p>
				</div>
				<div class="col3">
					<p class="num" data-val="14000">0+</p>
					<p>Happy Smiles</p>
				</div>
				<div class="col3">
					<p class="num" data-val="14">0+</p>
					<p>Years of experience</p>
				</div>
			</div>	


			<br>
		</section>


		<div class="">
					<div class="font">
						<h2>About Us</h2>
					</div>
				<div class="row">
					<div class="col2">
						<p>Infinity Foundation Hospital is one of the best hospitals in the nation, according to U.S. News & World Report. It’s why patients from across the U.S. choose us and what inspires the most visionary doctors to come here to practice life-changing medicine. From performing first-in-the-world brain surgeries and the first liver transplant on Long Island to treating the most hearts in Nassau and Queens* at our Sandra Atlas Bass Heart Hospital campus, our experts are leading the way in health care.</p>
	
						<p>We also offer a wide range of specialty and subspecialty residency programs, postgraduate training programs and clinical fellowships for research and education because training the next generation of health care leaders matters.
						Our team will continue to raise the bar so we can find more ways to get you back where you belong: home.
						Infinity Foundation Hospital notifies patients who were potentially impacted by unauthorized access of electronic medical records.
						</p>
					</div>
				
	
					<div class="col2 imageBg">
						<img class="imgClass" src="hospitalimages/about-img.png">
	
					</div>
				</div>
			</div>
		
	
				<br>
		
				<section>
					<div class="">
					
						<h1 class="font">Package Services</h1>
				
						<div class="row ">
						<div class="col feature-box featureBoxColor">
							<h3>Regular Case</h3>
							<p>We are redefiniing cardiac care through ground breaking treatments and novel research</p>
							<input type="button" class="input-btn" name="button" value="Read More">
						</div>
				
						<div class="col feature-box featureBoxColor">
							<h3>Serious Case</h3>
							<p>Our world-renowned neurosurgeons offer exceptional care for brain, spine and cerebrovascular system conditions.</p>
							<input type="button" class="input-btn" name="button" value="Read More">
						</div>
				
						<div class="col feature-box featureBoxColor">
							<h3>Emergency Case</h3>
							<p>Infinity Women's Hospital is a world-class facility providing superior care for women's unique health care needs</p>
							<input type="button" class="input-btn" name="button" value="Read More">
						</div>
						</div>
					</div>
				
					</section>
					
	

<div class="font">
	
	<h2>Latest Post</h2>
</div>

<div>

	<div class="row ">
		<div class="col feature-box latestPost boxShadow">
			<div><img class="latest-img" src="hospitalimages/post-1.jpg"></div>
			<h6>Inspiring stories of family centered care during a global pandemic</h6>
			<p>We are redefiniing cardiac care through ground breaking treatments and novel research</p>
			<span>January 24 2023</span>
		</div>

		<div class="col feature-box latestPost boxShadow">
			<div><img class="latest-img" src="hospitalimages/package-service-img.jpg"></div>
			<h6>Inspiring stories of family centered care during a global pandemic</h6>
			<p>Our world-renowned neurosurgeons offer exceptional care for brain, spine and cerebrovascular system conditions.</p>
			<span>January 24 2023</span>
		</div>

		<div class="col feature-box latestPost boxShadow">
			<div><img class="latest-img" src="hospitalimages/post-3.jpg"></div>
			<h6>Inspiring stories of family centered care during a global pandemic</h6>
			<p>Infinity Women's Hospital is a world-class facility providing superior care for women's unique health care needs</p>
			<span>January 24 2023</span>
		</div>
		</div>


		<div class="">
			<div class="font">
				<h2>Contact Us</h2>
			</div>
		<div class="row">
			<div class="col2 latestPost map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4873377480567!2d3.430785014691074!3d6.459771125693273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4c77b2329f1%3A0xf68cb783ed338cd5!2s14%20Osborne%20Rd%2C%20Ikoyi%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1678381439217!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		

			<div class="col2 bg2">
				<div class="container"><h3 class="book">Book an Appointment</h3></div>
<section class="bgcolor1 brad">
	<br>
	<?php
if($success){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success</strong> You are sucessfully signed up.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="container row " style="margin: 0 auto;">
	<div class="col">
			<input type="text" class="form-control input-color" name="fullname" placeholder="Your Full Name" aria-label="Full name" required>
	</div>
	<div class="col">
		<input type="text" class="form-control input-color" placeholder="Department" name="department" aria-label="department">
	</div>

</div>
<br>
<div class="container row " style="margin: 0 auto;">
	<div class="col">
			<input type="text" class="form-control input-color" name="age" placeholder="Your Age" aria-label="your age" required>
	</div>
	<div class="col">
		<input type="text" class="form-control input-color" placeholder="State " name="state" aria-label="select state" required>
	</div>

</div>
<br>
<div class="container row " style="margin: 0 auto;">
	<div class="col">
			<input type="text" class="form-control input-color" name="phonenumber" placeholder="Phone Number" aria-label="Phone Number" required>
	</div>
	<div class="col">
		<select class="form-select input-color" name="gender" aria-label="Default select example">
			<option selected>Select Gender</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
		</select> 
	</div>

</div>
<br>
<div class="container row" style="margin: 0 auto;">
	<div class="col">
			<input type="email" class="form-control input-color" name="email" placeholder="Your Email" aria-label="Your Email" required>
	</div>
	<div class="col">
		<input type="text" class="form-control input-color" placeholder="Time(please specify AM/PM)" name="time" aria-label="Time(please specify AM/PM)" required>
	</div>

</div>
<br>
<div class="container row " style="margin: 0 auto;">
	<div class="col">
			<input type="text" class="form-control input-color" name="symptoms" placeholder="symptoms" aria-label="symptoms" required>
	</div>
	<div class="col">
		<input type="date" class="form-control input-color" placeholder="" name="date" aria-label="date" required>
	</div>

</div>
<div class="bookContiner">
	<button type="submit" class="bookHere">Book</button>
</div>

</form>
<br>
</section>

			</div>
		</div>
	</div>


<br><br>
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
	
<div id="cookies">
	<div class="cookies-container">
		<div class="subcontainer">
			<div class="cookies">
				<p>This website uses cookies to help you get the best experience on our website. <a href="" class="moreinfo">More info.</a></p>
				<button id="cookies-btn">I agree</button>
			</div>
		</div>
	</div>
</div>




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
  