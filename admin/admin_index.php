<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Movie Database | Admin</title>
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">ADMIN</span><span class="heavy">PAGE</span></span></h1>
	<?php echo "<h2 class=\"welcomeText\">Hello {$_SESSION['user_name']}, what would you like to do today?</h2>"; ?>
	<div id="buttonCenter">
		<a href="admin_createuser.php" class="createButton">Create User</a>
		<a href="admin_edituser.php" class="createButton">Edit User</a>
		<a href="admin_deleteuser.php" class="createButton">Delete User</a>
		<a href="admin_addmovie.php" class="createButton">Add Movie</a>
		<a href="admin_editall.php" class="createButton">Edit Movie</a><br>
	</div>
	<div id="buttonSpacerTop">
	</div>
	<a href="phpscripts/caller.php?caller_id=logout" class="backButton">Sign Out</a>
</body>
</html>