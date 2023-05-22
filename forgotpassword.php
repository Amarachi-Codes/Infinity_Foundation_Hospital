
<?php
session_start();
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
<br>
<div class="container">
        <div class="row mt-5">
            
            <div class="col-md-8 offset-md-2 form">
            <?php
include('connect.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$error = "";
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `infinity` WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if(!$error=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $reset_expiration = date("Y-m-d H:i:s",$expFormat);
   $reset_token = md5(2418*2);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $reset_token = $reset_token . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO `infinity` (`reset_token`, `reset_expiration`)
VALUES ( '".$reset_token."', '".$reset_expiration."');");

$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="http://localhost/Infinity%20Foundation%20Hospital/forgotpassword.php?
reset_token='.$reset_token.'&email='.$email.'&action=reset" target="_blank">
http://localhost/Infinity%20Foundation%20Hospital/forgotpassword.php
?reset_token='.$reset_token.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>Infinity Foundation Team</p>';
$body = $output; 
$subject = "Password Recovery - Infinity Foundation Hospital";

$email_to = $email;
$fromserver = "http://localhost/Infinity Foundation Hospital/forgotpassword.php"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "http://localhost/Infinity Foundation Hospital/forgotpassword.php"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "etheldorisamarachi@gmail.com"; // Enter your email here
$mail->Password = "password"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "http://localhost/Infinity%20Foundation%20Hospital/forgotpassword.php";
$mail->FromName = "Infinity Foundation Hospital";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}
   }
}else{
?>
<form action="" method="POST" autocomplete="">
                    <h2 class="text-center mt-5">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                 

                    <div class="form-group">
                        <input class="form-control forgottenpward" type="email" name="email" placeholder="Enter email address" required value="">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control forgottenpward button bg" type="submit" name="submit" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>


                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script> 
</body>
</html>