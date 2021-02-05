<?php

   include 'config.php';
  
  if(isset($_SESSION['username'])) {
  	header("location: index.php");
	}

	if(isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql = "SELECT * FROM daftar WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)) {
	$_SESSION ['password'] = $password;

	header("location: index.php");
   }else{
    echo"<script>alert('Log In Successfully');
      window.location='index.php'</script>";
  }

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<center><h1>LOG MASUK</h1></center>
<body>
	<center>
	<table border="1" cellpadding="5" cellspacing="0" width="70%">
		
		<label for="username"><b> USERNAME : </b></label><br><br>
		<input type="text" name="username"  required="">

		<br><br>

		<label for="password"><b>PASSWORD :</b></label><br><br>
		<input type="password" name="password"  required="">
		<br><br>
        <button type="submit" name="submit">LOG MASUK</button>
        <br><br>

	</table>
</center>
</body>
</html>