<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	// $sql1 = "SELECT role FROM users WHERE email='$email' AND password='$password'";
	// $role = mysqli_query($conn, $sql1);

	// $myusername=$_SESSION['email'];
	// $mypassword=$_SESSION['password'];

	// if ($stmt = $db->prepare("SELECT role FROM users WHERE email='$email' and password='$password'")) {
	// 	/* bind parameters for username and password */
	// 	$stmt->bind_param('ss', $myusername, $mypassword);
	
	// 	/* execute query */
	// 	$stmt->execute();
		
	// 	// If result matched $myusername and $mypassword, table row must be 1 row
	// 	if ($stmt->affected_rows == 1) {
	// 		// bind the result to a variable
	// 		$stmt->bind_result($role);
	// 		$stmt->fetch();
			
	// 		switch( $role ){
	
	// 			case 'admin':
	// 				header("location:admin/upload_image-master/index.php");
	// 				exit();
	
	// 			case 'user':
	// 				header("location:welcome.php");
	// 				exit();

	// 			default:
	// 				echo "Wrong Username or Password";
	// 		}
	// 	}
	// }
	echo "<script>alert('$role')</script>";
	if($role == "admin")
	{
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header("Location: admin/upload_image-master/index.php");
			echo "<script>alert('user page')</script>";
		} else {
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}
	}
	else
	{
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header("Location: welcome.php");
			echo "<script>alert('admin page')</script>";
		} else {
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}	
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>