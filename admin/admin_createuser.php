<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin | Create User</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">CREATE</span><span class="heavy">USER</span></span></h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
	<label class="labelCenter">First Name:</label>
	<input class="inputField" type="text" name="fname" value=" 	<?php if(!empty($fname)){echo $fname;} ?>
"><br><br>
	
	<label class="labelCenter">Username:</label>
	<input class="inputField" type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>
"><br><br>

	<label class="labelCenter">Password:</label>
	<input class="inputField" type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>
"><br><br>

	<label class="labelCenter">Email:</label>
	<input class="inputField" type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?>
"><br><br>

	<label class="labelCenter">User Level:</label>
	<select class="inputField" name="userlvl">
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</option>
	</select><br><br>

	<input class="backButton" type="submit" name="submit" value="Create User">
	</form>
</body>
</html>