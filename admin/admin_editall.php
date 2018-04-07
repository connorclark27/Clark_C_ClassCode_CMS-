<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Edit All</title>
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">EDIT</span><span class="heavy">MOVIE</span></span></h1>
	<?php
		echo single_edit("tbl_movies","movies_id",1);
		//phpinfo();
	?>
</body>
</html>