<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Movie Database | Login</title>
</head>
<body>
	<h1 class="mainTitleCont" id="loginTitle"><span class="mainTitle"><span class="light">LOG</span><span class="heavy">IN</span></span></h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_login.php" method="post">
		<label class="labelCenter">Username:</label><br>
		<input class="inputField" type="text" name="username" value="">
		<br>
		<label class="labelCenter">Password:</label><br>
		<input class="inputField" type="text" name="password" value="">
		<br>
		<input class="button logInButton" type="submit" name="submit" value="Log In">
		<a href="../index.php" class="backToHomeButton">Back To Home</a>
	</form>
</body>
</html>