<?php
 include 'config.php';
 if(isset($_POST['submit'])){
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$nokp=$_POST['nokp'];
 	$password=$_POST['password'];

 	$insert=mysqli_query($connect,"INSERT INTO daftar VALUES('$username',$email','$nokp',$password')");
 	header("Location:login.php ");
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center><h1>REGISTER FORM</h1></center>
<body>
	<center>
	<form method="post" action="#">
		
		<label for="username"><b> USERNAME : </b></label><br><br>
		<input type="text" name="username"  required="">

		<br><br>

		<label for="email"><b>EMAIL :</b></label><br><br>
		<input type="text" name="email" required="">


		<br><br>

		<label for="nokp"><b>NO KAD PENGENALAN :</b></label><br><br>
		<input type="text" name="nokp"  required="">


		<br><br>

		<label for="password"><b>PASSWORD :</b></label><br><br>
		<input type="password" name="password"  required="">
		<br><br>
        <button type="submit" name="submit">DAFTAR</button>
        <br><br>

	</form>
</center>
</body>
</html>