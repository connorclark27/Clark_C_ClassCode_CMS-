<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$id = $_SESSION['user_id'];
	//echo $id;
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	//echo $found_user;

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$result = editUser($id, $fname, $username, $password, $email);
			$message = $result;
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Admin | Edit User</title>
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">EDIT</span><span class="heavy">USER</span></span></h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">
	<label class="labelCenter">First Name:</label>
	<input class="inputField" type="text" name="fname" value="<?php echo $found_user['user_fname']; ?>
"><br><br>
	
	<label class="labelCenter">Username:</label>
	<input class="inputField" type="text" name="username" value="<?php echo $found_user['user_name']; ?>
"><br><br>

	<label class="labelCenter">Password:</label>
	<input class="inputField" type="text" name="password" value="<?php echo $found_user['user_pass']; ?>
"><br><br>

	<label class="labelCenter">Email:</label>
	<input class="inputField" type="text" name="email" value="<?php echo $found_user['user_email']; ?>
"><br><br>
	<input class="backButton" type="submit" name="submit" value="Edit Account">
	</form>
</body>
</html>