<?php include("db_connect.php");

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Log in
	</div>

	<div class="form">
		<div class="input_field">
			<lable>First Name</lable>
			<input type="text" class="input" name="fname" required>
		</div>
		<div class="input_field">
			<lable>Last Name</lable>
			<input type="text" class="input" name="lname" required>
		</div>
		<div class="input_field">
			<lable>Password</lable>
			<input type="Password" class="input" name="password" required>
		</div>
		<div class="input_field">
			<lable>Confirm Password</lable>
			<input type="Password" class="input" name="cpassword" required>
		</div>
		<div class="input_field">
			<lable>Gender</lable>
			<select class="selectbox" name="gender">
				<option>Select</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
		<div class="input_field">
			<lable>E-mail</lable>
			<input type="E-mail" class="input" name="mail" required>
		</div>
		<div class="input_field">
			<lable>Phone No.</lable>
			<input type="Phone" class="input" name="phone" required>
		</div>
		<div class="input_field">
			<lable>Address</lable>
			<textarea class="textarea" name="address"></textarea>
		</div>

		<div class="input_field terms">
			<lable class="check">
				
			<input type="checkbox" required >
			<span class="checkmark"><span>
			</lable>
				<p>Agree Terms and Condition</p>
		</div>
		<div class="input_field">

			<button type="submit" class="btn" value="Register" name="register"> Register</button>
		</form>
		</div>


</body>
</html>



<?php

if($_POST['register'])
{
	$fname     =$_POST['fname'];
	$lname     =$_POST['lname'];
	$pswd      =$_POST['password'];
	$cpswd     =$_POST['cpassword'];
	$gen       =$_POST['gender'];
	$mail      =$_POST['mail'];
	$phne      =$_POST['phone'];
	$address   =$_POST['address'];

	if ($fname !="" && $lname !="" && $pswd !="" && $cpswd !="" && $gen !="" && $mail !="" && $phne !="" && $address !="")

	{

	$query= "INSERT INTO FORM(fname,lname,pswd,cpswd,gen,mail,phne,address)VALUES ('$fname','$lname','$pswd','$cpswd','$gen','$mail','$phne','$address')";

	$data=mysqli_query($conn,$query);

	if ($data)
	{
			echo "<script>alert('Data Inserted')</script>";
	}
	else
	{
		echo "Failed";
	}
    }
    else
    {
	echo "<script>alert('Fill the form First')</script>";
    }
}
 ?> 

