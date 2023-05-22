<?php
$success=0;
if( $_SERVER['REQUEST_METHOD']== 'POST'){
    include 'connect.php';
    $fullname=$_POST['fullname'];
    $department=$_POST['department'];
    $age=$_POST['age'];
    $state=$_POST['state'];
    $phone number=$_POST['phone number'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $time=$_POST['time'];
    $symptoms=$_POST['symptoms'];
    $date=$_POST['date'];
}
$sql= "insert into `appointment` (fullname,department,age,state,phone number,gender,email,time,symptoms,date)
values('$fullname','$department','$age','$state','$phone number','$gender','$email','$time','$symptoms','$date')";
$result=mysqli_query($con,$sql);
if($result){
    $success=1;
    header('location:login.php');
}else{
    die(my$sqli_error($con));
}

?>