<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>CMS Portal</title>
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">DELETE</span><span class="heavy">USER</span></span></h1>
	<?php
		while($row = mysqli_fetch_array($users)) {
			echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\" class=\"button\">Delete User</a><br>";
		}
	?>
</html>