<?php
$success=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$fullname=$_POST['fullname'];
	$department=$_POST['department'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
	$symptoms=$_POST['symptoms'];
	
	$sql="insert into `appointment`(fullname,department,phonenumber,email,gender,date,symptoms)
	values('$fullname','$department','$phonenumber','$email','$gender','$date','$symptoms')";
	$result=mysqli_query($con,$sql);
	if($result){
		$success=1;
		session_start();
		$_SESSION['fullname']=$fullname;
		$_SESSION['department']=$department;
		$_SESSION['gender']=$gender;
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
	<title>Services</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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

<div>
	<h2 class="bg-services">Our Services</h2>
</div>


<div class="row">
	<div class="col2services ">
		<h2 class="">When and where</h2>
		<h2>you need it</h2>
		</div>
	

	<div class="col2-1services ">
		<p>Finding the right kind of help in your time of need can be a challenging task.</p>
    	<p>Our services are available 24/7. Choose your required service while we do the rest.</p>

	</div>
	</div>

	<div class="row ">
		<div class="col feature-box latestPost">
			<div><img class="latest-img" src="hospitalimages/post-1.jpg"></div>
			<h6>Ambulance standby</h6>
			<p>Do you need an ambulance at your next event?. We provide first and emergency care at all types of events.</p>
			
		</div>

		<div class="col feature-box latestPost">
			<div><img class="latest-img" src="hospitalimages/package-service-img.jpg"></div>
			<h6>Aeromedical evacuation</h6>
			<p>We provide global medical repatriation services with a guaranteed bed to bed service. We have a highly trained medical team with access to a fleet of air and ground ambulances.</p>
			
		</div>

		<div class="col feature-box latestPost">
			<div><img class="latest-img" src="hospitalimages/post-3.jpg"></div>
			<h6>Ambulance transport</h6>
			<p>We provide Ambulance transport services for non-urgent medical needs; eg. laboratory, imaging studies or inter-facility transfers. Schedule an ambulance at your convenience.</p>
			
		</div>
		</div>
        <div class="row ">
            <div class="col feature-box latestPost">
                <div><img class="latest-img" src="hospitalimages/post-1.jpg"></div>
                <h6>Occupational Health Services</h6>
                <p>Including but not limited to, medical evacuation (air and ground support, procurement, Offshore medicals, Offshore, remote and industrial clinic management and staffing</p>
                
            </div>
    
            <div class="col feature-box latestPost">
                <div><img class="latest-img" src="hospitalimages/package-service-img.jpg"></div>
                <h6>Emergency Response</h6>
                <p>We provide reliable rapid response to life and limb-threatening distress calls</p>
                
            </div>
    
            <div class="col feature-box latestPost">
                <div><img class="latest-img" src="hospitalimages/post-3.jpg"></div>
                <h6>Urgent care</h6>
                <p>You can’t wait to see a doctor. We have a network of over 300 health care professionals available to guide or answer your concerns.</p>
                
            </div>
            </div>


            <div class="row">
                
            
    
                <div class="col2 formBorder">
                    <div class="container"><h3 class="section-5-align">Book an Appointment</h3></div>
    <section class=" brad">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="container row " style="margin: 0 auto;">
        <div class="col">
                <input type="text" class="form-control input-color" name="fullname" placeholder="Your Full Name" aria-label="Full name" required>
        </div>
        <div class="col">
            <input type="text" class="form-control input-color" placeholder="Department" name="department" aria-label="Department" required>
        </div>
    
    </div>
    <br>
    <div class="container row " style="margin: 0 auto;">
        <div class="col">
                <input type="text" class="form-control input-color" name="phonenumber" placeholder="Phone number" aria-label="Phone number" required>
        </div>
        <div class="col">
            <input type="email" class="form-control input-color" placeholder="Email" name="email" aria-label="Your Email" required>
        </div>
    
    </div>
    <br>
    <div class="container row " style="margin: 0 auto;">
        <div class="col">
            <select class="form-select input-color" name="gender" aria-label="Default select example" >
                <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select> 
        </div>
        <div class="col">
            <input type="date" class="form-control input-color" name="date" placeholder="" aria-label="date" required>
    </div>
    
    </div>
    <br>
    <div class="container row" style="margin: 0 auto;">
        <div class="col">
                <input type="text" class="form-control input-color" name="symptoms" placeholder="Symptoms" aria-label="symptoms" required>
        </div>
        
    
    </div>
    <br>
    <div class="container row " style="margin: 0 auto;">
        <div class="col">
                <button class="form-btn" type="Submit">Book</button>
        </div>
        
        
    </div>
    </form>
    </section>
    </div>
    <div class="col2 latestPost bg-img">
      <h3>Put yourself in good hands today</h3>
    </div>
    </div>

    <br><br>
<div class="subscribe">
	<br>
	<div class="content">
	<h2>Subscribe to Newsletter</h2>
	
<p>Get healthy news and solutions to your problems from our experts!</p>
<input type="email" class="subscribeMail" name="email" placeholder="Email">
<input type="button" class="subscribeBtn" name="subscribe" value="Subscribe Here"><br><br>
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
    

<script type="text/javascript" src="script.js"></script>
</body>
</html>
  